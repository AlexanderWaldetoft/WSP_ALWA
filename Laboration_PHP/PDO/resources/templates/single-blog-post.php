<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content
?>
<div class="content">
    <h2><?php echo $title; ?></h2>
    <p class="author">Författarna: <?php echo $author; ?></p>
    <p class="date">Datumen: <?php echo $date; ?></p>
    <p class="message"><?php echo $message; ?></p>
    </div>
</div>
<?php
//Include Footer
require ('resources/views/footer.php');
?>
