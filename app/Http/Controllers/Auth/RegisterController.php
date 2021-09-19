<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:25'],
            'firstName' => ['required', 'string', 'max:50'],
            'lastName' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:200', 'unique:users', 'confirmed'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'signUpDate' => ['date_format:"Y-m-d H:i:s"'],
            'profilePic' => ['string']
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
        $un = preg_replace("/( |　)/", "", $data['username']);
        $fn = preg_replace("/( |　)/", "", $data['firstName']);
        $ln = preg_replace("/( |　)/", "", $data['lastName']);
        $em = preg_replace("/( |　)/", "", $data['email']);

        return User::create([
            'username' => $un,
            'firstName' => $fn,
            'lastName' => $ln,
            'email' => $em,
            'password' => Hash::make($data['password']),
            'signUpDate' => $data['signUpDate'],
            'profilePic' => $data['profilePic']
        ]);
    }


}
