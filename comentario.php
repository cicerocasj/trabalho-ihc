<?php

    //$connect = mysql_connect("localhost", "u144400074_fatec", "fatecihc123") or die("Falha ao conectar");
    //$connect = mysql_connect("localhost", "root", "") or die("Falha ao conectar");
    $connect = mysql_connect("localhost", "root", "raphael") or die("Falha ao conectar");

    //mysql_select_db("mortalidade", $connect);
    mysql_select_db("u144400074_fatec", $connect);

    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $noticia = $_REQUEST['noticiaId'];

    if (empty($email) || empty($message)) {
        $insert_res = 0;
    } else {
        $query = "INSERT INTO comentarios (email, message, noticia_id) VALUES ('" .
            $email . "', '" . $message. "', '". $noticia ."')";

        $insert_res = mysql_query($query, $connect);
    }

    $query_select = "SELECT * FROM comentarios WHERE noticia_id = '" . $noticia ."'";

    $res = mysql_query($query_select, $connect);

    $output = array();
    while ($results = mysql_fetch_array($res)) {
        $output[] = array(
            'id' => $results['id'],
            'email' => $results['email'],
            'message' => $results['message'],
            'noticia_id' => $results['noticia_id'],
            'data' => $results['data']
        );
    }

    $json = json_encode(array(
        "status" => $insert_res,
        "results" => $output
    ));
    print $json;