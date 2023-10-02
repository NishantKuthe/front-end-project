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
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ $pageTitle }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="blog_details  mt-5">
	    <div class="container">
	        <div class="row">

	            <div class="col-lg-12 col-md-12">
	                <div class="blog_wrapper blog_wrapper_details">
	                    <article class="single_blog">
	                        <figure>
	                           <figcaption class="blog_content">
	                            <div class="post_content">

	                                    <h3 class="pt-3"> 1. Terms </h3>

	                                    <p> By accessing the website at <a href="{{$settings['website']}}">{{$settings['website']}}</a>, you
	                                        are agreeing to be bound by these terms
	                                        of service, all applicable laws and regulations, and agree that you are
	                                        responsible for
	                                        compliance with any applicable local laws. If you do not agree with any of these
	                                        terms, you are
	                                        prohibited from using or accessing this site. The materials contained in this
	                                        website are
	                                        protected by applicable copyright and trademark law.</p>

	                                    <h3 class="pt-3"> 2. Use License </h3>
	                                    <ul class="ordered-list-alpha">
	                                        <li>Permission is granted to temporarily download one copy of the materials
	                                            (information or
	                                            software) on {{$settings['company_name']}}'s website for personal, non-commercial
	                                            transitory
	                                            viewing only. This is the grant of a license, not a transfer of title, and
	                                            under this
	                                            license you may not:</li>
	                                        <ul class="ordered-list-roman">
	                                            <li>modify or copy the materials;</li>
	                                            <li>use the materials for any commercial purpose, or for any public display
	                                                (commercial or
	                                                non-commercial);</li>
	                                            <li>attempt to decompile or reverse engineer any software contained on
	                                                {{$settings['company_name']}}'s website;</li>
	                                            <li>remove any copyright or other proprietary notations from the materials;
	                                                or</li>
	                                            <li>transfer the materials to another person or "mirror" the materials on
	                                                any other server.
	                                            </li>
	                                        </ul>
	                                        <li>This license shall automatically terminate if you violate any of these
	                                            restrictions and may
	                                            be terminated by {{$settings['company_name']}} at any time. Upon terminating your
	                                            viewing of these
	                                            materials or upon the termination of this license, you must destroy any
	                                            downloaded materials
	                                            in your possession whether in electronic or printed format.</li>
	                                    </ul>


	                                    <h3 class="pt-3"> 3. Disclaimer </h3>
	                                    <ul class="ordered-list-alpha">
	                                        <li>The materials on {{$settings['company_name']}}'s website are provided on an 'as is'
	                                            basis. {{$settings['company_name']}} makes no warranties, expressed or implied, and
	                                            hereby disclaims and negates
	                                            all other warranties including, without limitation, implied warranties or
	                                            conditions of
	                                            merchantability, fitness for a particular purpose, or non-infringement of
	                                            intellectual
	                                            property or other violation of rights.</li>
	                                        <li>Further, {{$settings['company_name']}} does not warrant or make any representations
	                                            concerning the
	                                            accuracy, likely results, or reliability of the use of the materials on its
	                                            website or
	                                            otherwise relating to such materials or on any sites linked to this site.
	                                        </li>
	                                    </ul>

	                                    <h3 class="pt-3"> 4. Limitations </h3>
	                                    <p>In no event shall {{$settings['company_name']}} or its suppliers be liable for any damages
	                                        (including,
	                                        without limitation, damages for loss of data or profit, or due to business
	                                        interruption) arising
	                                        out of the use or inability to use the materials on {{$settings['company_name']}}'s
	                                        website, even if
	                                        {{$settings['company_name']}} or a {{$settings['company_name']}} authorized representative has
	                                        been notified
	                                        orally or in writing of the possibility of such damage. Because some
	                                        jurisdictions do not allow
	                                        limitations on implied warranties, or limitations of liability for consequential
	                                        or incidental
	                                        damages, these limitations may not apply to you.</p>

	                                    <h3 class="pt-3"> 5. Accuracy of materials</h3>
	                                    <p>The materials appearing on {{$settings['company_name']}}'s website could include
	                                        technical,
	                                        typographical, or photographic errors. {{$settings['company_name']}} does not warrant
	                                        that any of the
	                                        materials on its website are accurate, complete or current. {{$settings['company_name']}}
	                                        may make
	                                        changes to the materials contained on its website at any time without notice.
	                                        However {{$settings['company_name']}}
	                                        does not make any commitment to update the materials.</p>

	                                    <h3 class="pt-3"> 6. Links</h3>
	                                    <p>{{$settings['company_name']}} has not reviewed all of the sites linked to its website and
	                                        is not
	                                        responsible for the contents of any such linked site. The inclusion of any link
	                                        does not imply
	                                        endorsement by {{$settings['company_name']}} of the site. Use of any such linked website
	                                        is at the
	                                        user's own risk.</p>

	                                    <h3 class="pt-3"> 7. Modifications</h3>
	                                    <p>{{$settings['company_name']}} may revise these terms of service for its website at any
	                                        time without
	                                        notice. By using this website you are agreeing to be bound by the then current
	                                        version of these
	                                        terms of service.</p>

	                                    <h3 class="pt-3"> 8. Governing Law</h3>
	                                    <p>These terms and conditions are governed by and construed in accordance with the
	                                        laws of India and
	                                        you irrevocably submit to the exclusive jurisdiction of the courts in that State
	                                        or location.
	                                    </p>

	                                    <h3 class="pt-3"> Contact Us</h3>
	                                    <p>If you have any questions or suggestions about our Privacy Policy, do not
	                                        hesitate to contact us.</p>


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


