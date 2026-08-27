@extends('layouts.app')

@section('title', 'Booking – Fresh Cleaning Facilities Management')

@section('content')

    <div id="content" class="site-content">

        <div data-elementor-type="wp-page" data-elementor-id="636" class="elementor elementor-636">

            <!-- Breadcrumb Section -->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-a4036ba elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="a4036ba" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

                <div class="elementor-container elementor-column-gap-no">

                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-694433d"
                        data-id="694433d" data-element_type="column">

                        <div class="elementor-widget-wrap elementor-element-populated">

                            <div class="elementor-element elementor-element-9bde1ca elementor-widget elementor-widget-clenfix-breadcrumb"
                                data-id="9bde1ca" data-element_type="widget" data-widget_type="clenfix-breadcrumb.default">

                                <div class="elementor-widget-container">

                                    <section id="clenix-breadcrumb"
                                        data-background="http://themexriver.com/wp/clinox/wp-content/uploads/2022/05/br-bg1.jpg"
                                        class="clenix-breadcrumb-section position-relative top-position">

                                        <div class="container">

                                            <div class="breadcrumb-content headline ul-li position-relative">

                                                <h2>Booking</h2>

                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item">
                                                        <a href="{{ url('/') }}">Home &nbsp;</a>
                                                    </li>

                                                    <li class="breadcrumb-item">
                                                        Booking
                                                    </li>
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
            <!-- Breadcrumb Section End -->


            <!-- Booking Form Section -->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-b870490 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="b870490" data-element_type="section">

                <div class="elementor-container elementor-column-gap-no">

                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c564dbb"
                        data-id="c564dbb" data-element_type="column">

                        <div class="elementor-widget-wrap elementor-element-populated">

                            <div class="elementor-element elementor-element-6d98e02 elementor-widget elementor-widget-clenfix-booking-form"
                                data-id="6d98e02" data-element_type="widget"
                                data-widget_type="clenfix-booking-form.default">

                                <div class="elementor-widget-container">

                                    <section id="clenix-booking-form"
                                        class="clenix-booking-form-section page-section-padding">

                                        <div class="container">

                                            <div class="booking-form-content">

                                                <div class="row">

                                                    <!-- Booking Image -->
                                                    <div class="col-lg-6">

                                                        <div class="booking-form-img">

                                                            <div class="clenix-faq-img-wrap position-relative">

                                                                <span class="bg-shape position-absolute"></span>

                                                                <div class="faq-img1 bg-img-area">

                                                                    <img fetchpriority="high" decoding="async"
                                                                        width="540" height="600"
                                                                        src="{{ asset('assets/img/uploads/2022/05/wc2.jpg') }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        srcset="{{ asset('assets/img/uploads/2022/05/wc2.jpg') }} 540w, {{ asset('assets/img/uploads/2022/05/wc2-270x300.jpg') }} 270w"
                                                                        sizes="(max-width: 540px) 100vw, 540px" />

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!-- Booking Image End -->


                                                    <!-- Booking Form -->
                                                    <div class="col-lg-6">

                                                        <div class="clenix-contact-form-wrap">

                                                            <div class="clenix-section-title headline pera-content">

                                                                <span class="sub-title">
                                                                    Get In Touch
                                                                </span>

                                                                <h2>
                                                                    Have Any
                                                                    <span>Question?</span>
                                                                </h2>

                                                            </div>


                                                            <div class="wpcf7 no-js" id="wpcf7-f5-p636-o1" lang="en-US"
                                                                dir="ltr" data-wpcf7-id="5">

                                                                <div class="screen-reader-response">

                                                                    <p role="status" aria-live="polite" aria-atomic="true">
                                                                    </p>

                                                                    <ul></ul>

                                                                </div>


                                                                <form class="wpcf7-form init" aria-label="Contact form"
                                                                    novalidate="novalidate" data-status="init">

                                                                    <fieldset class="hidden-fields-container">

                                                                        <input type="hidden" name="_wpcf7"
                                                                            value="5" />

                                                                        <input type="hidden" name="_wpcf7_version"
                                                                            value="6.1.1" />

                                                                        <input type="hidden" name="_wpcf7_locale"
                                                                            value="en_US" />

                                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                                            value="wpcf7-f5-p636-o1" />

                                                                        <input type="hidden" name="_wpcf7_container_post"
                                                                            value="636" />

                                                                        <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                            value="" />

                                                                    </fieldset>


                                                                    <div class="clenix-contact-form">

                                                                        <div class="row">

                                                                            <!-- Name -->
                                                                            <div class="col-md-6">

                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-name">

                                                                                    <input size="40" maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Name*" value=""
                                                                                        type="text" name="your-name" />

                                                                                </span>

                                                                            </div>


                                                                            <!-- Email -->
                                                                            <div class="col-md-6">

                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-email">

                                                                                    <input size="40" maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Email*"
                                                                                        value="" type="email"
                                                                                        name="your-email" />

                                                                                </span>

                                                                            </div>


                                                                            <!-- Phone -->
                                                                            <div class="col-md-6">

                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-phone">

                                                                                    <input size="40" maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-text"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Phone" value=""
                                                                                        type="text"
                                                                                        name="your-phone" />

                                                                                </span>

                                                                            </div>


                                                                            <!-- Services -->
                                                                            <div class="col-md-6">

                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="services">

                                                                                    <select
                                                                                        class="wpcf7-form-control wpcf7-select"
                                                                                        aria-invalid="false"
                                                                                        name="services">

                                                                                        <option value="Choose Services">
                                                                                            Choose Services
                                                                                        </option>

                                                                                        <option value="Cleaning Service">
                                                                                            Cleaning Service
                                                                                        </option>

                                                                                        <option value="Glass Cleaning">
                                                                                            Glass Cleaning
                                                                                        </option>

                                                                                        <option value="Room Cleaning">
                                                                                            Room Cleaning
                                                                                        </option>

                                                                                    </select>

                                                                                </span>

                                                                            </div>


                                                                            <!-- Message -->
                                                                            <div class="col-md-12">

                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-subject">

                                                                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                                                        aria-invalid="false" placeholder="Message" name="your-subject"></textarea>

                                                                                </span>

                                                                            </div>


                                                                            <!-- Submit -->
                                                                            <div class="col-md-12">

                                                                                <input
                                                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                                    type="submit" value="Submit Now"
                                                                                    disabled />

                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                    <div class="wpcf7-response-output" aria-hidden="true">
                                                                    </div>

                                                                </form>

                                                            </div>

                                                        </div>

                                                    </div>
                                                    <!-- Booking Form End -->

                                                </div>


                                                <!-- Contact Information -->
                                                <div class="booking-form-cta-content">

                                                    <div class="clenix-section-title text-center headline pera-content">

                                                        <span class="sub-title">
                                                            Contact Us
                                                        </span>

                                                        <h2>
                                                            Contact
                                                            <span>Information.</span>
                                                        </h2>

                                                    </div>


                                                    <div class="row justify-content-center">

                                                        <!-- Office Address -->
                                                        <div class="col-lg-4 col-md-6">

                                                            <div class="booking-cta-item d-flex">

                                                                <div class="inner-icon">

                                                                    <img decoding="async" width="55" height="49"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic15.png') }}"
                                                                        class="attachment-full size-full"
                                                                        alt="" />

                                                                </div>

                                                                <div class="inner-text headline">

                                                                    <h4>
                                                                        Office Address:
                                                                    </h4>

                                                                    <span>
                                                                        22 Albert St, Melbourne,
                                                                        Australia
                                                                    </span>

                                                                </div>

                                                            </div>

                                                        </div>


                                                        <!-- Mail -->
                                                        <div class="col-lg-4 col-md-6">

                                                            <div class="booking-cta-item d-flex">

                                                                <div class="inner-icon">

                                                                    <img decoding="async" width="56" height="44"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic16.png') }}"
                                                                        class="attachment-full size-full"
                                                                        alt="" />

                                                                </div>

                                                                <div class="inner-text headline">

                                                                    <h4>
                                                                        Mail Us
                                                                    </h4>

                                                                    <span>
                                                                        envato@gmail.com
                                                                    </span>

                                                                    <span>
                                                                        info@company.com
                                                                    </span>

                                                                </div>

                                                            </div>

                                                        </div>


                                                        <!-- Telephone -->
                                                        <div class="col-lg-4 col-md-6">

                                                            <div class="booking-cta-item d-flex">

                                                                <div class="inner-icon">

                                                                    <img decoding="async" width="45" height="45"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic17.png') }}"
                                                                        class="attachment-full size-full"
                                                                        alt="" />

                                                                </div>

                                                                <div class="inner-text headline">

                                                                    <h4>
                                                                        Telephone
                                                                    </h4>

                                                                    <span>
                                                                        (+123) 5462 3257
                                                                    </span>

                                                                    <span>
                                                                        (+123) 5462 3257
                                                                    </span>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- Contact Information End -->

                                            </div>

                                        </div>

                                    </section>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- Booking Form Section End -->

        </div>

    </div>

@endsection
