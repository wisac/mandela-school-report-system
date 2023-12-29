<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class AuthManager extends Controller
{
    public function user()
    {
        return view('user');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'));
        } else {
            return redirect(route('login'))->with('error', 'Login failed');
        }
    }

    public function userPost(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'othername' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'choose_role' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'marital_status' => 'required',
                'id_number' => 'required',
                'id_type' => 'required',
            ]);
        } catch (\Exception $e) {
            return redirect(route('user'))->with('error', 'Validation error: ' . $e->getMessage());
        }
/**
 * key and database attribute has to be the same
 */
        $data = [
            'name' => $request->name,
            'surname' => $request->surname,
            'othername' => $request->othername,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'choose_role' => $request->choose_role,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'marital_status' => $request->marital_status,
            'id_number' => $request->id_number,
            'id_type' => $request->id_type,
        ];

        try {
            $user = User::create($data);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1366) { // Incorrect integer value error code
                return redirect(route('user'))->with('error', 'Invalid data provided: ' . $e->getMessage());
            } else {
                return redirect(route('user'))->with('error', 'Database error: ' . $e->getMessage());
            }
        }

        if (!$user) {
            return redirect(route('user'))->with('error', 'Registration failed');
        } else {
            return redirect(route('user'))->with('success', 'Registration successful');
        }
    }
    public function logout(){
        Session()->flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
