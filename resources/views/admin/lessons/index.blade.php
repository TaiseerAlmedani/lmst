@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">All Lessons</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @php
                        $heads = [
                            'ID',
                            ['label' => 'Lesson URL', 'width' => 10],
                            ['label' => 'Type' , 'width' => 15],
                            ['label' => 'Section name' , 'width' => 15],
                            ['label' => 'Actions', 'no-export' => true]];



                        $data = [];
                        foreach ($lessons as $lesson) {
                            $btnEdit =
                                '<a href=" ' .
                                    route('admin.lessons.edit', $lesson) .
                                '">
                                    <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                      <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </button>
                                </a>';
                            $btnDelete =
                                '<div>
                                    <form action=" ' .
                                         route('admin.lessons.destroy' , $lesson) .
                                        ' " method="POST">
                                        <input type="hidden" name="_token" value="' . csrf_token() .'">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                       </button>
                                    </form>
                                </div>';
                            $btnDetails =
                                '<a href="' .
                                route('admin.lessons.show', $lesson) .
                                '">
                                    <button class="btn btn-xs btn-default text-teal mx-1 shadow " title="Details">
                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                    </button></a>';
                            $data[] = [
                                $lesson->id,
                                $lesson->name ,
                                $lesson->type,
                                $lesson->section->name,
                                $btnEdit,
                                $btnDelete,
                                $btnDetails,
                            ];
                        }

                        $config = [
                            'data' => $data,
                            'order' => [[1, 'asc']],
                            'columns' => [null, null, null, ['orderable' => false]],
                        ];

                    @endphp

                    {{-- Minimal example / fill data using the component slot --}}
                    <x-adminlte-datatable id="table1" :heads="$heads">
                        @foreach ($config['data'] as $row)
                            <tr>
                                @foreach ($row as $cell)
                                    <td>{!! $cell !!}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </x-adminlte-datatable>
                </div>
            </div>
        </div>
    </div>
@stop
