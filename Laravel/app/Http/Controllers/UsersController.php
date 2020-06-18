<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingAddress;
use App\Telephone;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request["nome"];
        $usuario->surname = $request["sobrenome"];
        $usuario->email = $request["email"];
        $usuario->sex = $request["sex"];
        $usuario->password = $request["senha"];
        $usuario->birthdate = $request["dataNascimento"];
        $usuario->cpf = $request["cpf"];

        if($request["newsletter"] == 'on') {
        $usuario->newsletter = true; }
        else {
        $usuario->newsletter = false;
        }
        
        $usuario->save();

        $endereco = new ShippingAddress();
        $endereco->state = $request["estado"];
        $endereco->city = $request["cidade"];
        $endereco->neighborhood = $request["bairro"];
        $endereco->street = $request["rua"];
        $endereco->number = $request["numero"];
        $endereco->complement = $request["complemento"];
        $endereco->postalCode = $request["cep"];
        $endereco->save();

        $telefone = new Telephone();
        $telefone->tel1 = $request["celular"];
        $telefone->tel2 = $request["telefone"];
        $telefone->save();

        $request->session()->flash('mensagem',
        "Usuário cadastrado com sucesso.");

        return view('cadastro', compact('mensagem'));
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
    }
}
