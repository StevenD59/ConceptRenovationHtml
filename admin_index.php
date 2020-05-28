<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Admin - Liste réalisations</title>
</head>

<body>

    <header>
        <div class="col-12 col-md-6 col-xl-4">
            <img src="assets/img/logo.jpg" class="img-fluid sizeLogo" alt="" />
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light d-xl-none">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Liste des réalisations</a>
                <a class="nav-item nav-link" href="#">Liste des devis</a>
            </div>
        </div>
    </nav>

    <div class="row m-0">

        <div class="d-none d-xl-block col-md-2 backgroundMenu text-center">
            <ol class="liste p-0 mt-3">
                <li>- Liste des réalisations</li>
                <li class="mt-3">- Liste des devis</li>
            </ol>
        </div>


        <div class="col-12 col-md-10 text-center">
            <h1 class="mb-5">Liste des réalisations</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th class="col-6">Nom réalisations</th>
                        <th class="col-6">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Réalisations n°1</th>
                        <!-- TABLEAU RESPONSIVE TELEPHONE -->
                        <td class="pt-3 d-md-none ">
                            <div class="d-flex justify-content-around">
                                <a class="fas fa-search fa-lg colorIconTab" href="#"></a>
                                <a class="fas fa-edit fa-lg colorIconTab" href="#"></a>
                                <a class="fas fa-trash-alt fa-lg colorIconTab" href="#"></a>
                            </div>
                        </td>
                        <!-- TABLEAU TAILLE "NORMAL" -->
                        <td class="d-none d-md-block">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Voir
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Modifier
                                </label>
                                <label class="btn btn-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Supprimer
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button type="button" class="btn btn-light">Ajouter une réalisation</button>

        </div>


    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="assets/js/js.js"></script>
</body>

</html>