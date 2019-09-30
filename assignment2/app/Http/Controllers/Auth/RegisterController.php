<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\State;
use App\Address;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'streetNumber' => ['required', 'numeric'],
            'streetName' => ['required', 'alpha', 'max:50'],
            'city' => ['required', 'alpha', 'max:50'],
            'postCode' => ['required', 'digits:4'],
            'state' => ['required']
        ]);
    }

    protected function showRegistrationForm() {
        $states = State::all();
        $userType = $_GET['userType'];
        if ($userType === "consumer" || $userType === "restaurant") {
            $userTypeFormattedString = strtoupper(substr($userType, 0, 1)).substr($userType, 1);
            return view('auth.register')->with('type', $userTypeFormattedString)->with('userType', $userType)->with('states', $states);
        }
        return abort(404);
    }

    protected function redirectTo(){
        return url()->previous();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // to create a new user first make user then make address.
        $approved = $data['userType'] == "consumer" ? 'approved' : 'pending';
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'userType' => $data['userType'],
            'approved' => $approved,
            'streetNumber' => $data['streetNumber'],
            'streetName' => $data['streetName'],
            'city' => $data['city'],
            'postcode' => $data['postCode'],
            'state_id' => $data['state'],
        ]);
        return $user;
    }
}
