<?php

class ListaController extends BaseController {
    public function index(){
        if(!isset($_SESSION['login'])){
            return Redirect::to('/');
        }

        $nomeUsuario = $_SESSION['login'];

        $items = Lista::todosItems();

        foreach($items as $Item){
            $Item->class = $Item->done ? "riscado" : "";
        }

        return View::make('lista', [
            'nomeUsuario' => $nomeUsuario,
            'items' => $items
        ]);
    }
}