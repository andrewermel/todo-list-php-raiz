<?php 

class ListaDelController extends BaseController{
    public function del() {
        $delete = $_GET['id'];

        $del_query = Lista::deletarItemPorId($delete);

        return Redirect::to("/lista");
    }
}