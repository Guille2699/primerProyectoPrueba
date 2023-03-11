<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos=Curso::orderBy("id", "desc")->paginate(5);
        return view("cursos.index", compact("cursos"));
    }
    public function create(){
        return view("cursos.create");
    }
    public function store(Request $request){
        $request->validate([
            "nombre" => "required|max:10",
            "descripcion" => "required|min:10",
            "categoria" => "required"
        ]);
        $curso=new Curso();
        $curso->nombre=$request->nombre;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        $curso->save();
        return redirect()->route("cursos.show", $curso);
    }
    public function show(Curso $curso){
        return view("cursos.show", compact("curso"));
    }
    public function edit(Curso $curso){
        return view("cursos.edit", compact("curso"));
    }
    public function update(Request $request, Curso $curso){
        $request->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "categoria" => "required"
        ]);
        $curso->nombre=$request->nombre;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;
        $curso->save();
        return redirect()->route("cursos.show", $curso);
    }
}
