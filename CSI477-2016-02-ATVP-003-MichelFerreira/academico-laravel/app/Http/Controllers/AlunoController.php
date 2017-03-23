<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index')->with('alunos',$alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Aluno::create($request->all());
        return redirect('/alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $aluno = Aluno::find($id);
        return view('alunos.show')
        ->with('aluno',$aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aluno = Alunos::find($id);
        return view('alunos.edit')
        ->with('aluno',$aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $aluno = Aluno::find($id);
        $aluno->nome = $request->nome;
        $aluno->rua = $request->rua;
        $aluno->numero = $request->numero;
        $aluno->bairro = $request->bairro;
        $aluno->cidade_id = $request->cidade_id;
        $aluno->cep = $request->cep;
        $aluno->mail = $request->mail;
        $aluno->save();

        return redirect('/alunos');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Aluno::destroy($id);
        return redirect('/alunos');
    }
}
