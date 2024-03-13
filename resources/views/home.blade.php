<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CMS (Beta) - Notícias Cadastradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #e8e8e8;">

<div class="container-fluid">
    <div class="row">
        @include("admin.partials.menu")
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-1">Display 1</h1>
            <div class="mb-3 mt-5">
                <label for="formGroupExampleInput" class="form-label">Medicamento</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o nome do medicamento">
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <label for="formGroupExampleInput" class="form-label">Categoria</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="footer">
        <footer class="py-3 my-4">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Quem somos</div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
        </footer>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
