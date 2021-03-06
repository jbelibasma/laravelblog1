<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="TP de la Formation Développeur 3WA : module PHP 2">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
                min-height : 100vh;
                display : flex;
                flex-direction : column;
                justify-content : space-between;
            }

        main {
        margin-top : 0;
        margin-bottom : auto;
        flex-grow : 2;
        }

        .post-header, .main-header {
        background : url(../image/fond.jpg) no-repeat center top;
        background-size : cover;
        }

        @media screen and (min-width : 960px) {
        .card {
            width : calc(100% /4 - 1rem );
        }
        }
    </style>
</head>
<body class="post-header">
<header class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand" title="Retour à l'accueil">Le blog de Tante Ursule</a>
    <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navigation"
            aria-controls="navigation"
            aria-expanded="false"
            aria-label="Menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <nav class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="mockupsDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Modèle de données & Mockups
                </a>
                <div class="dropdown-menu" aria-labelledby="mockupsDropdown">
                    <a class="dropdown-item" target="_blank" href="ressources/mld-blog.pdf">Modèle de données</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" target="_blank" href="ressources/arborescence.pdf">Arborescence</a>
                    <a class="dropdown-item" target="_blank" href="ressources/blog_layout.pdf">Organisation générale des vues (layout)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" target="_blank" href="ressources/mockups/accueil.png">Mockup Accueil</a>
                    <a class="dropdown-item" target="_blank" href="ressources/mockups/article.png">Mockup Page post</a>
                    <a class="dropdown-item" target="_blank" href="ressources/mockups/gestion_articles.png">Mockup Admin articles</a>
                    <a class="dropdown-item" target="_blank" href="ressources/mockups/nouvel_article.png">Mockup Ajouter un post</a>
                    <a class="dropdown-item" target="_blank" href="ressources/mockups/edition_article.png">Mockup Modifier un post</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="mockupsDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Supports
                </a>
                <div class="dropdown-menu" aria-labelledby="mockupsDropdown">
                    <a class="dropdown-item" target="_blank" href="https://sql.sh/optimisation">Optimisation SQL</a>
                    <a class="dropdown-item" target="_blank" href="https://sql.sh/1548-mysql-innodb-myisam">Moteur de
                        stockage </a>
                    <a class="dropdown-item" target="_blank"
                       href="https://www.sqlfacile.com/apprendre_bases_de_donnees/les_types_sql">Les types SQL</a>
                    <a class="dropdown-item" target="_blank"
                       href="https://openclassrooms.com/fr/courses/1959476-administrez-vos-bases-de-donnees-avec-mysql/1963057-cles-primaires-et-etrangeres">Clés
                        primaires et étrangères</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" target="_blank"
                       href="https://openclassrooms.com/fr/courses/2091901-protegez-vous-efficacement-contre-les-failles-web/2680167-la-faille-xss">Faille
                        XSS (Cross-Site Scripting)</a>
                    <a class="dropdown-item" target="_blank"
                       href="https://openclassrooms.com/fr/courses/2091901-protegez-vous-efficacement-contre-les-failles-web/2680172-la-faille-include">La
                        faille include</a>
                    <a class="dropdown-item" target="_blank"
                       href="https://openclassrooms.com/fr/courses/2091901-protegez-vous-efficacement-contre-les-failles-web/2680180-linjection-sql">Injection
                        SQL</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin_posts_index.php">
                    <i class="fas fa-pen-nib" aria-hidden="true"></i>
                    Administration
                </a>
            </li>
        </ul>
    </nav>
</header>
<main>
@yield('content')
</main>
<footer class="navbar navbar-dark bg-dark text-center">
    <img class="mx-auto" src="img/3wa.png" alt="3W Academy" width="50">
    <p class="navbar-text w-100 m-0 small">
        <strong><a href="https://3wa.fr/">&copy; 3W Academy</a> - PHP : Module 2 - Formation Développeur WEB - Tous&nbsp;droits&nbsp;réservés</strong><br>
        Cet exercice est mis à disposition des stagiaires dans le cadre exclusif de leur apprentissage
    </p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
