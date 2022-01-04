<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
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
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        // $attributes = $request->all(); // untuk  manggil rules yang tadi di RegistrationRequest
    //   $attributes = $request->validate([
        // udah dipindahin ke file Request
    //     ]);
        // untuk membuat unique harus sebutin table sama fieldna, jadi kalo aya bisa kecek email atau anu unique na udah da di field yang ada di database
        // User::where('email', $request->email)->orWhere('username', $request->username)->first(); // untuk jadi unique
                            // nah ini yang dibawah kalo misalnya kode kita mau jadi biasa ditulis satu satu
        // User::create([
        //     'email' => $request->email,
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->name),
        // ]);

            // $attributes['password'] = Hash::make($request->password); // nah ini di set pake setPasswordAttribute di file model User.

        // ini kalo mau pake $attributes yang udah dibuat diatas tadi
        // tapi kalo gini langsung jadi ngga hash passwordnya, mari kita definisikan dulu biar field passwordnya jadi has, yuk buat di baris atas. sip udah.
        // User::create($attributes); // ini kalo tadi pake $attributes=$request->all() diatas tapi karena ngebinding jadi bisa disederhanakan menjadi kaya dibawah


        // session ini menerima key sama value di dalam putnya atau di flashnya
        // session()->put()
            // kode session dibawah diganti sama with soalnya ngehasilin hal yang sama
        // session()->flash('success', 'Thank you, you are now registered');

        User::create($request->all());
        return redirect('/')->with('success', 'Thank you, you are now registered');
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
