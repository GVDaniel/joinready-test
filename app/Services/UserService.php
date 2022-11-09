<?php

namespace App\Services;
use App\Models\User;
use App\Services\LogService;

use Illuminate\Support\Facades\Http;

class UserService{

    public function __construct(){

    }

    public function getUsers() {
        $logService = new LogService();
        $info = "consulta de usuarios";
        $logService->saveLog($info);
        return $respose = Http::get('https://test.conectadosweb.com.co/users/'.env("TOKEN"));
    }

    public function getUserTransactions($id) {
        $logService = new LogService();
        $info = "consulta de transacciones";
        $logService->saveLog($info);
        return $respose = Http::get('https://test.conectadosweb.com.co/users/'.env("TOKEN").'/transaction/'.$id);
    }
     // this functions save the users in database to lighten the load after consulting again
    public function setUsers($data) {
        User::truncate();
        $users = json_decode($data);
        foreach ($users as $user) {
            $new_user = new User();
            $new_user->segmentation_id   = $user->segmentation_id;
            $new_user->program_id        = $user->program_id;
            $new_user->user_id           = $user->user_id;
            $new_user->netcommerce_id    = $user->netcommerce_id;
            $new_user->h2a_token         = $user->h2a_token;
            $new_user->identification_type_id    = $user->identification_type_id;
            $new_user->identification_number     = $user->identification_number;
            $new_user->mobile_number     = $user->mobile_number;
            $new_user->birth_date        = $user->birth_date;
            $new_user->save();
        }
        return ["status" => 200];
    }
}