<!-- 
    Stampare a schermo una decina di dischi musicali (vedi screenshot).
    Utilizzare:
    Html, CSS, VueJS, axios, PHP
    Prima Milestone:
    Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
    Seconda Milestone:
    Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
    Bonus:
    Attraverso un’altra chiamata api, filtrare gli album per genere 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP-ajax-Dischi</title>
</head>
<body>

    <header class="bg_custom_blue h-10-vh d-flex align_center ps-3">

        <img src="./assets/img/logo-spotify.png" alt="" style="width: 50px; height: 50px;">

    </header>

    <main>

        <?php include __DIR__ . '/./partials/main.php' ?>

        <div v-for="el in arrayApi">
            {{el.title}}
        </div>

    </main>
    
    <!-- cdn Vue2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- cdn Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- cdn Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Javaascript main -->
    <script src="./assets/js/main.js"></script>

</body>
</html>



