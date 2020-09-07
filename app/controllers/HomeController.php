<?php

class HomeController extends BaseController {

	public function index()
	{
        if(isset($_SESSION['login'])){
            return Redirect::to('/lista');
        }

        $mensagem = '';
        if(isset($_GET['error'])) {
            if ($_GET['error'] == 'login_cagado') {
                $mensagem = 'Login ou senha inválidos!';
            }
        }
		return View::make('login', ['mensagem' => $mensagem]);
	}

}
