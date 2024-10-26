<link rel="stylesheet" href="<?= base_url("/assets/css/videos/videos.css?version=".uniqid()) ?>" />
<link rel="stylesheet" href="<?= base_url("/assets/css/videos/main.css?version=".uniqid()) ?>" />
<main>
  <nav>
    <h1 class="headertitle"> Videos </h1>
    <div class="flex-container">
      <a class="box" href="<?= base_url("videos/subject/java")?>">
        <img src="<?= base_url("/assets/img/Java.png") ?>">
        <p>Java</p>
      </a>
      <a class="box" href="<?= base_url("videos/subject/html")?>">
        <img src="<?= base_url("/assets/img/HTML.png") ?>">
        <p>Hyper Text Markup Language</p>
      </a>
      <a class="box" href="<?= base_url("videos/subject/js")?>">
        <img src="<?= base_url("/assets/img/Javascript.png") ?>">
        <p>JavaScript</p>
      </a>
      <a class="box" href="<?= base_url("videos/subject/php")?>">
        <img src="<?= base_url("/assets/img/php.png") ?>">
        <p>PHP: Hypertext Preprocessor</p>
      </a>
      <a class="box" href="<?= base_url("videos/subject/python")?>">
        <img src="<?= base_url("/assets/img/Python.png") ?>">
        <p>Python</p>
      </a>
      <a class="box" href="<?= base_url("videos/subject/sql")?>">
        <img src="<?= base_url("/assets/img/mySql.png") ?>">
        <p>Structured Query Language</p>
      </a>
    </div>
  </nav>
</main>