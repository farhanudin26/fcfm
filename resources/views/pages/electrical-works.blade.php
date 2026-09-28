@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Electrical Works Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional electrical works services in Singapore for commercial and
    facility environments, supporting everyday electrical maintenance and repair needs.')
@section('meta_keywords', 'electrical works singapore, commercial electrical maintenance, facility electrical repairs,
    electrical installations, facility management singapore')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2109)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2109-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2109" class="elementor elementor-2109">

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
                                        data-background="{{ asset('assets/img/header/electrical-works.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Electrical Works Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Electrical Works Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Electrical Support</span><br>
                                                <h2 class="hotel-title">Electrical Works Services</h2><br>
                                                <h3 class="hotel-subtitle">Supporting the everyday electrical needs of your
                                                    facility.</h3><br>

                                                <p class="hotel-description">
                                                    Electrical work involves the installation, maintenance, repair or
                                                    replacement of electrical components and systems within a facility.
                                                    Depending on the site’s requirements, electrical support may be arranged
                                                    for both routine maintenance needs and specific electrical issues.
                                                </p>
                                                <p class="hotel-description">
                                                    At FCFM, we provide electrical works as part of our value-added facility
                                                    services in Singapore. Ranging from general electrical maintenance to
                                                    addressing site-specific requirements, we help businesses coordinate
                                                    suitable electrical support to keep their premises functional and well
                                                    maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section Small Cards: When Electrical Support May Be Needed --}}
                            <div class="elementor-element elementor-widget elementor-widget-clenfix_service_2"
                                data-element_type="widget">
                                <div class="elementor-widget-container">
                                    <section id="clenix-service-2" class="clenix-service-section-2">
                                        <div class="container">

                                            <div class="text-center mb-5">
                                                <h2 class="hotel-title" style="font-size: 28px;">When Electrical Support May
                                                    Be Needed</h2>
                                            </div>

                                            <style>
                                                .clenix-service-section-2 {
                                                    background-color: #fff;
                                                    padding: 20px 0 60px 0;
                                                }

                                                /* Grid Layout 2x2 untuk Small Cards */
                                                .electrical-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(2, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 768px) {
                                                    .electrical-cards-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .electrical-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .electrical-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .electrical-card-item h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .electrical-card-item p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Wrapper penataan tengah penutup */
                                                .electrical-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .electrical-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .electrical-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 4 Small Cards Grid (2x2) --}}
                                            <div class="electrical-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="electrical-card-item">
                                                    <h3>General Maintenance</h3>
                                                    <p>Support for electrical items that require routine attention,
                                                        replacement or maintenance.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="electrical-card-item">
                                                    <h3>Repairs & Rectifications</h3>
                                                    <p>Addressing of electrical issues identified within the premises.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="electrical-card-item">
                                                    <h3>Installations & Replacements</h3>
                                                    <p>Support for the installation or replacement of suitable electrical
                                                        fixtures and components.</p>
                                                </div>

                                                {{-- Card 4 --}}
                                                <div class="electrical-card-item">
                                                    <h3>Facility Upkeep</h3>
                                                    <p>Electrical support that complements the broader maintenance and
                                                        operational needs of a facility.</p>
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
            {{-- Section Tambahan: Why Should You Include Electrical Works in Facility Maintenance? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="electrical-bottom-wrapper">
                        <h2>Why Should You Include Electrical Works in Facility Maintenance?</h2>
                        <p>
                            Electrical issues can affect the functionality and daily operations of a workplace or facility.
                            Therefore, by having access to electrical support alongside other facility services, it allows
                            maintenance requirements to be addressed as part of the overall upkeeping of the premises.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
