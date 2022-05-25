
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
            <h1 class="display-6">Subject List</h1>
        </div>
    </div> <!-- End -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif
  
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="row mb-4">
        <div class="col-md-8 mx-auto" >
            <a href="{{route('subject.add')}}" class="btn btn-primary" style="Float:right">Add Subject</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Terms</th>
                    <th scope="col">Create Date</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($subjectLists) > 0)
                    @foreach($subjectLists as $subject)
                    <tr>
                        <td>{{$subject->id}}</td>
                        <td>{{$subject->subject_name}}</td>
                        <td>{{$subject->terms->name}}</td>
                        <td>{{$subject->created_at}}</td>
                    </tr>
                    @endforeach
                @else
                <tr>No Record Found</tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $("document").ready(function(){
        setTimeout(function(){
        $("div.alert").remove();
        }, 3000 ); // 3 secs

    });
</script>
@endsection
