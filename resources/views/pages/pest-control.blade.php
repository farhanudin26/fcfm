@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Pest Control Services – Fresh Cleaning Facilities Management')
@section('meta_description',
    'FCFM provides professional pest control services in Singapore to help businesses manage
    and prevent common pest concerns across commercial environments.')
@section('meta_keywords',
    'pest control singapore, facility management, commercial pest control, preventive
    maintenance')
@section('body_class',
    'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2102)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2102-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2102" class="elementor elementor-2102">

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
                                        data-background="{{ asset('assets/img/header/pest-control.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Pest Control Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Pest Control Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Deskripsi & Header Halaman --}}
                                    <section class="hotel-housekeeping-section hotel-housekeeping-section--compact">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Pest Control</span><br>
                                                <h2 class="hotel-title">Pest Control Services</h2><br>
                                                <h3 class="hotel-subtitle">Maintaining a cleaner, safer and more hygienic
                                                    environment for you.</h3><br>

                                                <p class="hotel-description">
                                                    Pest issues, if found, are not something to be ignored. This is because
                                                    it can affect the workplace hygiene, comfort and overall condition of a
                                                    facility. Therefore, to help businesses manage and prevent common pest
                                                    concerns across commercial environments, FCFM provides professional pest
                                                    control services in Singapore.
                                                </p>
                                                <p class="hotel-description">
                                                    Our team will assess your site requirements and recommend an appropriate
                                                    pest management approach based on the environment itself, as well as
                                                    areas of concern.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section 4 Single Cards: When Pest Control May Be Needed --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix_service_2"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-service-2" class="clenix-service-section-2">
                                        <div class="container">

                                            <div class="text-center mb-5">
                                                <h2 class="hotel-title" style="font-size: 28px;">When Pest Control May Be
                                                    Needed</h2>
                                            </div>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 20px 0 60px 0;
                                                }

                                                .pest-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(1, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                .pest-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .pest-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .pest-card-item h3 {
                                                    font-size: 20px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .pest-card-item p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Style tambahan untuk merapikan section Coordinated Approach */
                                                .coordinated-approach-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .coordinated-approach-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .coordinated-approach-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Baris Cards (4 Rows) --}}
                                            <div class="pest-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="pest-card-item">
                                                    <h3>Signs of pest activity</h3>
                                                    <p>When there are pest presence and recurring occurrences observed
                                                        within the premises.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="pest-card-item">
                                                    <h3>Preventive Maintenance</h3>
                                                    <p>Periodic pest management can be conducted to reduce risk of pest
                                                        issues developing.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="pest-card-item">
                                                    <h3>High-risk Areas</h3>
                                                    <p>Additional attention for areas such as pantries, waste collection
                                                        points, storage areas and other pest-prone locations.</p>
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

            {{-- Section Tambahan: A Coordinated Approach (Ditengahkan & Dirapikan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="coordinated-approach-wrapper">
                        <h2>Why Pest Control Matters</h2>
                        <p>Pests can enter and thrive in areas where food, moisture, waste or
                            suitable hiding spaces are present. Regular monitoring and
                            appropriate pest management can help identify potential issues
                            early.<br><br>In commercial environments, pest management can also
                            form part of a broader facility maintenance programme alongside
                            routine cleaning and hygienic practices.</p>
                    </div>
                </div>
            </section>
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="coordinated-approach-wrapper">
                        <h2>A Coordinated Approach</h2>
                        <p>
                            Pest control works best alongside good cleaning and facility maintenance practices. Where
                            required, pest management works can be coordinated together with your existing cleaning
                            programme to further support the overall hygiene and upkeeping of your premises.
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

                                            <!-- Modal Get A Quote Form -->
                                            <!-- ganti form -->

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
