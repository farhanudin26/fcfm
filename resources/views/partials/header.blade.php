<header class="site-header header-style-one">

    <!-- =========================================
         TOP HEADER
    ========================================== -->

    <div class="header__top-wrap">

        <div class="container mxw_1700">

            <div class="header__top ul_li_between mt-none-15">

                <!-- Social Media -->
                <div class="header__social mt-15">

                    <a href="https://www.tiktok.com/@fcfm_singapore">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=61570628857365">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/fcfm_singapore">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>


                <!-- Right Top Header -->
                <div class="header__top-rgiht ul_li">

                    <ul class="header__info ul_li mt-15">

                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            Singapore
                        </li>

                        <li>
                            <i class="far fa-envelope"></i>

                            <span class="webkit-html-attribute-value">
                                hello@fcfm.sg
                            </span>
                        </li>

                    </ul>


                    <!-- Language -->
                    <div class="header__language mt-15">

                        <ul>

                            <li>

                                <a href="#!" class="lang-btn">

                                    <img src="{{ asset('assets/img/flag.png') }}" alt="">

                                    English

                                    <i class="far fa-chevron-down"></i>

                                </a>


                                <ul class="lang_sub_list">

                                    <li>
                                        <a href="#">English</a>
                                    </li>

                                    <li>
                                        <a href="#">Arabic</a>
                                    </li>

                                    <li>
                                        <a href="#">Bangla</a>
                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================
         MAIN HEADER
    ========================================== -->

    <div class="header__main-wrap">

        <div class="container mxw_1700">

            <div class="header__main ul_li_between">


                <!-- =================================
                     LOGO
                ================================== -->

                <div class="header__main-left ul_li">

                    <!-- Hamburger -->
                    <div class="header__bar hamburger_menu">

                        <a href="#!">

                            <img src="{{ asset('assets/img/bar-2.svg') }}" alt="">

                        </a>

                    </div>


                    <!-- Logo -->
                    <div class="header__logo ml-50">

                        <div class="site-branding">

                            <div class="logo-wrap">

                                <a href="{{ url('/') }}">

                                    <img src="{{ asset('assets/img/uploads/2025/09/horizontal-fcfm-logo.png') }}"
                                        alt="Fresh Cleaning Facilities Management">

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================
                     DESKTOP NAVBAR
                ================================== -->

                <div class="main-menu navbar navbar-expand-lg">

                    <nav class="main-menu__nav collapse navbar-collapse">

                        <ul id="menu-main-menu">


                            <!-- =================================
                                 HOME
                            ================================== -->

                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-1458"
                                class="menu-item menu-item-type-custom menu-item-object-custom nav-item
                                {{ request()->is('/') ? 'current-menu-item current_page_item active' : '' }}">

                                <a title="Home" href="{{ url('/') }}" class="nav-link">
                                    Home
                                </a>

                            </li>


                            <!-- =================================
                                 ABOUT US
                            ================================== -->

                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-467"
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                {{ request()->is('pages/about-us') ? 'current-menu-item current_page_item active' : '' }}">

                                <a title="About Us" href="{{ url('/pages/about-us') }}" class="nav-link">
                                    About Us
                                </a>

                            </li>


                            <!-- =================================
                                 SERVICES
                            ================================== -->

                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-481"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown has-dropdown nav-item

                                {{ request()->is('pages/commercial-cleaning') ||
                                request()->is('pages/healthcare-cleaning') ||
                                request()->is('pages/office-cleaning') ||
                                request()->is('pages/institution-cleaning') ||
                                request()->is('pages/hotel-housekeeping-services') ||
                                request()->is('pages/value-added-services')
                                    ? 'current-menu-item current_page_item active'
                                    : '' }}">

                                <a title="Services" href="#" class="nav-link">
                                    Services
                                </a>


                                <ul class="submenu" role="menu">


                                    <!-- Commercial Cleaning -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2109"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/commercial-cleaning') ? 'active' : '' }}">

                                        <a title="Commercial Cleaning" href="{{ url('/pages/commercial-cleaning') }}"
                                            class="dropdown-items">
                                            Commercial Cleaning
                                        </a>

                                    </li>


                                    <!-- Healthcare Cleaning -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2110"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/healthcare-cleaning') ? 'active' : '' }}">

                                        <a title="Healthcare Cleaning" href="{{ url('/pages/healthcare-cleaning') }}"
                                            class="dropdown-items">
                                            Healthcare Cleaning
                                        </a>

                                    </li>


                                    <!-- Office Cleaning -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2111"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/office-cleaning') ? 'active' : '' }}">

                                        <a title="Office Cleaning" href="{{ url('/pages/office-cleaning') }}"
                                            class="dropdown-items">
                                            Office Cleaning
                                        </a>

                                    </li>


                                    <!-- Institution Cleaning -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2112"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/institution-cleaning') ? 'active' : '' }}">

                                        <a title="Institutional Cleaning" href="{{ url('/pages/institution-cleaning') }}"
                                            class="dropdown-items">
                                            Institutional Cleaning
                                        </a>

                                    </li>


                                    <!-- Hotel Housekeeping Services -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2113"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/hotel-housekeeping-services') ? 'active' : '' }}">

                                        <a title="Hotel Housekeeping Services"
                                            href="{{ url('/pages/hotel-housekeeping-services') }}"
                                            class="dropdown-items">
                                            Hotel Housekeeping Services
                                        </a>

                                    </li>


                                    <!-- Value-Added Services -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2114"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/value-added-services') ? 'active' : '' }}">

                                        <a title="Value-Added Services"
                                            href="{{ url('/pages/value-added-services') }}" class="dropdown-items">
                                            Value-Added Services
                                        </a>

                                    </li>

                                </ul>

                            </li>


                            <!-- =================================
                                 CAREER
                            ================================== -->

                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-482"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown has-dropdown nav-item

                                {{ request()->is('pages/career-overview') || request()->is('pages/job-listings')
                                    ? 'current-menu-item current_page_item active'
                                    : '' }}">

                                <a title="Career" href="#" class="nav-link">
                                    Career
                                </a>


                                <ul class="submenu" role="menu">


                                    <!-- Career Overview -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2344"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/career-overview') ? 'active' : '' }}">

                                        <a title="Career Overview" href="{{ url('/pages/career-overview') }}"
                                            class="dropdown-items">
                                            Career Overview
                                        </a>

                                    </li>


                                    <!-- Job Listings -->

                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-2343"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                        {{ request()->is('pages/job-listings') ? 'active' : '' }}">

                                        <a title="Job Listings" href="{{ url('/pages/job-listings') }}"
                                            class="dropdown-items">
                                            Job Listings
                                        </a>

                                    </li>

                                </ul>

                            </li>


                            <!-- =================================
                                 CONTACT
                            ================================== -->

                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-468"
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item
                                {{ request()->is('pages/contact') ? 'current-menu-item current_page_item active' : '' }}">

                                <a title="Contact" href="{{ url('/pages/contact') }}" class="nav-link">
                                    Contact
                                </a>

                            </li>

                        </ul>

                    </nav>

                </div>


                <!-- =================================
                     RIGHT SIDE
                ================================== -->

                <div class="header__main-right ul_li">


                    <!-- Phone -->

                    <div class="header__cta ul_li">

                        <div class="icon">

                            <img src="{{ asset('assets/img/call.svg') }}" alt="">

                        </div>


                        <div class="content">

                            <span>
                                Need any help?
                            </span>

                            <a href="tel:+6583332999">
                                +65 8333 2999
                            </a>

                        </div>

                    </div>


                    <!-- Quote Button -->

                    <div class="header__btn ml-40">

                        <a class="thm-btn thm-btn--transparent" href="#quoteModal" data-bs-toggle="modal"
                            data-bs-target="#quoteModal">

                            <span class="btn-wrap">

                                <span>
                                    Get a quote button
                                </span>

                                <span>
                                    Get a quote button
                                </span>

                            </span>

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</header>
                    <!-- Modal Get A Quote Form -->
                    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content text-start">
                                <div class="modal-header bg-warning text-dark">
                                    <h5 class="modal-title fw-bold" id="quoteModalLabel">Get A Quote</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form action="#" method="POST" id="quoteForm">
                                        @csrf

                                        <!-- Company Information -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="company_name" class="form-label font-weight-bold">Name
                                                    of Company *</label>
                                                <input type="text" class="form-control" id="company_name"
                                                    name="company_name" required placeholder="e.g. Acme Corp">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="facility_type" class="form-label font-weight-bold">Type
                                                    of Facility *</label>
                                                <select class="form-select form-control" id="facility_type"
                                                    name="facility_type" required>
                                                    <option value="" selected disabled>Select Facility
                                                        Type</option>
                                                    <option value="Office">Office
                                                    </option>
                                                    <option value="Warehouse / Industrial">
                                                        Warehouse / Industrial
                                                    </option>
                                                    <option value="School / Institution / Childcare">
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
                                                    <option value="Condominium / Apartment Complex">
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
                                            <label for="company_address" class="form-label font-weight-bold">Address
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
                                                <input type="text" class="form-control" id="representative_name"
                                                    name="representative_name" required placeholder="John Doe">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="contact_number"
                                                    class="form-label font-weight-bold">Contact
                                                    Number *</label>
                                                <input type="tel" class="form-control" id="contact_number"
                                                    name="contact_number" required placeholder="+65 xxxx xxxx">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="email_address" class="form-label font-weight-bold">E-mail
                                                    Address *</label>
                                                <input type="email" class="form-control" id="email_address"
                                                    name="email_address" required placeholder="name@company.com">
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <!-- Service Details -->
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="start_date" class="form-label font-weight-bold">Estimated
                                                    Start Date *</label>
                                                <input type="date" class="form-control" id="start_date"
                                                    name="start_date" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="estimated_budget"
                                                    class="form-label font-weight-bold">Estimated
                                                    Budget per month</label>
                                                <input type="text" class="form-control" id="estimated_budget"
                                                    name="estimated_budget" placeholder="e.g. $1,500">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cleaning_days_per_week"
                                                    class="form-label font-weight-bold">No.
                                                    of cleaning days required per
                                                    week *</label>
                                                <input type="number" class="form-control"
                                                    id="cleaning_days_per_week" name="cleaning_days_per_week"
                                                    min="1" max="7" required placeholder="e.g. 5">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="hours_per_session" class="form-label font-weight-bold">No.
                                                    of hours per cleaning session
                                                    *</label>
                                                <input type="number" step="0.5" class="form-control"
                                                    id="hours_per_session" name="hours_per_session" min="0.5"
                                                    required placeholder="e.g. 3">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="special_requirements" class="form-label font-weight-bold">Any
                                                other special requirements</label>
                                            <textarea class="form-control" id="special_requirements" name="special_requirements" rows="3"
                                                placeholder="Tell us if you need specific equipment, eco-friendly products, etc."></textarea>
                                        </div>

                                        <div class="text-end mt-4">
                                            <button type="button" class="btn btn-secondary me-2"
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


