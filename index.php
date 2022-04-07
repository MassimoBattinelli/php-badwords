<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Badwords</title>
 </head>
 <body>

     <?php $paragraph = ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsum velit, numquam deserunt cupiditate rerum delectus magnam libero perspiciatis quod. Laboriosam soluta enim porro ipsa autem quis vitae facere delectus.';
     $badword = $_GET["badword"];
     $noBadword = str_replace($badword," ***",$paragraph);?>
     <h3><?php echo $noBadword;?></h3>
     <p><?php echo 'Questo paragrafo ha ' .strlen($noBadword). ' caratteri.';?></p>
 </body>
</html>
