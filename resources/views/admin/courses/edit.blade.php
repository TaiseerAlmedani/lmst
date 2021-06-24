@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">Add new Course</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.courses.update', $course) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <x-adminlte-input name="name" label="Course Name" label-class="text-warning" type="text" value="{{ $course->name }}" placeholder="Title" />
                        <x-adminlte-input name="slug" label="Course Slug" label-class="text-warning" type="text" value="{{ $course->slug }}" placeholder="Slug" />
                        <x-adminlte-input name="course_img" label="Course Image" label-class="text-warning" type="text" value="{{ $course->course_img }}" placeholder="Image" />
                        <x-adminlte-input name="teacher_name" label="Teacher Name" label-class="text-warning" type="text" value="{{ $course->teacher_name }}" placeholder="Teacher name" />
                        <x-adminlte-input name="teacher_img" label="Teacher Image" label-class="text-warning" type="text" value="{{ $course->teacher_img }}" placeholder="Teacher Image" />
                        <x-adminlte-input name="outline" label="Outline" label-class="text-warning" type="text" value="{{ $course->outline }}" placeholder="Simple Description" />
                        <x-adminlte-input name="price" label="Price" label-class="text-warning" type="number" value="{{ $course->price }}" placeholder="Price" />
                            <x-adminlte-input name="hours" label="Hours" label-class="text-warning" type="number" value="{{ $course->hours }}" placeholder="Hours" />
                        <x-adminlte-textarea name="description" label="Description"  rows=5 label-class="text-warning"
                            igroup-size="sm" placeholder="Insert description..." value="{{ $course->description }}">
                            <x-slot name="prependSlot" >
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-warning"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-textarea>
                        <x-adminlte-select2 name="category_id" label="Categories" label-class="text-lightblue"
                        igroup-size="lg" data-placeholder="Select an option...">
                        <x-slot name="category_id">

                            </x-slot>
                            <option />
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->slug }}</option>
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
