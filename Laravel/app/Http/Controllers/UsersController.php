<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingAddress;
use App\Telephone;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;

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
    public function create(Request $request)
    {
        $mensagem = $request->session()->get('mensagem');

        return view('cadastro', compact('mensagem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nome' => 'required|max:255',
                'sobrenome' => 'required|max:255',
                'email' => 'required|string|email|max:255|unique:users|confirmed',
                'sex' => 'required',
                'senha' => 'required|string|min:8|confirmed',
                'dataNascimento' => 'required|date',
                'cpf' => 'required|unique:users|size:11',
                'estado' => 'required|string',
                'cidade' => 'required|string',
                'bairro' => 'required|string',
                'rua' => 'required|string',
                'numero' => 'required|integer',
                'cep' => 'required|size:8',
                'celular' => 'required|size:11',
                'telefone' => 'size:10',
                'termos' => 'different:off'
            ],
            [
                'required' => 'O campo :attribute é necessário.',
                'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
                'unique' => ':attribute já cadastrado.',
                'email' => 'Email inválido.',
                'min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
                'confirmed' => 'O campo :attribute deve ser confirmado.',
                'date' => 'Data inválida.',
                'size' => 'O campo :attribute deve ter :size caracteres.',
                'integer' => 'Campo "Número" inválido.',
                'different' => 'Você deve aceitar nossos Termos e Condições para efetuar o cadastro.'
            ]
        );

        $usuario = new User();
        $usuario->name = $request["nome"];
        $usuario->surname = $request["sobrenome"];
        $usuario->email = $request["email"];
        $usuario->sex = $request["sex"];
        $usuario->password = Hash::make($request["senha"]);
        $usuario->birthdate = $request["dataNascimento"];
        $usuario->cpf = $request["cpf"];

        if($request["newsletter"] == 'on') {
        $usuario->newsletter = true; }
        else {
        $usuario->newsletter = false;
        }

        $usuario->shippingAddresses()->state = $request["estado"];
        $usuario->shippingAddresses()->city = $request["cidade"];
        $usuario->shippingAddresses()->neighborhood = $request["bairro"];
        $usuario->shippingAddresses()->street = $request["rua"];
        $usuario->shippingAddresses()->number = $request["numero"];
        $usuario->shippingAddresses()->complement = $request["complemento"];
        $usuario->shippingAddresses()->postalCode = $request["cep"];

        $usuario->telephones()->tel1 = $request["celular"];
        $usuario->telephones()->tel2 = $request["telefone"];
        
        $usuario->push();

        $request->session()->flash('mensagem',
        "Usuário cadastrado com sucesso.");

        return redirect()->route('pagina_cadastro');
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
