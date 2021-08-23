<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editora;

class editoraController extends Controller
{

    //INICIO LISTAGEM
    public function index(){
        $lista = editora::all();

        return $lista;
    }


    //INICIO REGISTRO
    public function store(Request $recebe){ 
        editora::create(
            [
                'editora' => $recebe -> editora
            ]

            );

            return response()->json(['msg'=>'Adicionado com sucesso!']);

    }
    //INICIO DA BUSCA
    public function show($id){
        $buscar = editora::find($id);

        return $buscar;

    }

    //INICIO DO UPDATE
    public function update($id, Request $request){
        $editora = editora::find($id);

        if($editora){
            $editora = $editora->update([
                'editora' => $request->editora
            ]);
        }
        return response()->json(['msg'=>'Atualizado com sucesso!']);


    }

    //INICIO DO DELETE
    public function destroy($id){
        $editora = editora::find($id);

        if($editora){
            $editora->delete();
        }

        return response()->json(['msg'=>'Apagado com sucesso!']);

    }

}
