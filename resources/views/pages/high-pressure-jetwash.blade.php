@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'High Pressure Jet Washing Services – Fresh Cleaning Facilities Management')
@section('meta_description',
    'FCFM provides professional high pressure jetwashing services in Singapore to remove
    stubborn dirt, grime, and buildup from outdoor and hard-surface areas.')
@section('meta_keywords',
    'high pressure jetwashing singapore, jetwash service, commercial jet washing, facility
    maintenance, outdoor surface cleaning')
@section('body_class',
    'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2103)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2103-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2103" class="elementor elementor-2103">

            {{-- Section Utama / Hero & Breadcrumb --}}
            <section
                class="elementor-section elementor-top-section elementor-element elementor-section-full_width elementor-section-height-default"
                data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element"
                        data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">

                            {{-- Breadcrumb Section --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix-breadcrumb"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-breadcrumb"
                                        data-background="{{ asset('assets/img/header/high-pressure-jetwash.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>High Pressure Jet Washing Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">High Pressure Jet Washing Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section" style="padding-bottom: 10px;">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Jetwash Service</span><br>
                                                <h2 class="hotel-title">High Pressure Jet Washing Services</h2><br>
                                                <h3 class="hotel-subtitle">Powerful cleaning for tough dirt and outdoor
                                                    surfaces.</h3><br>

                                                <h3
                                                    style="font-size: 22px; font-weight: 700; color: #111; margin-bottom: 15px;">
                                                    What Is High Pressure Jetwashing?</h3>

                                                <p class="hotel-description">
                                                    High pressure jetwashing is a method of using a powerful stream of water
                                                    to loosen and remove stubborn dirt, grime and buildup from hard
                                                    surfaces. It provides a deep clean for areas where conventional cleaning
                                                    methods may not be sufficient to remove accumulated dirt.
                                                </p>
                                                <p class="hotel-description" style="margin-bottom: 0;">
                                                    At FCFM, we provide high pressure jetwashing services for commercial and
                                                    facility environments in Singapore, which helps in the removal of such
                                                    accumulated dirt, grime and surface buildup from suitable outdoor as
                                                    well as hard-surface areas.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section 4 Small Cards: Where It Can Be Used --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix_service_2"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-service-2" class="clenix-service-section-2">
                                        <div class="container">

                                            <div class="text-center mb-3">
                                                <h2 class="hotel-title" style="font-size: 28px; margin-top: 0;">Where It Can
                                                    Be Used</h2>
                                            </div><br>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 0px 0 50px 0;
                                                    /* Mengubah padding top menjadi 0px */
                                                }

                                                /* Grid Layout 2x2 untuk 4 Small Cards */
                                                .jetwash-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(2, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 768px) {
                                                    .jetwash-cards-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .jetwash-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .jetwash-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .jetwash-card-item h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .jetwash-card-item p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Wrapper penataan tengah untuk Why Periodic Jetwashing */
                                                .jetwash-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .jetwash-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .jetwash-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Small Cards Grid (2x2) --}}
                                            <div class="jetwash-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="jetwash-card-item">
                                                    <h3>Walkways & Pavements</h3>
                                                    <p>Outdoor pathways and frequently used areas where dirt can accumulate
                                                        easily over time.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="jetwash-card-item">
                                                    <h3>External Common Areas</h3>
                                                    <p>Suitable communal and exterior spaces that are exposed to weather and
                                                        everyday traffic.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="jetwash-card-item">
                                                    <h3>Walls & Hard Surfaces</h3>
                                                    <p>For removal of accumulated dirt and buildup from suitable washable
                                                        surfaces.</p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="jetwash-card-item">
                                                    <h3>Car Parks & Loading Areas</h3>
                                                    <p>High-traffic areas that may require more intensive periodic cleaning.
                                                    </p>
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

            {{-- Section Tambahan: Why Periodic Jetwashing? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="jetwash-bottom-wrapper">
                        <h2>Why Periodic Jetwashing?</h2><br>
                        <p>
                            Because outdoor and high-traffic areas are continuously exposed to dirt, weather and everyday
                            use, periodic jetwashing can help remove accumulated buildup and maintain a cleaner and
                            well-kept appearance across the premises. Where required, periodic high pressure jetwashing can
                            also be included together with your existing cleaning programmes to enhance the level of
                            maintenance care for your facility.
                        </p>
                    </div>
                </div>
            </section>

            <div class="elementor-element elementor-element-6b04385 elementor-widget elementor-widget-clenfix-how-work"
                data-id="6b04385" data-element_type="widget" data-widget_type="clenfix-how-work.default">
                <div class="elementor-widget-container">
                    <section id="clenix-how-work" class="clenix-how-work-section">
                        <div class="container">
                            <div class="clenix-section-title-2 text-center headline pera-content pr-text-in">
                                <h3 class="sub-title d-inline-block">
                                    <span class="pr-text-in_item1">
                                        <span class="pr-text-in_item2">
                                            <span class="pr-text-in_item3">
                                                <style>
                                                    .clenix-how-work-section {
                                                        background-color: #f9da00 !important;
                                                    }

                                                    /* CSS Tambahan untuk Hover Icon */
                                                    .clenix-how-work-item .inner-icon {
                                                        position: relative;
                                                    }

                                                    .clenix-how-work-item .inner-icon img {
                                                        transition: opacity 0.3s ease;
                                                    }

                                                    .clenix-how-work-item .inner-icon .icon-hover {
                                                        position: absolute;
                                                        opacity: 0;
                                                    }

                                                    /* Saat kursor diarahkan ke item/layanan */
                                                    .clenix-how-work-item:hover .inner-icon .icon-default {
                                                        opacity: 0;
                                                    }

                                                    .clenix-how-work-item:hover .inner-icon .icon-hover {
                                                        opacity: 1;
                                                    }
                                                </style>
                                            </span>
                                        </span>
                                    </span>
                                </h3>
                                <h2>
                                    <span class="pr-text-in_item1">
                                        <span class="pr-text-in_item2">
                                            <span class="pr-text-in_item3">
                                                OUR SERVICE PROCESS
                                            </span>
                                        </span>
                                    </span>
                                </h2>
                            </div>
                            <div class="clenix-how-work-content position-relative">
                                <span class="line-shape position-absolute">
                                    <img fetchpriority="high" decoding="async" width="1196" height="121"
                                        src="{{ asset('assets/img/uploads/2022/05/line-sh2.png') }}"
                                        class="attachment-full size-full" alt=""
                                        srcset="{{ asset('assets/img/uploads/2022/05/line-sh2.png') }} 1196w, {{ asset('assets/img/uploads/2022/05/line-sh2-300x30.png') }} 300w, {{ asset('assets/img/uploads/2022/05/line-sh2-1024x104.png') }} 1024w, {{ asset('assets/img/uploads/2022/05/line-sh2-768x78.png') }} 768w"
                                        sizes="(max-width: 1196px) 100vw, 1196px" />
                                </span>
                                <div class="row justify-content-center">

                                    <!-- Item 01 -->
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="clenix-how-work-item text-center position-relative">
                                            <span
                                                class="serial d-flex justify-content-center align-items-center position-absolute">01</span>
                                            <div
                                                class="inner-icon position-relative d-flex justify-content-center align-items-center">
                                                <img decoding="async" width="51" height="50"
                                                    src="{{ asset('assets/img/icon/service-needs-orange.png') }}"
                                                    class="attachment-full size-full icon-default" alt="Site Assessment" />
                                                <img decoding="async" width="51" height="50"
                                                    src="{{ asset('assets/img/icon/service-needs-white.png') }}"
                                                    class="attachment-full size-full icon-hover" alt="Site Assessment" />
                                            </div>
                                            <div class="inner-text headline pera-content">
                                                <h3>Tell Us Your Needs</h3>
                                                <p>Share your site requirements, cleaning needs and
                                                    operational considerations with us</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 02 -->
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                                        data-wow-duration="1500ms">
                                        <div class="clenix-how-work-item text-center position-relative">
                                            <span
                                                class="serial d-flex justify-content-center align-items-center position-absolute">02</span>
                                            <div
                                                class="inner-icon position-relative d-flex justify-content-center align-items-center">
                                                <img decoding="async" width="46" height="50"
                                                    src="{{ asset('assets/img/icon/site-assessment-orange.png') }}"
                                                    class="attachment-full size-full icon-default"
                                                    alt="Site Assessment" />
                                                <img decoding="async" width="46" height="50"
                                                    src="{{ asset('assets/img/icon/site-assessment-white.png') }}"
                                                    class="attachment-full size-full icon-hover" alt="Site Assessment" />
                                            </div>
                                            <div class="inner-text headline pera-content">
                                                <h3>Site Assessment & Planning</h3>
                                                <p>We assess your requirements and plan the appropriate work
                                                    scope, manpower and service arrangements</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 03 -->
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                                        data-wow-duration="1500ms">
                                        <div class="clenix-how-work-item text-center position-relative">
                                            <span
                                                class="serial d-flex justify-content-center align-items-center position-absolute">03</span>
                                            <div
                                                class="inner-icon position-relative d-flex justify-content-center align-items-center">
                                                <img decoding="async" width="50" height="50"
                                                    src="{{ asset('assets/img/icon/service-implementation-orange.png') }}"
                                                    class="attachment-full size-full icon-default"
                                                    alt="Service Implementation" />
                                                <img decoding="async" width="50" height="50"
                                                    src="{{ asset('assets/img/icon/service-implementation-white.png') }}"
                                                    class="attachment-full size-full icon-hover"
                                                    alt="Service Implementation" />
                                            </div>
                                            <div class="inner-text headline pera-content">
                                                <h3>Service Implementation</h3>
                                                <p>Our team carries out the agreed service plan, with
                                                    ongoing support where required.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="elementor-element elementor-element-19ed9f3 elementor-widget elementor-widget-clenfix-prono"
                data-id="19ed9f3" data-element_type="widget" data-widget_type="clenfix-prono.default">
                <div class="elementor-widget-container">

                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a30f7ee elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="a30f7ee" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab8725b"
                                data-id="ab8725b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-45dc489 elementor-widget elementor-widget-clenfix-prono"
                                        data-id="45dc489" data-element_type="widget"
                                        data_widget_type="clenfix-prono.default">
                                        <div class="elementor-widget-container">

                                            <section id="clenix-promo" class="clenix-promo-section position-relative"
                                                style="
                                                                                                background-image: url('{{ asset('assets/img/uploads/2025/10/fcfm-about-speak-with-us-bg-scaled.jpg') }}');
                                                                                                background-position: center center;
                                                                                                background-repeat: no-repeat;
                                                                                                background-size: 80% auto;
                                                                                            ">
                                                <div class="banner-shape position-absolute"></div>

                                                <div class="container">
                                                    <div class="clenix-promo-content position-relative">
                                                        <div class="clenix-section-title headline pera-content pr-text-in">
                                                            <h3 class="sub-title d-inline-block"></h3>
                                                            <h2>
                                                                <span class="pr-text-in_item1">
                                                                    <span class="pr-text-in_item2">
                                                                        <span class="pr-text-in_item3">
                                                                            Building better spaces starts
                                                                            with a conversation.
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </h2>
                                                            <p>
                                                                Tell us about your facility & space, your
                                                                challenges and what you need. We’ll take it
                                                                from there.
                                                            </p>
                                                        </div>

                                                        <div class="banner-btn-wrapper d-flex align-items-center">
                                                            <!-- Tombol Membuka Modal -->
                                                            <div class="banner-btn">
                                                                <a class="d-flex justify-content-center align-items-center"
                                                                    href="#quoteModal" data-bs-toggle="modal"
                                                                    data-bs-target="#quoteModal">
                                                                    <span>Get A Quote</span>
                                                                </a>
                                                            </div>

                                                            <div class="banener-cta d-flex align-items-center">
                                                                <span>or</span>
                                                            </div>
                                                            <div class="banner-btn">
                                                                <a class="d-flex justify-content-center align-items-center"
                                                                    href="https://wa.me/6583332999" target="_blank"
                                                                    rel="noopener">
                                                                    <span><i class="fab fa-whatsapp"></i>
                                                                        WhatsApp</span>
                                                                </a>
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
            </div>

        </div>
    </div>
@endsection
