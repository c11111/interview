@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered table-hover dataTable">
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                        <td>{{$job->id}}</td>
                        <td>{{ucwords($job->title)}}</td>
                        <td>{{ucfirst($job->description)}}</td>
                        <td>{{ucfirst($job->user->name)}}</td>
                        <td>{{ $job->approved ? 'Approved' : 'Pending'}}</td>
                        <td>
                            <a href="{{action('JobController@destroy', ['id' => $job->id])}}" class="btn">Delete</a>
                            <a href="{{action('JobController@edit', ['id' => $job->id])}}" class="btn">Edit</a>
                            <a href="{{action('JobController@hide', ['id' => $job->id])}}" class="btn">Hide</a>
                        </td>
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>
</div>
@endsection;