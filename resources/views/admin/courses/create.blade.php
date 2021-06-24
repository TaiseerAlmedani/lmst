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
                    <form action="{{ route('admin.courses.store') }}" method="POST">
                        @csrf
                        <x-adminlte-input name="name" type="text" placeholder="Course Title" />
                        <x-adminlte-input name="slug" type="text" placeholder="Course Slug" />
                        <x-adminlte-input name="course_img" type="text" placeholder="Course Image" />
                        <x-adminlte-input name="teacher_name" type="text" placeholder="Teacher name" />
                        <x-adminlte-input name="teacher_img" type="text" placeholder="Teacher Image" />
                        <x-adminlte-input name="outline" type="text" placeholder="Simple Description" />
                        <x-adminlte-input name="price" type="number" placeholder="Price" />
                        <x-adminlte-input name="hours" type="number" placeholder="hours" />
                        <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-warning"
                            igroup-size="sm" placeholder="Insert description...">
                            <x-slot name="prependSlot">
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
