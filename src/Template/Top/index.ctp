<?php
//index.ctp
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Mulmana</title>
     <?php echo $this->element('Common/bootstrap'); ?>
     <?php echo $this->Html->css('mulmana/top'); ?>
     <?php echo $this->Html->css('footer'); ?>
 </head>
 <body class="top">
   <?php echo $this->element('Common/header'); ?>
   <div class="header-title">
       <h1>Mulmana_TOP</h1>
   </div>
  <div>
    <p class="" ><?= $teststr ?></p>
      <ul class="application_list">
<?php foreach ($results as $result => $val): ?>
        <li class="application">
          <div>
  <?php if( $val['app_name'] == '' && $val['app_icon'] == ''): ?>
          <?php echo $this->Html->image('/img/common/no_image.png', array('class' => 'application_icon','alt' => $val['app_name'])); ?>
          <span>No Application</span>
  <?php else: ?>
          <a href=<?= $val['path'] ?> class="">
            <?php echo $this->Html->image('/img/'.$val['app_icon'], array('class' => 'application_icon','alt' => $val['app_name'])); ?>
            <span><?= $val['app_name'] ?></span>
          </a>
  <?php endif; ?>
          </div>
        </li>
<?php endforeach; ?>
      </ul>


  </div>
  <?php echo $this->element('Common/footer'); ?>
</body>
</html>
