<?php

use App\Http\Controllers\Admin\ParticipationsPagesController;
use App\Http\Controllers\Admin\ContentTimesTopicController;
use App\Http\Controllers\Admin\SourceLiveStreamController;
use App\Http\Controllers\Admin\ConferenceBannerController;
use App\Http\Controllers\Admin\SubmissionBannerController;
use App\Http\Controllers\Admin\GuidelinesBannerController;
use App\Http\Controllers\Admin\EventInformationController;
use App\Http\Controllers\Admin\ListRegistrationController;
use App\Http\Controllers\Admin\CommitteBannerController;
use App\Http\Controllers\Admin\DownloadBannerController;
use App\Http\Controllers\Admin\ImportantDateController;
use App\Http\Controllers\Admin\TemplateFormController;
use App\Http\Controllers\Admin\WelcomePagesController;
use App\Http\Controllers\Admin\BankPaymentController;
use App\Http\Controllers\Admin\CmsDashboardController;
use App\Http\Controllers\Admin\GuidelinesController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\HomeBannerController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\Admin\LiveBannerController;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LinkPaperController;
use App\Http\Controllers\Admin\CommitteeController;
use App\Http\Controllers\Admin\TimeVanueController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\MapsController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    // cheking route
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');

    Route::middleware(['auth' , 'check.admin'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/system-logo', [DashboardController::class, 'system_logo'])->name('system_logo');

        // SUPER ADMIN
        Route::prefix('super-admins')->controller(SuperAdminController::class)->group(function(){
            Route::get('/', 'index')->name('super-admins.index');
            Route::get('/create', 'create')->name('super-admins.create');
            Route::post('/create/store', 'store')->name('super-admins.store');
            Route::get('/edit/{id}', 'edit')->name('super-admins.edit');
            Route::put('/edit/update/{id}', 'update')->name('super-admins.update');
            Route::get('/show/{id}', 'show')->name('super-admins.show');
            Route::delete('/destroy/{id}', 'destroy')->name('super-admins.destroy');
        });

        // ADMIN
        Route::prefix('admins')->controller(AdminController::class)->group(function(){
            Route::get('/', 'index')->name('admins.index');
            Route::get('/create', 'create')->name('admins.create');
            Route::post('/create/store', 'store')->name('admins.store');
            Route::get('/edit/{id}', 'edit')->name('admins.edit');
            Route::put('/edit/update/{id}', 'update')->name('admins.update');
            Route::get('/show/{id}', 'show')->name('admins.show');
            Route::delete('/destroy/{id}', 'destroy')->name('admins.destroy');
        });

        // LOGO
        Route::prefix('logo')->controller(LogoController::class)->group(function(){
            Route::get('/', 'index')->name('logo.index');
            Route::put('/edit/update/{id}', 'update')->name('logo.update');
        });

        // TEMPLATE FORM
        Route::prefix('template-forms')->controller(TemplateFormController::class)->group(function(){
            Route::get('/', 'index')->name('template-forms.index');
            Route::get('/create', 'create')->name('template-forms.create');
            Route::post('/create/store', 'store')->name('template-forms.store');
            Route::get('/edit/{id}', 'edit')->name('template-forms.edit');
            Route::put('/edit/update/{id}', 'update')->name('template-forms.update');
            Route::get('/show/{id}', 'show')->name('template-forms.show');
            Route::delete('/destroy/{id}', 'destroy')->name('template-forms.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('template-forms.update.content');
        });

        // MAPS
        Route::prefix('maps')->controller(MapsController::class)->group(function(){
            Route::get('/', 'index')->name('maps.index');
            Route::put('/edit/update/{id}', 'update')->name('maps.update');
        });

        // WELCOME PAGES
        Route::prefix('welcome-pages')->controller(WelcomePagesController::class)->group(function(){
            Route::get('/', 'index')->name('welcome-pages.index');
            Route::put('/edit/update/{id}', 'update')->name('welcome-pages.update');
        });

        // PARTICIPATIONS PAGES
        Route::prefix('participations_pages')->controller(ParticipationsPagesController::class)->group(function(){
            Route::get('/', 'index')->name('participations_pages.index');
            Route::put('/edit/update/{id}', 'update')->name('participations_pages.update');
        });

        // BANK PAYMENTS PAGES
        Route::prefix('bank-payments')->controller(BankPaymentController::class)->group(function(){
            Route::get('/', 'index')->name('bank-payments.index');
            Route::put('/edit/update', 'update')->name('bank-payments.update');
        });

        // GUIDELINES
        Route::prefix('guidelines')->controller(GuidelinesController::class)->group(function(){
            Route::get('/', 'index')->name('guidelines.index');
            Route::get('/create', 'create')->name('guidelines.create');
            Route::post('/create/store', 'store')->name('guidelines.store');
            Route::get('/edit/{id}', 'edit')->name('guidelines.edit');
            Route::put('/edit/update/{id}', 'update')->name('guidelines.update');
            Route::get('/show/{id}', 'show')->name('guidelines.show');
            Route::delete('/destroy/{id}', 'destroy')->name('guidelines.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('guidelines.update.content');
        });

        // LIVE STREAM
        Route::prefix('live-stream')->controller(SourceLiveStreamController::class)->group(function(){
            Route::get('/', 'index')->name('live-stream.index');
            Route::get('/create', 'create')->name('live-stream.create');
            Route::post('/create/store', 'store')->name('live-stream.store');
            Route::get('/edit/{id}', 'edit')->name('live-stream.edit');
            Route::put('/edit/update/{id}', 'update')->name('live-stream.update');
            Route::get('/show/{id}', 'show')->name('live-stream.show');
            Route::delete('/destroy/{id}', 'destroy')->name('live-stream.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('live-stream.update.content');
        });

        // Speaker
        Route::prefix('speakers')->controller(SpeakerController::class)->group(function(){
            Route::get('/', 'index')->name('speakers.index');
            Route::get('/create', 'create')->name('speakers.create');
            Route::post('/create/store', 'store')->name('speakers.store');
            Route::get('/edit/{id}', 'edit')->name('speakers.edit');
            Route::put('/edit/update/{id}', 'update')->name('speakers.update');
            Route::get('/show/{id}', 'show')->name('speakers.show');
            Route::delete('/destroy/{id}', 'destroy')->name('speakers.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('speakers.update.content');
        });

        // Important Date
        Route::prefix('important-dates')->controller(ImportantDateController::class)->group(function(){
            Route::get('/', 'index')->name('important-dates.index');
            Route::get('/create', 'create')->name('important-dates.create');
            Route::post('/create/store', 'store')->name('important-dates.store');
            Route::get('/edit/{id}', 'edit')->name('important-dates.edit');
            Route::put('/edit/update/{id}', 'update')->name('important-dates.update');
            Route::get('/show/{id}', 'show')->name('important-dates.show');
            Route::delete('/destroy/{id}', 'destroy')->name('important-dates.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('important-dates.update.content');
        });

        // List Registration
        Route::prefix('list_registrations')->controller(ListRegistrationController::class)->group(function(){
            Route::get('/', 'index')->name('list_registrations.index');
            Route::get('/create', 'create')->name('list_registrations.create');
            Route::post('/create/store', 'store')->name('list_registrations.store');
            Route::get('/edit/{id}', 'edit')->name('list_registrations.edit');
            Route::put('/edit/update/{id}', 'update')->name('list_registrations.update');
            Route::get('/show/{id}', 'show')->name('list_registrations.show');
            Route::delete('/destroy/{id}', 'destroy')->name('list_registrations.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('list_registrations.update.content');
        });

        //-------------------------------------------------------------------------------------------------------------//
        // BANNER GROUPS OPEN
        //-------------------------------------------------------------------------------------------------------------//

        // HOME BANNER
        Route::prefix('home-banners')->controller(HomeBannerController::class)->group(function(){
            Route::get('/', 'index')->name('home-banners.index');
            Route::put('/edit/update', 'update')->name('home-banners.update');
        });

        // BANNER COMMITTEES
        Route::prefix('committe-banners')->controller(CommitteBannerController::class)->group(function(){
            Route::get('/', 'index')->name('committe-banners.index');
            Route::put('/edit/update', 'update')->name('committe-banners.update');
        });

        // BANNER CONFERENCE
        Route::prefix('conference-banners')->controller(ConferenceBannerController::class)->group(function(){
            Route::get('/', 'index')->name('conference-banners.index');
            Route::put('/edit/update', 'update')->name('conference-banners.update');
        });

        // BANNER SUBMISSION
        Route::prefix('submission-banners')->controller(SubmissionBannerController::class)->group(function(){
            Route::get('/', 'index')->name('submission-banners.index');
            Route::put('/edit/update', 'update')->name('submission-banners.update');
        });

        // BANNER DOWNLOAD
        Route::prefix('download-banners')->controller(DownloadBannerController::class)->group(function(){
            Route::get('/', 'index')->name('download-banners.index');
            Route::put('/edit/update', 'update')->name('download-banners.update');
        });

        // BANNER GUIDELINES
        Route::prefix('guidelines-banners')->controller(GuidelinesBannerController::class)->group(function(){
            Route::get('/', 'index')->name('guidelines-banners.index');
            Route::put('/edit/update', 'update')->name('guidelines-banners.update');
        });

        // BANNER LIVE STREAM
         Route::prefix('live-banners')->controller(LiveBannerController::class)->group(function(){
            Route::get('/', 'index')->name('live-banners.index');
            Route::put('/edit/update', 'update')->name('live-banners.update');
        });

        // Content Times Topic
        Route::prefix('times-topics')->controller(ContentTimesTopicController::class)->group(function(){
            Route::get('/', 'index')->name('times-topics.index');
            Route::put('/edit/update', 'update')->name('times-topics.update');
        });

        //-------------------------------------------------------------------------------------------------------------//
        // BANNER GROUPS CLOSE
        //-------------------------------------------------------------------------------------------------------------//

        // LINK PAPER
        Route::prefix('link-papers')->controller(LinkPaperController::class)->group(function(){
            Route::get('/', 'index')->name('link-papers.index');
            Route::put('/edit/update', 'update')->name('link-papers.update');
        });

        // EVENT INFORMATION
        Route::prefix('event-informations')->controller(EventInformationController::class)->group(function(){
            Route::get('/', 'index')->name('event-informations.index');
            Route::put('/edit/update', 'update')->name('event-informations.update');
        });

        // Tagline/Content Committee
        Route::prefix('tagline-committees')->controller(CommitteeController::class)->group(function(){
            // TAGLINE/CONTENT
            Route::get('/', 'tagline_index')->name('tagline-committees.index');
            Route::put('/edit/taglineupdate', 'tagline_update')->name('tagline-committees.update');
            // COMMITTEE
            Route::get('/committee', 'committee_index')->name('tagline-committees.committee.index');
            Route::put('/edit/committee-update', 'committee_update')->name('tagline-committees.committee.update');
            // REVIEWER END EDITOR
            Route::get('/reviewer-and-editor', 'reviewer_and_editor_index')->name('tagline-committees.reviewer-and-editor.index');
            Route::put('/edit/reviewer-and-editor-update', 'reviewer_and_editor_update')->name('tagline-committees.reviewer-and-editor.update');
            // STEERING COMMITTEE
            Route::get('/steering-committee', 'steering_committee_index')->name('tagline-committees.steering-committee.index');
            Route::put('/edit/steering-committee-update', 'steering_committee_update')->name('tagline-committees.steering-committee.update');
            // ORGANIZING COMMITTEE
            Route::get('/organizing-committee', 'organizing_committee_index')->name('tagline-committees.organizing-committee.index');
            Route::put('/edit/organizing-committee-update', 'organizing_committee_update')->name('tagline-committees.organizing-committee.update');
        });

        // Tagline/Content SUBMISSION
        Route::prefix('tagline-submissions')->controller(SubmissionController::class)->group(function(){
            // TAGLINE/CONTENT
            Route::get('/', 'tagline_index',)->name('tagline-submissions.index');
            Route::put('/edit/taglineupdate', 'tagline_update')->name('tagline-submissions.update');
            // PUBLICATION
            Route::get('/publication', 'publication_index')->name('tagline-submissions.publication.index');
            Route::put('/edit/publication-update', 'publication_update')->name('tagline-submissions.publication.update');
            // SUBMISSION
            Route::get('/submission', 'submission_index')->name('tagline-submissions.submission.index');
            Route::put('/edit/submission-update', 'submission_update')->name('tagline-submissions.submission.update');
        });

        // INFORMATION AND SOCIAL MEDIA
        Route::prefix('informations')->controller(InformationController::class)->group(function(){
            Route::get('/', 'index')->name('informations.index');
            Route::get('/create', 'create')->name('informations.create');
            Route::post('/create/store', 'store')->name('informations.store');
            Route::get('/edit/{id}', 'edit')->name('informations.edit');
            Route::put('/edit/update/{id}', 'update')->name('informations.update');
            Route::get('/show/{id}', 'show')->name('informations.show');
            Route::delete('/destroy/{id}', 'destroy')->name('informations.destroy');

            // PARENT ROUTES
            Route::get('/fontawsome', 'fontawsome')->name('informations.fontawsome');
            Route::put('/update/content', 'content')->name('informations.update.content');
        });

        // CMS DASHBOARD
        Route::prefix('cms-dashboards')->controller(CmsDashboardController::class)->group(function(){
            Route::get('/', 'index')->name('cms-dashboards.index');
            Route::get('/tutorial', 'tutorial')->name('cms-dashboards.tutorial');
            Route::put('/edit/update', 'update')->name('cms-dashboards.update');
        });

        // TIME VANUES
        Route::prefix('time-vanues')->controller(TimeVanueController::class)->group(function(){
            Route::get('/', 'index')->name('time-vanues.index');
            Route::get('/create', 'create')->name('time-vanues.create');
            Route::post('/create/store', 'store')->name('time-vanues.store');
            Route::get('/edit/{id}', 'edit')->name('time-vanues.edit');
            Route::put('/edit/update/{id}', 'update')->name('time-vanues.update');
            Route::get('/show/{id}', 'show')->name('time-vanues.show');
            Route::delete('/destroy/{id}', 'destroy')->name('time-vanues.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('time-vanues.update.content');
        });

        // EVENT
        Route::prefix('events')->controller(EventController::class)->group(function(){
            Route::get('/', 'index')->name('events.index');
            Route::get('/create', 'create')->name('events.create');
            Route::post('/create/store', 'store')->name('events.store');
            Route::get('/edit/{id}', 'edit')->name('events.edit');
            Route::put('/edit/update/{id}', 'update')->name('events.update');
            Route::get('/show/{id}', 'show')->name('events.show');
            Route::delete('/destroy/{id}', 'destroy')->name('events.destroy');

            // PARENT ROUTES
            Route::put('/update/content', 'content')->name('events.update.content');

            // EVENT SCHEDULE
            Route::post('/schedule/store/{id}', 'addScheduleEvent')->name('events.schedule.store');
            Route::get('/schedule/{id}', 'schedule')->name('events.schedule.index');
        });

    });
});
