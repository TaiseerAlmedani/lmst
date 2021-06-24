@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 ">All Sections</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @php
                        $heads = [
                            'ID',
                            ['label' => 'Sections Name', 'width' => 25],
                            'course name',
                            ['label' => 'Actions', 'no-export' => true]
                        ];
                        $data = [];
                        foreach ($sections as $section) {
                            $btnEdit =
                                '<a href=" ' .
                                    route('admin.sections.edit', $section) .
                                '">
                                    <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </button>
                                </a>';
                                $btnDelete =
                                    '<div>
                                        <form action=" ' .
                                            route('admin.sections.destroy' , $section) .
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
                                    route('admin.sections.show', $section) .
                                '">
                                    <button class="btn btn-xs btn-default text-teal mx-1 shadow " title="Details">
                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                    </button></a>';
                            $data[] = [
                                $section->id,
                                $section->name,
                                $section->course->name,
                                $btnEdit ,
                                $btnDelete ,
                                $btnDetails,
                            ];
                        }

                        $config = [
                            'data' => $data,
                            'order' => [[1, 'asc']],
                            'columns' => [null, null, null, ['orderable' => false]],
                            'paging' => true,
                            // 'with-buttons'  => true,
                            // 'with-footer'   => true
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
