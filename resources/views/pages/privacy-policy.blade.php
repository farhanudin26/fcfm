@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Privacy Policy – Fresh Cleaning Facilities Management')
@section('meta_description', 'Privacy Policy of Fresh Cleaning Facilities Management Pte Ltd (FCFM). Learn how we collect, use, protect, and manage your personal data.')
@section('meta_keywords', 'privacy policy, fcfm privacy, fresh cleaning facilities management, pdpa singapore, data protection')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756 elementor-page')
@section('elementor_post_id', 2113)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2113-css' href='{{ asset('assets/css/elementor/post-2101.css') }}' media='all' />
@endpush

@section('content')
<div id="content" class="site-content">
    <div data-elementor-type="wp-page" data-elementor-id="2113" class="elementor elementor-2113">

        {{-- Section Content Privacy Policy (Tanpa Section Header/Breadcrumb) --}}
        <section class="privacy-policy-section" style="padding: 70px 0; background-color: #ffffff;">
            <div class="container">
                <div class="privacy-container" style="max-width: 960px; margin: 0 auto; color: #333333; font-size: 17px; line-height: 1.85;">

                    {{-- Styling Khusus untuk Ukuran Teks Lebih Besar & Rapi --}}
                    <style>
                        .privacy-header {
                            margin-bottom: 45px;
                            border-bottom: 2px solid #eaeaea;
                            padding-bottom: 30px;
                        }
                        .privacy-header h1 {
                            font-size: 42px;
                            font-weight: 800;
                            color: #111111;
                            margin-bottom: 10px;
                            letter-spacing: -0.5px;
                        }
                        .privacy-last-updated {
                            font-size: 16px;
                            color: #666666;
                            font-weight: 600;
                            margin-bottom: 25px;
                        }
                        .privacy-intro p {
                            font-size: 18px;
                            margin-bottom: 18px;
                            color: #444444;
                        }

                        /* Spacing & Ukuran Font antar Poin Nomor */
                        .privacy-point {
                            margin-top: 40px;
                            margin-bottom: 40px;
                        }
                        .privacy-point h2 {
                            font-size: 24px;
                            font-weight: 700;
                            color: #0d0d0d;
                            margin-bottom: 18px;
                        }
                        .privacy-point p {
                            font-size: 17px;
                            margin-bottom: 14px;
                            color: #333333;
                        }
                        .privacy-point ul {
                            margin: 18px 0 20px 25px;
                            list-style-type: disc;
                        }
                        .privacy-point ul li {
                            font-size: 17px;
                            margin-bottom: 10px;
                            color: #444444;
                            line-height: 1.7;
                        }
                        .privacy-address-box {
                            background: #f8f9fa;
                            padding: 24px 30px;
                            border-radius: 8px;
                            border-left: 5px solid #007bff;
                            margin-top: 20px;
                            font-size: 17px;
                        }
                        .privacy-address-box a {
                            color: #007bff;
                            text-decoration: none;
                            font-weight: 600;
                        }
                        .privacy-address-box a:hover {
                            text-decoration: underline;
                        }
                    </style>

                    <div class="privacy-header">
                        <h1>Privacy Policy</h1>
                        <div class="privacy-last-updated">Last Updated: October 2026</div>

                        <div class="privacy-intro">
                            <p>Fresh Cleaning Facilities Management Pte Ltd (“FCFM”, “we”, “us” or “our”) respects your privacy and is committed to protecting the personal data entrusted to us.</p>
                            <p>This Privacy Policy explains how we may collect, use, disclose, protect and manage personal data when you visit our website, submit an enquiry or quotation request, communicate with us, or otherwise interact with FCFM.</p>
                        </div>
                    </div>

                    {{-- 1. Personal Data We May Collect --}}
                    <div class="privacy-point">
                        <h2>1. Personal Data We May Collect</h2>
                        <p>Depending on how you interact with us, we may collect personal data and other information that you voluntarily provide, including:</p>
                        <ul>
                            <li>Your name</li>
                            <li>Contact number</li>
                            <li>Email address</li>
                            <li>Company or organisation details</li>
                            <li>Information provided through our contact or quotation request forms</li>
                            <li>Information relating to your service requirements</li>
                            <li>Information contained in messages, enquiries or other communications with us</li>
                            <li>Any other information you choose to provide</li>
                        </ul>
                        <p>For quotation requests, we may also collect information about your facility, site requirements, preferred cleaning arrangements, estimated start date, budget and other information required for us to understand and respond to your request.</p>
                    </div>

                    {{-- 2. How We Collect Information --}}
                    <div class="privacy-point">
                        <h2>2. How We Collect Information</h2>
                        <p>We may collect information when you:</p>
                        <ul>
                            <li>Submit a quotation request through our website</li>
                            <li>Submit an enquiry through our contact form</li>
                            <li>Contact us by email, telephone or WhatsApp</li>
                            <li>Communicate with us through our social media channels</li>
                            <li>Request information about our services</li>
                            <li>Otherwise voluntarily provide information to us</li>
                        </ul>
                        <p>Our website may also collect certain technical information through cookies and similar technologies as part of its normal operation.</p>
                    </div>

                    {{-- 3. How We Use Your Information --}}
                    <div class="privacy-point">
                        <h2>3. How We Use Your Information</h2>
                        <p>We may collect, use or process information for purposes including:</p>
                        <ul>
                            <li>Responding to enquiries and requests</li>
                            <li>Preparing and following up on quotations</li>
                            <li>Understanding your facility and service requirements</li>
                            <li>Arranging site visits, assessments or discussions where required</li>
                            <li>Communicating with you regarding services you have requested or expressed interest in</li>
                            <li>Providing, managing and improving our services</li>
                            <li>Managing our relationship and communications with clients and prospective clients</li>
                            <li>Maintaining and improving our website and user experience</li>
                            <li>Handling feedback, requests or other communications</li>
                            <li>Fulfilling our legal, regulatory and administrative obligations</li>
                            <li>Other purposes reasonably related to the circumstances in which the information was provided</li>
                        </ul>
                        <p>Where required, we will notify you of any additional purposes for which your personal data is collected, used or disclosed.</p>
                    </div>

                    {{-- 4. Quotation and Contact Forms --}}
                    <div class="privacy-point">
                        <h2>4. Quotation and Contact Forms</h2>
                        <p>Information submitted through our website's quotation and contact forms is used primarily to understand and respond to your enquiry.</p>
                        <p>Submitting a quotation request does not create a service agreement with FCFM. Information such as estimated manpower, cleaning schedules, budgets and other requirements provided through the form assists our team in understanding your needs. Final service scope, manpower requirements, schedules, pricing and other arrangements remain subject to assessment and confirmation.</p>
                        <p>General enquiries may be directed to:</p>
                        <div class="privacy-address-box">
                            <strong>Fresh Cleaning Facilities Management Pte Ltd</strong><br>
                            <strong>Email:</strong> <a href="mailto:hello@fcfm.sg">hello@fcfm.sg</a>
                        </div>
                    </div>

                    {{-- 5. WhatsApp and Social Media --}}
                    <div class="privacy-point">
                        <h2>5. WhatsApp and Social Media</h2>
                        <p>Our website may provide links to third-party platforms such as WhatsApp and our social media pages.</p>
                        <p>If you choose to communicate with us through these platforms, the information you provide may also be subject to the privacy practices and terms of the relevant third-party platform.</p>
                        <p>We encourage you to review the applicable privacy policies of those platforms if you would like further information about how they handle your data.</p>
                    </div>

                    {{-- 6. Disclosure of Personal Data --}}
                    <div class="privacy-point">
                        <h2>6. Disclosure of Personal Data</h2>
                        <p>We do not sell your personal data.</p>
                        <p>Where reasonably necessary, personal data may be disclosed to our employees, authorised personnel, service providers, contractors, professional advisers or other parties that support our business operations or assist us in responding to or fulfilling your request.</p>
                        <p>We may also disclose information where required or permitted by applicable laws and regulations.</p>
                        <p>Where third parties process personal data on our behalf, we will take reasonable steps to ensure that the information is handled appropriately and for the relevant purpose.</p>
                    </div>

                    {{-- 7. Protection of Personal Data --}}
                    <div class="privacy-point">
                        <h2>7. Protection of Personal Data</h2>
                        <p>FCFM takes reasonable administrative, technical and physical measures to protect personal data in our possession or under our control against unauthorised access, collection, use, disclosure, copying, modification, disposal or similar risks.</p>
                        <p>However, no method of electronic transmission or storage is completely secure, and we cannot guarantee absolute security of information transmitted over the internet.</p>
                    </div>

                    {{-- 8. Retention of Personal Data --}}
                    <div class="privacy-point">
                        <h2>8. Retention of Personal Data</h2>
                        <p>We retain personal data only for as long as it is reasonably necessary to fulfil the purposes for which it was collected, to support legitimate business or operational requirements, or to comply with applicable legal and regulatory obligations.</p>
                        <p>When personal data is no longer required for these purposes, we will take reasonable steps to securely dispose of, anonymise or otherwise cease retaining it where appropriate.</p>
                    </div>

                    {{-- 9. Cookies and Website Data --}}
                    <div class="privacy-point">
                        <h2>9. Cookies and Website Data</h2>
                        <p>Our website may use cookies and similar technologies to support website functionality, improve user experience and understand how our website is used.</p>
                        <p>You may manage or disable cookies through your browser settings. Please note that disabling certain cookies may affect the functionality or performance of parts of the website.</p>
                    </div>

                    {{-- 10. Access and Correction --}}
                    <div class="privacy-point">
                        <h2>10. Access and Correction</h2>
                        <p>Subject to applicable law, you may contact us to request access to personal data that we hold about you or to request correction of inaccurate or incomplete personal data.</p>
                        <p>We may need to verify your identity before processing such requests.</p>
                    </div>

                    {{-- 11. Withdrawal of Consent --}}
                    <div class="privacy-point">
                        <h2>11. Withdrawal of Consent</h2>
                        <p>Where we rely on your consent to collect, use or disclose personal data, you may withdraw your consent by contacting our Data Protection Officer.</p>
                        <p>Please note that withdrawing consent may affect our ability to continue providing certain services or responding to certain requests, depending on the nature of the information concerned.</p>
                    </div>

                    {{-- 12. Data Protection Officer --}}
                    <div class="privacy-point">
                        <h2>12. Data Protection Officer</h2>
                        <p>For questions, requests or concerns regarding this Privacy Policy or the handling of your personal data, please contact:</p>
                        <div class="privacy-address-box">
                            <strong>Data Protection Officer</strong><br>
                            Fresh Cleaning Facilities Management Pte Ltd<br>
                            <strong>Email:</strong> <a href="mailto:dominic@fcfm.sg">dominic@fcfm.sg</a>
                        </div>
                    </div>

                    {{-- 13. Third-Party Websites --}}
                    <div class="privacy-point">
                        <h2>13. Third-Party Websites</h2>
                        <p>Our website may contain links to websites or online services operated by third parties.</p>
                        <p>FCFM is not responsible for the privacy practices, content or security of third-party websites or services. We encourage you to review their respective privacy policies before providing personal information to them.</p>
                    </div>

                    {{-- 14. Changes to This Privacy Policy --}}
                    <div class="privacy-point">
                        <h2>14. Changes to This Privacy Policy</h2>
                        <p>We may update this Privacy Policy from time to time to reflect changes to our practices, website, services or applicable requirements.</p>
                        <p>The latest version will be published on this website with the updated date shown at the top of this page.</p>
                    </div>

                    {{-- 15. Contact Us --}}
                    <div class="privacy-point">
                        <h2>15. Contact Us</h2>
                        <p>For general enquiries regarding FCFM and our services, please contact:</p>
                        <div class="privacy-address-box">
                            <strong>Fresh Cleaning Facilities Management Pte Ltd</strong><br>
                            18 Sin Ming Lane, #06-26/27<br>
                            Midview City<br>
                            Singapore 573960<br><br>
                            <strong>Email:</strong> <a href="mailto:hello@fcfm.sg">hello@fcfm.sg</a><br>
                            <strong>Tel:</strong> <a href="tel:+6583332999">+65 8333 2999</a>
                        </div>
                        <p style="margin-top: 18px;">For matters specifically relating to personal data or this Privacy Policy, please contact our Data Protection Officer at <a href="mailto:dominic@fcfm.sg" style="color: #007bff; font-weight: 600;">dominic@fcfm.sg</a>.</p>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
@endsection
