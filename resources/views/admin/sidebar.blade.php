   
   
   <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img  style="width: 50px" alt="Midone - HTML Admin Template" class="w-6"
                src="{{url('../public/images/logonutresa.png')}}">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler">
                <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
            </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="{{url('/admin')}}" class="menu menu--@yield('NavD')">
                    <div class="menu__icon">
                        <i data-lucide="home"></i>
                    </div>
                    <div class="menu__title">
                        Dashboard
                    </div>
                </a>

            </li>
            <li>
                <a href="{{url('/admin/projects')}}" class="menu @yield('NavD')">
                    <div class="menu__icon">
                        <i data-lucide="box"></i>
                    </div>
                    <div class="menu__title">
                        Projects
                    </div>
                </a>
                
            </li>
            <li>
                <a  class="menu @yield('NavU')" href="{{url('/admin/users')}}">
                    <div class="menu__icon">
                        <i data-lucide="users"></i>
                    </div>
                    <div class="menu__title">
                        Users
                    </div>
                </a>
            </li>

            
            <li>
                <a href="javascript:;" class="menu active">
                    <div class="menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit"
                            data-lucide="edit" class="lucide lucide-edit">
                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </div>
                    <div class="menu__title">
                        Crud
                        <div class="menu__sub-icon ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="http://icewall.left4code.com/page/side-menu/light/crud-data-list" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="users"></i>
                            </div>
                            <div class="menu__title">
                                Users
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/project/add')}}" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="box"></i>

                            </div>
                            <div class="menu__title">
                                Projects
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/admin/areas')}}" class="menu">
                            <div class="menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trello" data-lucide="trello" class="lucide lucide-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                            </div>
                            <div class="menu__title">
                                Areas
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/admin/business')}}" class="menu @yield('NavB')">
                            <div class="menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="layout" data-lucide="layout" class="lucide lucide-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                            <div class="menu__title">
                                Business
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>

    @section('siderbar')
    <nav class="side-nav">
        <ul>
            <li>
                <a href="{{url('/admin')}}" class="side-menu @yield('NavD')">
                    <div class="side-menu__icon">
                        <i data-lucide="home"></i>
                    </div>
                    <div class="side-menu__title">
                        Dashboard
                        
                    </div>
                </a>
                
            </li>
            <li>
                <a href="{{url('/admin/projects')}}" class="side-menu @yield('NavP')">
                    <div class="side-menu__icon">
                        <i data-lucide="box"></i>
                    </div>
                    <div class="side-menu__title">
                        Projects
                        
                    </div>
                </a>
                
            </li>
            
            <li>
                <a href="{{url('/admin/users')}}"class="side-menu @yield('NavU')">
                    <div class="side-menu__icon">
                        <i data-lucide="users"></i>
                    </div>
                    <div class="side-menu__title">
                        Users
                        
                    </div>
                </a>
                
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit"
                            data-lucide="edit" class="lucide lucide-edit">
                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </div>
                    <div class="side-menu__title">
                        Crud
                        <div class="side-menu__sub-icon ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{url('/admin/project/add')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-lucide="users"></i>
                            </div>
                            <div class="side-menu__title">
                                Users
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="http://icewall.left4code.com/page/side-menu/light/crud-form" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-lucide="box"></i>

                            </div>
                            <div class="side-menu__title">
                                Projects
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/admin/areas')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trello" data-lucide="trello" class="lucide lucide-trello"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect></svg>
                            </div>
                            <div class="side-menu__title">
                                Areas
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/admin/business')}}" class="side-menu @yield('NavB')">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="layout" data-lucide="layout" class="lucide lucide-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                business
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </nav>

    @endsection