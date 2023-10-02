@extends('layout.master')

@section('title', $pageTitle)

@section('content')
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ $pageTitle }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ $pageTitle }}</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <div class="blog_details privacypolicy mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                                {{-- <div class="post_header">
	                               <h3 class="post_title">Aypi non habent claritatem insitam</h3>
	                            </div> --}}
                                <figcaption class="blog_content">

                                    <div class="post_content">
                                        <p>
                                            Thank you for visiting <a
                                                href="{{ $settings['website'] }}">{{ $settings['website'] }}</a>. As used in
                                            this privacy statement, the terms "our", "we"
                                            and "us" refer to both {{ $settings['site_name'] }} and the distributor unless
                                            the context provides otherwise.
                                        </p>

                                        <p>
                                            This privacy policy sets out how {{ $settings['company_name'] }}. uses and
                                            protects any information that you give us when you use this website.
                                            {{ $settings['site_name'] }} is committed to ensuring that your privacy is
                                            always protected. Should we ask you to provide certain information by which you
                                            can be identified when using this website, then you can be assured that it will
                                            only be used in accordance with this privacy statement.
                                        </p>

                                        <h3 class="pt-3"> What Information We Collect and How We Use It</h3>
                                        <h4 class="mt-3">The information that we collect on our website comes
                                            under two general categories :</h4>

                                        <ol class="list_style_2">
                                            <li>Personally Identifiable Information</li>
                                            <li>Aggregate Information</li>
                                        </ol>

                                        <h3 class="pt-3">Personally Identifiable Information</h3>
                                        <p>This refers to information that lets us know who you are or things specifically
                                            about you.</p>

                                        <h4 class="mb-2 mt-3">A. Visitors</h4>
                                        <p>
                                            You can browse our website without sharing any Personally Identifiable
                                            Information. If you want
                                            to register with us as a distributor or place an order, you may voluntarily
                                            provide your
                                            Personally Identifiable Information (name, address, email address or telephone
                                            number) to be
                                            shared with a registered {{ $settings['site_name'] }} distributor for the
                                            purpose of
                                            assisting you with registration
                                            and order placement. We might also maintain a record of your contact information
                                            to help us
                                            provide better services in case you contact us again.
                                        </p>

                                        <h4 class="mb-2 mt-3">B. Ordering</h4>
                                        <p>When you place an order on our website, Personally Identifiable Information (such
                                            as name,
                                            contact info, order info, credit card and other transaction info) will be
                                            collected for the
                                            purpose of processing and delivering your order. We may also provide certain
                                            necessary order
                                            details to our shipping partners to complete the delivery of the order.</p>

                                        <h4 class="mb-2 mt-3">C. Credit Card Storage</h4>
                                        <p>The Credit Card Information collected for online shopping is used only to process
                                            payments for
                                            the orders and, is not retained on our website.The information is securely
                                            transmitted to the
                                            bank, and we store only the reference number and amount paid information
                                            provided by the bank.
                                        </p>

                                        <h4 class="mb-2 mt-3">D. Surveys and Promotions</h4>
                                        <p>
                                            You may voluntarily provide Personally Identifiable Information to participate
                                            in occasional surveys, user polls or to answer questionnaires. This information
                                            is used by us to better our products and services. We may also use this
                                            information to provide you marketing and promotional material. If you do not
                                            wish to receive any such material, you can adjust the setting for the same
                                            through a link provided in the email communication. or send us an email at
                                            {{ $settings['contact_phone'] }}
                                        </p>

                                        <h3 class="pt-3"> Aggregate Information</h3>
                                        <p>
                                            This refers to information that does not distinguish you as a particular
                                            individual. This
                                            information includes your browser and operating system type, your IP address,
                                            URL (Uniform
                                            Source Locator) of the website that directed you to our site and any search
                                            terms you enter on
                                            our site. Such information is aggregated by our web server to monitor the
                                            activities on the site
                                            and evaluate its performance. This helps us improve the features and functions
                                            on the website to
                                            provide you a satisfactory user experience. We might compile, publish, store,
                                            collect, promote,
                                            disclose or use any Aggregate Information. We generally do not correlate any
                                            Personally
                                            Identifiable Information with Aggregate Information. In case we do this, it will
                                            be protected as
                                            per the terms mentioned for Personally Identifiable Information in this Privacy
                                            Policy.</p>


                                        <h3 class="pt-3"> Security</h3>
                                        <p>We are committed to ensuring that your information is secure. In order to prevent
                                            unauthorized
                                            access or disclosure, we have put in place suitable physical, electronic and
                                            managerial
                                            procedures to safeguard and secure the information we collect online. It is your
                                            sole
                                            responsibility to safeguard the password created for your online account. In
                                            case you suspect
                                            that your password has been compromised, contact
                                            {{ $settings['company_name'] }}. Ltd as
                                            soon as possible.
                                            Since your Distributor ID and account password are specific to you, you take
                                            full responsibility
                                            for any and all activity conducted on our site with your ID and password.</p>

                                        <h3 class="pt-3"> How we use cookies</h3>
                                        <p>A cookie is a small file which asks permission to be placed on your computer's
                                            hard drive. Once you agree, the file is added and the cookie helps analyze web
                                            traffic or lets you know when you visit a particular site. Cookies allow web
                                            applications to respond to you as an individual. The web application can tailor
                                            its operations to your needs, likes and dislikes by gathering and remembering
                                            information about your preferences. We use traffic log cookies to identify which
                                            pages are being used. This helps us analyse data about webpage traffic and
                                            improve our website in order to tailor it to customer needs. We only use this
                                            information for statistical analysis purposes and then the data is removed from
                                            the system. Overall, cookies help us provide you with a better website by
                                            enabling us to monitor which pages you find useful and which you do not. They
                                            also help online retailers to keep track of a user's electronic shopping cart
                                            before completing a purchase. A cookie in no way gives us access to your
                                            computer or any information about you, other than the data you choose to share
                                            with us. We have to use cookie-based authentication to identify you as a
                                            registered distributor or send cookies to your computer to support personalized
                                            features on our website like your country and language codes as well as shopping
                                            and browsing functions. You can choose to accept or decline cookies. Most web
                                            browsers automatically accept cookies, but you can usually modify your browser
                                            setting to decline cookies if you prefer. This may prevent you from taking full
                                            advantage of the website.
                                        </p>

                                        <h3 class="pt-3"> Use of Third-Party Media and Research Companies</h3>

                                        <p>
                                            We may use third-party media and research companies to place ads for us on
                                            websites of other
                                            parties. Our site may also run third-party ads for specific Merchants and
                                            Service Partners with
                                            whom we link.
                                        </p>

                                        <h3 class="pt-3"> Links to other websites</h3>
                                        <p>
                                            Our website may contain links to other websites of interest. However, once you
                                            have used these
                                            links to leave our site, you should note that we do not have any control over
                                            that other
                                            website. Therefore, we cannot be responsible for the protection and privacy of
                                            any information
                                            which you provide whilst visiting such sites and such sites are not governed by
                                            this privacy
                                            statement. You should exercise caution and look at the privacy statement
                                            applicable to the
                                            website in question.
                                        </p>

                                        <h3 class="pt-3"> Children's Privacy Protection</h3>
                                        <p>Our website neither targets nor is intended for children below the age of 18.
                                            Personally
                                            Identifiable Information will not be collected from children on purpose and if
                                            we discover such
                                            data on our site, the same will be deleted.</p>

                                        <h3 class="pt-3"> Changes To This Statement</h3>
                                        <p>Please check frequently for any updates or changes in this privacy policy before
                                            using our
                                            website or submitting any Personally Identifiable Information at our site. By
                                            using our Site,
                                            you acknowledge acceptance of this Privacy Statement in effect at the time of
                                            use.</p>

                                        <h3 class="pt-3"> Controlling your Personally Identifiable Information
                                        </h3>
                                        <p>We try our best to ensure that the Personally Identifiable Information we collect
                                            on our site is
                                            current, accurate and complete. You may choose to restrict the collection or use
                                            of your
                                            Personally Identifiable Information</p>

                                        <h3 class="pt-3"> Intellectual Property and Use of content on the
                                            {{ $settings['site_name'] }} Website</h3>
                                        <p>The {{ $settings['site_name'] }} Website ( <a
                                                href="{{ $settings['website'] }}">{{ $settings['website'] }}</a> )
                                            and the content on the same are protected by intellectual
                                            property rights, including copyrights, trade names and trademarks, including the
                                            name '{{ $settings['site_name'] }}'
                                            and the {{ $settings['site_name'] }} logo, and are owned by
                                            {{ $settings['company_name'] }}
                                            ("{{ $settings['site_name'] }}") or used by
                                            {{ $settings['site_name'] }} under a license or with permission from the owner
                                            of such
                                            rights. The content protected
                                            by such intellectual property rights includes the design, layout, look,
                                            appearance, visuals,
                                            photographs, images, articles, stories and other content on the
                                            {{ $settings['site_name'] }} Website.</p>
                                        <p>The content on the {{ $settings['site_name'] }} website may only be reproduced,
                                            distributed,
                                            published or otherwise
                                            used only after prior written consent of {{ $settings['site_name'] }}.</p>



                                    </div>

                                </figcaption>
                            </figure>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
