@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Disinfecting Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional disinfecting services for commercial and facility environments
    in Singapore, providing additional hygiene support through targeted surface treatment.')
@section('meta_keywords', 'disinfecting services singapore, commercial disinfection, facility hygiene, surface
    treatment, high touchpoint cleaning')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2107)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2107-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2107" class="elementor elementor-2107">

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
                                        data-background="{{ asset('assets/img/header/disinfecting-cleaning.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Disinfecting Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Disinfecting Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Disinfecting</span><br>
                                                <h2 class="hotel-title">Disinfecting Services</h2><br>
                                                <h3 class="hotel-subtitle">Supporting cleaner and more hygienic
                                                    environments.</h3><br>

                                                <p class="hotel-description">
                                                    At FCFM, we provide professional disinfecting services for commercial
                                                    and facility environments in Singapore, where our services help to
                                                    provide additional hygiene support through targeted treatment of
                                                    suitable surfaces and areas. At the same time, these complement routine
                                                    cleaning to maintain a cleaner and hygienic environment.
                                                </p>

                                                <h3
                                                    style="font-size: 22px; font-weight: 700; color: #111; margin-top: 25px; margin-bottom: 15px;">
                                                    What is Disinfecting?</h3>

                                                <p class="hotel-description">
                                                    Disinfecting is a process that involves applying suitable disinfectant
                                                    products to surfaces to reduce harmful microorganisms that are not
                                                    visible to the naked eye. Unlike routine cleaning, which primarily
                                                    removes dirt and debris, disinfection on the other hand provides an
                                                    additional level of hygiene treatment beyond routine cleaning for areas
                                                    where greater attention to environmental cleanliness may be required.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section 4 Cards (Grid 2x2): Where It Can Be Used --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix_service_2"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-service-2" class="clenix-service-section-2">
                                        <div class="container">

                                            <div class="text-center mb-5">
                                                <h2 class="hotel-title" style="font-size: 28px;">Where It Can Be Used</h2>
                                            </div>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 20px 0 60px 0;
                                                }

                                                /* Grid Layout 2x2 untuk 4 Cards */
                                                .disinfecting-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(2, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 768px) {
                                                    .disinfecting-cards-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .disinfecting-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .disinfecting-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .disinfecting-card-item h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .disinfecting-card-item p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Style wrapper penataan tengah penutup */
                                                .disinfecting-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .disinfecting-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .disinfecting-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Cards Grid (2x2) --}}
                                            <div class="disinfecting-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="disinfecting-card-item">
                                                    <h3>High-Touch Surfaces</h3>
                                                    <p>Additional attention to frequently handled areas such as door
                                                        handles, switches, handrails, shared touchpoints and commonly used
                                                        equipment.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="disinfecting-card-item">
                                                    <h3>Workspaces & Common Areas</h3>
                                                    <p>Disinfection of shared spaces and frequently used areas within the
                                                        premises of a workplace.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="disinfecting-card-item">
                                                    <h3>Washrooms & High-Usage Areas</h3>
                                                    <p>Targeted treatment for areas where maintaining a high standard of
                                                        hygiene to reduce contamination on surfaces is especially important.
                                                    </p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="disinfecting-card-item">
                                                    <h3>Commercial & Institutional Facilities</h3>
                                                    <p>Disinfecting support provision based on the hygiene requirements and
                                                        usage of the facility.</p>
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
            {{-- Section Tambahan: When May Disinfecting Be Required? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="disinfecting-bottom-wrapper">
                        <h2>When May Disinfecting Be Required?</h2>
                        <p>
                            Disinfecting can complement regular cleaning when additional hygiene measures are required,
                            particularly in shared or high traffic environments. This may be arranged periodically,
                            following specific hygiene concerns and requirements, or as part of a broader cleaning and
                            facility maintenance programme.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
