@extends('soknann/reg::template.master')

@section('content')
<div class="inner col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
            <p><a class="btn btn-primary" href="{{route('reg.user.add')}}">Add New</a></P>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
                {{$table}}
        </div>
    </div>
</div>

@stop