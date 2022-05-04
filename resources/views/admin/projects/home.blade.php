@extends('admin.master')

@section('title', 'Projects')

@section('NavP', 'side-menu--active')

@section('breadcrumb')
<li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="{{ url('/admin/projects')}}">Projects</a></li>

@endsection
@section('content')

<div class="grid grid-cols-12 gap-6 mt-8">
  <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
      <h2 class="intro-y text-lg font-medium mr-auto mt-2">Projects</h2>
      <!-- BEGIN: File Manager Menu -->
      <div class="intro-y box p-5 mt-6">
          <div class="mt-1">
              <a href="" class="flex items-center px-3 py-2 rounded-md bg-primary text-white font-medium">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="image" class="lucide lucide-image w-4 h-4 mr-2" data-lucide="image">
                      <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                      <circle cx="8.5" cy="8.5" r="1.5"></circle>
                      <polyline points="21 15 16 10 5 21"></polyline>
                  </svg> Images
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="video" class="lucide lucide-video w-4 h-4 mr-2" data-lucide="video">
                      <polygon points="23 7 16 12 23 17 23 7"></polygon>
                      <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                  </svg> Videos
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="file" class="lucide lucide-file w-4 h-4 mr-2" data-lucide="file">
                      <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                      <polyline points="14 2 14 8 20 8"></polyline>
                  </svg> Documents
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="users" class="lucide lucide-users w-4 h-4 mr-2" data-lucide="users">
                      <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                      <path d="M16 3.13a4 4 0 010 7.75"></path>
                  </svg> Shared
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="trash" class="lucide lucide-trash w-4 h-4 mr-2" data-lucide="trash">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                  </svg> Trash
              </a>
          </div>
          <div class="border-t border-slate-200 dark:border-darkmode-400 mt-4 pt-4">
              <a href="" class="flex items-center px-3 py-2 rounded-md">
                  <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Custom Work
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <div class="w-2 h-2 bg-success rounded-full mr-3"></div> Important Meetings
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <div class="w-2 h-2 bg-warning rounded-full mr-3"></div> Work
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Design
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <div class="w-2 h-2 bg-danger rounded-full mr-3"></div> Next Week
              </a>
              <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="plus" class="lucide lucide-plus w-4 h-4 mr-2" data-lucide="plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg> Add New Label
              </a>
          </div>
      </div>
      <!-- END: File Manager Menu -->
  </div>



  <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
      <!-- BEGIN: File Manager Filter -->
      <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
          <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  icon-name="search"
                  class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500"
                  data-lucide="search">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
              <input type="text" class="form-control w-full sm:w-64 box px-10" placeholder="Search files">
              <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center"
                  data-tw-placement="bottom-start">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      icon-name="chevron-down"
                      class="lucide lucide-chevron-down dropdown-toggle w-4 h-4 cursor-pointer text-slate-500"
                      role="button" aria-expanded="false" data-tw-toggle="dropdown" data-lucide="chevron-down">
                      <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
                  <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                      <div class="dropdown-content">
                          <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                              <div class="col-span-6">
                                  <label for="input-filter-1" class="form-label text-xs">File Name</label>
                                  <input id="input-filter-1" type="text" class="form-control flex-1"
                                      placeholder="Type the file name">
                              </div>
                              <div class="col-span-6">
                                  <label for="input-filter-2" class="form-label text-xs">Shared With</label>
                                  <input id="input-filter-2" type="text" class="form-control flex-1"
                                      placeholder="example@gmail.com">
                              </div>
                              <div class="col-span-6">
                                  <label for="input-filter-3" class="form-label text-xs">Created At</label>
                                  <input id="input-filter-3" type="text" class="form-control flex-1"
                                      placeholder="Important Meeting">
                              </div>
                              <div class="col-span-6">
                                  <label for="input-filter-4" class="form-label text-xs">Size</label>
                                  <select id="input-filter-4" class="form-select flex-1">
                                      <option>10</option>
                                      <option>25</option>
                                      <option>35</option>
                                      <option>50</option>
                                  </select>
                              </div>
                              <div class="col-span-12 flex items-center mt-3">
                                  <button class="btn btn-secondary w-32 ml-auto">Create Filter</button>
                                  <button class="btn btn-primary w-32 ml-2">Search</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="w-full sm:w-auto flex">
            <a href="{{url('/admin/project/add')}}" class="btn btn-primary shadow-md mr-2" >Upload New Project</a>
              <div class="dropdown">
                  <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                      <span class="w-5 h-5 flex items-center justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" icon-name="plus" class="lucide lucide-plus w-4 h-4"
                              data-lucide="plus">
                              <line x1="12" y1="5" x2="12" y2="19"></line>
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                      </span>
                  </button>
                  <div class="dropdown-menu w-40">
                      <ul class="dropdown-content">
                          <li>
                              <a href="" class="dropdown-item">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" icon-name="file" data-lucide="file"
                                      class="lucide lucide-file w-4 h-4 mr-2">
                                      <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z">
                                      </path>
                                      <polyline points="14 2 14 8 20 8"></polyline>
                                  </svg> Share Files
                              </a>
                          </li>
                          <li>
                              <a href="" class="dropdown-item">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" icon-name="settings" data-lucide="settings"
                                      class="lucide lucide-settings w-4 h-4 mr-2">
                                      <path
                                          d="M12.22 2h-.44a2 2 0 00-2 2v.18a2 2 0 01-1 1.73l-.43.25a2 2 0 01-2 0l-.15-.08a2 2 0 00-2.73.73l-.22.38a2 2 0 00.73 2.73l.15.1a2 2 0 011 1.72v.51a2 2 0 01-1 1.74l-.15.09a2 2 0 00-.73 2.73l.22.38a2 2 0 002.73.73l.15-.08a2 2 0 012 0l.43.25a2 2 0 011 1.73V20a2 2 0 002 2h.44a2 2 0 002-2v-.18a2 2 0 011-1.73l.43-.25a2 2 0 012 0l.15.08a2 2 0 002.73-.73l.22-.39a2 2 0 00-.73-2.73l-.15-.08a2 2 0 01-1-1.74v-.5a2 2 0 011-1.74l.15-.09a2 2 0 00.73-2.73l-.22-.38a2 2 0 00-2.73-.73l-.15.08a2 2 0 01-2 0l-.43-.25a2 2 0 01-1-1.73V4a2 2 0 00-2-2z">
                                      </path>
                                      <circle cx="12" cy="12" r="3"></circle>
                                  </svg> Settings
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- END: File Manager Filter -->
      <!-- BEGIN: Directory & Files -->
      <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
        <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                <div class="absolute left-0 top-0 mt-3 ml-3">
                    <input class="form-check-input border border-slate-500" type="checkbox">
                </div>
                <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                    <div class="file__icon__file-name">PHP</div>
                </a>
                <a href="" class="block font-medium mt-4 text-center truncate">Routes.php</a>
                <div class="text-slate-500 text-xs text-center mt-0.5">1 KB</div>
                <div class="absolute top-0 right-0 mr-2 mt-3 dropdown ml-auto">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                        data-tw-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" icon-name="more-vertical" data-lucide="more-vertical"
                            class="lucide lucide-more-vertical w-5 h-5 text-slate-500">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                    </a>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="users"
                                        data-lucide="users" class="lucide lucide-users w-4 h-4 mr-2">
                                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 010 7.75"></path>
                                    </svg> Share File
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="trash"
                                        data-lucide="trash" class="lucide lucide-trash w-4 h-4 mr-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                        </path>
                                    </svg> Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


      <!-- END: Directory & Files -->
      <!-- BEGIN: Pagination -->
      <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-6">
          <nav class="w-full sm:w-auto sm:mr-auto">
              <ul class="pagination">
                  <li class="page-item">
                      <a class="page-link" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" icon-name="chevrons-left"
                              class="lucide lucide-chevrons-left w-4 h-4" data-lucide="chevrons-left">
                              <polyline points="11 17 6 12 11 7"></polyline>
                              <polyline points="18 17 13 12 18 7"></polyline>
                          </svg>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" icon-name="chevron-left"
                              class="lucide lucide-chevron-left w-4 h-4" data-lucide="chevron-left">
                              <polyline points="15 18 9 12 15 6"></polyline>
                          </svg>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">...</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active">
                      <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">...</a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" icon-name="chevron-right"
                              class="lucide lucide-chevron-right w-4 h-4" data-lucide="chevron-right">
                              <polyline points="9 18 15 12 9 6"></polyline>
                          </svg>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" icon-name="chevrons-right"
                              class="lucide lucide-chevrons-right w-4 h-4" data-lucide="chevrons-right">
                              <polyline points="13 17 18 12 13 7"></polyline>
                              <polyline points="6 17 11 12 6 7"></polyline>
                          </svg>
                      </a>
                  </li>
              </ul>
          </nav>
          <select class="w-20 form-select box mt-3 sm:mt-0">
              <option>10</option>
              <option>25</option>
              <option>35</option>
              <option>50</option>
          </select>
      </div>
      <!-- END: Pagination -->
  </div>
</div>
@endsection


