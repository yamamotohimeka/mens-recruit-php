<?php require(dirname(__FILE__)."/../hooks/works.php");?>
<?php foreach($works as $id => $work):?>

<dl>
  <dt>
    <h3><?php echo $work['title'];?></h3>
    <div class="tab">
      <img src="<?php echo $path; ?>/assets/images/work-img<?php echo $id;?>.png" alt="<?php echo $work['title'];?>の画像">
    </div>
    <p>
      <?php echo $work['text'];?>
    </p>
  </dt>
  <dd class="pc">
    <img src="<?php echo $path; ?>/assets/images/work-img<?php echo $id;?>.png" alt="<?php echo $work['title'];?>の画像">
  </dd>
</dl>

<?php endforeach;?>