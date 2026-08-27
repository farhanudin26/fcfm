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

                                        <a title="Institution Cleaning" href="{{ url('/pages/institution-cleaning') }}"
                                            class="dropdown-items">
                                            Institution Cleaning
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

                        <a class="thm-btn thm-btn--transparent" href="#">

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

                <img src="{{ asset('assets/img/uploads/2025/09/horizontal-fcfm-logo.png') }}"
                    alt="logo">

            </a>

        </div>


        <!-- About -->

        <div class="sidebar-content mb-45">

            <h4 class="s-title">
                About us
            </h4>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip
                ex ea commodo consequat.
            </p>


            <div class="sidebar__btn">

                <a class="thm-btn br-0" href="#">

                    <span class="btn-wrap">

                        <span>
                            Contact us
                        </span>

                        <span>
                            Contact us
                        </span>

                    </span>

                </a>

            </div>

        </div>


        <!-- Contact -->

        <div class="contact_list mb-30">

            <h4 class="s-title">
                Contact us
            </h4>


            <ul class="sidebar-info-list">

                <li>

                    <i class="fas fa-map-marker-alt"></i>

                    18 Sin Ming Lane, #06-27,
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

                        <a title="Institution Cleaning" href="{{ url('/pages/institution-cleaning') }}"
                            class="dropdown-items">
                            Institution Cleaning
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
