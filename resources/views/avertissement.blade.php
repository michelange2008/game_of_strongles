@extends('layouts.main')


@section('menu')

@include('titre')

@endsection

@section('content')

  <div class="row justify-content-center text-white">

    <div class="col-md-5 pt-3">

      <h2 class="pb-3">Avertissement: ceci n'est qu'une ébauche incomplète !</h2>

      <h5 class="">L'application présentée ici est seulement une ébauche destinée à montrer ce qu'il serait possible d'élaborer comme outil pédagogique.</h5>

      <h5 class="">C'est un brouillon qui présente encore de nombreux défauts</h5>

      <h5 class="">D'une part la programmation informatique de cette application reste incomplète ce qui peut expliquer des bugs divers. Des fonctionnalités supplémentaires doivent être rajoutées: découpage des parcelles, effet des précipitations, etc.</h5>

      <h5 class="">D'autre part, la modélisation de l'infestation d'un troupeau au cours de la saison de pâturage reste à affiner largement. C'est un travail complexe qui doit associer des recherches bibliographiques avec des expérimentations de terrain.</h5>

      <h5>Le modèle sous-jacent est donc encore largement perfectible.</h5>

      <h5>Enfin, un travail d'ergonomie de l'application est indispensable afin d'en faciliter l'usage par une personnes qui la découvre.</h5>

      <h5>Néanmoins, ce <em>brouillon</em> permet d'avoir une idée de l'intérêt d'un outils de modélisation des l'infestation au pâturage des troupeaux de brebis ou de chèvres.</h5>

    </div>

    <div class="col-md-5 pt-3 border-left">

      <h2 class="pb-3">Mode d'emploi</h2>

      <h5>En cliquant sur le bouton ci-dessous, vous aurez accès à la page d'accueil.</h5>

      <h5>Elle vous permettra </h5>

      <ul>
        <li>Soit de saisir toutes les informations concernant votre troupeau (espèce, effectif), votre calendrier de pâturage (dates de mise à l'herbe et de rentrée en batiment) ainsi que la liste de parcelles dont vous disposez avec leur superficie et leur historique. </li>
        <li>Soit de faire fonctionner une démonstration sur la base d'un exemple prédéfini.</li>
        <li>Soit de modifier les paramètres physiologiques des parasites (longévité, vitesse d'évolution, etc.)</li>
      </ul>

      <h5>Quand vous avez fait votre choix et éventuellement fournit les informations nécessaires, cliquez sur le bouton correspondant.</h5>

      <h5>En cliquant sur DEMONSTRATION ou C'EST PARTI, vous aboutissez à l'élement principal du programme. </h5>

      <ul>
        <li>Le parcellaire est dessiné avec une taille proportionnelle à sa superficie.</li>
        <li>Les larves de strongles qui ont survécu l'hiver sont visibles sous forme de points rouges</li>
        <li>Votre troupeau est encore en bâtiment mais par un cliqué-glissé vous pouvez le déplacer dans les parcelles.</li>
        <li>Puis, en appuyant sur la <strong>flèche droite</strong>, vous avancez à chaque fois de 5 jours. Sur ce laps de temps, votre troupeau s'infeste et aussi excrète des oeufs de parasites.</li>
        <li>Vous pouvez suivre les différentes données dans la colonne de gauche.</li>
        <li>A tout moment, vous pouvez déplacer votre troupeau dans une autre parcelle ou même le rentrer en bâtiment.</li>
        <li>L'objectif est de pâturer toute la saison sans que le troupeau ne soit trop infesté !</li>
      </ul>

    </div>

  </div>

  <hr class="divider">

  <div class="row justify-content-center">

    <div class="col-md-3">

      <h3>A vous de jouer !</h3>

      <a class="btn btn-secondary" href="{{route('index')}}">Commencer</a>

    </div>

  </div>

  <div class="row">

  <hr class="divider">

  </div>




@endsection
