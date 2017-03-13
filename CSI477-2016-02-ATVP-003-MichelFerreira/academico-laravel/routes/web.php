<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Aluno;

Route::get('/', function () {
    $name = "Michel";
    /* return view('welcome', compact($name)); */
    return view('welcome')->with('name', $name);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('estados', function () {
    $estados = DB::table('estados')->get();
    return view('estados')->with('estados', $estados);
});

Route::get('cidades', function () {
    $cidades = DB::table('cidades')->get();
    return view('cidades')->with('cidades', $cidades);
});

/* Route::get('alunos', function () {
    $alunos = DB::table('alunos')->get();
    return view('alunos.index')->with('alunos', $alunos);
}); */

/* Route::get('alunos', function () {
    $alunos = Aluno::all();
    return view('alunos.index')->with('alunos', $alunos);
});

 Route::get('/alunos/{aluno}', function ($id) {
    $aluno = DB::table('alunos')->find($id);
    return view('alunos.show')->with('alunos', $aluno);
}); */

Route::resource('disciplinas', 'DisciplinaController');
Route::resource('turmas', 'TurmaController');
Route::resource('estados', 'EstadoController');
Route::resource('cidades', 'CidadeController');
Route::resource('alunos', 'AlunoController');


/* Route::get('cidades', function () {
    $cidades = Cidade::all();
    return view('cidades.index')->with('cidades', $cidades);
});

Route::get('/cidades/{cidade}', function ($id) {
    $cidade = DB::table('cidades')->find($id);
    return view('cidades.show')->with('cidades', $cidade);
});

Route::get('estados', function () {
    $estados = Estado::all();
    return view('estados.index')->with('estados', $estados);
});

Route::get('/estados/{Estado}', function ($id) {
    $estado = DB::table('estados')->find($id);
    return view('estados.show')->with('estados', $estado);
}); */

Auth::routes();

Route::get('/home', 'HomeController@index');
