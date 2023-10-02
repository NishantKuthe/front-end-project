<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Popup;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\News;
use App\Models\Achiever;
use App\Models\Download;
use App\Models\Category;
use App\Models\Product;
use App\Models\Bank;
use App\Models\Gallery;
use App\Models\Document;
use App\Models\Team;
use App\Models\Content;
use Illuminate\Http\Request;
use View;
use Route, Redirect;

class StaticController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $settings = Setting::get()->pluck('value', 'key');
            $activeRoute = Route::currentRouteName();
            $pageTitle = str_replace('-', ' ', ucwords(Route::currentRouteName()));
            $packages = Package::all();
            $categories = Category::all();
            $products = Product::all();
            View::share('settings', $settings);
            View::share('activeLink', $activeRoute);
            View::share('pageTitle', $pageTitle);
            View::share('categories', $categories);
            View::share('packages', $packages);
            View::share('products', $products);
            return $next($request);
        });
    }

    function index()
    {
        $sliders = Slider::all();
        $testimonials = Testimonial::all();
        $newses = News::all();
        $teams = Team::all();
        $popups = Popup::where('is_visible', 1)->get();
        $contents = Content::all();
        $workCulture = $contents[4];
        $directorMessage = $contents[3];
        return view('index', compact('testimonials', 'sliders', 'popups', 'workCulture', 'directorMessage', 'teams', 'newses'));
    }

    function about()
    {
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $newses = News::all();
        $contents = Content::all();
        $about = $contents[0];
        $mission = $contents[1];
        $vision = $contents[2];
        $workCulture = $contents[4];
        $directorMessage = $contents[3];
        return view('about', compact('teams', 'about', 'mission', 'vision', 'testimonials', 'newses', 'workCulture', 'directorMessage'));
    }

    function news()
    {
        $newses = News::all();
        return view('news', compact('newses'));
    }

    function achievers()
    {
        $achievers = Achiever::all();
        return view('achievers', compact('achievers'));
    }

    function downloads()
    {
        $downloads = Download::all();
        return view('downloads', compact('downloads'));
    }

    function bankPartners()
    {
        $banks = Bank::all();
        return view('bank', compact('banks'));
    }

    function documents()
    {
        $documents = Document::where('is_visible',1)->get();
        return view('documents', compact('documents'));
    }

    function contact()
    {
        return view('contact');
    }

    function gallery(Request $request)
    {
        $tagname = $request->tagname;
        $gallery = Gallery::get()->pluck('tags')->toArray();
        $tags = array();

        foreach ($gallery as $key => $value) {
            $galleryTags = explode(",", $value);
            array_push($tags, ...$galleryTags);
        }

        $tags = array_unique($tags);
        $gallery = Gallery::select();

        if ($tagname) {
            $gallery = $gallery->where('tags', 'LIKE', '%' . $tagname . '%');
        }

        $gallery = $gallery->get();
        return view('gallery', compact('tags', 'gallery'));
    }

    function packages(Request $request)
    {
        $packageId = $request->id;

        if (!$packageId) {
            return redirect()->to('/');
        }

        $package = Package::find($packageId);

        if (!$package) {
            return redirect()->to('/');
        }
        return view('package', compact('package'));
    }

    function products(Request $request)
    {
        $categoryId = $request->category_id;
        $search=$request->searchQry;
        $products = Product::where('is_active', 1);
        $total = $products->count();
        $categories = Category::where('deleted_at', null)->where('parent_id', null)->get();

        if ($categoryId) {
            $products = $products->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('categories.id', $categoryId);
            });
        }
        if($search){
            $products=$products->where(function($q)use($search){
                $q->orWhere('name', 'like', '%'.$search.'%');
                $q->orWhereHas('categories', function($qr)use($search){
                    $qr->where('name', 'like', '%'.$search.'%');
                });
            });
        }
        $products = $products->get();

        return view('products', compact('products', 'categories', 'total'));
    }

    function productDetail(Request $request, $id, $name)
    {
        $product = Product::where('id', $id)->first();
        return view('product-detail', compact('product'));
    }

    function privacyPolicy()
    {
        return view('privacy-policy');
    }

    function termsAndCondition(Request $request)
    {
        return view('terms-and-conditions');
    }

    function refundPolicy()
    {
        $url = Setting::getValue('return_refund_policy_services');
        return Redirect::to($url);
    }
    function productCatalogue(){
        $url = Setting::getValue('latest_product_catalog');
        return Redirect::to($url);
    }

    function businessOpportunities()
    {
        $url = Setting::getValue('business_opportunity');
        return Redirect::to($url);
    }

    function directSellerAgreement()
    {
        $url = Setting::getValue('direct_seller_agreement');
        return Redirect::to($url);
    }

    function buyBackPolicy()
    {
        $url = Setting::getValue('buy_back');
        return Redirect::to($url);
    }
}
