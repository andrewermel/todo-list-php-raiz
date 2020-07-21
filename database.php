<?php

function db_execute_query($query)
{
    $host = 'ec2-34-233-226-84.compute-1.amazonaws.com';
    $port = '5432';
    $database = 'd7r0ukrhem4kv0';
    $user = 'shqfnemscchnnh';
    $password = 'a3dc6f7ca7fc5c83f8ab3109d05c24fb3028d3ea663f7cd4947cb3212dc08485';

    $conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

    return pg_query($conexao, $query);
}


function sql_anti_injection($sql)
{
    $sql = trim($sql);
    $sql = strip_tags($sql);
    $sql = pg_escape_string($sql);
    return preg_replace("@(--|#|;|=)@s", '', $sql);
}