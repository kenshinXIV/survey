@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                   <form action="{{ route('questions.store' , $questionnaire->id  )}}" method="post">
                   @csrf
                    <div class="form-group">
                        <label >Question</label>
                        <input type="text" name="question[question]" class="form-control" id="question" 
                        value="{{ old('question.question') }}" placeholder="Enter Question">
                        <small id="questionHelp" class="form-text text-muted">Ask simple  and to-the-point question for the best result</small>
                        @error('question.question')
                            <small class="text-danger">{{ $message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Choices</legend>
                            <small id="choicesHelp" class="form-text text-muted">Give choices that give you  the most insight  into your question</small>
                            <div>
                                <div class="form-group">
                                <label for="answer1">Choice 1</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="answer1" 
                                value="{{ old('answers.0.answer') }}" aria-describedby="choicesHelp" placeholder="Enter Choice 1">
                                    @error('answers.0.answer')
                                        <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                <label for="answer2">Choice 2</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="answer2" 
                                value="{{ old('answers.1.answer') }}" aria-describedby="choicesHelp" placeholder="Enter Choice 2">
                                    @error('answers.1.answer')
                                        <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                <label for="answer3">Choice 3</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="answer3" 
                                value="{{ old('answers.2.answer') }}" aria-describedby="choicesHelp" placeholder="Enter Choice 3">
                                    @error('answers.2.answer')
                                        <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                <label for="answer4">Choice 4</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="answer4" 
                                value="{{ old('answers.3.answer') }}" aria-describedby="choicesHelp" placeholder="Enter Choice 4">
                                    @error('answers.3.answer')
                                        <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                    </div>
          
                    
                   
                    <button type="submit" class="btn btn-primary">Crete New Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