<!-- =====================================================
     SLIDE BAR / MOBILE MENU
====================================================== -->

<aside class="slide-bar">


    <!-- Close -->

    <div class="close-mobile-menu">

        <a href="javascript:void(0);">

            <i class="far fa-times"></i>

        </a>

    </div>


    <!-- =================================================
         SIDEBAR INFORMATION
    ================================================== -->

    <div class="sidebar-info">


        <!-- Logo -->

        <div class="sidebar-logo mb-30">

            <a href="{{ url('/') }}">

                <img src="{{ asset('assets/img/uploads/2025/09/horizontal-fcfm-logo.png') }}" alt="logo">

            </a>

        </div>


        <!-- About -->

        <div class="sidebar-content mb-45">
            <h4 class="s-title">
                <strong>About FCFM</strong>
            </h4>

            <p>
                Professional cleaning and facility solutions designed around the needs of commercial, healthcare,
                hospitality and institutional environments.
            </p>

            <div class="sidebar__btn">
                <a class="thm-btn br-0" href="{{ url('/pages/about-us') }}">
                    <span class="btn-wrap">
                        <span>Discover FCFM</span>
                        <span>Discover FCFM</span>
                    </span>
                </a>
            </div>

            <!-- ================= BAGIAN WHAT WE DO ================= -->
            <div class="what-we-do-section mt-4" style="margin-top: 30px;">
                <h4 class="s-title">
                    <strong>What We Do</strong>
                </h4>

                <ul class="what-we-do-list" style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="/pages/commercial-cleaning"
                            style="text-decoration: none; color: inherit; font-weight: 500; display: inline-flex; align-items: center; gap: 8px;">
                            <span>Commercial Cleaning</span>
                            <span style="color: #ffa800; font-weight: bold; font-size: 18px;">&rarr;</span>
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="/pages/healthcare-cleaning"
                            style="text-decoration: none; color: inherit; font-weight: 500; display: inline-flex; align-items: center; gap: 8px;">
                            <span>Healthcare Cleaning</span>
                            <span style="color: #ffa800; font-weight: bold; font-size: 18px;">&rarr;</span>
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="/pages/institution-cleaning"
                            style="text-decoration: none; color: inherit; font-weight: 500; display: inline-flex; align-items: center; gap: 8px;">
                            <span>Institutional Cleaning</span>
                            <span style="color: #ffa800; font-weight: bold; font-size: 18px;">&rarr;</span>
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="/pages/hotel-housekeeping-services"
                            style="text-decoration: none; color: inherit; font-weight: 500; display: inline-flex; align-items: center; gap: 8px;">
                            <span>Hotel Housekeeping</span>
                            <span style="color: #ffa800; font-weight: bold; font-size: 18px;">&rarr;</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- ================= END BAGIAN WHAT WE DO ================= -->
        </div>


        <!-- Contact -->

        <div class="contact_list mb-30">

            <h4 class="s-title">
                <strong>Get In Touch</strong>
            </h4>

            <ul class="sidebar-info-list">

                <li>

                    <i class="fas fa-map-marker-alt"></i>

                    18 Sin Ming Lane, #06-26/27,
                    Midview City, Singapore 573960

                </li>


                <li>

                    <i class="fas fa-phone-alt"></i>

                    +65 8333 2999

                </li>


                <li>

                    <i class="fas fa-mail-bulk"></i>

                    hello@fcfm.sg

                </li>

            </ul>

        </div>


        <!-- Social -->

        <div class="sidebar-social mt-20">

            <a href="https://www.tiktok.com/@fcfm_singapore">

                <i class="fab fa-tiktok"></i>

            </a>


            <a href="https://www.facebook.com/profile.php?id=61570628857365">

                <i class="fab fa-facebook-f"></i>

            </a>


            <a href="https://www.instagram.com/fcfm_singapore">

                <i class="fab fa-instagram"></i>

            </a>

        </div>

    </div>



    <!-- =================================================
         MOBILE MENU
    ================================================== -->

    <nav class="side-mobile-menu">


        <!-- Search -->

        <div class="header-mobile-search">

            <form role="search">

                <input type="search" name="s" value="" placeholder="Search Keywords">

                <button type="submit" disabled>

                    <i class="far fa-search"></i>

                </button>

            </form>

        </div>



        <!-- Mobile Navigation -->

        <ul id="mobile-menu-active" class="menu">


            <!-- HOME -->

            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                id="mobile-menu-item-1458"
                class="menu-item nav-item
                {{ request()->is('/') ? 'current-menu-item current_page_item active' : '' }}">

                <a title="Home" href="{{ url('/') }}" class="nav-link">
                    Home
                </a>

            </li>



            <!-- ABOUT US -->

            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                id="mobile-menu-item-467"
                class="menu-item nav-item
                {{ request()->is('pages/about-us') ? 'current-menu-item current_page_item active' : '' }}">

                <a title="About Us" href="{{ url('/pages/about-us') }}" class="nav-link">
                    About Us
                </a>

            </li>



            <!-- SERVICES -->

            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                id="mobile-menu-item-481"
                class="menu-item dropdown has-dropdown nav-item

                {{ request()->is('pages/commercial-cleaning') ||
                request()->is('pages/healthcare-cleaning') ||
                request()->is('pages/office-cleaning') ||
                request()->is('pages/institution-cleaning') ||
                request()->is('pages/hotel-housekeeping-services') ||
                request()->is('pages/value-added-services')
                    ? 'current-menu-item current_page_item active'
                    : '' }}">

                <a title="Services" href="#" class="nav-link">
                    Services
                </a>


                <ul class="sub-menu" role="menu">


                    <!-- Commercial Cleaning -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/commercial-cleaning') ? 'active' : '' }}">

                        <a title="Commercial Cleaning" href="{{ url('/pages/commercial-cleaning') }}"
                            class="dropdown-items">
                            Commercial Cleaning
                        </a>

                    </li>


                    <!-- Healthcare Cleaning -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/healthcare-cleaning') ? 'active' : '' }}">

                        <a title="Healthcare Cleaning" href="{{ url('/pages/healthcare-cleaning') }}"
                            class="dropdown-items">
                            Healthcare Cleaning
                        </a>

                    </li>


                    <!-- Office Cleaning -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/office-cleaning') ? 'active' : '' }}">

                        <a title="Office Cleaning" href="{{ url('/pages/office-cleaning') }}"
                            class="dropdown-items">
                            Office Cleaning
                        </a>

                    </li>


                    <!-- Institution Cleaning -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/institution-cleaning') ? 'active' : '' }}">

                        <a title="Institutional Cleaning" href="{{ url('/pages/institution-cleaning') }}"
                            class="dropdown-items">
                            Institutional Cleaning
                        </a>

                    </li>


                    <!-- Hotel Housekeeping -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/hotel-housekeeping-services') ? 'active' : '' }}">

                        <a title="Hotel Housekeeping Services" href="{{ url('/pages/hotel-housekeeping-services') }}"
                            class="dropdown-items">
                            Hotel Housekeeping Services
                        </a>

                    </li>


                    <!-- Value Added Services -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/value-added-services') ? 'active' : '' }}">

                        <a title="Value-Added Services" href="{{ url('/pages/value-added-services') }}"
                            class="dropdown-items">
                            Value-Added Services
                        </a>

                    </li>

                </ul>

            </li>



            <!-- CAREER -->

            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                id="mobile-menu-item-482"
                class="menu-item dropdown has-dropdown nav-item

                {{ request()->is('pages/career-overview') || request()->is('pages/job-listings')
                    ? 'current-menu-item current_page_item active'
                    : '' }}">

                <a title="Career" href="#" class="nav-link">
                    Career
                </a>


                <ul class="sub-menu" role="menu">


                    <!-- Career Overview -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/career-overview') ? 'active' : '' }}">

                        <a title="Career Overview" href="{{ url('/pages/career-overview') }}"
                            class="dropdown-items">
                            Career Overview
                        </a>

                    </li>


                    <!-- Job Listings -->

                    <li
                        class="menu-item nav-item
                        {{ request()->is('pages/job-listings') ? 'active' : '' }}">

                        <a title="Job Listings" href="{{ url('/pages/job-listings') }}" class="dropdown-items">
                            Job Listings
                        </a>

                    </li>

                </ul>

            </li>



            <!-- CONTACT -->

            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                id="mobile-menu-item-468"
                class="menu-item nav-item
                {{ request()->is('pages/contact') ? 'current-menu-item current_page_item active' : '' }}">

                <a title="Contact" href="{{ url('/pages/contact') }}" class="nav-link">
                    Contact
                </a>

            </li>

        </ul>

    </nav>

</aside>



<!-- BODY OVERLAY -->

<div class="body-overlay"></div>
