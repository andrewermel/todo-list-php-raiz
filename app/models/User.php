<?php

class User extends Eloquent {
	protected $table = 'users';

	public static function buscaPorLoginESenha($login, $password){
        $users = DB::select("SELECT * FROM users WHERE login = '$login' AND password = '$password'");
        if(empty($users)){
            return null;
        }
        return $users[0];
    }

}