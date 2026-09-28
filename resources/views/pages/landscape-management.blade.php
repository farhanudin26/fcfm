@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Landscape Management Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional landscape management services in Singapore to keep outdoor
    spaces, lawns, and greenery neat, healthy, and well maintained.')
@section('meta_keywords', 'landscape management singapore, grounds maintenance, lawn care, plant pruning, commercial
    landscaping, facility upkeep')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2105)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2105-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2105" class="elementor elementor-2105">

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
                                        data-background="{{ asset('assets/img/header/landscape-management.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Landscape Management Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Landscape Management Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Landscape Management</span><br>
                                                <h2 class="hotel-title">Landscape Management Services</h2><br>
                                                <h3 class="hotel-subtitle">Keeping outdoor spaces neat, healthy and well
                                                    maintained.</h3><br>

                                                <h3
                                                    style="font-size: 22px; font-weight: 700; color: #111; margin-bottom: 15px;">
                                                    What is Landscape Management?</h3>

                                                <p class="hotel-description">
                                                    Landscape management involves the ongoing care and maintenance of
                                                    outdoor greenery and landscaped areas, such as keeping plants, lawns and
                                                    surrounding outdoor spaces tidy, healthy and presentable. These are part
                                                    of the overall upkeeping of a property.
                                                </p>
                                                <p class="hotel-description">
                                                    At FCFM, we offer landscape management services for commercial and
                                                    facility environments in Singapore, where our team provides support to
                                                    the routine care and upkeep of outdoor green spaces. This helps in
                                                    maintaining a welcoming and well-kept environment for your employees,
                                                    visitors and other users of the premises.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section 4 Single Cards (1 Card per Row): What Can Landscape Management Include? --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix_service_2"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-service-2" class="clenix-service-section-2">
                                        <div class="container">

                                            <div class="text-center mb-5">
                                                <h2 class="hotel-title" style="font-size: 28px;">What Can Landscape
                                                    Management Include?</h2>
                                            </div>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 20px 0 60px 0;
                                                }

                                                /* Layout Grid 1 Kolom (4 Single Rows) */
                                                .landscape-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(1, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                .landscape-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .landscape-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .landscape-card-item h3 {
                                                    font-size: 20px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .landscape-card-item p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Style wrapper penataan tengah penutup */
                                                .landscape-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .landscape-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .landscape-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Single Cards (4 Rows) --}}
                                            <div class="landscape-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="landscape-card-item">
                                                    <h3>Plant & Greenery Care</h3>
                                                    <p>Routine care to support the condition and appearance of plants and
                                                        landscaped greenery.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="landscape-card-item">
                                                    <h3>Grass & Lawn Maintenance</h3>
                                                    <p>Regular upkeep of lawn areas to maintain a neat and well-kept
                                                        appearance.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="landscape-card-item">
                                                    <h3>Pruning & Trimming</h3>
                                                    <p>Maintenance of suitable plants, shrubs and greenery to manage overall
                                                        growth and appearance.</p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="landscape-card-item">
                                                    <h3>General Landscape Upkeep</h3>
                                                    <p>Keeping landscaped areas tidy and maintaining overall presentation.
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
            {{-- Section Tambahan: Why Consider Regular Landscape Maintenance? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="landscape-bottom-wrapper">
                        <h2>Why Consider Regular Landscape Maintenance?</h2>
                        <p>
                            Landscaped areas are often one of the first things visitors tend to see when they approach a
                            property. Regular maintenance helps prevent overgrowth, keeps the outdoor spaces presentable and
                            helps contribute to a cleaner, more welcoming overall environment.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
