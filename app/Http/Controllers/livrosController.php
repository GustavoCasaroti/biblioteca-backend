<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class livrosController extends Controller
{
    //INICIO LISTAGEM
    public function index(){
        $lista = Livros::all();

        return $lista;
    }
    //INICIO REGISTRO
        public function store(Request $recebe){
            Livros::create(
                [
                    'autor'=>$recebe->autor,
                    'genero'=>$recebe->genero,
                    'editora'=>$recebe->editora,
                    'titulo'=>$recebe->titulo,
                    'lancamento'=>$recebe->lancamento
                ]
                );

                return response()->json(['msg'=>'Adicionado com sucesso!']);
        }
    //INICIO DA BUSCA
        public function show($id){
            $buscar=Livros::find($id);

            return $buscar;
        }

    //INICIO DO UPDATE
        public function update($id, Request $request){
            $livros=Livros::find($id);

            if($livros){
                $livros=$livros->update([
                    'autor'=>$request->autor,
                    'genero'=>$request->genero,
                    'editora'=>$request->editora,
                    'titulo'=>$request->titulo,
                    'lancamento'=>$request->lancamento
                ]);
            }
        return response()->json(['msg'=>'Atualizado com sucesso!']);
        }

    //INICIO DO DELETE
        public function destroy($id){
            $livros=Livros::find($id);

            if($livros){
                $livros->delete();
            }
        return response()->json(['msg'=>'Apagado com sucesso!']);

        }




}
