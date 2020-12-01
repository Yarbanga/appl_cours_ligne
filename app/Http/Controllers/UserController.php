<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('study.carte');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        return view('study.carte_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user= User::find(Auth::user()->id);

        if ($user) {

            if (Auth::user()->email === $request['email']) {

                $data=request()->validate([

                'nom' => ['required', 'string', 'max:255'],
                'prenom' => ['required', 'string', 'max:255'],
                'date_naiss' => ['required', 'date', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'tel' => ['required', 'string', 'max:255'],
                'ecole' => ['required', 'string', 'max:255'],
                'ville' => ['required', 'string', 'max:255'],
                'genre' => ['required', 'string', 'max:10'],
                'pays' => ['required', 'string', 'max:255'],
                'classe' => ['required', 'string', 'max:10'],
                // 'photo' => ['required', 'string'],
                'password' => ['required', 'string', 'min:4', 'confirmed'],

            ]);

            } else {

                $data=request()->validate([

                    'nom' => ['required', 'string', 'max:255'],
                    'prenom' => ['required', 'string', 'max:255'],
                    'date_naiss' => ['required', 'date', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'tel' => ['required', 'string', 'max:255'],
                    'ecole' => ['required', 'string', 'max:255'],
                    'ville' => ['required', 'string', 'max:255'],
                    'genre' => ['required', 'string', 'max:10'],
                    'pays' => ['required', 'string', 'max:255'],
                    'classe' => ['required', 'string', 'max:10'],
                    // 'photo' => ['required', 'string'],
                    'password' => ['required', 'string', 'min:4', 'confirmed'],

                    ]);
                }
                
            if(request('photo'))
                {
                    $photoPath=request('photo')->store('uploads', 'public');
                    $user->update(array_merge($data, ['photo' =>$photoPath]));
                }

            else{
                     $user->update($data);
                }

                $user->save();

            return redirect()->route('study.show', Auth::user()->id);
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function performance ()
    {
        return view('study.performance');
    }

    public function programme ()
    {
        return view('study.programme');
    }

    public function temps ()
    {
        return view('study.temps');
    }

    public function notification ()
    {
        return view('study.notification');
    }

    public function exo ()
    {
        return view('study.exo');       
    }
}
