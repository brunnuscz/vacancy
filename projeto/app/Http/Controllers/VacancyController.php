<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* MODEL */
use App\Models\Vacancy;
use App\Models\User;
use App\Models\Candidate;

class VacancyController extends Controller
{
    // PÁGINA INICIAL
    public function index(){
        $search = request('search');
        if($search){
            $vacancies = Vacancy::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $vacancies = Vacancy::all();
        }
        return view('welcome', ['vacancies' => $vacancies, 'search' => $search]);
    }
    // DASHBOARD
    public function dashboard(){
        $user = auth()->user();
        $vacancies = $user->vacancies;
        $candidates = $user->candidates;
        return view('dashboard', ['vacancies' => $vacancies, 'candidates' => $candidates]);
    }

    // VER MAIS VAGA
    public function showVacancy($id){
        $vacancy = Vacancy::findOrFail($id);
        $user = auth()->user();
        $candidates = $user->candidates;
        $vacancies = $user->vacancies;
        $listCandidates = array();
        foreach($candidates as $candidate){           // todos os candidatos
            $cont = 0;
            foreach($vacancy->skills as $skillVacancy){
                foreach($candidate->skills as $skillCandidate){   // todos as skills do candidato
                    if($skillVacancy == $skillCandidate){    // a skill da vaga é igual a skill do candidato
                        $cont = $cont + 1;
                    }
                }
            }
            if($cont >= 3){
                $listCandidates[] = array($candidate);
            }
        }
        $creator = User::where('id', $vacancy->user_id)->first()->toArray();
        return view('vacancies.show-vacancy', ['listCandidates'=> $listCandidates, 'vacancy' => $vacancy, /*'listCandidates' => $listCandidates,*/ 'creator' => $creator, 'candidates' => $candidates]);
    }
    // FORMULÁRIO DE CRIAR VAGA
    public function createVacancy(){
        return view('vacancies.create-vacancy');
    }
    // CRIANDO VAGA
    public function storeVacancy(Request $request){
        $request -> validate([
            'title' => 'required',
            'local' => 'required',
            'skills' => 'required | min:3'
        ]);
        $vacancy = new Vacancy;

        $vacancy->title = $request->title;
        $vacancy->local = $request->local;
        $vacancy->level = $request->level;
        $vacancy->type = $request->type;
        $vacancy->skills = $request->skills;

        $user = auth()->user();
        $vacancy->user_id = $user->id;

        $vacancy->save();

        return redirect('/dashboard')->with('msg', 'A vaga criada com sucesso!');
    }
    // DELETAR VAGA
    public function destroyVacancy($id){
        Vacancy::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'A vaga foi deletada com sucesso!');
    }
    // FORMULÁRIO DE EDIÇÃO DE VAGA
    public function editVacancy($id){
        $user = auth()->user();
        $vacancy = Vacancy::findOrFail($id);
        if($user->id != $vacancy->user->id){
            return redirect('/dashboard');
        }
        return view('vacancies.edit-vacancy', ['vacancy'=>$vacancy]);
    }
    // ATUALIZAR VAGA
    public function updateVacancy(Request $request){
        $request -> validate([
            'title' => 'required',
            'local' => 'required',
            'skills' => 'required | min:3'
        ]);
        $data = $request->all();
        Vacancy::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'A vaga foi editada com sucesso!');
    }
}
