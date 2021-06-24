@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">Edit {{ $lesson->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.lessons.update', $lesson) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <x-adminlte-input name="name" value="{{ $lesson->name }}" type="text" placeholder="Lesson Name" />
                        <x-adminlte-input name="slug" value="{{ $lesson->slug }}" type="text" placeholder="Lesson Slug" />

                        <x-adminlte-select2 name="type" value="{{ $lesson->type }}" label="Type Lesson" label-class="text-lightblue"
                        igroup-size="lg" data-placeholder="Select an option...">
                        <x-slot name="type">
                        </x-slot>
                        <option/>

                            <option value="video">Video</option>
                            <option value="pdf">PDF</option>
                    </x-adminlte-select2>
                        <x-adminlte-select2 name="section_id" label="Section Name" label-class="text-lightblue"
                        igroup-size="lg" data-placeholder="Select an option...">
                        <x-slot name="section_id">
                        </x-slot>
                        <option/>
                        @foreach ($sections as $section )
                            <option value="{{ $section->id }}">{{ $section->slug }}</option>
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
