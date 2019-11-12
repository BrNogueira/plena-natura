<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use App\UserCod;
use App\Mail\AuthMail;
use Illuminate\Support\Facades\Mail;
use App\Helpers\SMS;


class CodController extends Controller
{
    public function loginAccessKey(Request $request){
        if (!Auth::check()) {
            $userCod = UserCod::where('user_email', $request->authmail)->where('is_valid', 1)->where('cod', $request->cod)->get()->count();
            if($userCod > 0){
                $user = $request->authmail;
                $authUser = $this->findOrCreateUser($user);
                Auth::login($authUser, true);
                return response()->json([
                    'status' => 'success',
                ]);
            }else{
                return response()->json([
                    'status' => 'error',
                    'msg'    => 'Código inserido não é válido.'
                ]);
            }
        } else {
            return redirect('/');
        }
        return redirect('/');
    }

    public function findOrCreateUser($user){
        $authUser = User::where('email',$user)->OrWhere('phone', $user)->first();
        if ($authUser) {
            return $authUser;
        } else {
            
            $divider = strpos($user, '@');
            if($divider !== false){
        

                $newUser = new User;
                $newUser->name = ''; //substr($user, 0, $divider) Caso deseje ter algo como nome.
                $newUser->email = $user;
                $newUser->password = Hash::make('25468932swef');
                $newUser->provider = 'cod';
                $newUser->save();
                return $newUser;
                
            }else{
                $newUser = new User;
                $newUser->name = '';
                $newUser->email = $user; // O número é salvo como e-mail também (por não aceitar repetidos)
                $newUser->phone = $user;
                $newUser->password = Hash::make('25468932swef');
                $newUser->provider = 'cod';
                $newUser->save();
                return $newUser;
            }
        }
    }
    public function sendEmailCod(Request $request){
        $accessKey = null;
        // Gerar número aleatório de 6 dígitos
        for($i = 0; $i<6; $i++) {
            $accessKey .= rand(0, 9);
        }
        // Enviar e-mail para o usuário


        $data['is_valid']    = 0;
        $userValid           = UserCod::where('is_valid', 1)->where('user_email', $request->value)->update($data);

        $userCod             = new UserCod();
        $userCod->cod        = $accessKey;
        $userCod->user_email = $request->value;
        $userCod->is_valid   = 1;
        $userCod->save();


        $divider = strpos($request->value, '@');
        if($divider !== false){
           return Mail::to($request->value)
            ->send(new AuthMail($accessKey));
        }else{
            return \App\Helpers\SMS::sendCod($request->value, $accessKey);
        }

        // retornar em json se foi um sucesso ou não
        return 1;
    }
}
