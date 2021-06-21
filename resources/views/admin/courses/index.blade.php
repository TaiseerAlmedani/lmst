@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">All Courses</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @php
                        $heads = ['ID', 'Name', ['label' => 'Teacher Name', 'width' => 20], 'Price', 'Description', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];

                        $btnEdit ='<a href="#"><button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                                                                                                                                                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                                                                                                                                                                </button></a>';
                        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                                                                                                                                                                      <i class="fa fa-lg fa-fw fa-trash"></i>
                                                                                                                                                                                  </button>';
                        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                                                                                                                                                                       <i class="fa fa-lg fa-fw fa-eye"></i>
                                                                                                                                                                                  </button>';
                        $data = [];
                        foreach ($courses as $course) {
                            $data[] = [$course->id, $course->name, $course->teacher_name, $course->price, $course->description, $btnEdit, $btnDelete, $btnDetails, '</nobr>'];
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
