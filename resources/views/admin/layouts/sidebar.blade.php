<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand py-3">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('template/base-admin/dist/assets/figma-assets/LOGO.png') }}" style="max-width: 125px;" alt="icas-logo">
            </a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm py-3">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('template/base-admin/dist/assets/figma-assets/logo-profil.png') }}" style="max-width: 50px;" alt="icas-logo">
            </a>
        </div>
        <ul class="sidebar-menu mt-4">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

            {{-- <li class="menu-header">CMS WEBSITE</li>
            <li class="dropdown {{ request()->is('admin/logo*' , 'admin/link-papers*' , 'admin/event-informations*' , 'admin/informations*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-list"></i>
                    <span>Other Content</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/logo*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.logo.index') }}">Logo</a></li>
                    <li class="{{ request()->is('admin/link-papers*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.link-papers.index') }}">Link Paper</a></li>
                    <li class="{{ request()->is('admin/event-informations*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.event-informations.index') }}">Event Information</a></li>
                    <li class="{{ request()->is('admin/informations*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.informations.index') }}">Info & Social Media</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->is('admin/home-banners*','admin/welcome-pages*', 'admin/participations_pages', 'admin/maps', 'admin/speakers*' , 'admin/important-dates*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i>
                <span>Home</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/home-banners*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.home-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/maps*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.maps.index') }}">Maps</a></li>
                    <li class="{{ request()->is('admin/speakers*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.speakers.index') }}">Speakers</a></li>
                    <li class="{{ request()->is('admin/welcome-pages*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.welcome-pages.index') }}">Page Welcome</a></li>
                    <li class="{{ request()->is('admin/important-dates*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.important-dates.index') }}">Important Date</a></li>
                    <li class="{{ request()->is('admin/participations_pages*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.participations_pages.index') }}">Page Participation</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->is('admin/conference-banners*', 'admin/bank-payments*', 'admin/times-topics*', 'admin/list_registrations*' , 'admin/time-vanues*' , 'admin/events*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar-alt"></i>
                <span>Conference</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/conference-banners*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.conference-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/events*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.events.index') }}">Event</a></li>
                    <li class="{{ request()->is('admin/times-topics*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.times-topics.index') }}">Times Topic</a></li>
                    <li class="{{ request()->is('admin/time-vanues*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.time-vanues.index') }}">Time Vanue</a></li>
                    <li class="{{ request()->is('admin/bank-payments*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.bank-payments.index') }}">Bank Payment</a></li>
                    <li class="{{ request()->is('admin/list_registrations*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.list_registrations.index') }}">List Registrations</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->is('admin/committe-banners*', 'admin/tagline-committees*', 'admin/tagline-committees.committee*', 'admin/tagline-committees.reviewer-and-editor*', 'admin/tagline-committees.steering-committee*', 'admin/tagline-committees.organizing-committee*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-graduate"></i>
                <span>Committees</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/committe-banners*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.committe-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/tagline-committees') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-committees.index') }}">Tagline</a></li>
                    <li class="{{ request()->is('admin/tagline-committees/committee') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-committees.committee.index') }}">Committee</a></li>
                    <li class="{{ request()->is('admin/tagline-committees/reviewer-and-editor') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-committees.reviewer-and-editor.index') }}">Reviewer And Editors</a></li>
                    <li class="{{ request()->is('admin/tagline-committees/steering-committee') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-committees.steering-committee.index') }}">Steering Committee</a></li>
                    <li class="{{ request()->is('admin/tagline-committees/organizing-committee') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-committees.organizing-committee.index') }}">Organizing Committee</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->is('admin/guidelines*', 'admin/guidelines-banners*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book-open"></i>
                <span>Guidelines</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/guidelines-banners*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.guidelines-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/guidelines*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.guidelines.index') }}">Guidelines</a></li>
                </ul>
            </li> --}}
{{--
            <li class="dropdown {{ request()->is('admin/submission-banners', 'admin/tagline-submissions', 'admin/tagline-submissions/publication', 'admin/tagline-submissions/submission') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bookmark"></i>
                <span>Submission</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/submission-banners') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.submission-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/tagline-submissions') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-submissions.index') }}">Tagline</a></li>
                    <li class="{{ request()->is('admin/tagline-submissions/publication') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-submissions.publication.index') }}">Publication</a></li>
                    <li class="{{ request()->is('admin/tagline-submissions/submission') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tagline-submissions.submission.index') }}">Submission</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown {{ request()->is('admin/template-forms*', 'admin/download-banners*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i>
                <span>Download</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/download-banners*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.download-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/template-forms*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.template-forms.index') }}">Template</a></li>
                </ul>
            </li> --}}
{{--
            <li class="dropdown {{ request()->is('admin/live-stream*', 'admin/live-banners*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-video"></i>
                <span>Live</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/live-banners*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.live-banners.index') }}">Banner</a></li>
                    <li class="{{ request()->is('admin/live-stream*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.live-stream.index') }}">Live Streaming</a></li>
                </ul>
            </li> --}}

            {{-- <li class="menu-header">CMS DASHBOARD</li>
            <li class="dropdown {{ request()->is('admin/cms-dashboards*', 'admin/cms-dashboards/tutorial*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                <span>Setting View</span></a>
                <ul class="dropdown-menu">
                    @if (auth()->user()->role === 'super_admin')
                        <li class="{{ request()->is('admin/cms-dashboards') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.cms-dashboards.index') }}">Setting</a></li>
                    @endif
                    <li class="{{ request()->is('admin/cms-dashboards/tutorial') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.cms-dashboards.tutorial') }}">Tutorial</a></li>
                </ul>
            </li> --}}

            @if (auth()->user()->role === 'super_admin')
            <li class="menu-header">Autentikasi</li>
            <li class="dropdown {{ request()->is('admin/super-admins*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users-cog"></i>
                    <span>User Management</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('admin/super-admins*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.super-admins.index') }}">Super Admin</a></li>
                        <li class="{{ request()->is('admin/admins*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.admins.index') }}">Admin</a></li>
                    </ul>
            </li>
            @endif
            </ul>
        </aside>
    </div>
