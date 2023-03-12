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
        // validação
        $request -> validate([
            'name' => 'required',
            'skills' => 'required | min:3'
        ]);
        $candidate = new Candidate;
        $candidate->name = $request->name;
        $candidate->skills = $request->skills;
        // pegar o usuário autenticado
        $user = auth()->user();
        $candidate->user_id = $user->id;
        // salvar
        $candidate->save();
        return redirect('/panel')->with('msg', 'O candidato foi criado com sucesso!');
    }

    // DELETAR VACANDIDATOGA
    public function destroyCandidate($id){
        Candidate::findOrFail($id)->delete();
        return redirect('/panel')->with('msg', 'O candidato foi deletado com sucesso!');
    }
    // FORMULÁRIO DE EDIÇÃO DE CANDIDATO
    public function editCandidate($id){
        $user = auth()->user();
        $candidate = Candidate::findOrFail($id);
        // medida de segurança
        if($user->id != $candidate->user->id){
            return redirect('/panel');
        }
        return view('candidates.edit-candidate', ['candidate'=>$candidate]);
    }
    // ATUALIZAR CANDIDATO
    public function updateCandidate(Request $request){
        $request -> validate([
            'name' => 'required',
            'skills' => 'required | min:3'
        ]);
        $data = $request->all();
        CanDidate::findOrFail($request->id)->update($data);
        return redirect('/panel')->with('msg', 'O candidato foi editado com sucesso!');
    }
}
