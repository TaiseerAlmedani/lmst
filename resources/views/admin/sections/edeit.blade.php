@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">Edit {{ $section->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.sections.store') }}" method="POST">
                        @csrf
                        <x-adminlte-input name="name" type="text" value="{{ $section->name  }}" placeholder="Section Name" />
                        <x-adminlte-input name="slug" type="text" value="{{ $section->slug  }}" placeholder="Section Slug" />
                        <x-adminlte-input name="number" type="number" value="{{ $section->number  }}" placeholder="Number" />

                        <x-adminlte-select2 name="course_id" label="Course Name" label-class="text-lightblue"
                        igroup-size="lg" data-placeholder="Select an option..." value="{{ $section->course->name  }}">
                        <x-slot name="course_id">
                        </x-slot>
                        <option value="{{ $section->course->name  }}"></option>
                        @foreach ($courses as $course )
                            <option value="{{ $course->id }}">{{ $course->slug }}</option>
                        @endforeach

                    </x-adminlte-select2>
                    <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                            icon="fas fa-lg fa-save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
