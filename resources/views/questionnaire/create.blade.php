@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                   <form action="{{ route('questionnaires.store' )}}" method="post">
                   @csrf
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" id="title"  placeholder="Enter Title">
                        @error('title')
                            <small class="text-danger">{{ $message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Purpose</label>
                        <input type="text" name="purpose" class="form-control" id="purpose"  placeholder="Enter Purpose">
                        @error('purpose')
                            <small class="text-danger">{{ $message}}</small>
                        @enderror
                    </div>
                    
                   
                    <button type="submit" class="btn btn-primary">Crete New Questionnaire</button>
                    </form>
                </div>
            </div>


           
        </div>
    </div>
</div>
@endsection
