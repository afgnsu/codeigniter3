<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<h1 class="text-info text-center"><?= $query->title ?></h1>
  <br>
	<p class="well well-lg"><?= nl2br($query->content) ?></p>
</section>
<?php require_once VIEWPATH.'_layouts/footer.php' ?>
