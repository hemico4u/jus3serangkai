<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {

        $check = User::where('username', $user)->first();

        if (!isset($check)){
            return Redirect::to('/');
        }
        return view('welcome')->with('number', $check);
    }

    public function register()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'location' => 'required',
            'number_phone' => 'required|numeric|unique:users',
            'email' => 'required',
        ]);

        User::create($request->all());

        return redirect("/info/$request->username");
    }

    public function info($user)
    {

        $check = User::where('username', $user)->first();

        if (!isset($check)){
            return Redirect::to('/');
        }
        return view('info')->with('info', $check);
    }

    public function repair($user)
    {

        $check = User::where('username', $user)->first();

        if (!isset($check)){
            return Redirect::to('/');
        }
        return view('repair')->with('info', $check);
    }

    public function darah($user)
    {

        $check = User::where('username', $user)->first();

        if (!isset($check)){
            return Redirect::to('/');
        }
        return view('darah')->with('number', $check);
    }

    public function jantung($user)
    {

        $check = User::where('username', $user)->first();

        if (!isset($check)){
            return Redirect::to('/');
        }
        return view('jantung')->with('number', $check);
    }

    public function kencing($user)
    {

        $check = User::where('username', $user)->first();

        if (!isset($check)){
            return Redirect::to('/');
        }
        return view('kencing')->with('number', $check);
    }

    public function wasap($wasap)
    {
        return Redirect::to("https://api.whatsapp.com/send?phone=6$wasap&text=Saya%20Nak%20Jus%20Tiga%20Serangkai");
    }

    public function staff()
    {
        $staff = Staff::all()->random()->phone;

        return Redirect::to("https://api.whatsapp.com/send?phone=6$staff&text=Saya%20Nak%20Jus%20Tiga%20Serangkai");
    }

    public function goto(Request $request)
    {
        $check = User::where('username', $request->username)->first();

        if (!isset($check)){
            $check = User::where('number_phone', $request->username)->first();
            if (!isset($check)){
//                return Redirect::to('/register');
                return Redirect::back()->withErrors(['Sila Masukkan username ATAU nombor telefon yang telah didaftarkan']);
            }
        }

        return redirect("/info/$check->username");
    }

    public function tester(Request $request)
    {
        log::alert($request);
        return ;

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
        //
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
