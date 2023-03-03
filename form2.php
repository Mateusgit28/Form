<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Cadastro novo usuário</h3>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-1">
                                <input type="text" class="form-control" placeholder="Nome *">
                            </div>
                            <div class="mt-1">
                                <input type="text" class="form-control" placeholder="Sobrenome *">
                            </div>
                            <div class="mt-1">
                                <input type="email" class="form-control" placeholder="Email *">
                            </div>
                            <div class="mt-1">
                                <input type="text" maxlength="10" miniength="10" class="form-control" placeholder="Telefone *">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-1">
                                <input type="password" class="form-control" placeholder="Confirme a senha *">
                            </div>
                            <div class="mt-1">
                                <select class="form-select">
                                    <option selected>Selecione uma pergunta de segurança</option>
                                    <option>Qual a estação do ano que você nasceu?</option>
                                    <option> Qual seu número de telefone anterior?</option>
                                    <option>Qual nome do seu animal de estimação</option>
                                </select>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>