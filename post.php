<?php $this->need('header.php'); ?>
<div class="main">
  <div class="main-content">
    <div class="cont">
      <h2><?php $this->title() ?></h2>
        <p class="entry_data">
        	<i class="fa fa-calendar"></i> 发布时间：<?php $this->date('Y年n月j日'); ?>    |
            <i class="fa fa-book"></i> 分类：<?php $this->category(','); ?>    |
            <i class="fa fa-eye"></i> <?php Views_Plugin::theViews('', ' 次围观'); ?>    |
            <a href="<?php $this->permalink() ?>#comments"><i class="fa fa-comment"></i> <?php $this->commentsNum('抢沙发！', '一条评论', '%d 条评论'); ?></a>
         </p>
      <div class="content">
        <?php $this->content(); ?>
 <p class="tag"><i class="fa fa-tags"></i> <?php _e('标签'); ?>：<?php $this->tags('  ', true, 'none'); ?></p>
      </div>
<div class="relate-info">
	<?php $this->related(5)->to($relatedPosts); ?>
	<ul>
		<?php if ($relatedPosts->have()): ?>
		<h5>相关文章</h5>
		<?php while ($relatedPosts->next()): ?>
		<li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
		<?php endwhile; ?>
		<?php endif; ?>
	</ul>
</div>
    </div>
<?php $this->need('comments.php'); ?>
  </div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>