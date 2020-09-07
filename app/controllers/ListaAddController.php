<?php
class ListaAddController extends BaseController {
    public function add(){
        $quantidade = $_POST['quantidade'];
        $nomeItem = $_POST['nomeItem'];

        $items = Lista::buscaUmItemPorNome($nomeItem);

        if(!empty($items)){
            echo 'Item já existe na lista';
        }
        elseif($quantidade < 0){
            echo 'quantidade invalida digite um numero positivo!!';
            return Redirect::to("/lista?error=quantidade_negativa");
        }
        else {
            Lista::addItem($quantidade, $nomeItem);
            return Redirect::to("/lista");
        };
    }
}