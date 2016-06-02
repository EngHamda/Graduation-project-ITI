@extends('admin.layouts.master')

@section('content')

    <p>{!! link_to_route('users.create', trans('quickadmin::admin.users-index-add_new'), [], ['class' => 'btn btn-success']) !!}</p>

    @if($users->count() > 0)
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">{{ trans('quickadmin::admin.users-index-users_list') }}</div>
            </div>
            <div class="portlet-body">
                <table id="datatable" class="table table-striped table-hover table-responsive datatable">
                    <thead>
                    <tr>
                        <th>{{ trans('quickadmin::admin.users-index-name') }}</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->title}}</td>
                            <td></td>

                            <td>@if($user->profile_picture != '')<img src="{{ asset('uploads/thumb') . '/'.  $user->profile_picture }}">@endif</td>

                            <td>
                                {!! link_to_route('users.edit', trans('quickadmin::admin.users-index-edit'), [$user->id], ['class' => 'btn btn-xs btn-info']) !!}
                                {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.users-index-are_you_sure') . '\');',  'route' => array('users.destroy', $user->id)]) !!}
                                {!! Form::submit(trans('quickadmin::admin.users-index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        {{ trans('quickadmin::admin.users-index-no_entries_found') }}
    @endif
<<<<<<< HEAD


@endsection

=======
@endsection
>>>>>>> cf79f64c39f59fe801a9a83f8572952118e6216b
