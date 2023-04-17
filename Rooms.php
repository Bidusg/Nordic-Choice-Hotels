<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordic Choice Hotels - Rom</title>
    <link rel="stylesheet" src="css/felles.css">
    <?php require('inc/links.php') ?>
    <style>
                :root{
    --teal: #279e8c;
    --teal_hover:#000;
    }
    *{
        font-family: 'Poppins', sans-serif;
        }
        .h-font{
        font-family: 'Merienda', cursive;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        input[type=number] {
        appearance: textfield;

        }
        .custom-bg{
        background-color: var(--teal);
        border: 1px solid var(--teal);
        }
        .custom-bg:hover{
        background-color: var(--teal_hover);
        border-color: var(--teal_hover);
        }
        .h-line{
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>
    <body class="bg-light">

        <?php require('inc/header.php') ?>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">Våre Rom</h2>
            <div class="h-line bg-dark"></div>
        </div>

        <div class="container">
            <div class="row">
                 
                <div class="col-lg-3">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


        <?php require('inc/footer.php') ?>


    </body>
</html>
