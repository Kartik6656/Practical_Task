
@extends('layouts.app')
@section('title') {{ trans('Add Faculties') }} @endsection
@section('page_title') {{ trans('Add Faculties') }} @endsection
@section('styles')
@endsection
@section('content')
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Welcome To Practicle Task</h1>
        </div>
    </div> <!-- End -->
    
    <div class="row mb-4">
        <div class="col-md-8 mx-auto" >
            <a href="{{route('subject.list')}}" class="btn btn-primary">Subject List</a>
            <a href="{{route('faculty.list')}}" class="btn btn-primary">Faculty List</a>
        </div>
    </div>
    <div class="row">
        
    </div>
</div>
@endsection
@section('scripts')

@endsection
