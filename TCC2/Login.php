<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleC.css">
    <title>Teste TCC</title>
</head>
<body>
     <table width="100%" cellspacing="0px" align="center">
         <tr>
             <td align="center" bgcolor="#0C3D11"><font color="#FFFFFF" size=1 face="verdana, arial, helvetica"><b>
                <h3><img align="left"src="\TCC\img\SF.jpg" title="Sport Friends"></h3></b></font></td>
         </tr>
         <tr>
     </table>
     <br>
    <h1>Login</h1>
    <br>
    <form action="Inicial.php" method="post">
    <div>
        <label for="nome"><b>Nome:</b></label>
        <input type="text" placeholder="Seu usuário" name="nome" required><br>
        <br>
        <label for="senha"><b>Senha:</b></label>
        <input type="password" placeholder="Sua Senha" name="psw" required><br>
        <br>
        <input type="submit" name="entrar" value="Entrar">
        <br><br>
        <a href="Cadastro.php">Não tem Login? Cadastra-se</a>
        </form>
    </div>
</body>
</html>