<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function guest(){
        return view('welcome');
    }

    public function regUsuario(Request $request){
        $pass= bcrypt($request->regPass);
        
        $userNew = new User();
        $userNew->nombre_completo = $request->regNombre;
        $userNew->celular = $request->regCel;
        $userNew->password = $pass;
        $userNew->rol = 2;
        $userNew->save();

        $idUser= $userNew->id;

        $pasNew= new Patients();
        $pasNew->user_id= $idUser;
        $pasNew->nombre= $request->regMasc;
        $pasNew->edad= 0;
        $pasNew->tiempo_edad= "No registrado";
        $pasNew->peso_kg= 0;
        $pasNew->raza= "No registrado";
        $pasNew->genero= $request->selectGenero;
        $pasNew->especie= $request->selectEspecie;
        $pasNew->estado= "Vivo";
        $pasNew->save();
        
        auth()->login($userNew);
        return redirect('/perfil')->withErrors('Bienvenido a nuestra comunidad.');

    }

    public function renderDasboard(){
        $mascotas= Patients::where('id',Auth::user()->id)->get();

        return view('dashboard',compact('mascotas'));

    }

    public function getLogin(Request $request){
        $credentials = request()->only('celular', 'password');

        if (Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect('/veterinaria/usuario')->withErrors('Bienvenido a nuestra comunidad.');
        }else{
            return redirect('/')->withErrors('Ingreso Invalido, No esta registrado en nuestra comunidad.');
        }
    }

    public function renderDetalle(Request $request, string $id){
        if($id== "nina"){
            return view('detalle');
        }else{
            return redirect()->route('dashboard')->withErrors('FUNCIONO.');
        }
    }
}