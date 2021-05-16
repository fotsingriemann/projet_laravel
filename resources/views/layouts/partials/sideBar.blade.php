<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active" >
                    <a href="index.html#">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboards
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('admin/entreprise')}}">
                                <!-- <i class="metismenu-icon"></i> -->
                                Entreprises
                                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                            </a>
                            
                        </li>
                        

                        <li>
                            <a href="{{url('admin/engin')}}">
                                <!-- <i class="metismenu-icon"></i> -->
                                Engins
                                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                            </a>
                            
                        </li>

                        <li>
                            <a href="{{url('admin/engindoc')}}">
                                <!-- <i class="metismenu-icon"></i> -->
                                Docs engin
                                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                            </a>
                            
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>  