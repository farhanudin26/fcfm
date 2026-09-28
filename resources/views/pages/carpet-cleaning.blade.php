@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Carpet Cleaning Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional carpet cleaning services in Singapore for commercial and
    facility environments, helping remove accumulated dirt beyond routine vacuuming.')
@section('meta_keywords', 'carpet cleaning singapore, commercial carpet cleaning, deep carpet cleaning, carpet care,
    facility maintenance')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2108)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2108-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2108" class="elementor elementor-2108">

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
                                        data-background="{{ asset('assets/img/header/carpet-cleaning.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Carpet Cleaning Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Carpet Cleaning Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Carpet Care</span><br>
                                                <h2 class="hotel-title">Carpet Cleaning Services</h2><br>
                                                <h3 class="hotel-subtitle">A deeper clean for fresher, better-maintained
                                                    carpets.</h3><br>

                                                <p class="hotel-description">
                                                    Here at FCFM, we provide professional carpet cleaning services for
                                                    commercial and facility environments in Singapore to help remove
                                                    accumulated dirt and grime beyond routine vacuuming. These support
                                                    cleaner and better-maintained carpet spaces that help leave better
                                                    professional impressions on visitors of the premises.
                                                </p>
                                                <p class="hotel-description">
                                                    Carpet cleaning is a deep-cleaning process that is designed to remove
                                                    dirt and buildup trapped within carpet fibres. On the other hand,
                                                    regular vacuuming only helps in managing everyday dust and loose debris.
                                                    Periodic carpet cleaning actually provides a more thorough cleaning to
                                                    refresh the carpet’s overall appearance.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section Small Cards: Where It Can Be Used --}}
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

                                                /* Grid Layout 2x2 untuk Small Cards */
                                                .carpet-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(2, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 768px) {
                                                    .carpet-cards-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .carpet-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .carpet-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .carpet-card-item h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .carpet-card-item p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Wrapper penataan tengah penutup */
                                                .carpet-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .carpet-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .carpet-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Small Cards Grid (2x2) --}}
                                            <div class="carpet-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="carpet-card-item">
                                                    <h3>Office & Work Areas</h3>
                                                    <p>Periodic deep cleaning for carpeted workspaces that are exposed to
                                                        everyday foot traffic.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="carpet-card-item">
                                                    <h3>Meeting & Conference Rooms</h3>
                                                    <p>Maintenance of cleaner and more presentable carpeted spaces for
                                                        employees and visitors.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="carpet-card-item">
                                                    <h3>Reception & Common Areas</h3>
                                                    <p>Deep cleaning of carpeted spaces for frequently used and
                                                        client-facing areas.</p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="carpet-card-item">
                                                    <h3>Commercial & Institutional Spaces</h3>
                                                    <p>Periodic carpet care for larger carpeted areas as part of an overall
                                                        maintenance programme.</p>
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
            {{-- Section Tambahan: Why Is Periodic Carpet Cleaning Required? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="carpet-bottom-wrapper">
                        <h2>Why Is Periodic Carpet Cleaning Required?</h2>
                        <p>
                            Regular foot traffic can cause dirt and grime to become embedded within carpet fibres over time,
                            which routine vacuuming may not fully remove. Therefore, periodic deep cleaning of carpets helps
                            address this buildup and maintain the cleanliness as well as appearance of carpeted areas.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
