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
    <div id="root">

        <header class="bg_custom_blue h-10-vh d-flex align_center justify_between ps-3">

            <img src="./assets/img/logo-spotify.png" alt="" style="width: 50px; height: 50px;">

            <select v-model="genereSelezionato" @change="selectGenre" class="m-3">
                <option value="">All</option>
                <option value="genere" v-for="genere in generi">{{genere}}</option>
            </select>

        </header>

        <main class="bg-custom-dark-blue p-5">

            <?php include __DIR__ . '/./partials/main.php' ?>

            <!-- <div class="bg-custom-dark-blue p-5"> -->

            <div class="container">
                <h2 class="text-center text-white">Stampa in JS tramite api</h2>
                
                <ul class="reset_list row d-flex align-center justify_center">
                    
                    <li class="m-3 pt-4 pb-5 col-3 text-white bg_custom_blue text-center" v-for="el in arrayApi">
                        
                        <img class="h-75 w-100" :src="el.poster" alt="">
                        <div class="text-uppercase p-2 fw-bold fs-5">
                            {{el.title}} 
                        </div>
                        <div class="p-2">
                            {{el.author}} 
                        </div>
                        <div class="p-2">
                            {{el.year}} 
                        </div>
                        
                    </li>
            
                </ul>
                
            </div>

        </main>

    </div>

    
    
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



