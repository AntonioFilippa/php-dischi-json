<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Collection</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.2/axios.min.js"></script>

    <!-- Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Custom JavaScript -->
    <script defer src="script.js"></script>
</head>

<body>
    <header>
        <nav class="navbar text-white ">
            <div class="container">
                <a class="navbar-brand text-white" href="#">
                    <img src="img/logo.jpg" alt="logo spotify" class="logo d-inline-block align-text-top">
                    Antonio Filippa
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container py-5" id="app">
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div v-for="(disc, i) in discs" class="col" :key="i">
                    <div class="card h-100 text-center">
                        <img :src="disc.poster" class="card-img-top my-3 album-cover" alt="Album Cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ disc.title }}</h5>

                            <p class="card-text">{{ disc.author }}</p>

                            <p class="card-text"><small class=>{{ disc.year }}</small></p>

                            <p class="card-text"><small class=>{{ disc.genre }}</small></p>
                            <!-- DESCRIPTION -->
                            <p class="card-text description">{{ disc.description }}</p>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>