@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Anti-Microbial Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional anti-microbial treatment services in Singapore to provide
    additional protection for frequently used spaces and surfaces.')
@section('meta_keywords', 'anti microbial services singapore, surface protection, commercial hygiene treatment, facility
    management singapore, microbial protection')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
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
                                    <section class="hotel-housekeeping-section">
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
                                                </p>

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
        </div>
    </div>
@endsection
