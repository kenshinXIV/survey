<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $questionnaires = auth()->user()->questionnaires;
        return view('questionnaire.index')->withQuestionnaires($questionnaires);
    }
    
    public function create()
    {
        return view('questionnaire.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        $questionnaire = auth()->user()->questionnaires()->create($data);
      
        return redirect('/questionnaires/' . $questionnaire->id);
    }
    public function show(Questionnaire $questionnaire)
    {
      
        $questionnaire->load('questions.answers.responses');
       

        return view('questionnaire.show')->withQuestionnaire($questionnaire);


    }
}
