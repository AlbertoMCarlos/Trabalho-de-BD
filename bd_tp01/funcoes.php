<?php
	include("banco.php");
	
	function cadastrarUsuario($nome, $sobrenome, $cpf, $email, $senha, $apelido){
                $qry = "INSERT INTO public.usuario (nome,sobrenome,\"CPF\",email,senha,apelido)                  VALUES ('".$nome."', '".$sobrenome."', '".$cpf."', '".$email."', md5('".$senha."'), '".$apelido."')";
        }
?>