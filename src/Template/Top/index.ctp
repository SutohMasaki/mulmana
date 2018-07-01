<?php
//index.ctp
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Mulmana</title>
 </head>
 <body class="home">
   <header class="row">
     <?php echo $this->element('Common/bootstrap'); ?>
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
