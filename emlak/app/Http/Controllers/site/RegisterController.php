<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class RegisterController extends Controller
{
    public function index()
    {

        return view('site.register.index');
    }
    public function login()
    {
        return view("site.login.index");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','Kayıt işlemi Başarılı');
        }
        else{
            return  back()->with('fail','Birşeyler Yanliş gitti !');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:5|max:12'
        ]);
       $user=User::where('email', '=',$request->email)->first();
        if ($user){
            if (Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return  redirect('dashboard');


            } else{
                return back()->with('fail','Şifre Yanlış !');
            }

        } else{
         return back()->with('fail','Bu e-maile kayıtlı kullanıcı bulunamadı !');
        }
    }
    public function  dashboard()
    {
        $data = array();
        if (Session::has('loginId')){
            $data=User::where('id', '=',Session::get('loginId'))->first();

        }
        return view('dashboard', compact('data'));

    }
    public function logout()
    {
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

}

