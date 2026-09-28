@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'High Pressure Jet Washing Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional high pressure jetwashing services in Singapore to remove
    stubborn dirt, grime, and buildup from outdoor and hard-surface areas.')
@section('meta_keywords', 'high pressure jetwashing singapore, jetwash service, commercial jet washing, facility
    maintenance, outdoor surface cleaning')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
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
                                    <section class="hotel-housekeeping-section">
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
                                                <p class="hotel-description">
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

                                            <div class="text-center mb-5">
                                                <h2 class="hotel-title" style="font-size: 28px;">Where It Can Be Used</h2>
                                            </div>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 20px 0 60px 0;
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
                        <h2>Why Periodic Jetwashing?</h2>
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
        </div>
    </div>
@endsection
