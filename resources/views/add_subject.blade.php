@extends('layouts.app')
@section('title') {{ trans('Add Faculties') }} @endsection
@section('page_title') {{ trans('Add Faculties') }} @endsection
@section('styles')
<style>
    label.error {
         color: #dc3545;
         font-size: 14px;
    }
</style>
@endsection
@section('content')
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Add Subject Form</h1>
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
                            <form role="form" id="subject-add" action="{{ route('subject.store')}}" method="POST">
                                @csrf
                                <div class="form-group"> <label for="name">
                                    <h6>Subject Name</h6>
                                    </label> <span class="text-danger">*</span> </label>
                                    <input type="text" name="subject_name" placeholder="Subject Name" class="form-control "> 
                                    @error('subject_name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group"> <label for="name">
                                    <h6>Terms</h6>
                                    </label> 
                                    <select class="form-control" name="term_id">
                                        <option>Select</option>
                                        @foreach($terms as $term)
                                            <option value="{{$term->id}}">{{$term->name}}</option>
                                        @endforeach
                                    </select> 
                                    @error('term_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer"> 
                                    <button type="submit" class="btn btn-primary btn-block shadow-sm"> Submit </button>
                                    <a href="{{route('subject.list')}}" class="subscribe btn btn-primary btn-block shadow-sm" style="float:right"> Back </a>
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
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {

        $("#subject-add").validate({
            rules: {
                subject_name: {
                    required: true,
                    minlength: 200
                },
 
                term_id: {
                    required: true,
                },
            },
            messages: {
 
                subject_name: {
                    required: "Please enter subject name",
                },
                term_id: {
                    required: "Please select term",
                },
               
            },
        })
    });
    $("document").ready(function(){
        setTimeout(function(){
        $("div.alert").remove();
        }, 3000 ); // 3 secs

    });
 </script>
@endsection