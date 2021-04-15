<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            {{--<img src="{{ asset('assets/images/logo.svg') }}" alt="" srcset="">--}}
            {{--<img src="{{ asset('assets/logo-vas.webp') }}" alt="" srcset="" style="width: 150px;">--}}
            <img src="{{ asset('assets/quizci.PNG') }}" alt="" srcset="" style="width: 100%;height: 200%">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class='sidebar-title'>MENU</li>

                <li class="sidebar-item active ">
                    <a href="{{ route('admin') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>

                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('show.questions') }}" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i>
                        <span>Questions</span>
                    </a>

                </li>


                <li class="sidebar-item  ">
                    <a href="{{ route('allabonnes') }}" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i>
                        <span>Abonnes</span>
                    </a>

                </li>

                
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>