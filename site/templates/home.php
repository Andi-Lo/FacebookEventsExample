<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1>Kirby FacebookEvents Plugin Example</h1>
      <div class="intro text">
        Yay!
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <h2>Coming up next...</h2>
      <?php snippet('news') ?>
    </div>

    <section class="projects-section">

      <div class="wrap wide">
        <h2>Latest Projects</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>

    </section>

  </main>

<?php snippet('footer') ?>