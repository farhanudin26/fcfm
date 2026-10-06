<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/pages/about-us', 'pages.about-us')->name('about-us');

Route::view('/pages/blog', 'pages.blog')->name('blog');

Route::view('/pages/booking', 'pages.booking')->name('booking');

Route::view('/pages/career-overview', 'pages.career-overview')->name('career-overview');

Route::view('/pages/career', 'pages.career')->name('career');

Route::view('/pages/commercial-cleaning', 'pages.commercial-cleaning')->name('commercial-cleaning');

Route::view('/pages/contact', 'pages.contact')->name('contact');

Route::view('/pages/faq', 'pages.faq')->name('faq');

Route::view('/pages/healthcare-cleaning', 'pages.healthcare-cleaning')->name('healthcare-cleaning');

Route::view('/pages/hotel-housekeeping-services', 'pages.hotel-housekeeping-services')->name('hotel-housekeeping-services');

Route::view('/pages/institution-cleaning', 'pages.institution-cleaning')->name('institution-cleaning');

Route::view('/pages/job-listings', 'pages.job-listings')->name('job-listings');

Route::view('/pages/office-cleaning', 'pages.office-cleaning')->name('office-cleaning');

Route::view('/pages/pest-control', 'pages.pest-control')->name('pest-control');

Route::view('/pages/high-pressure-jetwash', 'pages.high-pressure-jetwash')->name('high-pressure-jetwash');

Route::view('/pages/floor-scrubbing', 'pages.floor-scrubbing')->name('floor-scrubbing');

Route::view('/pages/landscape-management', 'pages.landscape-management')->name('landscape-management');

Route::view('/pages/floor-polishing', 'pages.floor-polishing')->name('floor-polishing');

Route::view('/pages/disinfecting-services', 'pages.disinfecting-services')->name('disinfecting-services');

Route::view('/pages/carpet-cleaning', 'pages.carpet-cleaning')->name('carpet-cleaning');

Route::view('/pages/electrical-works', 'pages.electrical-works')->name('electrical-works');

Route::view('/pages/anti-microbial', 'pages.anti-microbial')->name('anti-microbial');

Route::view('/pages/robotic-cleaning', 'pages.robotic-cleaning')->name('robotic-cleaning');

Route::view('/pages/portfolio', 'pages.portfolio')->name('portfolio');

Route::view('/pages/pricing', 'pages.pricing')->name('pricing');

Route::view('/pages/project-detail', 'pages.project-detail')->name('project-detail');

Route::view('/pages/service-details', 'pages.service-details')->name('service-details');

Route::view('/pages/service', 'pages.service')->name('service');

Route::view('/pages/team', 'pages.team')->name('team');

Route::view('/pages/terms-of-use', 'pages.terms-of-use')->name('terms-of-use');

Route::view('/pages/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');

Route::view('/pages/testimonial', 'pages.testimonial')->name('testimonial');

Route::view('/pages/value-added-services', 'pages.value-added-services')->name('value-added-services');
