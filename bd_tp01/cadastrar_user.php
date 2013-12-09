<?php
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<style type="text/css">
	div{
		border: medium solid black;
		box-shadow: 4px 4px 10px 2px black;
		padding: 10px;
		border: 5px solid #003;
		border-radius:15px;
	}
	<style>
		.test{
			font-size: 12px;
			color:#09F;
		}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Cadastrar usuário</title>
</head>
	<form method="post">
    	<div><span class="test">Nome:<input name="nome" /><br />
        Sobrenome:<input name="Sobrenome"  /><br />
        Apelido:<input name="Apelido" /><br />
        CPF: <input name="CPF"  /><br />
        E-mail:<input type="email" name="Email"  /><br />
        Senha: <input type="password" name="Senha" /><br />
        
       	<input type="radio" name="sexo" value="Masculino" /> Masculino<br />
        <input type="radio" name="sexo" value="Feminino" /> Feminino<br />
       	<input type="submit" name="Cadastrar" value="Cadastrar" />
        
        </span></div>
    </form>
<body>
</body>
</html>