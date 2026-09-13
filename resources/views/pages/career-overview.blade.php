@extends('layouts.app')

@section('title', 'Career Overview – Fresh Cleaning Facilities Management')

@section('content')

    <div id="content" class="site-content">

        <div data-elementor-type="wp-page" data-elementor-id="2335" class="elementor elementor-2335">

            <div class="elementor-element elementor-element-eeab9a7 e-flex e-con-boxed e-con e-parent" data-id="eeab9a7"
                data-element_type="container">

                <div class="e-con-inner">

                    <div class="elementor-element elementor-element-8368719 elementor-widget elementor-widget-clenfix-breadcrumb"
                        data-id="8368719" data-element_type="widget" data-widget_type="clenfix-breadcrumb.default">

                        <div class="elementor-widget-container">

                            <section id="clenix-breadcrumb"
                                data-background="{{ asset('assets/img/uploads/2025/10/whatsapp-image-2025-02-28-at-11.43.00-1-e1763974212695.jpeg') }}"
                                class="clenix-breadcrumb-section position-relative top-position">

                                <div class="container">

                                    <div class="breadcrumb-content headline ul-li position-relative">

                                        <h2>Career</h2>

                                        <ul class="bread-crumb clearfix">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}">Home &nbsp;</a>
                                            </li>

                                            <li class="breadcrumb-item">
                                                Career Overview
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </section>

                        </div>

                    </div>

                </div>

            </div>


            <div class="elementor-element elementor-element-0aa4aa2 e-flex e-con-boxed e-con e-parent" data-id="0aa4aa2"
                data-element_type="container">

                <div class="e-con-inner">
                </div>

            </div>


            <section class="fcfm-join-section">
                <div class="container">

                    <div class="elementor-element elementor-element-67b7e30 e-flex e-con-boxed e-con e-parent"
                        data-id="67b7e30" data-element_type="container">

                        <div class="e-con-inner">

                            <div class="elementor-element elementor-element-601c26b elementor-widget elementor-widget-heading"
                                data-id="601c26b" data-element_type="widget" data-widget_type="heading.default">

                                <h2 class="elementor-heading-title elementor-size-default fcfm-join-heading">
                                    Join Our Family
                                </h2>

                            </div>

                        </div>

                    </div>


                    <div class="elementor-element elementor-element-eac780c e-flex e-con-boxed e-con e-parent"
                        data-id="eac780c" data-element_type="container">

                        <div class="e-con-inner">

                            <div class="elementor-element elementor-element-ba11cab elementor-widget elementor-widget-image"
                                data-id="ba11cab" data-element_type="widget" data-widget_type="image.default">

                                <div class="fcfm-join-image-wrap">
                                    <img fetchpriority="high" decoding="async" width="1920" height="2560"
                                        src="{{ asset('assets/img/uploads/2026/01/career-fcfm.jpg') }}"
                                        class="attachment-full size-full wp-image-3064 fcfm-join-image"
                                        alt="Join the FCFM team"
                                        srcset="
                                        {{ asset('assets/img/uploads/2026/01/career-fcfm.jpg') }} 1920w,
                                        {{ asset('assets/img/uploads/2026/01/career-fcfm.jpg') }} 225w,
                                        {{ asset('assets/img/uploads/2026/01/career-fcfm.jpg') }} 768w,
                                        {{ asset('assets/img/uploads/2026/01/career-fcfm.jpg') }} 1152w,
                                        {{ asset('assets/img/uploads/2026/01/career-fcfm.jpg') }} 1536w
                                    "
                                        sizes="(max-width: 960px) 100vw, 960px" />
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <div class="fcfm-career">

                {{-- ================================================
     1. HERO — Build Your Next Chapter With Us
================================================= --}}
                <section class="hero-section">
                    <div class="container">
                        <div class="hero-inner">
                            <h1>Build Your Next Chapter With Us</h1>
                            <p>Be Part of the People Behind Better Spaces</p>
                            <h4>At<strong> Fresh Cleaning Facilities Management (FCFM)</strong>, our work is powered by
                                people. From the teams
                                caring for our clients' spaces every day to the people coordinating operations behind the
                                scenes, every role contributes to the service and experience we deliver.</h4>
                            <h4>We're always looking for individuals who take pride in what they do, care about the people
                                around them and want to grow alongside a team that believes<strong> every interaction
                                    matters.</strong></h4>
                            <a href="/pages/job-listings" class="btn-solid">Explore Career Opportunities <i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </section>

                {{-- ================================================
     2. MORE THAN A JOB, A PLACE TO GROW — 4 value cards
================================================= --}}
                <section class="grow-section">
                    <div class="container">
                        <div class="grow-copy">
                            <h2><strong>More Than a Job, A Place to Grow</strong></ h2>
                                <p>Great service starts with people who feel supported in doing their best work. We believe
                                    in
                                    creating opportunities for our people to learn, develop and take on greater
                                    responsibilities
                                    as they grow with us.</p>
                                <p>Whether you're taking your first step into the industry, bringing years of experience, or
                                    looking for a new direction, there can be a place for you to build your journey with
                                    FCFM.
                                </p>
                        </div>

                        <div class="services-grid">
                            <div class="service-card">
                                <img src="{{ asset('assets/img/icon/learn-and-develop.png') }}"
                                    alt="Housekeeping Manpower Support">
                                <h4>Learn &amp; Develop</h4>
                                <p>Build practical skills and knowledge through hands-on experience and learning
                                    opportunities.</p>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset('assets/img/icon/growth.png') }}" alt="grow">
                                <h4>Grow With Us</h4>
                                <p>Take on new responsibilities and explore opportunities for progression as you develop.
                                </p>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset('assets/img/icon/impact.png') }}" alt="grow">
                                <h4>Make an Impact</h4>
                                <p>Your work contributes directly to the environments and experiences we create for our
                                    clients every day.</p>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset('assets/img/icon/team.png') }}" alt="grow">
                                <h4>Be Part of a Team</h4>
                                <p>Work alongside people across different roles who come together to keep our operations
                                    moving.</p>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="elementor-element elementor-element-32ca790 e-flex e-con-boxed e-con e-parent" data-id="32ca790"
                    data-element_type="container">

                    <div class="e-con-inner">

                        <div class="elementor-element elementor-element-3513a83 elementor-widget elementor-widget-clenfix-booking-form"
                            data-id="3513a83" data-element_type="widget" data-widget_type="clenfix-booking-form.default">

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
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="col-lg-6">

                                                    <div class="clenix-contact-form-wrap">

                                                        <div class="clenix-section-title headline pera-content">

                                                            <span class="sub-title"></span>

                                                            <h2></h2>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <div class="booking-form-cta-content">

                                                <div class="clenix-section-title text-center headline pera-content">

                                                    <span class="sub-title"></span>

                                                    <h2>
                                                        Fresh Cleaning Facilities Management Pte Ltd
                                                    </h2>

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

                                                                <span>hello@fcfm.sg</span>
                                                                <br><br><br>

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

                                                                <span>+65 8333 2999</span>
                                                                <br><br><br>

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

        </div>

    @endsection
