<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style sheet -->
    <link rel="stylesheet" href="./app/style.css">
    <title>Les cîmes du Forez</title>
</head>

<body>
    <div class="container body">

        <!-- header     -->
        <header>
            <div class="title">
                <p>Bienvenue sur</p>
                <h1>Les Cîmes du Forez</h1>
            </div>
        </header>


        <!-- Qui nous sommes -->
        <h2>Qui sommes-nous?</h2>
        <img src="image/profil.png" alt="" width="20%">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum blanditiis ex incidunt. Natus fuga impedit
            aperiam deleniti incidunt laudantium nihil laboriosam culpa, excepturi, cupiditate possimus eos? Id eveniet
            amet magnam.</p>


        <!-- Carroussel images -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/mini/1.jpg" class="d-block w-40" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/mini/2.jpg" class="d-block w-40" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/mini/3.jpg" class="d-block w-40" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/mini/4.jpg" class="d-block w-40" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/mini/5.jpg" class="d-block w-40" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Formulaire de contact -->
        <div class="row">
            <h2 class="col-4">Nous contacter</h2>
            <p class="col-4">(Les données ne sont pas conservés)</p>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <!-- Mail -->
                <label for="mail" class="form-label">Adresse mail:</label>
                <input type="email" name="mail" class="form-control" placeholder="monMail@exemple.com" require>
            </div>
            <div class="mb-3">
                <!--Message -->
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="3" require></textarea>
            </div>
            <div class="mb-3">
                <!-- Photo -->
                <label for="image" class="form-label">Photo (facultatif)</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <input class="form-control" type="file" name="image"> <!-- 2 Mo -->
            </div>
            <input type="submit" value="Envoyer" />
        </form>

        <!-- Traitement en php du formulaire -->
        <?php
        include 'app/form.php';
        ?>

        <!-- footer -->
        <footer>
            <!-- sprite Facebook -->
            <div class="social d-flex">
                <p class="align-middle">Suivez-Nous sur:</p>
                <a href="https://www.facebook.com/lescimesduforez" class="facebook" target="_blank"></a>
            </div>
            <a href="tel:+33633909970">tel:+33633909970</a>
        </footer>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <!-- Script JS -->
        <script src="./app/script.js"></script>
    </div>
</body>

</html>