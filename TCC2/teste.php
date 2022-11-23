<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="mascaras.js"></script>
    <link rel="stylesheet" href="teupai.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Teste TCC BOOTSTRAP</title>
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
    <h1>Cadastro de Usuário</h1>
    <form action="Inicial.php" method="post">
    

        
    <br>
    
    <div class="container">
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome: </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail: </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha: </label>
        <input type="password" class="form-control" id="Senha" placeholder="Senha">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Repetir Senha: </label>
        <input type="password" class="form-control" id="senha" placeholder="Repetir Senha">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefone: </label>
        <input type="text" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="15">
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Eu li os termos</label>
      </div>
      
      <button type="submit" class="btn btn-primary">Gravar</button>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>