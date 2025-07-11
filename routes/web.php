<?php

// use App\Http\Controllers\Auth\ForgotPasswordController;
// use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PagesController;



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/send-sms', [SMSController::class, 'sendTestSMS']);

// In routes/web.php
Route::get('/send-otp', function () {
    return view('send-otp'); // Display the form
});


Route::post('/send-otp', [SMSController::class, 'sendOTP']);

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/admin/login', [AuthController::class, 'login'])->name('login.submit');

// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/home', [HomeController::class, 'homePage'])->name('home');
Route::get('/', [HomeController::class, 'homePage']);
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/student-register', [HomeController::class, 'studentRegister'])->name('student-register');
Route::get('/student-login', [HomeController::class, 'studentLogin'])->name('student-login');
Route::get('/student', [HomeController::class, 'student'])->name('student');
Route::get('/explr/school/programs', [HomeController::class, 'explrSchoolPrograms'])->name('explr_school_Programs');
Route::get('/partner', [HomeController::class, 'partner'])->name('partner');
Route::get('/institutions', [HomeController::class, 'institutions'])->name('institutions');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/blogs-pages', [HomeController::class, 'blogs'])->name('blogs-pages');
// Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/search', [ProgramController::class, 'search'])->name('search');

Route::get('/web', [HomeController::class, 'web'])->name('web');
Route::get('/webinar', [HomeController::class, 'webinar'])->name('webinar');
Route::get('/webinar/learnmore', [HomeController::class, 'webinarLearnmore'])->name('webinar.learnmore');
Route::get('/webinar/readmore', [HomeController::class, 'webinarReadmore'])->name('webinar.readmore');
Route::get('/privacy/policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/edux-Fees', [HomeController::class, 'eduxFees'])->name('eduxfees');
Route::get('/term-and-condition', [HomeController::class, 'termAndCondition'])->name('term.and.condition');


