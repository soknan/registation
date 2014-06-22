@extends('soknann/reg::template.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1> Users </h1>
        <hr />
        <a class="btn btn-primary">Add New</a>
        <hr />
    {{$table}}
    </div>
</div>

@stop