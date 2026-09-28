@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Floor Polishing Services – Fresh Cleaning Facilities Management')
@section('meta_description', 'FCFM provides professional floor polishing services in Singapore for commercial and
    facility environments, restoring the shine and appearance of hard floors.')
@section('meta_keywords', 'floor polishing singapore, commercial floor polishing, facility floor care, floor
    restoration, hard floor maintenance')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page')
@section('elementor_post_id', 2106)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2106-css' href='{{ asset('assets/css/elementor/post-2101.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2106" class="elementor elementor-2106">

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
                                        data-background="{{ asset('assets/img/header/floor-polishing.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">
                                                <h2>Floor Polishing Services</h2>
                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Floor Polishing Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>

                                    {{-- Header & Deskripsi Halaman --}}
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">
                                            <div class="hotel-header">
                                                <span class="hotel-label">Floor Polishing</span><br>
                                                <h2 class="hotel-title">Floor Polishing Services</h2><br>
                                                <h3 class="hotel-subtitle">Restoring the shine and appearance of your
                                                    floors.</h3><br>

                                                <h3
                                                    style="font-size: 22px; font-weight: 700; color: #111; margin-bottom: 15px;">
                                                    What is Floor Polishing?</h3>

                                                <p class="hotel-description">
                                                    Floor polishing is a floor care process that is used to improve the
                                                    appearance and finish of a suitable hard flooring. Polishing can help to
                                                    reduce dull or worn appearance, restoring a smoother and more
                                                    presentable finish. This depends on the flooring condition and material,
                                                    which will be assessed by our professional team.
                                                </p>
                                                <p class="hotel-description">
                                                    At FCFM, we provide professional floor polishing services for commercial
                                                    and facility environments in Singapore. Our floor care solutions help in
                                                    restoring the appearance of suitable flooring, creating a cleaner, more
                                                    polished and well-maintained environment for employees, visitors and
                                                    users of the premises.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Section 3 Small Cards: Where It Can Be Used --}}
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

                                                /* Grid Layout 3 Kolom untuk 3 Tempat Penggunaan */
                                                .polishing-cards-grid {
                                                    display: grid;
                                                    grid-template-columns: repeat(3, 1fr);
                                                    gap: 20px;
                                                    max-width: 900px;
                                                    margin: 0 auto;
                                                }

                                                @media (max-width: 991px) {
                                                    .polishing-cards-grid {
                                                        grid-template-columns: repeat(1, 1fr);
                                                    }
                                                }

                                                .polishing-card-item {
                                                    background: #f9f9f9;
                                                    border: 1px solid #eee;
                                                    border-left: 5px solid #007bff;
                                                    padding: 25px;
                                                    border-radius: 8px;
                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
                                                    transition: all 0.3s ease;
                                                }

                                                .polishing-card-item:hover {
                                                    transform: translateY(-3px);
                                                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                                                    background: #fff;
                                                }

                                                .polishing-card-item h3 {
                                                    font-size: 18px;
                                                    font-weight: 700;
                                                    margin-bottom: 10px;
                                                    color: #222;
                                                }

                                                .polishing-card-item p {
                                                    font-size: 14px;
                                                    color: #555;
                                                    margin: 0;
                                                    line-height: 1.6;
                                                }

                                                /* Wrapper penataan tengah untuk Why Periodic Floor Polishing? */
                                                .polishing-bottom-wrapper {
                                                    max-width: 800px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                }

                                                .polishing-bottom-wrapper h2 {
                                                    font-size: 28px;
                                                    font-weight: 700;
                                                    color: #111;
                                                    margin-bottom: 15px;
                                                }

                                                .polishing-bottom-wrapper p {
                                                    font-size: 15px;
                                                    color: #555;
                                                    line-height: 1.7;
                                                    margin: 0 auto;
                                                }
                                            </style>

                                            {{-- 3 Individual Cards --}}
                                            <div class="polishing-cards-grid">

                                                {{-- Card 1 --}}
                                                <div class="polishing-card-item">
                                                    <h3>Office & Reception Areas</h3>
                                                    <p>For maintaining a polished and professional appearance in
                                                        client-facing and workplace spaces.</p>
                                                </div>

                                                {{-- Card 2 --}}
                                                <div class="polishing-card-item">
                                                    <h3>Lobbies & Entrances</h3>
                                                    <p>For refreshing of frequently used flooring to create a better-kept
                                                        first impression for visitors.</p>
                                                </div>

                                                {{-- Card 3 --}}
                                                <div class="polishing-card-item">
                                                    <h3>Corridors & Common Areas</h3>
                                                    <p>For improving the appearance of flooring that are exposed to regular
                                                        foot traffic.</p>
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
            {{-- Section Tambahan: Why Periodic Floor Polishing? (Ditengahkan) --}}
            <section class="clenix-service-section-2" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="container">
                    <div class="polishing-bottom-wrapper">
                        <h2>Why Periodic Floor Polishing?</h2>
                        <p>
                            Regular foot traffic and everyday use can gradually leave the flooring looking dull and worn.
                            Hence, in addition to the regular floor cleaning routine, periodic polishing actually helps in
                            refreshing the floor’s appearance and maintains a more presentable finish as part of an overall
                            floor maintenance programme.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
