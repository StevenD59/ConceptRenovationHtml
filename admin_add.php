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
    <title>Accueil</title>
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


        <div class="col-12 col-xl-10 text-center">
            <h1 class="mb-5">Ajouter une réalisation</h1>
            <div class="col-12 col-md-9 color_div mx-auto rounded p-2">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label mx-auto">Titre réalisation:</label>
                        <div class="col-sm-8 mx-auto">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mx-auto">
                            <label for="exampleFormControlFile1">Télécharger une image</label>
                            <div class="col-12">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label mx-auto">Description:</label>
                        <div class="col-sm-8 mx-auto">
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                    </div>

                    <button type="button" class="btn btn-light my-2">Ajouter</button>

                </form>
            </div>

        </div>


    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="assets/js/js.js"></script>
</body>

</html>