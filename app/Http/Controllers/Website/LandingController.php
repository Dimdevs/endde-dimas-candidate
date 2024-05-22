<?php

namespace App\Http\Controllers\Website;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller as BaseController;


// MODELS
use App\Models\Maps;
use App\Models\Event;
use App\Models\Guidelines;
use App\Models\SourceLive;
use App\Models\ContentEvent;
use App\Models\BankPayment;
use App\Models\TimesVanues;
use App\Models\ContentSpeaker;
use App\Models\ContentCommittee;
use App\Models\ContentSubmission;
use App\Models\ContentTimesTopic;
use App\Models\ContentTimesVanues;
use App\Models\ContentTemplateForm;
use App\Models\ContentImportantDate;
use App\Models\ContentListRegistration;

class LandingController extends BaseController
{
    public function home()
    {
        $meta_title = 'Home';
        $speaker = ContentSpeaker::with('speakers')->first();
        $important_date = ContentImportantDate::with('important_dates')->first();
        return view('website.pages.landing.index', compact('speaker', 'important_date' , 'meta_title'));
    }


    public function conference()
    {
        $meta_title = 'Conference';
        $bankpayment = BankPayment::first();
        $content_times_venue = ContentTimesVanues::with('times_vanues')->first();
        $content_times_topic = ContentTimesTopic::first();
        $content_list_registration = ContentListRegistration::with('list_registrations')->first();
        $content_event = ContentEvent::with('event')->first();
        return view('website.pages.conference.index', compact('bankpayment', 'content_times_topic', 'content_list_registration', 'content_event', 'content_times_venue' , 'meta_title'));
    }

    public function eventDetail($name, $id)
    {
        $meta_title = 'Event Detail';
        $event_detail = Event::with('event_schedule')->first();
        return view('website.pages.conference.detail' , compact('event_detail', 'meta_title'));
    }

    // public function guidelines(Request $request)
    // {
    //     $datas = Guidelines::all();
    //     return view('website.pages.guidelines.index');
    // }

    public function guidelines(Request $request)
    {
        $meta_title = 'Guidelines';
        // SHARE VARIABEL
        $guidelines = Guidelines::all();
        return view('website.pages.guidelines.index', compact('guidelines', 'meta_title'));
    }

    public function guidelinesDetail($id)
{
    $meta_title = 'Guidelines Detail';
    // SHARE VARIABEL
    $guidelines = Guidelines::where('id', $id)->first();
    return view('website.pages.guidelines.detail', compact('meta_title', 'guidelines'));
}



    public function document()
    {
        $meta_title = 'Document';
        // SHARE VARIABEL
        $content_download = ContentTemplateForm::with('template_form')->first();
        return view('website.pages.document.index' , compact('content_download', 'meta_title'));
    }

    public function live()
    {
        $meta_title = 'live';
        $lives_data = SourceLive::with('source_live_streams')->first();
        return view('website.pages.live.index' , compact('lives_data', 'meta_title'));
    }

    public function committees()
    {
        $meta_title = 'Committee';

        $content_committees = ContentCommittee::with('committees')->first();
        return view('website.pages.committees.index' , compact('content_committees', 'meta_title'));
    }

    public function submissions()
    {
        $meta_title = 'Submission';
        $content_submissions = ContentSubmission::with('submissions')->first();
        return view('website.pages.submissions.index', compact('content_submissions', 'meta_title'));
    }
}
