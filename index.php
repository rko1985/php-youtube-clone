<?php require_once("includes/header.php"); ?>

<div class="videoSecion">
    <?php 
        $videoGrid = new VideoGrid($con, $userLoggedInObj->getUsername());
        echo $videoGrid->create(null, "Recommended", false);
    ?>
</div>

<?php require_once("includes/footer.php"); ?>