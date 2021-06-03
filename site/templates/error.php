<?php
snippet('header');
?>

<main>
  <div class="Error">
    <?php
    //  Title
    ?>
    <h1 class="Error-title"><?= $title->escape('html'); ?></h1>

    <?php
    //  Text
    if ($text->isNotEmpty()):
    ?>
      <div class="Error-text">
        <?= $text->kt(); ?>
      </div>
    <?php
    endif;
    ?>
  </div>
</main>

<?php
snippet('footer');
?>
