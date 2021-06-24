@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">Edit {{ $category->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.categories.update' ,$category) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <x-adminlte-input name="name" type="text" value="{{ $category->name  }}" placeholder="Section Name" />
                        <x-adminlte-input name="slug" type="text" value="{{ $category->slug  }}" placeholder="Section Slug" />


                    <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                            icon="fas fa-lg fa-save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
