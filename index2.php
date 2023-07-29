<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body{
            background-color: #f2f2f2;
        }

        .login{
            width:60%;
            height: 100vh;
            align-items:center;
            justify-content:center;
            display:flex;
        }
    </style>
</head>
<body>
    <div class="login">    
        <div class="container">
            <div class="row">
                <div class="col-lg4 offset-lg-4">
                    <div class="card">
                    <div class="card-body">
                        <h3>Acesso Restrito</h3>                        
                    </div>
                        <div class="card-body">
                        <form action="login.php" method="POST"> <!--INICIO FORM-->
                        <div>
                            <div class="mb-3">
                                <label>Usuário</label>
                                <input type="text"
                                name="usuario"
                                class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                            <label>Senha</label>
                                <input type="password"
                                name="senha"
                                class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form> <!--FIM FORM-->
                        </div>
                    
                    </div>
                </div>
            </div> 
            </div>
    </div>
    </div>
</body>
</html>