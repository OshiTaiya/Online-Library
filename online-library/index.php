<?php
include("inc/data2.php");
include("inc/function.php");

$pageTitle = "My Online Library";
$section = null;

include("inc/header.php"); ?>
  <div class="section catalog random">
    <div class="wrapper">

      <h2>May we suggest something?</h2>
      <ul class="items">
        <?php
        $random = array_rand($catalog, 4);
        foreach ($random as $sid) {
          echo get_item_html($sid,$catalog[$sid]);
        }
        ?>
      </ul>

    </div>
  </div>

  <?php include("inc/footer.php"); ?>
