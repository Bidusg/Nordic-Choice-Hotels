<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordic Choice Hotels - Fasiliteter</title>
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
            <h2 class="fw-bold h-font text-center">Våre Fasiliteter</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Temporibus oncidunt odio quos <br> dolore commodi repudiandae
                tenetur consequuntur et similique asperiores.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="bilder/facilities/Wifi.svg" width="40px">
                            <h5 class="m-0 ms-3">Wifi</h5>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consctetur adipisicing elit.
                            Omnis quaerat non nam aperiam ecercitationem neque a!
                        </p>
                    </div>
                </div>               
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="bilder/facilities/Wifi.svg" width="40px">
                            <h5 class="m-0 ms-3">Wifi</h5>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consctetur adipisicing elit.
                            Omnis quaerat non nam aperiam ecercitationem neque a!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="bilder/facilities/Wifi.svg" width="40px">
                            <h5 class="m-0 ms-3">Wifi</h5>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consctetur adipisicing elit.
                            Omnis quaerat non nam aperiam ecercitationem neque a!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="bilder/facilities/Wifi.svg" width="40px">
                            <h5 class="m-0 ms-3">Wifi</h5>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consctetur adipisicing elit.
                            Omnis quaerat non nam aperiam ecercitationem neque a!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="bilder/facilities/Wifi.svg" width="40px">
                            <h5 class="m-0 ms-3">Wifi</h5>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consctetur adipisicing elit.
                            Omnis quaerat non nam aperiam ecercitationem neque a!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="bilder/facilities/Wifi.svg" width="40px">
                            <h5 class="m-0 ms-3">Wifi</h5>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consctetur adipisicing elit.
                            Omnis quaerat non nam aperiam ecercitationem neque a!
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <?php require('inc/footer.php') ?>


    </body>
</html>
