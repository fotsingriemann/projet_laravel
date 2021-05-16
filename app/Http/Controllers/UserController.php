<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\APIError;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    public function index(Request $req)
    {
        $data = User::simplePaginate($req->has('limit') ? $req->limit : 25);
        foreach ($data as $key => $value) {
            $value->avatar = url($value->avatar);
        }
        return response()->json($data);
    }

    public function search(Request $req)
    {
        $this->validate($req, [
            'q' => 'present',
            'field' => 'present'
        ]);
        $data = User::where($req->field, 'like', "%$req->q%")->simplePaginate($req->has('limit') ? $req->limit : 15);
        return response()->json($data);
    }

    public function create(Request $req)
    {
        $data = $req->except('files');

         $this->validate($req, [
             'login' => 'required',
             'password' => 'required|min:5'
         ]);

        $data['avatar'] = '';
        //upload image
        if ($file = $req->file('avatar')) {
            $filePaths = $this->saveSingleImage($this, $req, 'avatar', 'users');
            $data['avatar'] = $filePaths;
        }
        
        $user = new User();
        $user->login = $data['login'] ?? null;
        $user->email = $data['email'] ?? null;
        $user->password = bcrypt($data['password']);
        $user->save();
        
        return response()->json($user);
    }

    public function find($id)
    {
        if (!$user = User::find($id)) {
            $apiError = new APIError;
            $apiError->setStatus("404");
            $apiError->setCode("USER_NOT_FOUND");
            return response()->json($apiError, 404);
        }
        $user->avatar = url($user->avatar);

        return response()->json($user);
    }

    public function update(Request $req, $id)
    {
        $user = User::find($id);
        if (!$user) {
            $apiError = new APIError;
            $apiError->setStatus("404");
            $apiError->setCode("USER_NOT_FOUND");
            return response()->json($apiError, 404);
        }

        $data = $req->except('files');

        // $this->validate($data, [
        //     'first_name' => 'required|min:2',
        //     'last_name' => 'required|min:2',
        //     // 'password' => 'required|min:4',
        //     // 'email' => ['required', 'email'],
        //     'user_type' => 'required',
        // ]);

        if (isset($data['password']) && strlen($data['password']) >= 4) {
            $data['password'] = bcrypt($data['password']);
        }

        //upload image
        if ($file = $req->file('avatar')) {
            $filePaths = $this->saveSingleImage($this, $req, 'avatar', 'users');
            $data['avatar'] = $filePaths;
        }

        if (isset($data['login'])) $user->login = $data['login'];
        if ($req['email']!=$user->email) {
            $user1= User::whereEmail($req['email'])->first();
            if ($user1 != null) {
             return response()->json([
               'message' => 'email existant'
           ], 400);
            }
            $data['email']=$req['email'];
          }
          
        if (isset($data['email'])) $user->email = $data['email'];
        if (isset($data['password'])) $user->password = $data['password'];
        if (isset($data['gender'])) $user->gender = $data['gender'];
        if (isset($data['first_name'])) $user->first_name = $data['first_name'];
        if (isset($data['last_name'])) $user->last_name = $data['last_name'];
        if (isset($data['birth_date'])) $user->birth_date = $data['birth_date'];
        if (isset($data['birth_place'])) $user->birth_place = $data['birth_place'];
        if (isset($data['avatar'])) $user->avatar = $data['avatar'];
        if (isset($data['baptist_date'])) $user->baptist_date = $data['baptist_date'];
        if (isset($data['profession'])) $user->profession = $data['profession'];
        // if (isset($data['profession_id'])) $user->profession_id = $data['profession_id'];
        if (isset($data['is_married'])) $user->is_married = $data['is_married'];
        if (isset($data['district'])) $user->district = $data['district'];
        if (isset($data['tel'])) $user->tel = $data['tel'];
        if (isset($data['language'])) $user->language = $data['language'];
        
        $user->update();
                          
        return response()->json([
            'user' => ['infos' => $user],
        ]);
    }

    public function destroy($id)
    {
        if (!$user = User::find($id)) {
            $apiError = new APIError;
            $apiError->setStatus("404");
            $apiError->setCode("USER_NOT_FOUND");
            return response()->json($apiError, 404);
        }
        $user->delete();

        return response()->json();
    }

    function password(){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        for($i=0; $i<8; $i++){
            $string .= $chars[rand(0, strlen($chars)-1)];
        }
        return $string;
    }
  
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required'
            ]);
  
          //verifier si l'utilisateur existe 
          $email=$request['email'];
              
      $key='';
      $condition=true;
      while($condition)
      {
        $key=$this->password();
        $user=User::wherePassword($key)->first();
        if($user == null)
        {
          $condition=false;
        }
      }
  
      $user = User::whereEmail($email)->first();
      if ($user == null) {
        return response()->json([
          'message' => 'email du user inexistants'
            ], 404);
         }
         //return $user;

      $us = [
      'login' => $user->login,
      'first_name' => $user->first_name,
      'last_name' => $user->last_name,
      'email' => $user->email,
      'password' => bcrypt($key),
      'avatar' => $user->avatar
    
      ];
      $response = $user->update($us);
      $data = [
        'name' => $user->first_name.' '.$user->last_name,
        'password' => $key,
      ];

      $email=$user->email;
      Mail::send('resetpassword',$data, function($message) use($email){
        $message->to($email,'adam')->subject('Reinitialisation du mot de passe');
        $message->from('echurchvcam@gmail.com','');
      });
      return 'true';
    }
  
}