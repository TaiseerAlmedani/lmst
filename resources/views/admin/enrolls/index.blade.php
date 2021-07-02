<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h3 class="has-text-centered is-family-code ">Enroll Request</h3>
@stop

@section('content')

<div class="">
    <div class="">
      <div class="">
        <div class="">
          <table class="">
            <thead>
              <tr>
                <th>Course  Id</th>
                <th>Course</th>
                <th>Users</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course )
                <tr>
                    <td>
                        {{ $course->id }}
                    </td>
                    <td>
                        {{ $course->name  }}
                    </td>
                    <td>
                        <ul>
                            @foreach ($course->users as $user)
                            @if ($user->pivot->activation == 0)
                               <li>
                                {{ $user->name }}
                                {{ $user->pivot->activation }}

                                {{-- <a href="{{ route('course.show', $course) }}">
                                    <span class="button ">Active</span>
                                </a> --}}

                               </li>
                            @endif
                        </ul>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @php
                        $heads =
                        [
                            'ID',
                            'Course',
                            ['label' => 'User', 'width' => 20],

                            ['label' => 'Actions', 'no-export' => true, 'width' => 5]
                        ];
                        $data = [];
                        foreach ($course_users as $course_user) {

                            $btnEdit =
                                '<a href=" ' .
                                    route('admin.course_user.edit', $course_user) .
                                '">
                                    <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                      <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </button>
                                </a>';
                            $btnDelete =
                                '<div>
                                    <form action=" ' .
                                         route('admin.course_user.destroy' , $course_user) .
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
                                route('admin.course_user.show', $course_user) .
                                '">
                                    <button class="btn btn-xs btn-default text-teal mx-1 shadow ml-0 pl-0" title="Details">
                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                    </button></a>';
                        $data[] =
                        [
                            $course_user->course_id,
                            $course_user->id,
                            $course_user->user_id,
                            $btnEdit, $btnDelete,
                            $btnDetails,
                            '</nobr>'
                        ];
                                                                                                                                                                                }
                        $config = [
                            'data' => $data,
                            'order' => [[1, 'asc']],
                            'columns' => [null, null, null, ['orderable' => false]],
                        ];

                    @endphp --}}

                    {{-- Minimal example / fill data using the component slot --}}
                    {{-- <x-adminlte-datatable id="table1" :heads="$heads">
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
    </div> --}}
    {{-- @foreach($courses as $course)
            {{$course->name}}  {{$course->users->first()->name}}

@endforeach --}}
@stop
