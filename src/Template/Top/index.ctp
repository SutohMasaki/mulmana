<?php
//index.ctp
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Mulmana</title>
     <?php echo $this->element('Common/bootstrap'); ?>
     <?php echo $this->Html->css('sticky-footer'); ?>
 </head>
 <body class="home">
   <?php echo $this->element('Common/header'); ?>
   <div class="header-title">
       <h1>TOP画面</h1>
   </div>
  <div>
    <p class="text-red"><?= $teststr ?></p>
    <?= $results['Name'] ?>
  </div>
  <?php echo $this->element('Common/footer'); ?>
</body>
</html>
