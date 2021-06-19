@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">All Pages</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <x-adminlte-card title="">
                        <h4>Course</h4>
                        <h4>Category</h4>
                        <h4>Tag</h4>
                        <h4>Section</h4>
                    </x-adminlte-card>
                </div>
            </div>
        </div>
    </div>
@stop
