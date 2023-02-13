<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso</title>
     <!--CSS-->
     <link rel="stylesheet" href="css/style.css">
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   
</head>
<body>


    <form class="form-signin" action="logar.php" method="POST">
        <div class="card">
           <div class="card-top">
            <img class="img-login" style="width:130px;" src="img/logo.png" alt="logo">
            <h2 class="title font-weight-normal">Acesso ao Sistema</h2>
            <p>Seja bem-vindo(a)!</p>
        </div>

            <div class="card-group">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="card-group">
                <input type="password" name="senha" placeholder="Senha" required>
            </div> 

            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>
            </div> 
            
            <div class="card-group btn">
                <button type="submit">ENTRAR</label>
            </div> 


        </div>
    </form>
    
<!--BOOTSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>