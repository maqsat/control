<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="/monster_admin/assets/images/users/1.jpg" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text">
                <a href="#">{{--{{ Auth::user()->login }}--}}</a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Основные</li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-folder-multiple"></i><span class="hide-menu">Проекты</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/project">Все проекты</a></li>
                        @foreach(\App\Models\Status::whereParentId(0)->get() as $item)
                            <li><a href="/project?program={{ $item->id }}">{{ str_limit($item->title,'20','...') }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="/page" aria-expanded="false">
                        <i class="mdi mdi-file-document"></i>
                        <span class="hide-menu">Страницы</span>
                    </a>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">{{ __('app.menu') }}</li>
                <li>
                    <a href="/profile" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">Профиль</span>
                    </a>
                </li>
                <li>
                    <a href="/logout" aria-expanded="false">
                        <i class="mdi mdi-logout"></i>
                        <span class="hide-menu">{{ __('app.logout') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
        