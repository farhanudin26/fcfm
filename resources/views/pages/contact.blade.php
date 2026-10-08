@extends('layouts.app')

@section('title', 'Contact – Fresh Cleaning Facilities Management')
@section('meta_description',
    'Get in touch with Fresh Cleaning Facilities Management. Contact us at 18 Sin Ming Lane,
    #06-26/27, Midview City, Singapore 573960, call +65 8333 2999, or email hello@fcfm.sg for a free quote.')
@section('meta_keywords',
    'contact fcfm, cleaning company contact singapore, get a quote cleaning services, fresh
    cleaning facilities management contact')
@section('body_class',
    'wp-singular page-template page-template-elementor_header_footer page page-id-429 wp-theme-clinox
    ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756
    elementor-page elementor-page-429')
@section('elementor_post_id', 429)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-429-css' href='{{ asset('assets/css/elementor/post-429.css') }}' media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="429" class="elementor elementor-429">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-cd2b296 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="cd2b296" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55f0e7f"
                        data-id="55f0e7f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7f53d3c elementor-widget elementor-widget-clenfix-breadcrumb"
                                data-id="7f53d3c" data-element_type="widget" data-widget_type="clenfix-breadcrumb.default">
                                <div class="elementor-widget-container">

                                    <section id="clenix-breadcrumb"
                                        data-background="{{ asset('assets/img/uploads/2025/10/img_8312-scaled.jpg') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">

                                                <h2>Contact</h2>

                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Contact</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-67ae871 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="67ae871" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c86c52"
                        data-id="8c86c52" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d42c3a7 elementor-widget elementor-widget-clenfix-booking-form"
                                data-id="d42c3a7" data-element_type="widget"
                                data-widget_type="clenfix-booking-form.default">
                                <div class="elementor-widget-container">

                                    <section id="clenix-booking-form"
                                        class="clenix-booking-form-section page-section-padding">
                                        <div class="container">
                                            <div class="booking-form-content">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="booking-form-img">
                                                            <div class="clenix-faq-img-wrap position-relative">
                                                                <span class="bg-shape position-absolute"></span>
                                                                <div class="faq-img1 bg-img-area">
                                                                    <img fetchpriority="high" decoding="async"
                                                                        width="2560" height="1920"
                                                                        src="{{ asset('assets/img/uploads/2025/10/img_8312-scaled.jpg') }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        srcset="{{ asset('assets/img/uploads/2025/10/img_8312-scaled.jpg') }} 2560w, {{ asset('assets/img/uploads/2025/10/img_8312-300x225.jpg') }} 300w, {{ asset('assets/img/uploads/2025/10/img_8312-1024x768.jpg') }} 1024w, {{ asset('assets/img/uploads/2025/10/img_8312-768x576.jpg') }} 768w, {{ asset('assets/img/uploads/2025/10/img_8312-1536x1152.jpg') }} 1536w, {{ asset('assets/img/uploads/2025/10/img_8312-2048x1536.jpg') }} 2048w"
                                                                        sizes="(max-width: 2560px) 100vw, 2560px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="clenix-contact-form-wrap">
                                                            <div class="clenix-section-title headline pera-content">
                                                                <span class="sub-title"></span>
                                                                <h2>Have Any <span>Question?</span></h2>
                                                            </div>

                                                            <div class="wpcf7" id="contact-form" lang="en-US"
                                                                dir="ltr">

                                                                {{-- NOTIFICATION: success / error / validation error --}}
                                                                @if (session('success'))
                                                                    <div class="alert alert-success alert-dismissible fade show contact-alert"
                                                                        role="alert">
                                                                        <strong>Success!</strong> {{ session('success') }}
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="alert" data-dismiss="alert"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                @endif

                                                                @if (session('error'))
                                                                    <div class="alert alert-danger alert-dismissible fade show contact-alert"
                                                                        role="alert">
                                                                        <strong>Failed!</strong> {{ session('error') }}
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="alert" data-dismiss="alert"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                @endif

                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger alert-dismissible fade show contact-alert"
                                                                        role="alert">
                                                                        <strong>Please check your input:</strong>
                                                                        <ul class="mb-0 mt-1">
                                                                            @foreach ($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="alert" data-dismiss="alert"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                @endif

                                                                <form id="contact-form-el" class="wpcf7-form"
                                                                    action="{{ route('contact.send') }}" method="POST"
                                                                    aria-label="Contact form">
                                                                    @csrf

                                                                    {{-- Honeypot anti-spam --}}
                                                                    <div style="position:absolute; left:-9999px;"
                                                                        aria-hidden="true">
                                                                        <input type="text" name="website"
                                                                            tabindex="-1" autocomplete="off">
                                                                    </div>

                                                                    <div class="clenix-contact-form">
                                                                        <div class="row">

                                                                            {{-- 1. Name --}}
                                                                            <div class="col-md-12">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-name">
                                                                                    <input size="40" maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-text @error('your-name') is-invalid @enderror"
                                                                                        aria-required="true"
                                                                                        placeholder="Name*"
                                                                                        value="{{ old('your-name') }}"
                                                                                        type="text" name="your-name"
                                                                                        required />
                                                                                </span>
                                                                                @error('your-name')
                                                                                    <small
                                                                                        class="text-danger d-block mb-2">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            {{-- 2. Phone --}}
                                                                            <div class="col-md-6">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-phone">
                                                                                    <input size="40" maxlength="50"
                                                                                        class="wpcf7-form-control wpcf7-text @error('your-phone') is-invalid @enderror"
                                                                                        placeholder="Phone"
                                                                                        value="{{ old('your-phone') }}"
                                                                                        type="text"
                                                                                        name="your-phone" />
                                                                                </span>
                                                                                @error('your-phone')
                                                                                    <small
                                                                                        class="text-danger d-block mb-2">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            {{-- 3. Email --}}
                                                                            <div class="col-md-6">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-email">
                                                                                    <input size="40" maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-email wpcf7-text @error('your-email') is-invalid @enderror"
                                                                                        aria-required="true"
                                                                                        placeholder="Email*"
                                                                                        value="{{ old('your-email') }}"
                                                                                        type="email" name="your-email"
                                                                                        required />
                                                                                </span>
                                                                                @error('your-email')
                                                                                    <small
                                                                                        class="text-danger d-block mb-2">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            {{-- 4. Subject --}}
                                                                            <div class="col-md-12">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-subject">
                                                                                    <input size="40" maxlength="400"
                                                                                        class="wpcf7-form-control wpcf7-text @error('your-subject') is-invalid @enderror"
                                                                                        placeholder="Subject"
                                                                                        value="{{ old('your-subject') }}"
                                                                                        type="text"
                                                                                        name="your-subject" />
                                                                                </span>
                                                                                @error('your-subject')
                                                                                    <small
                                                                                        class="text-danger d-block mb-2">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            {{-- 5. Message --}}
                                                                            <div class="col-md-12">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-message">
                                                                                    <textarea cols="40" rows="10" maxlength="2000"
                                                                                        class="wpcf7-form-control wpcf7-textarea @error('your-message') is-invalid @enderror" placeholder="Message"
                                                                                        name="your-message">{{ old('your-message') }}</textarea>
                                                                                </span>
                                                                                @error('your-message')
                                                                                    <small
                                                                                        class="text-danger d-block mb-2">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            {{-- Submit Button --}}
                                                                            <div class="col-md-12">
                                                                                <input
                                                                                    class="wpcf7-form-control wpcf7-submit"
                                                                                    id="contact-submit" type="submit"
                                                                                    value="Submit Now" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <script>
                                                                document.addEventListener('DOMContentLoaded', function() {
                                                                    var form = document.getElementById('contact-form-el');
                                                                    var btn = document.getElementById('contact-submit');
                                                                    var alertBox = document.querySelector('.contact-alert');

                                                                    if (form && btn) {
                                                                        form.addEventListener('submit', function() {
                                                                            btn.disabled = true;
                                                                            btn.value = 'Sending...';
                                                                        });
                                                                    }

                                                                    if (alertBox) {
                                                                        alertBox.scrollIntoView({
                                                                            behavior: 'smooth',
                                                                            block: 'center'
                                                                        });
                                                                    }

                                                                    var success = document.querySelector('.alert-success.contact-alert');
                                                                    if (success) {
                                                                        setTimeout(function() {
                                                                            success.style.transition = 'opacity .5s';
                                                                            success.style.opacity = '0';
                                                                            setTimeout(function() {
                                                                                success.remove();
                                                                            }, 500);
                                                                        }, 6000);
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="booking-form-cta-content">
                                                    <div class="clenix-section-title text-center headline pera-content">
                                                        <span class="sub-title"></span>
                                                        <h2>Fresh Cleaning Facilities Management Pte Ltd</h2>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <style>
                                                            .booking-cta-item {
                                                                display: flex;
                                                                align-items: center;
                                                                /* Rata tengah secara vertikal */
                                                                justify-content: center;
                                                                /* Rata tengah secara horizontal */
                                                                height: 100%;
                                                                /* Agar semua kotak memiliki tinggi yang seimbang */
                                                                padding: 25px 15px;
                                                                /* Memberikan ruang udara di dalam kotak */
                                                            }

                                                            /* Menghilangkan tag <br><br><br> kosong agar tidak merusak posisi tengah */
                                                            .inner-text br:last-child {
                                                                display: none;
                                                            }
                                                        </style>
                                                        <!-- BOX 1: Office Address -->
                                                        <div class="col-lg-4 col-md-6">
                                                            <div
                                                                class="booking-cta-item d-flex align-items-center justify-content-center">
                                                                <div class="inner-icon me-3">
                                                                    <img decoding="async" width="55" height="49"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic15.png') }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        style="filter: invert(34%) sepia(98%) saturate(2256%) hue-rotate(200deg) brightness(101%) contrast(103%);" />
                                                                </div>
                                                                <div class="inner-text headline">
                                                                    <h4>Office Address:</h4>
                                                                    18 Sin Ming Lane, <br>
                                                                    #06-26/27, Midview City, <br>
                                                                    Singapore 573960
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- BOX 2: E-mail Us -->
                                                        <div class="col-lg-4 col-md-6">
                                                            <div
                                                                class="booking-cta-item d-flex align-items-center justify-content-center">
                                                                <div class="inner-icon me-3">
                                                                    <img decoding="async" width="56" height="44"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic16.png') }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        style="filter: invert(34%) sepia(98%) saturate(2256%) hue-rotate(200deg) brightness(101%) contrast(103%);" />
                                                                </div>
                                                                <div class="inner-text headline">
                                                                    <h4>E-mail Us</h4>
                                                                    <span>hello@fcfm.sg</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- BOX 3: Telephone -->
                                                        <div class="col-lg-4 col-md-6">
                                                            <div
                                                                class="booking-cta-item d-flex align-items-center justify-content-center">
                                                                <div class="inner-icon me-3">
                                                                    <img decoding="async" width="45" height="45"
                                                                        src="{{ asset('assets/img/uploads/2022/05/ic17.png') }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        style="filter: invert(34%) sepia(98%) saturate(2256%) hue-rotate(200deg) brightness(101%) contrast(103%);" />
                                                                </div>
                                                                <div class="inner-text headline">
                                                                    <h4>Telephone</h4>
                                                                    <span>+65 8333 2999</span>
                                                                </div>
                                                            </div>
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
                </div>
            </section>
        </div>

    </div><!-- #content -->
@endsection
