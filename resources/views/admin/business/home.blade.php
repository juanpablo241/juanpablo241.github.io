@extends('admin.master')
@section('title', 'Business')

@section('NavB', 'side-menu--active')

@section('breadcrumb')
<li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a
        href="{{ url('/admin/business')}}">Business</a></li>

@endsection

@section('content')
<h2 class="intro-y text-lg font-medium mt-10">Data List Business</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <div class="intro-y col-span-12 lg:col-span-12" style="width: 100%">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                {!!Form::open(['url'=> '/admin/business/add']) !!}
                <div>
                    <label for="crud-form-1" class="form-label">Business Name</label>
                    {!! Form::text('name', null, ['class'=> 'form-control w-full w-full']) !!}
                </div>
                <div class="mt-3">
                    <label>State</label>
                    {!! Form::select('state', ['Disabled'=>'Disabled', 'Activated' => 'Activated'], ['class'=> 'items
                    ts-input not-full has-items']) !!}
                </div>

                <div class="text-right mt-5">
                    {!! Form::submit ('Save', ['class'=>'btn btn-outline-secondary w-24 mr-1'])!!}
                    <center>
                        <div style="text-align: center; width: 50%;" class="signup">
                            @if(Session::has('message'))
                            <div class="container">
                                <div class="mtop16 alert alert-{{Session::get('typealert')}}" style="display: none;">
                                    {{Session::get('message')}}
                                    @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <script>
                                        $('.alert').slideDown();
                                        serTimeout(function () { $('.alert').slideUp(); }, 10000);
                                    </script>
                                </div>
                            </div>
                            @endif

                        </div>
                    </center>

                </div>


                {!! Form::close() !!}


            </div>
        </div>
        <!-- END: Form Layout -->
    </div>

</div>
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap">ID</th>
                <th class="whitespace-nowrap">BUSINESS NAME</th>
                <th class="text-center whitespace-nowrap">STATUS</th>
                <th class="text-center whitespace-nowrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bus as $buss)
            <tr class="intro-x">

                <td class="text-center">{{ $buss-> id}}</td>

                <td><a class="font-medium whitespace-nowrap">{{ $buss-> name}}</a>
                </td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-success"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                            </path>
                        </svg> {{ $buss-> state}}</div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center"><a class="flex items-center mr-3"
                            href="{{ url('/admin/business/'.$buss->id.'/edit') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide w-4 h-4 mr-1">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                </path>
                            </svg>
                            Edit </a>
                            <a class="flex items-center text-danger" href="{{ url('/admin/business/'.$buss->id.'/delete') }}">

                                <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide w-4 h-4 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                             Delete </a>
                            </div>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>
</div>

</div>


@endsection