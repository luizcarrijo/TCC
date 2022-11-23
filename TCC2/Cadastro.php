 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="mascaras.js"></script>
    <link rel="stylesheet" href="styleC.css">
    <title>Teste TCC</title>
</head>
<body>
     <table width="100%" cellspacing="0px" align="center">
         <tr>
             <td color="#FFFFFF" size=1 face="verdana, arial, helvetica"><b>
                <h3><img align="left" src="\TCC\img\SF.jpg" title="Sport Friends"></h3><h1>Sport Friends</h1></b></td>
                
         </tr>
     </table>
    <br>
    <h1>Cadastro de Usuário</h1>
    <form action="Login.php" method="post">
    <div>
        <br>
        <label for="nome"><b>Nome:</b></label>
        <input type="text" placeholder="Seu nome" name="nome" required><br>
        <br>
        <label for="email"><b>E-mail:</b></label>
        <input type="email" placeholder="Seu E-mail" name="email" required><br>
        <br>
        <label for="psw"><b>Senha:</b></label>
        <input type="password" placeholder="Senha" name="psw" required><br>
        <br>
        <label for="psw2"><b>Repetir Senha:</b></label>
        <input type="password" placeholder="Repetir senha" name="psw2" required><br>
        <br>
        <label for="nome"><b>Telefone:</b></label>
        <input type="text" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="15"/>
        <br>
        <br>
        <input type="submit" name="grava" value="Gravar">
        </form>
    </div>  
</body>
</html>
