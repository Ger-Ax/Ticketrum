<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ?'email': 'username';

        if ($fieldType == 'email'){
            $request->validate([
                'login_id'=>'required|email|exists:admins,email',
                'login_id'=>'required|min:5|max:45'
            ],[
                'login_id.required'=>'Se necesita Email o Username',
                'login_id.email'=>'Direccion de correo invalida',
                'login_id.exists'=>'Correo no existe en el sistema',
                'password.required'=>'Se necesita constraseña'
            ]);
        } else{
            $request->validate([
                'login_id'=>'required|exists:admins,username',
                'password'=>'required|min:5|max:45'
            ],[
                'login_id.required'=>'Se necesita Email o Username',
                'login_id.exists'=>'Username no existe en el sistema',
                'password.required'=>'Se necesita contraseña'
            ]);
        }

        $creds = array(
            $fieldType=>$request->login_id,
            'password'=>$request->password
        );

        if(Auth::guard('admin')->attempt($creds)){
            return redirect()->route('admin.home');
        }else{
            session()->flash('fail','Credenciales incorrectas');
            return redirect()->route('admin.login');
        }

    }

    public function logoutHandler (Request $request){
        Auth::guard('admin')->logout();
        session()->flash('fail','Haz cerrado sesion');
        return redirect()->route('admin.login');
    }

    public function profileView(Request $request){
        $admin =null;
        if(Auth::guard('admin')->check()){
            $admin = Admin::findOrFail(auth()->id());
        }
        return view ('back.pages.admin.profile', compact('admin'));
    } 
}
