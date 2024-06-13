<!--sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <h4 class="nk-menu-text" style="color: #fff;">Spatie Permission</h4>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{config('app.baseURL')}}/home" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <!-- if(Auth::user()->hasDirectPermission('all permission')) -->
                    <li class="nk-menu-item">
                        <a href="{{config('app.baseURL')}}/permissions" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-check-circle"></em></span>
                            <span class="nk-menu-text">Permissions</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <!-- endif -->
                    <li class="nk-menu-item">
                        <a href="{{config('app.baseURL')}}/roles" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-check-circle"></em></span>
                            <span class="nk-menu-text">Roles</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{config('app.baseURL')}}/users" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                            <span class="nk-menu-text">Users</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->