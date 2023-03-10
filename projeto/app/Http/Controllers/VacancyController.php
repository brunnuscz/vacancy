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
    // FORMULÁRIO DE CRIAR VAGA
    public function createVacancy(){
        return view('vacancies.create-vacancy');
    }
    // CRIANDO VAGA
    public function storeVacancy(Request $request){
        $vacancy = new Vacancy;

        $vacancy->title = $request->title;
        $vacancy->local = $request->local;
        $vacancy->level = $request->level;
        $vacancy->type = $request->type;
        $vacancy->skills = $request->skills;

        $user = auth()->user();
        $vacancy->user_id = $user->id;

        $vacancy->save();

        return redirect('/')->with('msg', 'Vaga criada com sucesso!');
    }
    // DASHBOARD
    public function dashboard(){
        $user = auth()->user();
        $candidates = $user->candidates;
        $vacancies = $user->vacancies;
        return view('dashboard', ['vacancies' => $vacancies, 'candidates' => $candidates]);
    }
    // DELETAR VAGA
    public function destroyVacancy($id){
        Vacancy::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'A vaga foi excluída com sucesso!');
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
        $data = $request->all();
        Vacancy::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'A vaga foi editda com sucesso!');
    }
}
