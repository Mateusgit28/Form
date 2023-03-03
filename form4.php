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
                <h3>Dados Cadastrais</h3>


            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="mt-1">

                            <input type="text" class="form-control" placeholder="Nome">
                        </div>

                        <div class="mt-1">
                            <input type="text" class="form-control" placeholder="Endereço">
                        </div>
                        <div class="row mt-1">
                            <div class="col-5">
                                <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                            </div>
                            <div class="col-5">
                                <input type="text" name="cidade" class="form-control" placeholder="cidade">
                            </div>
                            <div class="col-2 mt-1">
                                <select name="Estado" class="form-select" placeholder="UF">
                                    <option selected> UF</option>
                                    <option>SP</option>
                                    <option>RJ</option>
                                    <option>MG</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-5">
                                <input type="text" name="cep" class="form-control" placeholder="CEP">
                            </div>
                            <div class="col-5">
                                <input type="telefone" name="telefone" class="form-control" placeholder="Telefone">
                            </div>

                        </div>
                        <div class="mt-1">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>
                </div>
        </div>
        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>