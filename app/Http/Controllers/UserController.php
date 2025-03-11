<?php

namespace App\Http\Controllers;

use Exception;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Phone;


class UserController extends Controller
{

    public function show_get($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('user.profile', ['user' => $user]);
        } catch (Exception $e) {
            return response()->json(["message" => "user id = {$id} not found!"], 404);
        }
    }

    public function show_post(Request $request)
    {
        try {
            $id = $request->id;

            $user = User::findOrFail($id);
            return view('user.profile', ['user' => $user]);
        } catch (Exception $e) {
            return response()->json(["message" => "user id = {$id} not found!"], 404);
        }

    }

    public function create_get()
    {
        return view('user.create');
    }

    public function create_post(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $uphone = $request->phone;
        $password = $request->password;

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password; // hash it!
        $user->save();

        $phone = new Phone();

        $phone->country = '34';
        $phone->number = $uphone;

        $phone->user()->associate($user);
        $phone->save();

        return view('user.profile', ['user' => $user]);
    }
}
