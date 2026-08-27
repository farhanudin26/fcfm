@extends('layouts.app')

@section('title', 'Contact – Fresh Cleaning Facilities Management')
@section('meta_description', 'Get in touch with Fresh Cleaning Facilities Management. Contact us at 18 Sin Ming Lane, #06-27, Midview City, Singapore 573960, call +65 8333 2999, or email hello@fcfm.sg for a free quote.')
@section('meta_keywords', 'contact fcfm, cleaning company contact singapore, get a quote cleaning services, fresh cleaning facilities management contact')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page page-id-429 wp-theme-clinox ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756 elementor-page elementor-page-429')
@section('elementor_post_id', 429)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-429-css' href='{{ asset('assets/css/elementor/post-429.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="429" class="elementor elementor-429">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-cd2b296 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="cd2b296" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55f0e7f"
                        data-id="55f0e7f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7f53d3c elementor-widget elementor-widget-clenfix-breadcrumb"
                                data-id="7f53d3c" data-element_type="widget"
                                data-widget_type="clenfix-breadcrumb.default">
                                <div class="elementor-widget-container">

                                    <section id="clenix-breadcrumb"
                                        data-background="{{ asset('assets/img/uploads/2025/10/img_8312-scaled.jpg') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">

                                                <h2>Contact</h2>

                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Contact</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-67ae871 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="67ae871" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c86c52"
                        data-id="8c86c52" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d42c3a7 elementor-widget elementor-widget-clenfix-booking-form"
                                data-id="d42c3a7" data-element_type="widget"
                                data-widget_type="clenfix-booking-form.default">
                                <div class="elementor-widget-container">

                                    <section id="clenix-booking-form" class="clenix-booking-form-section page-section-padding">
                                        <div class="container">
                                            <div class="booking-form-content">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="booking-form-img">
                                                            <div class="clenix-faq-img-wrap position-relative">
                                                                <span class="bg-shape position-absolute"></span>
                                                                <div class="faq-img1 bg-img-area">
                                                                    <img fetchpriority="high" decoding="async" width="2560"
                                                                        height="1920"
                                                                        src="{{ asset('assets/img/uploads/2025/10/img_8312-scaled.jpg') }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        srcset="{{ asset('assets/img/uploads/2025/10/img_8312-scaled.jpg') }} 2560w, {{ asset('assets/img/uploads/2025/10/img_8312-300x225.jpg') }} 300w, {{ asset('assets/img/uploads/2025/10/img_8312-1024x768.jpg') }} 1024w, {{ asset('assets/img/uploads/2025/10/img_8312-768x576.jpg') }} 768w, {{ asset('assets/img/uploads/2025/10/img_8312-1536x1152.jpg') }} 1536w, {{ asset('assets/img/uploads/2025/10/img_8312-2048x1536.jpg') }} 2048w"
                                                                        sizes="(max-width: 2560px) 100vw, 2560px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="clenix-contact-form-wrap">
                                                            <div class="clenix-section-title headline pera-content">
                                                                <span class="sub-title"></span>
                                                                <h2>Have Any
                                                                    <span>Question?</span>
                                                                </h2>
                                                            </div>

                                                            <div class="wpcf7 no-js" id="wpcf7-f5-p429-o1" lang="en-US"
                                                                dir="ltr" data-wpcf7-id="5">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite" aria-atomic="true">
                                                                    </p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form class="wpcf7-form init" action="{{ url('/pages/contact') }}"
                                                                    method="POST" aria-label="Contact form" novalidate="novalidate"
                                                                    data-status="init">
                                                                    @csrf
                                                                    <fieldset class="hidden-fields-container">
                                                                        <input type="hidden" name="_wpcf7" value="5" />
                                                                        <input type="hidden" name="_wpcf7_version"
                                                                            value="6.1.1" />
                                                                        <input type="hidden" name="_wpcf7_locale"
                                                                            value="en_US" />
                                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                                            value="wpcf7-f5-p429-o1" />
                                                                        <input type="hidden" name="_wpcf7_container_post"
                                                                            value="429" />
                                                                        <input type="hidden"
                                                                            name="_wpcf7_posted_data_hash" value="" />
                                                                    </fieldset>
                                                                    <div class="clenix-contact-form">
                                                                        <div class="row">
                                                                            <div class="col-md-6"><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="your-name"><input size="40"
                                                                                        maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Name*" value=""
                                                                                        type="text"
                                                                                        name="your-name" /></span></div>
                                                                            <div class="col-md-6"><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="your-email"><input size="40"
                                                                                        maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Email*" value=""
                                                                                        type="email"
                                                                                        name="your-email" /></span></div>
                                                                            <div class="col-md-6"><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="your-phone"><input size="40"
                                                                                        maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-text"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Phone" value=""
                                                                                        type="text"
                                                                                        name="your-phone" /></span></div>
                                                                            <div class="col-md-6"><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="services"><select
                                                                                        class="wpcf7-form-control wpcf7-select"
                                                                                        aria-invalid="false"
                                                                                        name="services">
                                                                                        <option value="Choose Services">
                                                                                            Choose Services</option>
                                                                                        <option value="Cleaning Service">
                                                                                            Cleaning Service</option>
                                                                                        <option value="Glass Cleaning">
                                                                                            Glass Cleaning</option>
                                                                                        <option value="Room Cleaning">
                                                                                            Room Cleaning</option>
                                                                                    </select></span></div>
                                                                            <div class="col-md-12"><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="your-subject"><textarea
                                                                                        cols="40" rows="10"
                                                                                        maxlength="2000"
                                                                                        class="wpcf7-form-control wpcf7-textarea"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Message"
                                                                                        name="your-subject"></textarea></span>
                                                                            </div>
                                                                            <div class="col-md-12"><input
                                                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                                    type="submit" value="Submit Now" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpcf7-response-output"
                                                                        aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="booking-form-cta-content">
                                                    <div class="clenix-section-title text-center headline pera-content">
                                                        <span class="sub-title"></span>
                                                        <h2>Fresh Cleaning Facilities Management Pte Ltd</h2>
                                                    </div>
                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="booking-cta-item d-flex">
                                                                <div class="inner-icon">
                                                                    <img decoding="async" width="55" height="49"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic15.png') }}"
                                                                        class="attachment-full size-full" alt="" />
                                                                </div>
                                                                <div class="inner-text headline">
                                                                    <h4>Office Address:</h4>
                                                                    18 Sin Ming Lane, <br>
                                                                    #06-27, Midview City, <br>
                                                                    Singapore 573960
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="booking-cta-item d-flex">
                                                                <div class="inner-icon">
                                                                    <img decoding="async" width="56" height="44"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic16.png') }}"
                                                                        class="attachment-full size-full" alt="" />
                                                                </div>
                                                                <div class="inner-text headline">
                                                                    <h4>Mail Us</h4>
                                                                    <span>hello@fcfm.sg</span><br><br><br>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="booking-cta-item d-flex">
                                                                <div class="inner-icon">
                                                                    <img decoding="async" width="45" height="45"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic17.png') }}"
                                                                        class="attachment-full size-full" alt="" />
                                                                </div>
                                                                <div class="inner-text headline">
                                                                    <h4>Telephone</h4>
                                                                    <span>+65 8333 2999</span><br><br><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div><!-- #content -->
@endsection
