<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="#">
            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="">
            <span>Gallery </span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>

    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li>
                    <a href="{{ route('home') }}" class="iq-waves-effect">
                        <i class="ri-home-4-line"></i> <span>Home</span>
                    </a>
                </li>
                @include('layouts.menu')
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
