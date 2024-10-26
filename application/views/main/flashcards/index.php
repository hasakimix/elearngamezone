<link rel="stylesheet" href="<?= base_url("/assets/css/flashcards/main.css?version=".uniqid()) ?>" />
<main>
  <nav>
    <h1 class="headertitle"> Flashcards </h1>
    <div class="flex-container">
      <a class="box" href="<?= base_url("flashcards/cards/java")?>">
        <img src="<?= base_url("/assets/img/Java.png") ?>">
        <p>Java</p>
      </a>
      <a class="box" href="<?= base_url("flashcards/cards/html")?>">
        <img src="<?= base_url("/assets/img/HTML.png") ?>">
        <p>Hyper Text Markup Language</p>
      </a>
      <a class="box" href="<?= base_url("flashcards/cards/js")?>">
        <img src="<?= base_url("/assets/img/Javascript.png") ?>">
        <p>JavaScript</p>
      </a>
      <a class="box" href="<?= base_url("flashcards/cards/php")?>">
        <img src="<?= base_url("/assets/img/php.png") ?>">
        <p>PHP: Hypertext Preprocessor</p>
      </a>
      <a class="box" href="<?= base_url("flashcards/cards/python")?>">
        <img src="<?= base_url("/assets/img/Python.png") ?>">
        <p>Python</p>
      </a>
      <a class="box" href="<?= base_url("flashcards/cards/sql")?>">
        <img src="<?= base_url("/assets/img/mySql.png") ?>">
        <p>Structured Query Language</p>
      </a>
    </div>
  </nav>
</main>
