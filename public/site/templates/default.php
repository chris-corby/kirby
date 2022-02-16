<?php
snippet('header');
?>

<main>
  <div class="Default">
    <?php
    //  Title
    ?>
    <h1 class="Default-title"><?= $title->escape('html'); ?></h1>

    <?php
    //  Text
    if ($text->isNotEmpty()):
    ?>
      <div class="Default-text">
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
