<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login() {
        return view('authenticate.login');
    }

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('warning','Please enter valid user or password');
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (!Hash::check($credentials['password'],$user->password)) {
            return redirect()->back()->withInput()->with('warning','Login Fail, please check email id');
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }else{
            return redirect()->back()->with('error','Something was wrong');
        }
    }

    public function register() {
        return view('authenticate.register');
    }

    public function registerUser(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone_no' => 'required|min:10|max:10'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('warning','Please enter all filed required');
        }

        User::create($validator->getData());
        if (Auth::attempt(['email'=>$request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }else{
            return redirect()->back()->with('error','Something was wrong');
        }
    }

    public function view(){
        $users = User::paginate(10);
        return view('user.view',compact('users'));
    }

    public function index() {
        return view('user.index');
    }

    public function create(Request $request) {
        $user_role = $request->role ? 'Client':'User';
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone_number' => 'min:10|max:10',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'gst_number' => '',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('warning','Please enter all filed required');
        }

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'currency' => $request->currency,
            'gst_number' => $request->gst_number
        ];

        $role = Role::where('name',$user_role)->first('id');

        $user = User::create($userData);
        $user->assignRole($role->id);

        return redirect()->route('user.view');
    }

    public function edit(){
        return view('user.view');
    }

    public function update(Request $request){
        // TODO: create update functionality
        return true;
    }

    public function delete(){
        // TODO: create delete functionality
    }
}
