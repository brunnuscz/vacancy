<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* MODEL */
use App\Models\Vacancy;
use App\Models\User;
use App\Models\Candidate;

class CandidateController extends Controller
{
    // FORMULÁRIO DE CRIA CANDIDATO
    public function createCandidate(){
        return view('candidates.create-candidate');
    }
    // SALVAR CANDIDATO
    public function storeCandidate(Request $request){
        $request -> validate([
            'name' => 'required',
        ]);
        $candidate = new Candidate;
        $candidate->name = $request->name;
        $candidate->skills = $request->skills;

        if($candidate->skils < 4){
            return redirect('/candidate/create')->with('msg', 'Atenção! o candidato deve ter no mínimo 3 habilidades');
        }else{
            $user = auth()->user();
            $candidate->user_id = $user->id;
    
            $candidate->save();
    
            return redirect('/')->with('msg', 'O candidato foi criado com sucesso!');
        }
    }

    // DELETAR VACANDIDATOGA
    public function destroyCandidate($id){
        Candidate::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'O candidato foi deletado com sucesso!');
    }
    // FORMULÁRIO DE EDIÇÃO DE CANDIDATO
    public function editCandidate($id){
        $user = auth()->user();
        $candidate = Candidate::findOrFail($id);
        if($user->id != $candidate->user->id){
            return redirect('/dashboard');
        }
        return view('candidates.edit-candidate', ['candidate'=>$candidate]);
    }
    // ATUALIZAR CANDIDATO
    public function updateCandidate(Request $request){
        $request -> validate([
            'name' => 'required',
        ]);
        $data = $request->all();
        CanDidate::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'O candidato foi editado com sucesso!');
    }
}
