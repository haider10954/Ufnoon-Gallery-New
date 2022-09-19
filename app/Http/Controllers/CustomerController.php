<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Exception;

class CustomerController extends Controller
{

    function uploadFile($file, $filePath = 'files'): string
    {
        try {
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/' . $filePath, $fileName);
            $loadPath = storage_path('app/public/' . $filePath) . '/' . $fileName;
            $response = [
                'error' => false,
                'loadPath' => $loadPath,
                'fileName' => $fileName,
            ];
            return json_encode($response);
        } catch (Exception $e) {
            return json_encode([
                'error' => true,
                'msg' => $e->getMessage()
            ]);
        }
    }


    public function verification(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'password' => 'required',
            'email' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json(["error" => true, "msg" => $validate->errors()->first()]);
        }
        $user = User::where('email', $request->email)->first();

        $credentials = [
            'password' => $request->password,
            'email' => $request->email
        ];


        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $res = Auth::login($user);
                return json_encode([
                    'error' => false,
                    'msg' => 'User logged in successfully',
                ]);
            }
            return json_encode([
                'error' => true,
                'msg' => 'Invalid Password',
            ]);
        } else {
            return json_encode([
                'error' => true,
                'msg' => 'Invalid User',
            ]);
        }
    }
    public function registaration(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'password' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json(["error" => true, "msg" => $validate->errors()->first()]);
        }
        $user = user::create([
            'vFirstName' => $request['first_name'],
            'vLastName' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        if ($user) {
            return json_encode([
                'error' => false,
                'msg' => 'User Created Successfully',
            ]);
        }
        return json_encode([
            'error' => true,
            'msg' => 'Something went wrong',
        ]);
    }
    public function update(Request $request)
    {
        $path = $this->uploadFile($request['image']);
        $path = json_decode($path);
        $user = User::where('id', auth()->user()->id)
            ->update([
                'vFirstName' => $request['name'],
                'email' => $request['email'],
                'vMobile' => $request['phone'],
                'eGender' => $request['gender'],
                'vImage' => $path->fileName,

            ]);
        if ($user) {
            return json_encode([
                'error' => false,
                'msg' => 'Updated successfully',
            ]);
        }
        return json_encode([
            'error' => true,
            'msg' => 'Something went wrong',
        ]);
    }
    public function update_password(Request $request)
    {

        $res = auth()->user()->password;
        if (Hash::check($request['prevpass'], $res)) {
            if ($request['prevpass'] == $request['newpass']) {
                return json_encode([
                    'error' => true,
                    'msg' => 'New Password should be different from old password',
                ]);
            } else {
                $user = User::where('id', auth()->user()->id)
                    ->update([
                        'password' => Hash::make($request['newpass']),
                    ]);

                if ($user) {
                    return json_encode([
                        'error' => false,
                        'msg' => 'Password updated successfully',
                    ]);
                }
                return json_encode([
                    'error' => true,
                    'msg' => 'Some error occurred while updating password',
                ]);
            }
        }
        return json_encode([
            'error' => true,
            'msg' => 'Wrong password',
        ]);
    }
    public function update_delivery(Request $request)
    {
        try {
            $user = User::where('id', auth()->user()->id)
                ->update([
                    'vFirstName' => $request['first_name'],
                    'vLastName' => $request['last_name'],
                    'vAddress' => $request['adress'],
                    'vAddress2' => $request['address2'],
                    'vState' => $request['state'],
                    'vAddress2' => $request['address2'],
                    'vZipCode' => $request['zip'],
                    'vCity' => $request['city'],
                    'vCountry' => $request['country'],

                ]);
        } catch (Exception $e) {

            return json_encode([
                'error' => true,
                'msg' => $e->getMessage(),
            ]);
        }

        return json_encode([
            'error' => false,
            'msg' => 'Updated successfully',
        ]);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('web-login');

    }
}
