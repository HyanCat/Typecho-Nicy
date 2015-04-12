<?php $this->need('header.php'); ?>
<div class="main">
  <div class="main-content">
    <div class="cont">
      <h2><?php $this->title() ?></h2>
      <p class="entry_data"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('木有评论', '一条评论', '%d 条评论'); ?></a></p>
      <div class="content">
        <?php $this->content(); ?>
      </div>
    </div>
<?php $this->need('comments.php'); ?>
  </div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>