@extends('layouts.app')

{{-- 1. Pengaturan SEO & Meta Data --}}
@section('title', 'Terms of Use – Fresh Cleaning Facilities Management')
@section('meta_description', 'Terms of Use for Fresh Cleaning Facilities Management Pte Ltd (FCFM) website.')
@section('meta_keywords', 'terms of use, fcfm terms, fresh cleaning facilities management, singapore facility management')
@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page wp-theme-clinox ehf-template-clinox ehf-stylesheet-clinox elementor-default elementor-template-full-width elementor-kit-1756 elementor-page')
@section('elementor_post_id', 2112)

@push('elementor-post-css')
    <link rel='stylesheet' id='elementor-post-2112-css' href='{{ asset('assets/css/elementor/post-2101.css') }}' media='all' />
@endpush

@section('content')
<div id="content" class="site-content">
    <div data-elementor-type="wp-page" data-elementor-id="2112" class="elementor elementor-2112">

        {{-- Section Content Terms of Use (Tanpa Section Header/Breadcrumb) --}}
        <section class="terms-use-section" style="padding: 70px 0; background-color: #ffffff;">
            <div class="container">
                <div class="terms-container" style="max-width: 960px; margin: 0 auto; color: #333333; font-size: 17px; line-height: 1.85;">

                    {{-- Styling Khusus untuk Ukuran Teks Lebih Besar, Rapi, & Spasi Poin --}}
                    <style>
                        .terms-header {
                            margin-bottom: 45px;
                            border-bottom: 2px solid #eaeaea;
                            padding-bottom: 30px;
                        }
                        .terms-header h1 {
                            font-size: 42px;
                            font-weight: 800;
                            color: #111111;
                            margin-bottom: 10px;
                            letter-spacing: -0.5px;
                        }
                        .terms-last-updated {
                            font-size: 16px;
                            color: #666666;
                            font-weight: 600;
                            margin-bottom: 25px;
                        }
                        .terms-intro p {
                            font-size: 18px;
                            margin-bottom: 18px;
                            color: #444444;
                        }

                        /* Spacing & Ukuran Font antar Poin Nomor */
                        .terms-point {
                            margin-top: 40px;
                            margin-bottom: 40px;
                        }
                        .terms-point h2 {
                            font-size: 24px;
                            font-weight: 700;
                            color: #0d0d0d;
                            margin-bottom: 18px;
                        }
                        .terms-point p {
                            font-size: 17px;
                            margin-bottom: 14px;
                            color: #333333;
                        }
                        .terms-point ul {
                            margin: 18px 0 20px 25px;
                            list-style-type: disc;
                        }
                        .terms-point ul li {
                            font-size: 17px;
                            margin-bottom: 10px;
                            color: #444444;
                            line-height: 1.7;
                        }
                        .terms-address-box {
                            background: #f8f9fa;
                            padding: 24px 30px;
                            border-radius: 8px;
                            border-left: 5px solid #007bff;
                            margin-top: 20px;
                            font-size: 17px;
                        }
                        .terms-address-box a {
                            color: #007bff;
                            text-decoration: none;
                            font-weight: 600;
                        }
                        .terms-address-box a:hover {
                            text-decoration: underline;
                        }
                    </style>

                    <div class="terms-header">
                        <h1>Terms of Use</h1>
                        <div class="terms-last-updated">Last Updated: October 2026</div>

                        <div class="terms-intro">
                            <p>Welcome to the website of Fresh Cleaning Facilities Management Pte Ltd (“FCFM”, “we”, “us” or “our”).</p>
                            <p>These Terms of Use govern your access to and use of our website. By accessing or using this website, you agree to these Terms of Use. If you do not agree with these terms, please discontinue your use of the website.</p>
                        </div>
                    </div>

                    {{-- 1. About This Website --}}
                    <div class="terms-point">
                        <h2>1. About This Website</h2>
                        <p>This website provides general information about FCFM, our cleaning and facility-related services, career opportunities and ways to contact or submit an enquiry to us.</p>
                        <p>The information provided on this website is for general informational purposes and may be updated or changed from time to time.</p>
                    </div>

                    {{-- 2. Service Information --}}
                    <div class="terms-point">
                        <h2>2. Service Information</h2>
                        <p>We aim to provide accurate and up-to-date information about our services. However, the descriptions, images and other information presented on this website are intended to provide a general overview of our services and capabilities.</p>
                        <p>Actual service availability, scope, manpower requirements, equipment, cleaning methods, schedules and other arrangements may vary depending on factors such as the site environment, operational requirements and agreed service scope.</p>
                        <p>Information displayed on this website should therefore not be treated as a confirmed service specification, quotation or contractual commitment unless expressly agreed by FCFM in writing.</p>
                    </div>

                    {{-- 3. Quotations and Enquiries --}}
                    <div class="terms-point">
                        <h2>3. Quotations and Enquiries</h2>
                        <p>You may use our website to request a quotation or contact us regarding our services.</p>
                        <p>Information submitted through our quotation request form, including estimated budgets, manpower requirements, cleaning schedules, preferred cleaning hours and other requirements, is provided for enquiry and assessment purposes.</p>
                        <p>Submission of a quotation request or enquiry does not constitute acceptance by FCFM and does not create a binding service agreement.</p>
                        <p>Any final service scope, manpower requirements, pricing, schedule, payment terms and other service arrangements will be subject to assessment, confirmation and any applicable quotation, agreement or terms issued by FCFM.</p>
                    </div>

                    {{-- 4. Site Visits and Assessments --}}
                    <div class="terms-point">
                        <h2>4. Site Visits and Assessments</h2>
                        <p>Where appropriate, FCFM may recommend or arrange a site visit or further discussion to better understand your facility and service requirements.</p>
                        <p>Any recommendations provided following an assessment are based on the information and site conditions available to us at the relevant time and may be subject to further discussion or confirmation.</p>
                    </div>

                    {{-- 5. Acceptable Use --}}
                    <div class="terms-point">
                        <h2>5. Acceptable Use</h2>
                        <p>You agree to use this website only for lawful purposes.</p>
                        <p>You must not knowingly:</p>
                        <ul>
                            <li>Use the website in a manner that violates applicable laws or regulations</li>
                            <li>Attempt to gain unauthorised access to the website, its systems or related networks</li>
                            <li>Interfere with or disrupt the operation or security of the website</li>
                            <li>Introduce malicious software, code or other harmful material</li>
                            <li>Submit false, misleading or fraudulent information through our forms</li>
                            <li>Use website content in a way that infringes the rights of FCFM or any third party</li>
                        </ul>
                    </div>

                    {{-- 6. Intellectual Property --}}
                    <div class="terms-point">
                        <h2>6. Intellectual Property</h2>
                        <p>Unless otherwise stated, the content of this website, including its text, branding, logos, graphics, photographs, designs and other materials, is owned by or used with permission by FCFM and is protected by applicable intellectual property laws.</p>
                        <p>You may view and use the website for personal or legitimate business informational purposes.</p>
                        <p>You may not reproduce, modify, distribute, republish, commercially exploit or otherwise use our website content without prior permission from FCFM, except where permitted by law.</p>
                    </div>

                    {{-- 7. Third-Party Links and Platforms --}}
                    <div class="terms-point">
                        <h2>7. Third-Party Links and Platforms</h2>
                        <p>Our website may contain links to third-party websites, applications or platforms, including WhatsApp and social media platforms.</p>
                        <p>These external services are operated independently from FCFM. We do not control and are not responsible for their content, availability, security, terms or privacy practices.</p>
                        <p>Access to third-party websites and services is at your own discretion and may be subject to their respective terms and policies.</p>
                    </div>

                    {{-- 8. Website Availability --}}
                    <div class="terms-point">
                        <h2>8. Website Availability</h2>
                        <p>We aim to keep our website available and functioning properly. However, we do not guarantee that the website will always be available, uninterrupted, error-free or free from technical issues.</p>
                        <p>We may temporarily suspend, modify or discontinue any part of the website where reasonably necessary for maintenance, updates, security or other operational reasons.</p>
                    </div>

                    {{-- 9. Accuracy of Information --}}
                    <div class="terms-point">
                        <h2>9. Accuracy of Information</h2>
                        <p>While reasonable efforts are made to keep the information on this website accurate and current, errors, omissions or outdated information may occasionally occur.</p>
                        <p>FCFM reserves the right to correct or update website content without prior notice.</p>
                        <p>If you require confirmation of specific service information, please contact us directly.</p>
                    </div>

                    {{-- 10. Limitation of Liability --}}
                    <div class="terms-point">
                        <h2>10. Limitation of Liability</h2>
                        <p>To the extent permitted by applicable law, FCFM will not be liable for losses or damages arising solely from reliance on general information provided on this website or from temporary website unavailability, except where liability cannot lawfully be excluded or limited.</p>
                        <p>Nothing in these Terms of Use is intended to exclude or restrict any rights or liabilities that cannot be excluded or restricted under applicable law.</p>
                    </div>

                    {{-- 11. Privacy --}}
                    <div class="terms-point">
                        <h2>11. Privacy</h2>
                        <p>Your use of this website may involve the collection and processing of personal data.</p>
                        <p>Please refer to our <a href="{{ url('/privacy-policy') }}" style="color: #007bff; font-weight: 600; text-decoration: underline;">Privacy Policy</a> for information about how we collect, use, disclose and protect personal data.</p>
                    </div>

                    {{-- 12. Changes to These Terms --}}
                    <div class="terms-point">
                        <h2>12. Changes to These Terms</h2>
                        <p>We may revise these Terms of Use from time to time to reflect changes to our website, services, business practices or applicable requirements.</p>
                        <p>The latest version will be published on this website, with the updated date indicated at the top of this page.</p>
                        <p>Your continued use of the website following any changes constitutes acceptance of the revised Terms of Use.</p>
                    </div>

                    {{-- 13. Governing Law --}}
                    <div class="terms-point">
                        <h2>13. Governing Law</h2>
                        <p>These Terms of Use are governed by the laws of the Republic of Singapore.</p>
                        <p>Any dispute relating to the use of this website will be subject to the jurisdiction of the courts of Singapore, subject to applicable law.</p>
                    </div>

                    {{-- 14. Contact Us --}}
                    <div class="terms-point">
                        <h2>14. Contact Us</h2>
                        <p>If you have questions regarding this website or these Terms of Use, please contact:</p>
                        <div class="terms-address-box">
                            <strong>Fresh Cleaning Facilities Management Pte Ltd</strong><br>
                            18 Sin Ming Lane, #06-26/27<br>
                            Midview City<br>
                            Singapore 573960<br><br>
                            <strong>Email:</strong> <a href="mailto:hello@fcfm.sg">hello@fcfm.sg</a><br>
                            <strong>Tel:</strong> <a href="tel:+6583332999">+65 8333 2999</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
@endsection
