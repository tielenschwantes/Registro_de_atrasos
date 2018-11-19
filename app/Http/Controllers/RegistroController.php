<?php

namespace App\Http\Controllers;

use App\registro;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{

		public function create(){
			return view('registros.create');
		}



public function index()
    {
        if(Auth::check()){
            $listaRegistros = registro::where('id_aluno', Auth::id())
                                                                    ->with('aluno')
                                                                    ->get();
        }else{
            $listaRegistros = registro::all()->with('aluno');
        }
        return view('registros.list',['listaRegistros' => $listaRegistros]);
    }

public function store(Request $request)
    {
        
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'motivo.required' => 'É obrigatório um motivo para atraso',
            'materia.required' => 'É obrigatória uma matéria para o atraso',
        );
        //vetor com as especificações de validações
        $regras = array(
            'motivo' => 'required|string|max:255',
            'materia' => 'required',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('registros/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Registro = new registro();
        $obj_Registro->motivo =       $request['motivo'];
        $obj_Registro->materia = $request['materia'];
        $obj_Registro->datahoraatraso = \Carbon\Carbon::now();
        $obj_Registro->id_aluno = Auth::id();
        $obj_Registro->save();
        return redirect('/registros')->with('success', 'Atraso registrado com sucesso!');
    }
}
