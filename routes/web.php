<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteRequestController;


Route::view('/', 'pages.home')->name('home');

Route::view('/about-us', 'pages.about-us')->name('about-us');

Route::view('/blog', 'pages.blog')->name('blog');

Route::view('/booking', 'pages.booking')->name('booking');

Route::view('/career-overview', 'pages.career-overview')->name('career-overview');

Route::view('/career', 'pages.career')->name('career');

Route::view('/commercial-cleaning', 'pages.commercial-cleaning')->name('commercial-cleaning');

Route::view('/contact', 'pages.contact')->name('contact');

Route::view('/faq', 'pages.faq')->name('faq');

Route::view('/healthcare-cleaning', 'pages.healthcare-cleaning')->name('healthcare-cleaning');

Route::view('/hotel-housekeeping-services', 'pages.hotel-housekeeping-services')->name('hotel-housekeeping-services');

Route::view('/institution-cleaning', 'pages.institution-cleaning')->name('institution-cleaning');

Route::view('/job-listings', 'pages.job-listings')->name('job-listings');

Route::view('/office-cleaning', 'pages.office-cleaning')->name('office-cleaning');

Route::view('/pest-control', 'pages.pest-control')->name('pest-control');

Route::view('/high-pressure-jetwash', 'pages.high-pressure-jetwash')->name('high-pressure-jetwash');

Route::view('/floor-scrubbing', 'pages.floor-scrubbing')->name('floor-scrubbing');

Route::view('/landscape-management', 'pages.landscape-management')->name('landscape-management');

Route::view('/floor-polishing', 'pages.floor-polishing')->name('floor-polishing');

Route::view('/disinfecting-services', 'pages.disinfecting-services')->name('disinfecting-services');

Route::view('/carpet-cleaning', 'pages.carpet-cleaning')->name('carpet-cleaning');

Route::view('/electrical-works', 'pages.electrical-works')->name('electrical-works');

Route::view('/anti-microbial', 'pages.anti-microbial')->name('anti-microbial');

Route::view('/robotic-cleaning', 'pages.robotic-cleaning')->name('robotic-cleaning');

Route::view('/portfolio', 'pages.portfolio')->name('portfolio');

Route::view('/pricing', 'pages.pricing')->name('pricing');

Route::view('/project-detail', 'pages.project-detail')->name('project-detail');

Route::view('/service-details', 'pages.service-details')->name('service-details');

Route::view('/service', 'pages.service')->name('service');

Route::view('/team', 'pages.team')->name('team');

Route::view('/terms-of-use', 'pages.terms-of-use')->name('terms-of-use');

Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');

Route::view('/testimonial', 'pages.testimonial')->name('testimonial');

Route::view('/coming-soon', 'pages.coming-soon')->name('coming-soon');

Route::view('/value-added-services', 'pages.value-added-services')->name('value-added-services');

Route::post('/quote', [QuoteRequestController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('quote.store');
