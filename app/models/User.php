<?php

class User extends Eloquent {
    protected $table = 'users';

	public static function buscaPorLoginESenha($login, $password){
        $user = User::where("login", $login)->where('password', $password)->find();
        if(empty($user)){
            return null;
        }
        return $user;
    }

}