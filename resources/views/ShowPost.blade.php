@extends('Template');
@section('content');
<main class="d-flex flex-column">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
      <li class="breadcrumb-item"><a href="#"></a></li>
      <li class="breadcrumb-item active" aria-current="page"></li>
    </ol>
  </nav>
  <article class="flex-grow-1 d-lg-flex align-items-stretch">
    <div class="col-lg-7 p-5">
      <header class="jumbotron post-header">
        <h1>
        </h1>
        <hr class="my-4">
        <p class="m-0">Dans la catégorie : <span class="badge badge-dark"></span></p>
        <small>
            Rédigé par
            le
            <time
              datetime="">
            </time>
        </small>
      </header>
      <div class="px-5">
      </div>
    </div>
    <aside class="col-lg-5 p-5 bg-secondary text-light">
      <h2 class="h4 text-center">
        Liste des commentaires
          <small></small>
      </h2>
      <ul class="list-group text-white">
        <li class="list-group-item bg-dark">
          <i class="fa fa-comment" aria-hidden="true"></i>
          Rédigé par
          <strong></strong>
          <div class="py-2"></div>
        </li>
      </ul>
        <p>Cet article n'a pas encore de commentaire</p>

      <!-- Formulaire de saisie d'un nouveau commentaire pour cet article -->
      <form class="py-5" action="add_comment.php" method="post">

        <!-- Utilisation d'un champ caché pour spécifier à quel article rattacher le commentaire -->
        <input type="hidden" name="postId" value="">

        <fieldset class="bg-warning text-dark pt-4 px-4 rounded">
          <legend class="h4 p-2 bg-dark rounded text-white text-center">Nouveau commentaire</legend>
          <ul class="list-unstyled">
              <li class="form-group row">
                  <label class="col-sm-3 col-form-label" for="pseudo">Pseudo </label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" id="pseudo" name="pseudo">
                  </div>
              </li>
              <li class="form-group row">
                  <label class="col-sm-3 col-form-label" for="comment">Commentaire </label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                  </div>
              </li>
              <li class="text-right">
                  <button class="btn btn-dark" type="submit">Ajouter</button>
                  <a class="btn btn-secondary" href="index.php">Annuler</a>
              </li>
          </ul>
        </fieldset>
      </form>
      <p class="text-center">
        <a href="https://sql.sh/cours/insert-into" class="btn btn-dark">SQL INSERT</a>
        <a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/hidden" class="btn btn-dark">input type hidden</a>
      </p>
    </aside>
  </article>
</main>
@endsection;