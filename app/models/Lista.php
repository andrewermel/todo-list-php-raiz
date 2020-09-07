<?php

class Lista extends Eloquent {
    protected $table = 'list';

    public static function todosItems(){
        return DB::select("SELECT list.name,quantidade,list.id,done,users.name AS user_name FROM list INNER JOIN users ON users.id = list.criador_id");
    }

    public static function addItem($quantidade, $nomeItem){
        DB::insert("INSERT INTO list (quantidade,name) VALUES (?,?)", [$quantidade, $nomeItem]);

        // $item = new Lista;
        // $item->quantidade = $quantidade;
        // $item->name = $nomeItem;
        // $item->save();

        // $item = Lista::create(['quantidade' => $quantidade, 'name' => $nomeItem]);
        // $item->save();
    }

    public static function buscaUmItemPorNome($nomeItem){
        // return DB::table('list')->where('name', $nomeItem)->find();
        // return DB::select("SELECT name from list WHERE ?= name", [$nomeItem]);
        return Lista::where('name', $nomeItem)->get();
    }

    public static function deletarItemPorId($id){
        return Lista::where('id', $id)->delete();
        // return DB::delete("DELETE FROM list WHERE id= ?",[$delete]);
    }
    
    public static function marcarComoConcluidoPorId($id){
        // return DB::update("UPDATE list SET done = True where id = ?",[$id]);

        // $item = Lista::find($id);
        // $item->done = true;
        // $item->save();

        return Lista::where('id', $id)->update(['done' => true]);
    }
}

