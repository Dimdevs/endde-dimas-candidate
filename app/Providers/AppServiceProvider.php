<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

// MODELS
use App\Models\Maps;
use App\Models\Logo;
use App\Models\TypeView;
use App\Models\LinkPaper;
use App\Models\Information;
use App\Models\WelcomePage;
use App\Models\Cooperation;
use App\Models\CmsDashboard;
use App\Models\ContentSpeaker;
use App\Models\EventInformation;
use App\Models\ContentGuidelines;
use App\Models\ParticipationsPage;
use App\Models\ContentImportantDate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // // // SHARE VARIABEL
        // $logos = Logo::first();
        // $venue_maps = Maps::first();
        // $link_paper = LinkPaper::first();
        // $cooperations = Cooperation::all();
        // $welcome_pages = WelcomePage::first();
        // $type_view = TypeView::with('banners');
        // $cms_dashboard = CmsDashboard::first();
        // $event_informations = EventInformation::first();
        // $participations_pages = ParticipationsPage::first();
        // $informations = Information::with('social_media')->first();
        // $content_speaker = ContentSpeaker::with('speakers')->first();
        // $content_guidelines = ContentGuidelines::with('guidelines')->first();
        // $content_important_date = ContentImportantDate::with('important_dates')->first();

        // // META STATIC
        // $metas = [
        //     'keywords' => 'international conference, applied sciences, icas ipb, ipb university, scientific research, academia, applied research',
        //     'description' => 'Join the International Conference on Applied Sciences (ICAS) organized by IPB University. Discover various applied scientific research in various fields of knowledge at ICAS IPB.',
        // ];

        // // SHARE VARIABEL ON VIEW
        // view()->share('logos', $logos);
        // view()->share('metas', $metas);
        // view()->share('type_view', $type_view);
        // view()->share('link_paper', $link_paper);
        // view()->share('venue_maps', $venue_maps);
        // view()->share('cooperations', $cooperations);
        // view()->share('informations', $informations);
        // view()->share('welcome_pages', $welcome_pages);
        // view()->share('cms_dashboard', $cms_dashboard);
        // view()->share('content_speaker', $content_speaker);
        // view()->share('content_guidelines', $content_guidelines);
        // view()->share('event_informations', $event_informations);
        // view()->share('participations_pages', $participations_pages);
        // view()->share('content_important_date', $content_important_date);
    }
}
