<?php include "inc/pageManipulation.php"; ?><style>@import url('https://fonts.googleapis.com/css?family=Chewy|Pacifico');</style><div class="container-fluid" id="SWrapper-fluid"> <div class="jumbotron animate-box" id="firstJ" data-animate-effect="fadeInLeft" style="background-image:url(<?php echo images_url.$image;?>); <?php echo ($image=='/plane2.jpg')? 'background-position:0 80%' : ''; ?> <?php echo ($image=='/app.png')? 'background-position:bottom' : ''; ?> "> </div><div class="jumbotron animate-box" id="secondJ" data-animate-effect="fadeInLeft"> <?php foreach ($serviceInfo as $key=> $value): ?> <?php echo html_entity_decode(stripslashes($value->summary)); ?> <?php endforeach ?> </div><?php include("services1.php"); ?></div>