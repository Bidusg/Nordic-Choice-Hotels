<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordic Choice Hotels - Om Oss</title>
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
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>
    <body class="bg-light">

        <?php require('inc/header.php') ?>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">Om Oss</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Temporibus oncidunt odio quos <br> dolore commodi repudiandae
                tenetur consequuntur et similique asperiores.
            </p>
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Nordic Choice Hotels</h3>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Temporibus oncidunt odio quos dolore commodi repudiandae
                    tenetur consequuntur et similique asperiores.
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="bilder/about/about.jpg" class="w-100">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="bilder/about/hotel.svg" width="70px">
                        <h4 class="mt-3">100+ Rooms</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="bilder/about/customers.svg" width="70px">
                        <h4 class="mt-3">2000+ Kunder</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="bilder/about/rating.svg" width="70px">
                        <h4 class="mt-3">665+ Vurderinger</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="bilder/about/staff.svg" width="70px">
                        <h4 class="mt-3">700+ Ansatte</h4>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">MANAGMENT TEAM</h3>
        <?php require('inc/footer.php') ?>


    </body>
</html>
