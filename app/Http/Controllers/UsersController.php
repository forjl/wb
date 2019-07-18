<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        //上面如果验证不通过，应该会返回错误给下面函数不执行，且重定向到值钱的页面，另外苏哟有的验证错误信息会自动保存到session中。

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]
        );


        session()->flash('success','欢迎，你将在这开启一段新的旅程~');
        return redirect(route('users.show',$user));
    }
}
