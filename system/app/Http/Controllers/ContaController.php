<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index(){

        $contas = Conta::orderByDesc('created_at')->get();
        return view('conta.index', ['contas' => $contas]); 

    }
    
    public function create(){
        return view('conta.create'); 
    }

    public function store(ContaRequest $request){

        $request->validated();
        $conta = Conta::create($request->all());
        return  redirect()->route('conta.show', ['id'=>$conta->id])->with('success', 'Cadastrado com sucesso');
    }

    public function show($id){

        $conta = Conta::find($id);
        return view('conta.show', ['conta' => $conta]); 
    }
    public function edit($id){

        $conta = Conta::find($id);
        return view('conta.edit', ['conta' => $conta]); 
    }

    public function update(ContaRequest $request, $id){

        $request->validated();
        $conta = Conta::find($id);

        $conta->update($request->all());
        return  redirect()->route('conta.show', ['id'=>$conta->id])->with('success', 'Cadastrado com sucesso');
    }
    
    public function destroy($id)
    {
        $conta = Conta::find($id);
        $conta->delete();
        return  redirect()->route(route: 'conta.index')->with('success', 'Removido com sucesso');

    }

}
