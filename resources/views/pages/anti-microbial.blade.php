@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Anti-Microbial Services – Fresh Cleaning Facilities Management')
@section('meta_description',
    'FCFM provides professional anti-microbial treatment services in Singapore to provide
    additional protection for frequently used spaces and surfaces.')
@section('meta_keywords',
    'anti microbial services singapore, surface protection, commercial hygiene treatment, facility
    management singapore, microbial protection')
@section('body_class',
    'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2110)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2110-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2110" class="elementor elementor-2110">

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
                                        data-background="{{ asset('assets/img/header/anti-microbial.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Anti-Microbial Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Anti-Microbial Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section hotel-housekeeping-section--compact">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Hygiene Protection</span><br>
                                                <h2 class="hotel-title">Anti-Microbial Services</h2><br>
                                                <h3 class="hotel-subtitle">Additional protection for frequently used spaces
                                                    and surfaces.</h3><br>

                                                <p class="hotel-description">
                                                    Apart from routine cleaning, FCFM also provides anti-microbial treatment
                                                    services for commercial and facility environments in Singapore.
                                                    Anti-microbial treatments are applied to suitable surfaces and provide
                                                    an additional layer of hygiene support alongside regular cleaning and
                                                    disinfection practices.
                                                </p><br>

                                                <h3
                                                    style="font-size: 22px; font-weight: 700; color: #111; margin-top: 25px; margin-bottom: 15px;">
                                                    What is Anti-Microbial Treatment?</h3>

                                                <p class="hotel-description">
                                                    Anti-microbial treatment involves applying a suitable product to
                                                    surfaces, helping in inhibiting the growth or activity of
                                                    microorganisms. Depending on the product used, the treatment may provide
                                                    continued anti-microbial activity for a specified period following the
                                                    application.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section Small Cards: Where Can Anti-Microbial Treatment Be Applied? --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix_service_2"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-service-2" class="clenix-service-section-2">
                                        <div class="container">

                                            <div class="text-center mb-5">
                                                <h2 class="hotel-title" style="font-size: 28px;">Where Can Anti-Microbial
                                                    Treatment Be Applied?</h2>
                                            </div>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 20px 0 60px 0;
                                                }

                                                /* Grid Layout 2x2 untuk Small Cards */
                                                .antimicrobial-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(2, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 768px) {
                                                    .antimicrobial-cards-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .antimicrobial-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .antimicrobial-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .antimicrobial-card-item h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .antimicrobial-card-item p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Wrapper penataan tengah penutup */
                                                .antimicrobial-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .antimicrobial-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .antimicrobial-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Small Cards Grid (2x2) --}}
                                            <div class="antimicrobial-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="antimicrobial-card-item">
                                                    <h3>High-Touch Surfaces</h3>
                                                    <p>For frequently handled touchpoints such as door handles, switches,
                                                        handrails and other shared surfaces.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="antimicrobial-card-item">
                                                    <h3>Workspaces & Common Areas</h3>
                                                    <p>For additional hygiene support in shared and frequently used
                                                        environments.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="antimicrobial-card-item">
                                                    <h3>Frequently Used Facilities</h3>
                                                    <p>Suitable for areas that experience regular interaction and higher
                                                        levels of human activities.</p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="antimicrobial-card-item">
                                                    <h3>Selected Surfaces & Areas</h3>
                                                    <p>Treatment can be planned in accordance to site requirements and the
                                                        suitability of the surfaces involved.</p>
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
            {{-- Section Tambahan: What Is The Difference Between Disinfecting and Anti-Microbial Treatment? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="antimicrobial-bottom-wrapper">
                        <h2>What Is The Difference Between Disinfecting and Anti-Microbial Treatment?</h2>
                        <p>
                            Disinfecting is used to reduce microorganisms present on the surface at the time of treatment,
                            while certain anti-microbial treatments are designed to provide continued anti-microbial
                            activity after application. The appropriate approach will depend on the environment, surface and
                            hygiene requirements.
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
@include('partials.quote-modal')

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
