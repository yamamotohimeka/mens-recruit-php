<?php require(dirname(__FILE__)."/../hooks/qas.php");?>

<li>
  <h3 class="gothic">応募について</h3>
  <dl class="qa__contents__desc">
    <?php 
      foreach($qas as $qa):
        if($qa['category'] == 'app'):
    ?>
    <dl>
      <dt>Q. <?php echo $qa['q'];?></dt>
      <dd>
        <?php echo $qa['a'];?>
      </dd>
    </dl>
    <?php 
      endif; 
      endforeach;
    ?>
  </dl>
</li>
<li>
  <h3 class="gothic">給与・待遇について</h3>
  <dl class="qa__contents__desc">
    <?php 
      foreach($qas as $qa):
        if($qa['category'] == 'treat'):
    ?>
    <dl>
      <dt>Q. <?php echo $qa['q'];?></dt>
      <dd>
        <?php echo $qa['a'];?>
      </dd>
    </dl>
    <?php 
      endif; 
      endforeach;
    ?>
  </dl>
</li>