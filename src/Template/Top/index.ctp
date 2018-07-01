<?php
//index.ctp
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Mulmana</title>
     <?php echo $this->element('Common/bootstrap'); ?>
     <link href="css/scrolling-nav.css" rel="stylesheet">
 </head>
 <body class="home">
   <?php echo $this->element('Common/header'); ?>
   <header class="row">

   </header>
   <div class="header-title">
       <h1>TOP画面</h1>
   </div>
  <div>
    <p class="text-red"><?= $teststr ?></p>
    <?= $results['Name'] ?>
    <button class="btn btn-default"><a href="top">topへ</a></button>
  </div>
</body>
</html>
