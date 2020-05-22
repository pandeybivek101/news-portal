<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <?php foreach ($slidernews as $sn): ?>
            <li><img src="<?php echo base_url(); ?>images/<?= $sn->feature_image ?>" alt="" />
            <div class="panel-overlay">
              <h2><?php echo substr($sn->title, 0, 60) ?></h2>
              <p><?php echo substr($sn->short_description, 0, 80).'...' ?><br />
                <a href="<?php base_url();?>/news-portal/news/<?= $sn->id ?>">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
    <div class="column">
      <ul class="latestnews">
        <?php foreach ($latestnews as $ln): ?>
         <li><img src="<?php echo base_url(); ?>images/<?= $ln->feature_image ?>" width="100" height="100" alt="<?php echo $ln->title ?>" />
          <p><strong><a href="news.php?id=<?php echo $ln->id ?>"><?php echo substr($ln->title, 0, 40) ?></a></strong><br> <?php echo substr($ln->short_description, 0, 130).'...' ?></p>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  <div id="hpage_cats">
    <?php $i=0; foreach ($catlist as $cl): ?>
      <div class="<?php if($i % 2 == 0){ echo 'fl_left'; }else{ echo 'fl_right'; } ?>">
      <h2><a href="category.php?catid=<?php echo $cl->id ?>"><?php echo $cl->name ?> &raquo;</a></h2>

      <?php if(get_catagory_news($cl->id)->title): ?> 
      <img src="<?php echo base_url(); ?>images/<?= get_catagory_news($cl->id)->feature_image ?> " width="100" height="100" alt="" />
      <p><strong><a href=""><?php echo get_catagory_news($cl->id)->title ?></a></strong></p>
      <p><?php echo get_catagory_news($cl->id)->short_description ?></p>
      <?php else:  ?>
      <div>No News Available</div>
    <?php endif  ?>
    </div>
    <?php endforeach ?>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>Feugiatrutrum rhoncus semper</h2>
        <ul>
          <li><img src="images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li><img src="images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last"><img src="images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <div class="column">
      <div class="holder"><a href="#"><img src="images/demo/300x250.gif" alt="" /></a></div>
      <div class="holder"><a href="#"><img src="images/demo/300x80.gif" alt="" /></a></div>
    </div>
    <br class="clear" />
  </div>
</div>
