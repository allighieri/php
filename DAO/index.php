<?php

    require_once("config.php");

    //tras um só usuário de acordo com o id pesquisado
    // $root = new Usuario();
    //$root->loadById(2);
    //echo $root;

    //Carrega uma lista de usuario
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //Carrega uma lista de usuários buscando pelo login
    //$search = Usuario::search("we");
    //echo json_encode($search);

    //carrega um usuario usando o login e a senha
    //$usuario = new Usuario();
    //$usuario->login("user","12345");

    //echo $usuario;

    //INSERIR COM PROCEDURE
    //$aluno = new Usuario("Weder", "12345698");
    //$aluno->insert();
    //echo $aluno;

    //Updade registros
    $usuario = new Usuario();

    $usuario->loadById(13);

    $usuario->update("Sullivan", "agencia5859262");

    


/*    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuarios");

    echo json_encode($usuarios);
*/



?>