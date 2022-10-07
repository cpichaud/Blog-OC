<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>Le super blog de l'AVBN !</h1>
<p>Derniers billets du blog :</p>



<main>
    <section class="presentation">
        <img alt="logo" src="../../public/image/logo.png">
        <h2> le développeur qu’il vous faut ! </h2>
        <a class="" href="cv.pdf" download="">Télécharger mon CV ici !</a>
    </section>
    <section class="formulaire-accueil">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre prénom">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="message">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>        
      
    </section>
</main>

<?php

foreach ($posts as $post) {
?>

    <div class="news">
        <h3>
            <?= htmlspecialchars($post->title); ?>
            <em>le <?= $post->frenchCreationDate; ?></em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($post->content)); ?>
            <br />
            <em><a href="index.php?action=post&id=<?= urlencode($post->identifier) ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
