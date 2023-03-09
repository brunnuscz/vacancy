<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* MODEL */
use App\Models\Vacancy;
use App\Models\User;

class VacancyController extends Controller
{
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
    
    public function create(){
        return view('vacancies.create');
    }

    public function store(Request $request){
        $vacancy = new Vacancy;

        $vacancy->title = $request->title;
        $vacancy->local = $request->local;
        $vacancy->level = $request->level;
        $vacancy->type = $request->type;
        $vacancy->items = $request->items;

        $user = auth()->user();
        $vacancy->user_id = $user->id;

        $vacancy->save();

        return redirect('/')->with('msg', 'Vaga criada com sucesso!');
    }
    public function dashboard(){
        $user = auth()->user();
        $vacancies = $user->vacancies;
        return view('vacancies.dashboard', ['vacancies' => $vacancies]);
    }
}
