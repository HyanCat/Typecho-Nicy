<?php $this->need('header.php'); ?>
<div class="main">
  <div class="main-content">
    <div class="cont">
      <h5>【 <?php $this->archiveTitle('-', '', ''); ?> 】</h5>
    </div>
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
    <div class="cont">
      <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <p class="entry_data">
        <i class="fa fa-calendar"></i> 发布时间：<?php $this->date('Y年n月j日'); ?>    |
        <i class="fa fa-book"></i> 分类：<?php $this->category(','); ?>    |
        <i class="fa fa-eye"></i> <?php Views_Plugin::theViews('', ' 次围观'); ?>    |
        <a href="<?php $this->permalink() ?>#comments"><i class="fa fa-comment"></i> <?php $this->commentsNum('抢沙发！', '一条评论', '%d 条评论'); ?></a>
      </p>
      <div class="sub-content">
        <?php Thumbnail_Plugin::show($this); ?>
        <?php $this->excerpt(200, '...'); ?>
      </div></div>
      <?php endwhile; ?>
      <?php else: ?>
      <div class="cont">
        <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
      </div>
      <?php endif; ?>
      <?php $this->pageNav(); ?>
    </div>
    <?php $this->need('sidebar.php'); ?>
  </div>
  <?php $this->need('footer.php'); ?>