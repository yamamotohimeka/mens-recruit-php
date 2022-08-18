<?php require(dirname(__FILE__)."/../hooks/recruits.php");?>

<?php foreach($recruits as $recruit):?>

<li id="<?php echo $recruit['name'];?>">
  <h3 class="gothic"><?php echo $recruit['title'];?></h3>
  <dl class="recruit__contents__desc">
    <?php if($recruit['desc'] !== ''): ?>
    <dl>
      <dt>
        業務説明
      </dt>
      <dd>
        <?php echo $recruit['desc'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <?php if($recruit['salary'] !== ''): ?>
    <dl>
      <dt>
        給与
      </dt>
      <dd>
        <?php echo $recruit['salary'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <?php if($recruit['allowance'] !== ''): ?>
    <dl>
      <dt>
        充実の手当て
      </dt>
      <dd>
        <?php echo $recruit['allowance'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <?php if($recruit['license'] !== ''): ?>
    <dl>
      <dt>
        応募資格
      </dt>
      <dd>
        <?php echo $recruit['license'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <?php if($recruit['hours'] !== ''): ?>
    <dl>
      <dt>
        勤務時間・休日
      </dt>
      <dd>
        <?php echo $recruit['hours'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <?php if($recruit['location'] !== ''): ?>
    <dl>
      <dt>
        勤務地
      </dt>
      <dd>
        <?php echo $recruit['location'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <?php if($recruit['neccessities'] !== ''): ?>
    <dl>
      <dt>
        面接時に必要なもの
      </dt>
      <dd>
        <?php echo $recruit['neccessities'];?>
      </dd>
    </dl>
    <?php endif; ?>
    <dl>
      <dt>
        応募方法
      </dt>
      <dd>
        <div class="flex">
          <div>
            <a href="tel:0120504204">お電話 0120-504-204</a>
          </div>
          <div class="pc">
            応募フォームは<a href="#form">コチラ</a>
          </div>
          <div class="tab">
            <a href="#form">フォームで応募</a>
          </div>
        </div>
      </dd>
    </dl>
  </dl>
</li>

<?php endforeach;?>