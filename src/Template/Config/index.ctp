<?php
//index.ctp
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Mulmana</title>
     <?php echo $this->element('Common/bootstrap'); ?>
     <?php echo $this->Html->css('mulmana/config'); ?>
     <?php echo $this->Html->css('footer'); ?>
 </head>
 <body class="config">
   <?php echo $this->element('Common/header'); ?>
   <div class="header-title">
       <h1>Mulmana_Config</h1>
   </div>
   <ul id="config_menu">
     <li><a href="javascript:void(0)" id="config_detail">詳細設定</a></li>
     <li><a href="javascript:void(0)" id="credit">クレジット</a></li>
   </ul>

  <?php echo $this->element('Common/footer'); ?>
</body>
</html>
