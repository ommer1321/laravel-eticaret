<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
          $users = User::all();

        foreach ($users as $key => $user) {

            if ($user->id == auth()->user()->id) {
                unset($users[$key]);
            }
        }

        return view('admin.user.index', compact('users'));
    }



    public function update(Request $request)
    {
        $users = User::all();
        $user = $users->where('id', $request->id)->first() ?? abort('404');



        if ($user->id == auth()->user()->id) {

            return  redirect()->route('index.user', compact('users'))->with('message', 'Bulunduğunuz Admin Hesabında Değişiklik Yapmaya Yetkiniz Yok');
        }



        if ($user) {



            if ($user->role_as == 1) {
                $newRole = $user->role_as = '0';
            } elseif ($user->role_as == 0) {
                $newRole = $user->role_as = '1';
            }


            $save = $user->update(['role_as ' => $newRole,]);

            if ($save) {


                return redirect()->route('index.user', compact('users'))->with('successful', 'Güncelleme Başarılı');
            } else {
                return redirect()->route('index.user', compact('users'))->with('unsuccessful', 'Güncelleme Başarısız');
            }
        }else{

            return redirect()->route('index.user', compact('users'))->with('message', 'Ne Yapıyorsun ?');
        }
    }
}
