<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\RegisteredUser;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register (Request $request) {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $user->notify(new RegisteredUser());

        return redirect('/login')->with('success', 'votre compte à été créé, Nous vous avons envoyé un email de confirmation');

    }

    public function confirm ($id, $token) {

        $user = User::where('id', $id)->where('confirmation_token', $token)->first();

        if ($user) {

                $user->update(['confirmation_token' => null]);
                $this->guard()->login($user);
                return redirect($this->redirectPath())->with('success', 'votre compte a bien été confirmer');

        } else {
            return redirect('/login')->with('error', 'ce lien ne semble plus valide');
        }

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
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
            'photo' => ['required', 'string'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'date_naiss' => $data['date_naiss'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'ecole' => $data['ecole'],
            'ville' => $data['ville'],
            'genre' => $data['genre'],
            'pays' => $data['pays'],
            'classe' => $data['classe'],
            'photo' => $data['photo'],
            'password' => Hash::make($data['password']),
            'confirmation_token' => str_replace('/', '', bcrypt(Str::random(16))),
        ]);
    }
}
