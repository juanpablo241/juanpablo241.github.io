@extends('admin.master')

@section('title', 'Add Projects')

@section('NavP', 'side-menu--active')

@section('breadcrumb')
<li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="{{ url('/admin/projects')}}">Projects</a></li>

<li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a href="{{ url('/admin/project/add')}}">Add Projects</a></li>

@endsection
@section('content')
<div class="grid grid-cols-12 gap-6 mt-5" >
    <div class="intro-y col-span-12 lg:col-span-12" style="width: 100%">
        <!-- BEGIN: Form Layout -->
        <div class="intro-y box p-5" >
            {!!Form::open(['url'=> '/admin/project/add']) !!}
            <div>
                <label for="crud-form-1" class="form-label">Project Name</label>
                {!! Form::text('name', null, ['class'=> 'form-control w-full w-full']) !!}
            </div>
            <div class="mt-3">
                <label>Area</label>
                {!! Form::text('area', null, ['class'=> 'tom-select w-full']) !!}
            </div>
            <div>
                <label for="crud-form-1" class="form-label">Coordinator Name</label>
                {!! Form::text('nameC', null, ['class'=> 'form-control w-full']) !!}
            </div>
            <div>
                <label for="crud-form-1" class="form-label">User Name</label>
                <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                {!! Form::text('nameU', null, ['class'=> 'form-control w-full']) !!}

            </div>
        
            
            <div class="mt-3">
                <label>Description</label>
                <div class="mt-2">
                    <div class="editor" style="display: none;">
                        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div action="/file-upload" class="dropzone" style="margin-top: 10px">
                <div class="fallback">
                    {!! Form::file('file', ['class'=> 'custom-file-input', 'id'=> 'customFile']) !!}

                </div>
                <div class="dz-message" data-dz-message>
                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                </div>
            </div>
            
            <div class="text-right mt-5">
                {!! Form::submit ('Save', ['class'=>'btn btn-outline-secondary w-24 mr-1'])!!}
            </div>

            {!! Form::close() !!}
        </div>
        <!-- END: Form Layout -->
    </div>
</div>


@endsection

