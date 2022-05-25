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
            <h1 class="display-6">Add Faculty Form</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" action="{{ route('faculty.store')}}" method="POST">
                                @csrf
                                <div class="form-group"> <label for="email">
                                    <h6>Faculty Name</h6>
                                    </label> 
                                    <input type="text" name="faculty_name" placeholder="Faculty Name" required class="form-control "> 
                                </div>
                                <div class="form-group"> <label for="email">
                                    <h6>Email</h6>
                                    </label> 
                                    <input type="text" name="email" placeholder="Email" required class="form-control "> 
                                </div>
                                
                                <div class="card-footer"> 
                                    <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Submit </button>
                                    <a href="{{route('faculty.list')}}" class="subscribe btn btn-primary btn-block shadow-sm" style="float:right"> Back </a>
                                </div>
                            </form>
                        </div>
                    </div> <!-- End -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection