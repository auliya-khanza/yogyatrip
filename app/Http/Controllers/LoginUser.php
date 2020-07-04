<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function login(){
        return view('halaman_login');
    }

    // public function admins(){
    //     return view('dashboard_admin');
    // }
    
    public function loginPost(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            $user = User::where('email',$request->email)->first();
            
            if($user->is_admin())
    
            {
                return view('/admin/dashboard');
            }
                return redirect('/');
        }
                return redirect('login');
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
        public function register(Request $request){
            return view('halaman_register');
        }
    
        public function registerPost(Request $request){
            $this->validate($request, [
                'name' => 'required|min:4',
                'email' => 'required|min:4|email|unique:users',
                'password' => 'required',
                'confirmation' => 'required|same:password',
            ]);
    
    
            $data =  new ModelUser();
            $data->id = $request->id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->role = $request->role;
            $data->save();
            return redirect('login')->with('alert-success','Kamu berhasil Register');
        }
}
