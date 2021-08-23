<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generolit;

class generolitController extends Controller
{
    //INICIO LISTAGEM
    public function index(){
        $lista = Generolit::all();

        return $lista;
    }

    //INICIO REGISTRO
    public function store(Request $recebe){
        Generolit::create(
        [
            'genero' => $recebe -> genero
        ]
        );


        return response()->json(['msg'=>'Adicionado com sucesso!']);
    }

    //INICIO DA BUSCA
    public function show($id){
        $buscar = Generolit::find($id);

        return $buscar;
    }

    //INICIO DO UPDATE
    public function update($id, Request $request){
        $genero=Generolit::find($id);

        if($genero){
            $genero=$genero->update([
                'genero'=>$request->genero
            ]);
        }
    return response()->json(['msg'=>'Atualizado com sucesso!']);

    }

    //INICIO DO DELETE
    public function destroy($id){
        $genero=Generolit::find($id);

            if($genero){
                $genero->delete();
            }
            return response()->json(['msg'=>'Apagado com sucesso!']);
        
    }



}
