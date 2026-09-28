@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Pest Control Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional pest control services in Singapore to help businesses manage
    and prevent common pest concerns across commercial environments.')
@section('meta_keywords', 'pest control singapore, facility management, commercial pest control, preventive
    maintenance')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
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
                                    <section class="hotel-housekeeping-section">
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

                                                {{-- Card 4 --}}
                                                <div class="pest-card-item">
                                                    <h3>Why Pest Control Matters</h3>
                                                    <p>Pests can enter and thrive in areas where food, moisture, waste or
                                                        suitable hiding spaces are present. Regular monitoring and
                                                        appropriate pest management can help identify potential issues
                                                        early.<br><br>In commercial environments, pest management can also
                                                        form part of a broader facility maintenance programme alongside
                                                        routine cleaning and hygienic practices.</p>
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
                        <h2>A Coordinated Approach</h2>
                        <p>
                            Pest control works best alongside good cleaning and facility maintenance practices. Where
                            required, pest management works can be coordinated together with your existing cleaning
                            programme to further support the overall hygiene and upkeeping of your premises.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
