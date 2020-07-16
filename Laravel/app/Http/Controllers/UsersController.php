<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Telephone, ShippingAddress, Category};
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\{Hash, Validator, DB};
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

        $categorias = Category::all();
        return view('cadastro', compact('mensagem', 'categorias'));
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

        DB::beginTransaction();

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

        $usuario->save();
        
        $usuario->shippingAddresses()->create([
            'state' => $request["estado"],
            'city' => $request["cidade"],
            'neighborhood' => $request["bairro"],
            'street' => $request["rua"],
            'number' => $request["numero"],
            'complement' => $request["complemento"],
            'postalCode' => $request["cep"]
        ]);
        
        $usuario->telephones()->create([
            'tel1' => $request["celular"],
            'tel2' => $request["telefone"]
        ]);

        DB::commit();

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
        //$usuario = User::where('id', $id)->with('telephones')->toSql();
        //$usuario = User::where('id', $id)->with('shippingAddresses', 'telephones')->get();
        $usuario = User::find($id);
        $enderecos = $usuario->shippingAddresses()->get();
        $telefones = $usuario->telephones()->get();
        $categorias = Category::all();
        //dd($telefones);
        return view('editarCadastro', compact('usuario', 'categorias', 'enderecos', 'telefones'));
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
        $this->validate($request,
            [
                'nome' => 'required|max:255',
                'sobrenome' => 'required|max:255',
                'email' => 'required|string|email|max:255|confirmed',
                'sex' => 'required',
                'senha' => 'required|string|min:8|confirmed',
                'dataNascimento' => 'required|date',
                'cpf' => 'required|size:11',
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

        DB::beginTransaction();

        $usuario = User::find($id);
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

        $usuario->save();
        
        DB::table('shipping_addresses')->updateOrInsert(
            ['user_id' => $usuario->id],

            [
            'state' => $request["estado"],
            'city' => $request["cidade"],
            'neighborhood' => $request["bairro"],
            'street' => $request["rua"],
            'number' => $request["numero"],
            'complement' => $request["complemento"],
            'postalCode' => $request["cep"]
            ]);
        
            DB::table('telephones')->updateOrInsert(
            ['user_id' => $usuario->id],
            
            [
            'tel1' => $request["celular"],
            'tel2' => $request["telefone"]
            ]);

        DB::commit();

        $request->session()->flash('mensagem',
        "Usuário atualizado com sucesso.");

        return redirect()->back();
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