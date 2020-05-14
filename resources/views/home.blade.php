@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="{{ route('questionnaires.create') }}" class="btn btn-dark">Create New Questionnaire</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">My Questionnaire</div>

                <div class="card-body">
                  <ul class="list-group">
                 
                    @foreach($questionnaires as $questionnaire)
                        <li class="list-group-item mt-2">
                            <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title}}</a>
                            <div class="mt-2">
                                <small>Share URL</small>
                                <a href="{{ $questionnaire->publicPath() }}">{{  $questionnaire->publicPath() }}</a>
                           
                            </div>
                        </li>

                    @endforeach
                  </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
