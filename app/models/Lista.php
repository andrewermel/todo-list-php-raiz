<?php

class Lista extends Eloquent {
    protected $table = 'list';

    public static function todosItems(){
        return DB::select("SELECT list.name,quantidade,list.id,done,users.name AS user_name FROM list INNER JOIN users ON users.id = list.criador_id");
    }

    public static function addItem($quantidade, $nomeItem){
        DB::insert("INSERT INTO list (quantidade,name) VALUES ($quantidade,'$nomeItem')");
    }

    public static function buscaUmItemPorNome($nomeItem){
        return DB::select("SELECT name from list WHERE '$nomeItem'= name");
    }
}
