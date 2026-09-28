@extends('layouts.app')

@section('title', 'Hotel Housekeeping Services – Fresh Cleaning Facilities Management')
@section('meta_description',
    'Professional hotel housekeeping services in Singapore by Fresh Cleaning Facilities
    Management. NEA Certified & BCA Registered, trusted by hotels across Singapore for reliable, high-quality
    housekeeping.')
@section('meta_keywords',
    'hotel housekeeping singapore, hotel cleaning services, hospitality cleaning, hotel room
    cleaning company')
@section('body_class',
    'wp-singular page-template page-template-elementor_header_footer page page-id-2100
    wp-theme-clinox ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width
    elementor-kit-1756 elementor-page elementor-page-2100')
@section('elementor_post_id', 2100)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2100-css' href='{{ asset('assets/css/elementor/post-2100.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2100" class="elementor elementor-2100">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-468508d elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="468508d" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-34bd759"
                        data-id="34bd759" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a30135a elementor-widget elementor-widget-clenfix-breadcrumb"
                                data-id="a30135a" data-element_type="widget" data-widget_type="clenfix-breadcrumb.default">
                                <div class="elementor-widget-container">

                                    <section id="clenix-breadcrumb"
                                        data-background="{{ asset('assets/img/header/hotel-housekeeping.png') }}"
                                        class="clenix-breadcrumb-section position-relative top-position">
                                        <div class="container">
                                            <div class="breadcrumb-content headline ul-li position-relative">

                                                <h2>Hotel Housekeeping Services</h2>

                                                <ul class="bread-crumb clearfix">
                                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home
                                                            &nbsp;</a></li>
                                                    <li class="breadcrumb-item">Hotel Housekeeping Services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="hotel-housekeeping-section">
                                        <div class="hotel-container">

                                            <div class="hotel-header">
                                                <span class="hotel-label">HOTEL HOUSEKEEPING SERVICES</span><br>

                                                <h2 class="hotel-title">
                                                    Hotel Housekeeping Services <br> in Singapore
                                                </h2><br>

                                                <h3 class="hotel-subtitle">
                                                    Creating Clean, Comfortable & Guest-Ready Spaces
                                                </h3><br>

                                                <p class="hotel-description">
                                                    In hospitality, the smallest details can shape a guest's experience. A
                                                    well-prepared room, fresh surroundings and consistently maintained
                                                    spaces all contribute to the impression and comfort that guests take
                                                    with them.
                                                </p>

                                                <p class="hotel-description">
                                                    Over here at <strong>Fresh Cleaning Facilities Management
                                                        (FCFM)</strong>, we provide professional <strong>hotel housekeeping
                                                        services in Singapore</strong>, supporting hospitality properties
                                                    with housekeeping manpower and cleaning solutions tailored to their
                                                    daily operations.
                                                </p>

                                                <p class="hotel-description">
                                                    From guest rooms to shared spaces, our housekeeping teams help maintain
                                                    clean, comfortable and welcoming environments throughout the guest
                                                    journey.
                                                </p>
                                            </div><br>


                                            <div class="hotel-facilities-section">

                                                <div class="hotel-section-heading">
                                                    <h2>Housekeeping Solutions for Hospitality Environments</h2>

                                                    <p>
                                                        Every hospitality property operates differently. Occupancy levels,
                                                        room turnover, property size and service requirements can all
                                                        influence the housekeeping support required. The hotel housekeeping
                                                        solutions we offer can support the following environments:
                                                    </p>
                                                </div>

                                                <div class="hotel-facilities-grid">

                                                    <div class="hotel-facility-card">
                                                        <div class="hotel-icon">
                                                            <i class="flaticon-plus"></i>
                                                        </div>
                                                        <h3>Hotels</h3>
                                                    </div>

                                                    <div class="hotel-facility-card">
                                                        <div class="hotel-icon">
                                                            <i class="flaticon-plus"></i>
                                                        </div>
                                                        <h3>Serviced Apartments</h3>
                                                    </div>

                                                    <div class="hotel-facility-card">
                                                        <div class="hotel-icon">
                                                            <i class="flaticon-plus"></i>
                                                        </div>
                                                        <h3>Hospitality Residences</h3>
                                                    </div>

                                                    <div class="hotel-facility-card">
                                                        <div class="hotel-icon">
                                                            <i class="flaticon-plus"></i>
                                                        </div>
                                                        <h3>Other Accommodation & Hospitality Properties</h3>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="hotel-coverage-section">

                                                <div class="hotel-section-heading">
                                                    <h2>Our Hotel Housekeeping Services</h2>

                                                    <p>
                                                        Depending on your property's requirements, our housekeeping scope
                                                        may include:
                                                    </p>
                                                </div>

                                                <div class="hotel-coverage-grid">

                                                    <div class="service-card">
                                                        <img src="{{ asset('assets/img/icon/guest-room.png') }}"
                                                            alt="Guest Room">
                                                        <h4>Guest Room Housekeeping</h4>
                                                        <p>Cleaning and preparation of guest rooms to maintain a clean,
                                                            comfortable and welcoming environment for arriving and staying
                                                            guests.</p>
                                                    </div>

                                                    <div class="service-card">
                                                        <img src="{{ asset('assets/img/icon/icon-washroom.png') }}"
                                                            alt="Bathroom Cleaning">
                                                        <h4>Bathroom Cleaning</h4>
                                                        <p>Cleaning and upkeep of guest bathrooms, fixtures and surfaces as
                                                            part of the room housekeeping process.</p>
                                                    </div>

                                                    <div class="service-card">
                                                        <img src="{{ asset('assets/img/icon/linen-care.png') }}"
                                                            alt="Linen Care">
                                                        <h4>Bed & Linen Care</h4>
                                                        <p>Bed making and linen replacement according to the agreed
                                                            housekeeping requirements and property procedures.</p>
                                                    </div>

                                                    <div class="service-card">
                                                        <img src="{{ asset('assets/img/icon/amenities.png') }}"
                                                            alt="Guest Amenities">
                                                        <h4>Guest Amenities</h4>
                                                        <p>Replenishment and arrangement of designated in-room amenities and
                                                            supplies to keep rooms prepared for guests.</p>
                                                    </div>

                                                    <div class="service-card">
                                                        <img src="{{ asset('assets/img/icon/common-area-resized.png') }}"
                                                            alt="Public & Common Areas">
                                                        <h4>Public & Common Areas</h4>
                                                        <p>Cleaning support for corridors, lift lobbies and other shared
                                                            areas to maintain cleanliness beyond the guest room.</p>
                                                    </div>

                                                    <div class="service-card">
                                                        <img src="{{ asset('assets/img/icon/housekeeping-manpower.png') }}"
                                                            alt="Housekeeping Manpower Support">
                                                        <h4>Housekeeping Manpower Support</h4>
                                                        <p>Housekeeping personnel can be deployed according to the
                                                            operational and manpower requirements of the property.</p>
                                                    </div>

                                                </div>

                                                <p class="hotel-frequency-text">
                                                    With these service supports in place, you can rest assured that your
                                                    guests will be welcomed with a guest-ready environment. As cleaning
                                                    requirements can change throughout the day depending on check-outs,
                                                    arrivals and occupancy levels, having the appropriate housekeeping
                                                    support will assist you in maintaining consistency while keeping rooms
                                                    ready for incoming guests.
                                                </p>

                                            </div>

                                            <div class="wide-card-wrapper">
                                                <div class="wide-card-content">
                                                    <h3 class="wide-card-title">More Than Guest Room Cleaning</h3>
                                                    <p class="wide-card-description">
                                                        The guest experience extends beyond the room.
                                                    </p>
                                                    <p class="wide-card-description">
                                                        FCFM can also provide additional cleaning and facilities support
                                                        solutions according to your property's requirements, including:
                                                    </p>
                                                    <ul class="hotel-value-list">
                                                        <li>Carpet cleaning</li>
                                                        <li>Floor care and polishing</li>
                                                        <li>Deep cleaning</li>
                                                        <li>Disinfection services</li>
                                                        <li>Pest control</li>
                                                        <li>Common area cleaning</li>
                                                        <li>Other specialised cleaning solutions</li>
                                                    </ul>

                                                    <a href="/pages/value-added-services" class="wide-card-link">
                                                        Explore Our Value-Added Services <span>→</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="commercial-cta">

                                                <h2><strong>Looking for Hotel Housekeeping Services in Singapore?</strong>
                                                </h2>

                                                <p>
                                                    Whether you require ongoing housekeeping manpower or a cleaning
                                                    arrangement tailored to your hospitality property, speak with FCFM about
                                                    your operational requirements.
                                                </p>
                                                <div class="cta-actions">

                                                    <a href="https://wa.me/6583332999" target="_blank"
                                                        rel="noopener noreferrer" class="whatsapp-cta-button">
                                                        <i class="flaticon-whatsapp"></i> WhatsApp us here! <span>→</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2e35008 elementor-widget elementor-widget-clenfix-how-work"
                                data-id="2e35008" data-element_type="widget" data-widget_type="clenfix-how-work.default">
                                <div class="elementor-widget-container">
                                    <section id="clenix-how-work" class="clenix-how-work-section">
                                        <div class="container">
                                            <div
                                                class="clenix-section-title-2 text-center headline pera-content pr-text-in">
                                                <h3 class="sub-title d-inline-block">
                                                    <span class="pr-text-in_item1">
                                                        <span class="pr-text-in_item2">
                                                            <span class="pr-text-in_item3">
                                                                <style>
                                                                    .clenix-how-work-section {
                                                                        background-color: #f9da00 !important;
                                                                    }

                                                                    /* CSS Tambahan untuk Hover Icon */
                                                                    .clenix-how-work-item .inner-icon {
                                                                        position: relative;
                                                                    }

                                                                    .clenix-how-work-item .inner-icon img {
                                                                        transition: opacity 0.3s ease;
                                                                    }

                                                                    .clenix-how-work-item .inner-icon .icon-hover {
                                                                        position: absolute;
                                                                        opacity: 0;
                                                                    }

                                                                    /* Saat kursor diarahkan ke item/layanan */
                                                                    .clenix-how-work-item:hover .inner-icon .icon-default {
                                                                        opacity: 0;
                                                                    }

                                                                    .clenix-how-work-item:hover .inner-icon .icon-hover {
                                                                        opacity: 1;
                                                                    }
                                                                </style>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </h3>
                                                <h2>
                                                    <span class="pr-text-in_item1">
                                                        <span class="pr-text-in_item2">
                                                            <span class="pr-text-in_item3">
                                                                OUR SERVICE PROCESS
                                                            </span>
                                                        </span>
                                                    </span>
                                                </h2>
                                            </div>
                                            <div class="clenix-how-work-content position-relative">
                                                <span class="line-shape position-absolute">
                                                    <img fetchpriority="high" decoding="async" width="1196"
                                                        height="121"
                                                        src="{{ asset('assets/img/uploads/2022/05/line-sh2.png') }}"
                                                        class="attachment-full size-full" alt=""
                                                        srcset="{{ asset('assets/img/uploads/2022/05/line-sh2.png') }} 1196w, {{ asset('assets/img/uploads/2022/05/line-sh2-300x30.png') }} 300w, {{ asset('assets/img/uploads/2022/05/line-sh2-1024x104.png') }} 1024w, {{ asset('assets/img/uploads/2022/05/line-sh2-768x78.png') }} 768w"
                                                        sizes="(max-width: 1196px) 100vw, 1196px" />
                                                </span>
                                                <div class="row justify-content-center">

                                                    <!-- Item 01 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="clenix-how-work-item text-center position-relative">
                                                            <span
                                                                class="serial d-flex justify-content-center align-items-center position-absolute">01</span>
                                                            <div
                                                                class="inner-icon position-relative d-flex justify-content-center align-items-center">
                                                                <img decoding="async" width="51" height="50"
                                                                    src="{{ asset('assets/img/icon/service-needs-orange.png') }}"
                                                                    class="attachment-full size-full icon-default"
                                                                    alt="Site Assessment" />
                                                                <img decoding="async" width="51" height="50"
                                                                    src="{{ asset('assets/img/icon/service-needs-white.png') }}"
                                                                    class="attachment-full size-full icon-hover"
                                                                    alt="Site Assessment" />
                                                            </div>
                                                            <div class="inner-text headline pera-content">
                                                                <h3>Tell Us Your Needs</h3>
                                                                <p>Share your site requirements, cleaning needs and
                                                                    operational considerations with us</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item 02 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="clenix-how-work-item text-center position-relative">
                                                            <span
                                                                class="serial d-flex justify-content-center align-items-center position-absolute">02</span>
                                                            <div
                                                                class="inner-icon position-relative d-flex justify-content-center align-items-center">
                                                                <img decoding="async" width="46" height="50"
                                                                    src="{{ asset('assets/img/icon/site-assessment-orange.png') }}"
                                                                    class="attachment-full size-full icon-default"
                                                                    alt="Site Assessment" />
                                                                <img decoding="async" width="46" height="50"
                                                                    src="{{ asset('assets/img/icon/site-assessment-white.png') }}"
                                                                    class="attachment-full size-full icon-hover"
                                                                    alt="Site Assessment" />
                                                            </div>
                                                            <div class="inner-text headline pera-content">
                                                                <h3>Site Assessment & Planning</h3>
                                                                <p>We assess your requirements and plan the appropriate work
                                                                    scope, manpower and service arrangements</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item 03 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="clenix-how-work-item text-center position-relative">
                                                            <span
                                                                class="serial d-flex justify-content-center align-items-center position-absolute">03</span>
                                                            <div
                                                                class="inner-icon position-relative d-flex justify-content-center align-items-center">
                                                                <img decoding="async" width="50" height="50"
                                                                    src="{{ asset('assets/img/icon/service-implementation-orange.png') }}"
                                                                    class="attachment-full size-full icon-default"
                                                                    alt="Service Implementation" />
                                                                <img decoding="async" width="50" height="50"
                                                                    src="{{ asset('assets/img/icon/service-implementation-white.png') }}"
                                                                    class="attachment-full size-full icon-hover"
                                                                    alt="Service Implementation" />
                                                            </div>
                                                            <div class="inner-text headline pera-content">
                                                                <h3>Service Implementation</h3>
                                                                <p>Our team carries out the agreed service plan, with
                                                                    ongoing support where required.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-a30f7ee elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="a30f7ee" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab8725b"
                                        data-id="ab8725b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-45dc489 elementor-widget elementor-widget-clenfix-prono"
                                                data-id="45dc489" data-element_type="widget"
                                                data_widget_type="clenfix-prono.default">
                                                <div class="elementor-widget-container">

                                                    <section id="clenix-promo"
                                                        class="clenix-promo-section position-relative"
                                                        style="
        background-image: url('{{ asset('assets/img/uploads/2025/10/fcfm-about-speak-with-us-bg-scaled.jpg') }}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 80% auto;
    ">
                                                        <div class="banner-shape position-absolute">
                                                        </div>

                                                        <div class="container">
                                                            <div class="clenix-promo-content position-relative">

                                                                <div
                                                                    class="clenix-section-title headline pera-content pr-text-in">
                                                                    <h3 class="sub-title d-inline-block">
                                                                        <span class="pr-text-in_item1">
                                                                            <span class="pr-text-in_item2">
                                                                                <span class="pr-text-in_item3">
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </h3>

                                                                    <h2>
                                                                        <span class="pr-text-in_item1">
                                                                            <span class="pr-text-in_item2">
                                                                                <span class="pr-text-in_item3">
                                                                                    Building better spaces starts
                                                                                    with a conversation.
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </h2>
                                                                    <p>Tell us about your facility & space, your
                                                                        challenges and what you
                                                                        need.
                                                                        We’ll take it from there.
                                                                    </p>
                                                                </div>

                                                                <div class="banner-btn-wrapper d-flex align-items-center">

                                                                    <!-- Tombol Membuka Modal -->
                                                                    <div class="banner-btn">
                                                                        <a class="d-flex justify-content-center align-items-center"
                                                                            href="#quoteModal" data-bs-toggle="modal"
                                                                            data-bs-target="#quoteModal">
                                                                            <span>Get A Quote</span>
                                                                        </a>
                                                                    </div>

                                                                    <div class="banener-cta d-flex align-items-center">
                                                                        <span>or</span>
                                                                    </div>
                                                                    <div class="banner-btn">
                                                                        <a class="d-flex justify-content-center align-items-center "
                                                                            href="https://wa.me/6583332999"
                                                                            target="_blank" rel="noopener">
                                                                            <span><i class="fab fa-whatsapp"></i>
                                                                                WhatsApp</span>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <!-- Modal Get A Quote Form -->
                                                    <div class="modal fade" id="quoteModal" tabindex="-1"
                                                        aria-labelledby="quoteModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content text-start">
                                                                <div class="modal-header bg-warning text-dark">
                                                                    <h5 class="modal-title fw-bold" id="quoteModalLabel">
                                                                        Get A Quote</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <form action="#" method="POST" id="quoteForm">
                                                                        @csrf

                                                                        <!-- Company Information -->
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="company_name"
                                                                                    class="form-label font-weight-bold">Name
                                                                                    of Company *</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="company_name" name="company_name"
                                                                                    required placeholder="e.g. Acme Corp">
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="facility_type"
                                                                                    class="form-label font-weight-bold">Type
                                                                                    of Facility *</label>
                                                                                <select class="form-select form-control"
                                                                                    id="facility_type"
                                                                                    name="facility_type" required>
                                                                                    <option value="" selected
                                                                                        disabled>Select Facility
                                                                                        Type</option>
                                                                                    <option value="Office">Office
                                                                                    </option>
                                                                                    <option value="Warehouse / Industrial">
                                                                                        Warehouse / Industrial
                                                                                    </option>
                                                                                    <option
                                                                                        value="School / Institution / Childcare">
                                                                                        School / Institution /
                                                                                        Childcare</option>
                                                                                    <option value="Church">Church
                                                                                    </option>
                                                                                    <option
                                                                                        value="Hospital / Clinic / Dental / Nursing Home / Care Facility">
                                                                                        Hospital / Clinic / Dental /
                                                                                        Nursing Home / Care Facility
                                                                                    </option>
                                                                                    <option value="F&B">F&B
                                                                                    </option>
                                                                                    <option value="Studio / Gym">
                                                                                        Studio / Gym</option>
                                                                                    <option
                                                                                        value="Condominium / Apartment Complex">
                                                                                        Condominium / Apartment
                                                                                        Complex</option>
                                                                                    <option value="Retail">Retail
                                                                                    </option>
                                                                                    <option value="Shopping Mall">
                                                                                        Shopping Mall</option>
                                                                                    <option value="Hotel">Hotel
                                                                                    </option>
                                                                                    <option value="Others">Others
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="company_address"
                                                                                class="form-label font-weight-bold">Address
                                                                                of Company *</label>
                                                                            <textarea class="form-control" id="company_address" name="company_address" rows="2" required
                                                                                placeholder="Full company address"></textarea>
                                                                        </div>

                                                                        <hr class="my-4">

                                                                        <!-- Representative Information -->
                                                                        <div class="row">
                                                                            <div class="col-md-4 mb-3">
                                                                                <label for="representative_name"
                                                                                    class="form-label font-weight-bold">Name
                                                                                    of Representative *</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="representative_name"
                                                                                    name="representative_name" required
                                                                                    placeholder="John Doe">
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <label for="contact_number"
                                                                                    class="form-label font-weight-bold">Contact
                                                                                    Number *</label>
                                                                                <input type="tel" class="form-control"
                                                                                    id="contact_number"
                                                                                    name="contact_number" required
                                                                                    placeholder="+65 xxxx xxxx">
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <label for="email_address"
                                                                                    class="form-label font-weight-bold">E-mail
                                                                                    Address *</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="email_address"
                                                                                    name="email_address" required
                                                                                    placeholder="name@company.com">
                                                                            </div>
                                                                        </div>

                                                                        <hr class="my-4">

                                                                        <!-- Service Details -->
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="start_date"
                                                                                    class="form-label font-weight-bold">Estimated
                                                                                    Start Date *</label>
                                                                                <input type="date" class="form-control"
                                                                                    id="start_date" name="start_date"
                                                                                    required>
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="estimated_budget"
                                                                                    class="form-label font-weight-bold">Estimated
                                                                                    Budget per month</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="estimated_budget"
                                                                                    name="estimated_budget"
                                                                                    placeholder="e.g. $1,500">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="cleaning_days_per_week"
                                                                                    class="form-label font-weight-bold">No.
                                                                                    of cleaning days required per
                                                                                    week *</label>
                                                                                <input type="number" class="form-control"
                                                                                    id="cleaning_days_per_week"
                                                                                    name="cleaning_days_per_week"
                                                                                    min="1" max="7" required
                                                                                    placeholder="e.g. 5">
                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="hours_per_session"
                                                                                    class="form-label font-weight-bold">No.
                                                                                    of hours per cleaning session
                                                                                    *</label>
                                                                                <input type="number" step="0.5"
                                                                                    class="form-control"
                                                                                    id="hours_per_session"
                                                                                    name="hours_per_session"
                                                                                    min="0.5" required
                                                                                    placeholder="e.g. 3">
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="special_requirements"
                                                                                class="form-label font-weight-bold">Any
                                                                                other special requirements</label>
                                                                            <textarea class="form-control" id="special_requirements" name="special_requirements" rows="3"
                                                                                placeholder="Tell us if you need specific equipment, eco-friendly products, etc."></textarea>
                                                                        </div>

                                                                        <div class="text-end mt-4">
                                                                            <button type="button"
                                                                                class="btn btn-secondary me-2"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-warning font-weight-bold px-4">Submit
                                                                                Request</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
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
