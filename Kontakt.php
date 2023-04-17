<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordic Choice Hotels - Kontakt-Oss</title>
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
            <h2 class="fw-bold h-font text-center">Kontakt Oss</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Temporibus oncidunt odio quos <br> dolore commodi repudiandae
                tenetur consequuntur et similique asperiores.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">

                    <div class="bg-white rounded shadow p-4">
                        <iframe  class="w-100 rounded mb-4"  height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213079.5817181829!2d10.516018867492665!3d59.82497535415145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416dd2eb00ce03%3A0x9adfdf8555fa7db8!2sNordic%20Choice%20Hotels%20HQ!5e1!3m2!1sno!2sno!4v1680648291510!5m2!1sno!2sno" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                        <h5>Adresse</h5>
                        <a href="https://goo.gl/maps/GnwsippHwda6sfiM9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2>
                            <i class="bi bi-geo-alt-fill"></i>Fredrik Stangs Gate 22-24, 0264 Oslo
                        </a>

                        <h5 class="mt-4">
							Ring Oss
						</h5>
						<a href="tel: +4722401300" class="d-inline-block mb-2 text-decoration-none text-dark"> 
							<i class="bi bi-telephone-fill"></i> +47 22 40 13 00
                        </a>

                        <h5 class="mt-4">Send en Mail</h5>
                        <a href="mailto: kidus.fisseha002@gmail.com" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill"></i> kidus.fisseha002@gmail.com
                        </a>

                        <h5 class="mt-4">
							Følg Oss
						</h5>
						<a href="https://twitter.com/Nordic_Choice" class="d-inline-block text-dark fs-5 me-2"> 
							<i class="bi bi-twitter me-1"></i>
						</a>
						<br>
						<a href="https://www.facebook.com/nordicchoicehotels/?locale=nb_NO" class="d-inline-block text-dark fs-5 me-2"> 
							<i class="bi bi-facebook me-1"></i>
						</a>
						<br>
						<a href="https://www.instagram.com/nordicchoice/" class="d-inline-block text-dark fs-5"> 
							<i class="bi bi-instagram me-1"></i>
						</a>
                    </div>
                </div>               
                <div class="col-lg-6 col-md-6  px-4">
                    <div class="bg-white rounded shadow p-4">
                           <form>
                                <h5>Send en melding</h5>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Navn</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Mail</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Tema</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" style="font-weight: 500;">Melding</label>
                                    <textarea class="form-control shadow-none" rows="13" syle="resize: none;"></textarea>
                                </div>
                                <button type="submit" class="btn text-white custom-bg mt-3 shadow-none">Send</button>
                           </form>
                    </div>
                </div>
            </div>
        </div>


        <?php require('inc/footer.php') ?>


    </body>
</html>