Route::middleware(['auth'])->group(function () {

    // Dashboard Routes
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/admin/pages/edit_privacy', [PagesController::class, 'edit_privacy'])->name('pages.edit_privacy');
    Route::get('/admin/pages/edit_term', [PagesController::class, 'edit_term'])->name('pages.edit_term');

    // Show profile (viewing the profile)
    Route::get('/admin/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/admin/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/admin/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/admin/profile', [ProfileController::class, 'show'])->name('admin.profile');
    Route::get('/admin/profile/{id}', [ProfileController::class, 'show'])->name('profile');
    Route::get('/admin/profile', [ProfileController::class, 'show'])->name('profile.show');


    // Institute Routes/city list
    Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
    Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
    Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
    Route::get('/cities/edit/{id}', [CityController::class, 'edit'])->name('cities.edit');
    Route::post('/cities/update/{id}', [CityController::class, 'update'])->name('cities.update');
    Route::delete('/city/delete/{id}', [CityController::class, 'destroy'])->name('city.delete');
    Route::get('/cities/{id}', [CityController::class, 'show']);

    // Institute Routes/country list
    Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
    Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
    Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');
    Route::get('/countries/edit/{id}', [CountryController::class, 'edit'])->name('countries.edit');
    Route::post('/countries/update/{id}', [CountryController::class, 'update'])->name('countries.update');
    Route::delete('/country/delete/{id}', [CountryController::class, 'destroy'])->name('country.delete');
    // Route::get('/admin/countries/{id}', [CountryController::class, 'show'])->name('countries.show');
    Route::get('/countries/{id}', [CountryController::class, 'show'])->name('countries.show');


    // Institute Routes/college list
    Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');
    Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');
    Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store');
    Route::get('/colleges/edit/{id}', [CollegeController::class, 'edit'])->name('colleges.edit');
    Route::post('/colleges/update/{id}', [CollegeController::class, 'update'])->name('colleges.update');
    Route::delete('/college/delete/{id}', [CollegeController::class, 'destroy'])->name('college.delete');
    Route::delete('/colleges/{id}', [CollegeController::class, 'destroy'])->name('colleges.destroy');
    // Route::get('/admin/colleges/{id}', [CollegeController::class, 'show'])->name('colleges.show');
    Route::get('/colleges/{id}', [CollegeController::class, 'show']);


    // Institute Routes/schools list
    Route::get('/schools', [SchoolController::class, 'index'])->name('school.index');
    Route::get('/schools/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::post('/schools', [SchoolController::class, 'store'])->name('schools.store');
    Route::get('/schools/edit/{id}', [SchoolController::class, 'edit'])->name('schools.edit');
    Route::post('/schools/update/{id}', [SchoolController::class, 'update'])->name('schools.update');
    Route::delete('/school/delete/{id}', [SchoolController::class, 'destroy'])->name('school.delete');
    // Route::get('/admin/schools/{id}', [SchoolController::class, 'show'])->name('schools.show');
    Route::get('/schools/{id}', [SchoolController::class, 'show']);



    // Student Routes
    Route::get('/students-list', [StudentController::class, 'index'])->name('students-list');
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
    Route::post('/students/{id}/toggle-status', [StudentController::class, 'toggleStatus']);



    // discover_program Routes
    Route::get('/discover_program-list', [ProgramController::class, 'index'])->name('discover_program-list');
    Route::get('/discover_program', [ProgramController::class, 'index'])->name('discover_program.index');
    Route::get('/discover_program/create', [ProgramController::class, 'create'])->name('discover_program.create');
    Route::post('/discover_program', [ProgramController::class, 'store'])->name('discover_program.store');
    Route::get('/discover_program/{id}', [ProgramController::class, 'show'])->name('discover_program.show');
    Route::get('/discover_program/{program}/edit', [ProgramController::class, 'edit'])->name('discover_program.edit');
    Route::put('/discover_program/{id}', [ProgramController::class, 'update'])->name('discover_program.update');
    Route::delete('/discover_program/{discover_program}', [ProgramController::class, 'destroy'])->name('discover_program.destroy');
    // Route::post('/discover_program/{id}/toggle-status', [ProgramController::class, 'toggleStatus']);



    // Partner Routes
    Route::get('/partners-list', [PartnerController::class, 'index'])->name('partners-list');
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
    Route::post('/partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::get('partners/{id}', [PartnerController::class, 'show'])->name('partners.show');
    Route::get('/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
    Route::put('/partners/{partner}', [PartnerController::class, 'update'])->name('partners.update');
    Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
    Route::post('/partners/{partner}/toggle-status', [PartnerController::class, 'toggleStatus'])->name('partners.toggle-status');

    // Enquiry Routes
    Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{id}', [EnquiryController::class, 'show'])->name('enquiries.show');
    Route::post('enquiries/{id}/toggle-status', [EnquiryController::class, 'toggleStatus'])->name('enquiries.toggleStatus');
    Route::delete('/enquiries/{id}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');
    Route::get('/enquiries-list', [EnquiryController::class, 'index'])->name('enquiries-list');


    // Manage Routes
    Route::get('/manage/home', [ManageController::class, 'home'])->name('manage-home');
    Route::get('/manage/about', [ManageController::class, 'about'])->name('manage-about');
    Route::get('/manage/contact', [ManageController::class, 'contact'])->name('manage-contact');


    // Blog Routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('create-blog'); // Show create blog form
    Route::post('/blogs', [BlogController::class, 'store'])->name('store-blog'); // Store blog
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('edit-blog');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::post('/blogs/{blog}/toggle-status', [BlogController::class, 'toggleStatus'])->name('blogs.toggle-status');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

    // Subscription Routes
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('/subscriptions/{id}', [SubscriptionController::class, 'show']);
    Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])->name('subscription.destroy');
    // In your routes/web.php, add a route to handle status updates
    Route::post('/update-status/subscription/{id}', [SubscriptionController::class, 'updateStatus'])->name('subscription.updateStatus');


    // Payment Routes
    Route::get('/payments/received', [PaymentController::class, 'received'])->name('received-payments');
    Route::get('/payments/failed', [PaymentController::class, 'failed'])->name('failed-payments');
    Route::get('/payments/setup', [PaymentController::class, 'setup'])->name('payment-setup');

    // Notification Routes
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::post('/notifications', [NotificationController::class, 'store'])->name('notifications.store');

    // Settings Routes
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // Home Route


});
