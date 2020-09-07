<?php

class ListaDoneController extends BaseController{
    public function done(){
        $concluido =$_GET['id'];

        $marcaDone = Lista::marcarComoConcluidoPorId($concluido);

        return  Redirect::to("/lista");

    }



}