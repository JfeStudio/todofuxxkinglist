<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;
// use App\Http\Requests\AnimalRequest;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

use function Symfony\Component\String\b;

class AnimalController extends Controller
{
    public function index() {
       return view('animals.index', 
       ['animals' => Animal::orderBy('id', 'desc')->get(), 
    ]);
    }

    public function store(AnimalRequest $request) {
        // $request->validate([
        //     'name' => ['required', 'min:3', 'alpha_num']
        // ]);

        // dd('success');
        // Animal::create([
        //     'name' => $request->name,
        // ]);
        Animal::create($request->all());
        return back();
    }

    public function edit($id) {
        $animal = DB::table('animals')->where('id', $id)->first();
        return view('animals.edit', [
            'animals' => $animal,
            // 'animals' => Animal::find($id),
        ]);
    }

    public function update(AnimalRequest $request, $id){
        Animal::find($id)->update([
            'name' => $request->name,
        ]);
        return redirect('/animals');
    }

    public function destroy($id){
        Animal::find($id)->delete();
        return back();
    }
}