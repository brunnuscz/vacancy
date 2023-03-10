<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* MODEL */
use App\Models\Vacancy;
use App\Models\User;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function createCandidate(){
        return view('candidates.create-candidate');
    }
    public function storeCandidate(Request $request){
        $candidate = new Candidate;

        $candidate->name = $request->name;
        $candidate->skills = $request->skills;

        $user = auth()->user();
        $candidate->user_id = $user->id;

        $candidate->save();

        return redirect('/')->with('msg', 'Candidato criada com sucesso!');
    }
}
