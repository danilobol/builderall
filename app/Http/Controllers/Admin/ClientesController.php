<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\City;

class ClientesController extends Controller
{
    private $repository;


    public function __construct(Request $request, Client $client)
    {
        $this->$request = $request;
        $this->repository = $client;

    }


    public function index()
    {
        $registros = Client::paginate(10);
        return view('pages.admin.clientes.index', compact('registros'));
    }

    public function adicionar(){
        $cidades = City::all();
        return view('pages.admin.clientes.adicionar', compact('cidades'));
    }

    public function salvar(Request $request){
        $dados = $request->all();
        Client::create($dados);

        $registros = Client::paginate(10);
        return view('pages.admin.clientes.index', compact('registros'));
    }

    public function editar($id){
        $registro = Client::find($id);
        $cidades = City::all();
        return view('pages.admin.clientes.editar', compact('registro', 'cidades'));
    }

    public function atualizar(Request $request, $id){
        $dados = $request->all();
        $registro = Client::find($id)->update($dados);

        $registros = Client::paginate(10);
        return view('pages.admin.clientes.index', compact('registros'));

    }

    public function deletar($id){
        Client::find($id)->delete();

        $registros = Client::paginate(10);
        return view('pages.admin.clientes.index', compact('registros'));
    }

    public function search( Request $request){
        $registros = $this->repository->search($request->filter);

        return view('pages.admin.clientes.index', [
            'registros' => $registros,
        ]);

    }


}
