@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">Add new User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.courses.store') }}" method="POST">
                        @csrf
                        <x-adminlte-input name="name" type="text" placeholder="Student Name" />
                        <x-adminlte-input name="slug" type="text" placeholder="Student Slug" />
                        <x-adminlte-input name="course_img" type="text" placeholder="Student Image" />
                        <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-warning"
                            igroup-size="sm" placeholder="Insert description...">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-warning"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-textarea>
                        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                            icon="fas fa-lg fa-save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
