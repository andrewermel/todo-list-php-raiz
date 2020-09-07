<?php

class LoginController extends BaseController {
	public function login(){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = User::buscaPorLoginESenha($login, $password);

        if($user){
            $_SESSION['login'] = $login;
            return Redirect::to('/lista');
        }
        else {
            return Redirect::to('/?error=login_cagado');
        }
    }
}