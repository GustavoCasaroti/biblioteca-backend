<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class autorController extends Controller
{
    //INICIO LISTAGEM
    public function index(){
        $lista = Autor::all();

        return $lista;
    }

    //INICIO REGISTRO
    public function store(Request $recebe){
        Autor::create(
            [
                'nome'=>$recebe -> nome,
                'ano_nascimento'=>$recebe -> ano_nascimento,
                'sexo'=>$recebe->sexo,
                'nacionalidade'=>$recebe->nacionalidade
            ]
            );
            
            return response()->json(['msg'=>'Adicionado com sucesso!']);


        }
        
    //INICIO DA BUSCA
    public function show($id){
        $buscar = Autor::find($id);

        return $buscar;
    }

    //INICIO DO UPDATE
    public function update($id, Request $request){
        $autor = Autor::find($id);

        if($autor){
            $autor = $autor->update([
                'nome'=> $request->nome,
                'ano_nascimento'=>$request->ano_nascimento,
                'sexo'=>$request->sexo,
                'nacionalidade'=>$request->nacionalidade
            ]);
        }
        return response()->json(['msg'=>'Atualizado com sucesso!']);
    }

    //INICIO DO DELETE
    public function destroy($id){
        $autor = Autor::find($id);

        if($autor){
            $autor->delete();
        }
        return response()->json(['msg'=>'Apagado com sucesso!']);

    }


}
