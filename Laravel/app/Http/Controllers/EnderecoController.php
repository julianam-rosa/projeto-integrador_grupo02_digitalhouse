<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnderecoController extends Controller
{
    
    public function indexPerfil()
    {
        $user=User::find(Auth::user()->id);
        $enderecos = $user->shippingAddresses()->get();
        return view('perfilArtista', compact('enderecos'));
      
    }

}
