<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Student;
use App\Teacher;
use App\User;
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
            'username'=> ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
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
            'usrename' => $data['username'],
            'password' => Hash::make($data['password']),
            'access_type' => $data['access_type'],
            'user_id'=> $data['user_id']
        ]);
    }

    protected function createStudent(array $data)
    {
        return Student::create([
            'firstname' => $data['firstname'],
            'middle' => $data['middlename'],
            'lastname' => $data['lastname'],
            'sex'=> $data['sex'],
            'dob' => $data['dob'],
            'mother_tongue' => $data['mother_tongue'],
            'religion'=> $data['religion'],
            'street' => $data['street'],
            'barangay' => $data['barangay'],
            'municipality' => $data['municipality'],
            'province'=> $data['province'],
            'father' => $data['father'],
            'mother' => $data['mother'],
            'guardian_id' => $data['guardian_id'],
            'guardian_rel'=> $data['guardian_rel'],
            'guardian_contact' => $data['guardian_contact']
        ]);

    }

    protected function createTeacher(array $data)
    {
        return Teacher::create([
            'firstname' => $data['firstname'],
            'middle' => $data['middlename'],
            'lastname' => $data['lastname'],
            'sex'=> $data['sex'],
            'dob' => $data['dob'],
            'religion'=> $data['religion'],
            'street' => $data['street'],
            'barangay' => $data['barangay'],
            'municipality' => $data['municipality'],
            'province'=> $data['province'],
            'contact'=> $data['contact'],
        ]);
    }

    protected function createAdmin(array $data)
    {
        return Admin::create([
            'firstname' => $data['firstname'],
            'middle' => $data['middlename'],
            'lastname' => $data['lastname'],
            'username'=> $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function reload($access_type){
        return view('admin.edit', ['access_type' => $access_type]);
    }
}
