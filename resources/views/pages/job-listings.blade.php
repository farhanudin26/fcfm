@extends('layouts.app')

@section('title', 'Job Listings – Fresh Cleaning Facilities Management')
@section('meta_description',
    'Explore current job openings at Fresh Cleaning Facilities Management. Join our team
    offering daily and monthly cleaning services across Singapore.')
@section('meta_keywords',
    'job listings fcfm, cleaning company jobs singapore, career opportunities, cleaning jobs
    vacancy')
@section('body_class',
    'wp-singular page-template page-template-elementor_header_footer page page-id-2337
    wp-theme-clinox ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width
    elementor-kit-1756 elementor-page elementor-page-2337')
@section('elementor_post_id', 2337)

@push('elementor-post-css')
    <link rel='stylesheet' id='widget-heading-css' href='{{ asset('assets/css/elementor-widget-heading.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2337-css' href='{{ asset('assets/css/elementor/post-2337.css') }}'
        media='all' />
@endpush

@section('content')
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="2337" class="elementor elementor-2337">
            <div class="elementor-element elementor-element-2bf3530 e-flex e-con-boxed e-con e-parent" data-id="2bf3530"
                data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-1c6ab72 elementor-widget elementor-widget-clenfix-breadcrumb"
                        data-id="1c6ab72" data-element_type="widget" data-widget_type="clenfix-breadcrumb.default">
                        <div class="elementor-widget-container">

                            <section id="clenix-breadcrumb"
                                data-background="{{ asset('assets/img/uploads/2025/10/whatsapp-image-2025-02-28-at-11.43.00-1-e1763974212695.jpeg') }}"
                                class="clenix-breadcrumb-section position-relative top-position">
                                <div class="container">
                                    <div class="breadcrumb-content headline ul-li position-relative">

                                        <h2>Career</h2>

                                        <ul class="bread-crumb clearfix">
                                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home &nbsp;</a></li>
                                            <li class="breadcrumb-item">Job Listings</li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Style CSS Tambahan -->
            <style>
                /* Mengatur padding section agar proporsional */
                .fcfm-join-section {
                    padding: 60px 0 40px 0;
                    /* Mengurangi ruang kosong atas & bawah */
                    background-color: #ffffff;
                }

                .fcfm-join-container {
                    text-align: center;
                    max-width: 750px;
                    /* Membatasi lebar teks agar nyaman dibaca */
                    margin: 0 auto;
                }

                /* Styling Judul Utamanya */
                .fcfm-join-heading {
                    font-size: 36px;
                    font-weight: 700;
                    color: #1a1a1a;
                    margin-bottom: 15px;
                    position: relative;
                    display: inline-block;
                }

                /* Garis Aksen di Bawah Judul */
                .fcfm-join-heading::after {
                    content: '';
                    display: block;
                    width: 60px;
                    height: 3px;
                    background-color: #007bff;
                    /* Warna biru aksen */
                    margin: 12px auto 0 auto;
                    border-radius: 2px;
                }

                /* Styling Paragraf Deskripsi */
                .fcfm-join-subtext {
                    font-size: 16px;
                    line-height: 1.6;
                    color: #555555;
                    margin-top: 15px;
                }
            </style>

            <!-- HTML Structure -->
            <section class="fcfm-join-section">
                <div class="container">
                    <div class="elementor-element elementor-element-67b7e30 e-flex e-con-boxed e-con e-parent"
                        data-id="67b7e30" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-601c26b elementor-widget elementor-widget-heading fcfm-join-container"
                                data-id="601c26b" data-element_type="widget" data-widget_type="heading.default">

                                <h2 class="elementor-heading-title elementor-size-default fcfm-join-heading">
                                    Explore Our Roles
                                </h2>

                                <p class="fcfm-join-subtext">
                                    Curious about working with us? Here’s a glimpse of what your day may look like in some
                                    of our roles at FCFM.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Style CSS Custom -->
            <style>
                /* Layout Grid Kartu */
                .clenix-service-feature-content .row {
                    display: flex;
                    flex-wrap: wrap;
                }

                .clenix-service-feature-content .row>[class*='col-'] {
                    display: flex;
                    flex-direction: column;
                    margin-bottom: 30px;
                }

                /* Styling Kartu Ringkas */
                .role-card-item {
                    background: #2b88d8;
                    /* Warna biru sesuai gambar Anda */
                    color: #ffffff;
                    border-radius: 12px;
                    padding: 30px;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    cursor: pointer;
                    transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
                    position: relative;
                    overflow: hidden;
                }

                .role-card-item:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                    background: #2175be;
                }

                .role-card-title {
                    font-size: 24px;
                    font-weight: 700;
                    margin-bottom: 20px;
                    color: #ffffff;
                }

                .role-meta-group {
                    margin-bottom: 12px;
                    font-size: 15px;
                    line-height: 1.5;
                }

                .role-meta-label {
                    font-weight: 700;
                    display: block;
                    margin-bottom: 3px;
                    color: #ffffff;
                }

                .role-meta-value {
                    margin: 0;
                    opacity: 0.95;
                }

                /* Tautan Pemicu Pop-up di Bagian Bawah Kartu */
                .role-click-trigger {
                    margin-top: 20px;
                    padding-top: 15px;
                    border-top: 1px solid rgba(255, 255, 255, 0.25);
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    font-size: 14px;
                    font-weight: 600;
                    color: #ffffff;
                }

                .role-click-trigger i {
                    font-size: 16px;
                    transition: transform 0.2s ease;
                }

                .role-card-item:hover .role-click-trigger i {
                    transform: translateX(5px);
                }

                /* =======================================
                   STYLING POP-UP MODAL
                ======================================= */
                .role-modal-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.65);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 99999;
                    opacity: 0;
                    visibility: hidden;
                    transition: all 0.3s ease;
                    padding: 20px;
                }

                .role-modal-overlay.active {
                    opacity: 1;
                    visibility: visible;
                }

                .role-modal-container {
                    background: #ffffff;
                    color: #333333;
                    width: 100%;
                    max-width: 650px;
                    max-height: 85vh;
                    border-radius: 16px;
                    overflow-y: auto;
                    padding: 30px;
                    position: relative;
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
                    transform: scale(0.85);
                    transition: transform 0.3s ease;
                }

                .role-modal-overlay.active .role-modal-container {
                    transform: scale(1);
                }

                .role-modal-close {
                    position: absolute;
                    top: 20px;
                    right: 20px;
                    background: #f1f3f5;
                    border: none;
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    font-size: 20px;
                    font-weight: bold;
                    color: #555;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: background 0.2s;
                }

                .role-modal-close:hover {
                    background: #e2e6ea;
                    color: #000;
                }

                .role-modal-title {
                    font-size: 26px;
                    font-weight: 700;
                    color: #1a1a1a;
                    margin-bottom: 5px;
                }

                .role-modal-subtitle {
                    font-size: 15px;
                    color: #666666;
                    margin-bottom: 20px;
                    font-style: italic;
                }

                /* List Poin Pekerjaan (Ceklis Modal) */
                .role-modal-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                }

                .role-modal-list li {
                    position: relative;
                    padding-left: 32px;
                    margin-bottom: 12px;
                    font-size: 15px;
                    line-height: 1.6;
                    color: #444444;
                }

                /* Ikon Ceklis */
                .role-modal-list li::before {
                    content: '✓';
                    position: absolute;
                    left: 0;
                    top: 2px;
                    width: 22px;
                    height: 22px;
                    background-color: #2b88d8;
                    color: #ffffff;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 12px;
                    font-weight: bold;
                }
            </style>

            <!-- Structure HTML Utama -->
            <section id="clenix-service-feature" class="clenix-service-feature-section">
                <div class="container">
                    <div class="clenix-service-feature-content">
                        <div class="row">

                            <!-- KARTU 1: Team Lead / Supervisor -->
                            <div class="col-lg-6">
                                <div class="role-card-item" onclick="openRoleModal('modal-team-lead')">
                                    <div>
                                        <h3 class="role-card-title">Team Lead / Supervisor</h3>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">General Work Location:</span>
                                            <p class="role-meta-value">Islandwide / Based on assigned site</p>
                                        </div><br>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">Employment Type:</span>
                                            <p class="role-meta-value">Full-Time</p>
                                        </div>
                                    </div>

                                    <div class="role-click-trigger">
                                        <span>Here's What Your Day May Look Like</span>
                                        <i>➔</i>
                                    </div>
                                </div>
                            </div>

                            <!-- KARTU 2: Cleaning Specialist -->
                            <div class="col-lg-6">
                                <div class="role-card-item" onclick="openRoleModal('modal-cleaning-specialist')">
                                    <div>
                                        <h3 class="role-card-title">Cleaning Specialist</h3>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">General Work Location:</span>
                                            <p class="role-meta-value">Islandwide / Based on assigned site</p>
                                        </div><br>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">Employment Type:</span>
                                            <p class="role-meta-value">Full-Time / Part-Time</p>
                                        </div>
                                    </div>

                                    <div class="role-click-trigger">
                                        <span>Here's What Your Day May Look Like</span>
                                        <i>➔</i>
                                    </div>
                                </div>
                            </div>

                            <!-- KARTU 3: Operations Manager -->
                            <div class="col-lg-6">
                                <div class="role-card-item" onclick="openRoleModal('modal-operations-manager')">
                                    <div>
                                        <h3 class="role-card-title">Operations Manager</h3>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">General Work Location:</span>
                                            <p class="role-meta-value">HQ Office & dropping by various jobsites</p>
                                        </div><br>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">Employment Type:</span>
                                            <p class="role-meta-value">Full-Time</p>
                                        </div><br>
                                        <div class="role-meta-group">
                                            <span class="role-meta-label">Suitable For:</span>
                                            <p class="role-meta-value">Individuals with experience in operations, cleaning,
                                                facilities management or manpower coordination, and who are comfortable
                                                managing people, clients and multiple priorities.</p>
                                        </div>
                                    </div>

                                    <div class="role-click-trigger">
                                        <span>Here's What Your Day May Look Like</span>
                                        <i>➔</i>
                                    </div>
                                </div>
                            </div>

                            <!-- KARTU 4: HR Assistant -->
                            <div class="col-lg-6">
                                <div class="role-card-item" onclick="openRoleModal('modal-hr-assistant')">
                                    <div>
                                        <h3 class="role-card-title">HR Assistant</h3>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">General Work Location:</span>
                                            <p class="role-meta-value">HQ Office</p>
                                        </div><br>

                                        <div class="role-meta-group">
                                            <span class="role-meta-label">Employment Type:</span>
                                            <p class="role-meta-value">Full-Time</p>
                                        </div><br>
                                        <div class="role-meta-group">
                                            <span class="role-meta-label">Suitable For:</span>
                                            <p class="role-meta-value">Someone organised, responsible and comfortable
                                                communicating with different people. HR or administrative experience is
                                                helpful, but willingness to learn and attention to detail are equally
                                                important.</p>
                                        </div>
                                    </div>

                                    <div class="role-click-trigger">
                                        <span>Here's What Your Day May Look Like</span>
                                        <i>➔</i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <!-- =========================================================
                 KONTEN POP-UP MODAL (TERSEMBUNYI, TAMPIL SAAT DIKLIK)
            ========================================================= -->

            <!-- Modal 1: Team Lead -->
            <div id="modal-team-lead" class="role-modal-overlay" onclick="closeOnOverlay(event, 'modal-team-lead')">
                <div class="role-modal-container">
                    <button class="role-modal-close" onclick="closeRoleModal('modal-team-lead')">&times;</button>
                    <h3 class="role-modal-title">Team Lead / Supervisor</h3>
                    <p class="role-modal-subtitle">What your day may look like..</p>
                    <ul class="role-modal-list">
                        <li>Coordinating and assigning daily cleaning duties</li>
                        <li>Checking that cleaning standards and site requirements are met</li>
                        <li>Guiding, supporting and training team members where needed</li>
                        <li>Helping new employees understand their assigned duties and site routines</li>
                        <li>Monitoring attendance and highlighting manpower shortages or operational issues</li>
                        <li>Checking cleaning supplies and equipment and arranging replenishment when required</li>
                        <li>Reporting maintenance, equipment or site issues to the relevant team</li>
                        <li>Communicating with Operations and clients on day-to-day site matters</li>
                        <li>Supporting cleaning duties when additional assistance is required</li>
                        <li>Ensuring the team follows company procedures, safety requirements and site guidelines</li>
                    </ul>
                </div>
            </div>

            <!-- Modal 2: Cleaning Specialist -->
            <div id="modal-cleaning-specialist" class="role-modal-overlay"
                onclick="closeOnOverlay(event, 'modal-cleaning-specialist')">
                <div class="role-modal-container">
                    <button class="role-modal-close"
                        onclick="closeRoleModal('modal-cleaning-specialist')">&times;</button>
                    <h3 class="role-modal-title">Cleaning Specialist</h3>
                    <p class="role-modal-subtitle">What your day may look like…</p>
                    <ul class="role-modal-list">
                        <li>Starting your day by preparing the tools and supplies needed for your assigned area</li>
                        <li>Keeping work areas, washrooms and common spaces clean, comfortable and presentable</li>
                        <li>Replenishing cleaning supplies and ensuring essential items are available</li>
                        <li>Taking care of your assigned area independently or working alongside a team, depending on the
                            site</li>
                        <li>Keeping an eye out for maintenance or site issues and reporting them when needed</li>
                        <li>Learning different cleaning methods, equipment and site requirements as you gain experience</li>
                    </ul>
                </div>
            </div>

            <!-- Modal 3: Operations Manager -->
            <div id="modal-operations-manager" class="role-modal-overlay"
                onclick="closeOnOverlay(event, 'modal-operations-manager')">
                <div class="role-modal-container">
                    <button class="role-modal-close" onclick="closeRoleModal('modal-operations-manager')">&times;</button>
                    <h3 class="role-modal-title">Operations Manager</h3>
                    <p class="role-modal-subtitle">What your day may look like…</p>
                    <ul class="role-modal-list">
                        <li>Planning and coordinating manpower deployment across assigned sites</li>
                        <li>Checking staffing levels, attendance and operational coverage</li>
                        <li>Visiting sites to review cleaning standards and overall performance</li>
                        <li>Guiding and supporting Team Leads and Supervisors</li>
                        <li>Following up on manpower shortages, urgent replacements and operational issues</li>
                        <li>Communicating with clients on service requirements, feedback and site matters</li>
                        <li>Coordinating with HR on recruitment, attendance, employee matters and manpower needs</li>
                        <li>Monitoring cleaning equipment, supplies and site requirements</li>
                        <li>Handling escalated issues and working with the relevant teams to find practical solutions</li>
                        <li>Supporting the onboarding and deployment of new employees</li>
                        <li>Reviewing site performance and identifying areas for improvement</li>
                        <li>Ensuring company procedures, safety requirements and client expectations are followed</li>
                    </ul>
                </div>
            </div>

            <!-- Modal 4: HR Assistant -->
            <div id="modal-hr-assistant" class="role-modal-overlay"
                onclick="closeOnOverlay(event, 'modal-hr-assistant')">
                <div class="role-modal-container">
                    <button class="role-modal-close" onclick="closeRoleModal('modal-hr-assistant')">&times;</button>
                    <h3 class="role-modal-title">HR Assistant</h3>
                    <p class="role-modal-subtitle">What your day may look like…</p>
                    <ul class="role-modal-list">
                        <li>Assisting with recruitment, including arranging interviews and following up with candidates</li>
                        <li>Preparing employment documents, letters and employee records</li>
                        <li>Supporting the onboarding of new employees</li>
                        <li>Checking that required employee documents and information are complete</li>
                        <li>Updating attendance, leave and employee information in company systems</li>
                        <li>Responding to employees’ general HR enquiries</li>
                        <li>Coordinating with Operations on manpower movements and employee matters</li>
                        <li>Assisting with work pass and foreign employee administration where required</li>
                        <li>Supporting payroll preparation by checking attendance and relevant records</li>
                        <li>Following up on missing documents, medical certificates or other HR submissions</li>
                        <li>Maintaining organised and accurate employee records</li>
                        <li>Assisting with other HR and administrative duties when required</li>
                    </ul>
                </div>
            </div>

            <!-- JavaScript Interaktif -->
            <script>
                function openRoleModal(modalId) {
                    document.getElementById(modalId).classList.add('active');
                    document.body.style.overflow = 'hidden'; // Mengunci scroll latar belakang
                }

                function closeRoleModal(modalId) {
                    document.getElementById(modalId).classList.remove('active');
                    document.body.style.overflow = 'auto'; // Mengembalikan scroll
                }

                function closeOnOverlay(event, modalId) {
                    if (event.target.id === modalId) {
                        closeRoleModal(modalId);
                    }
                }
            </script>
            <div class="elementor-element elementor-element-f864fe0 e-flex e-con-boxed e-con e-parent" data-id="f864fe0"
                data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-af14b43 elementor-widget elementor-widget-clenfix-booking-form"
                        data-id="af14b43" data-element_type="widget" data-widget_type="clenfix-booking-form.default">
                        <div class="elementor-widget-container">

                            <section id="clenix-booking-form" class="clenix-booking-form-section page-section-padding">
                                <div class="container">
                                    <div class="booking-form-content">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="booking-form-img">
                                                    <div class="clenix-faq-img-wrap position-relative">
                                                        <span class="bg-shape position-absolute"></span>
                                                        <div class="faq-img1 bg-img-area">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="clenix-contact-form-wrap">
                                                    <div class="clenix-section-title headline pera-content">
                                                        <span class="sub-title"></span>
                                                        <h2></h2>
                                                    </div>
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
                                                            #06-27, Midview City, <br>
                                                            Singapore 573960
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- BOX 2: Mail Us -->
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
                                                            <h4>Mail Us</h4>
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

    </div><!-- #content -->
@endsection
