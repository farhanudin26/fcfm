@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Floor Scrubbing Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional floor scrubbing services in Singapore for commercial and
    facility environments, offering deeper cleaning for hard flooring surfaces.')
@section('meta_keywords', 'floor scrubbing singapore, commercial floor scrubbing, facility maintenance, deep floor
    cleaning, machine floor cleaning')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2104)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2104-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2104" class="elementor elementor-2104">

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
                                        data-background="{{ asset('assets/img/header/floor-scrubbing.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Floor Scrubbing Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Floor Scrubbing Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Floor Scrubbing</span><br>
                                                <h2 class="hotel-title">Floor Scrubbing Services</h2><br>
                                                <h3 class="hotel-subtitle">Deeper floor cleaning for cleaner, better
                                                    maintained spaces.</h3><br>

                                                <p class="hotel-description">
                                                    Floor scrubbing uses specialised cleaning equipment that can help
                                                    agitate and lift dirt from suitable hard flooring surfaces, and at the
                                                    same time, provides a more thorough cleaning than routine mopping. This
                                                    is particularly for larger or high-traffic areas where dirt can build up
                                                    over time.
                                                </p>
                                                <p class="hotel-description">
                                                    FCFM provides professional floor scrubbing services for commercial and
                                                    facility environments in Singapore, which can also form a part of a
                                                    broader facility maintenance care programme alongside the usual routine
                                                    cleaning, where regular mopping may not effectively address accumulated
                                                    dirt, grime and surface buildup.
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
                                                .floor-scrubbing-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(2, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 768px) {
                                                    .floor-scrubbing-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .floor-scrubbing-card {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .floor-scrubbing-card:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .floor-scrubbing-card h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .floor-scrubbing-card p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }
                                            </style>

                                            {{-- 4 Small Cards Grid (2x2) --}}
                                            <div class="floor-scrubbing-grid">

                                                {{-- Card 1 --}}
                                                <div class="floor-scrubbing-card">
                                                    <h3>Commercial & Office Areas</h3>
                                                    <p>For suitable hard flooring in workplaces, corridors and shared
                                                        spaces.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="floor-scrubbing-card">
                                                    <h3>High-Traffic Areas</h3>
                                                    <p>For areas that are exposed to frequent foot traffic such as
                                                        entrances, walkways and common areas.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="floor-scrubbing-card">
                                                    <h3>Institutional Facilities</h3>
                                                    <p>Larger floor areas that may require periodic machine cleaning as part
                                                        of the maintenance programme.</p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="floor-scrubbing-card">
                                                    <h3>Carparks & Back-of-House Areas</h3>
                                                    <p>Suitable hard surfaces where heavier dirt and grime may accumulate.
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

        </div>
    </div>
@endsection
