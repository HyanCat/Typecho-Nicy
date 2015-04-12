<div class="sidebar">
  <form id="search" method="post" action="./">
    <input type="text" name="s" class="text" size="20" onblur="if (this.value == '') {this.value = '关键字搜索';}" onfocus="if (this.value == '关键字搜索') {this.value = '';}" value="关键字搜索" x-webkit-speech/>
    <a href="#" type="submit" class="btn search-btn" title="搜索" onclick="document.getElementById('search').submit()"><i class="fa fa-search fa-2x"></i></a>
    <a href="<?php $this->options->feedUrl(); ?>" class="btn rss-btn" title="立即订阅<?php $this->options->title() ?>的文章"><i class="fa fa-rss fa-2x"></i></a>
  </form>
  <?php if($this->is('index')): ?>
  <!-- <a href="<?php $this->options->feedUrl(); ?>" title="立即订阅<?php $this->options->title() ?>"><div class="rss_index">订阅<?php $this->options->title() ?>的文章</div></a> -->

  <?php endif; ?>
  <?php if (empty($this->options->sidebarBlock) || in_array('ShowCategory', $this->options->sidebarBlock)): ?>
  <div class="cate-list">
      <h5><?php _e('分类'); ?></h5>
      <ul>
      <?php $this->widget('Widget_Metas_Category_List')
    ->parse('<li><i class="fa fa-book"></i> <a href="{permalink}">{name}</a> ({count})</li>'); ?>
      </ul>
  </div>
  <?php endif; ?>
  <?php if($this->is('post') || $this->is('category')): ?>
  <div class="new-list">
    <h5><?php _e('最新文章'); ?></h5>
    <ul>
      <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><i class="fa fa-file-text-o"></i> <a href="{permalink}">{title}</a></li>'); ?>
    </ul>
  </div>
  <?php endif; ?>
  <?php ArticleList::hot(); // 热门文章列表 ?>
  <?php if($this->is('index')): ?>
    <?php MuPlayer_Plugin::player(); // MuPlayer ?>
  <?php endif; ?>
  <?php if (empty($this->options->sidebarBlock) || in_array('ShowArchive', $this->options->sidebarBlock)): ?>
  <?php if($this->is('index')): ?>
  <h5><?php _e('归档'); ?></h5>
  <ul class="sidelist">
    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
    ->parse('<li><i class="fa fa-calendar"></i> <a href="{permalink}">{date}</a></li>'); ?>
  </ul>
  <?php endif; ?>
  <?php endif; ?>

  <?php if($this->is('index')): ?>
  <div class="tags">
  <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
  <h5><?php _e('标签'); ?></h5>
  <ul>
    <?php while($tags->next()): ?>
    <?php $r=rand(0, 255);$g=rand(0, 255);$b=rand(0, 255); ?>
    <li>
      <a style="color: rgb(<?php echo($r); ?>, <?php echo($g); ?>, <?php echo($b); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'>
        <?php $tags->name(); ?>
      </a>
    </li>
    <?php endwhile; ?>
  </ul>
  </div>
  <?php endif; ?>
  <?php if (empty($this->options->sidebarBlock) || in_array('Links', $this->options->sidebarBlock)): ?>
  <?php if($this->is('index')): ?>
  <h5>友情链接</h5>
  <ul class="link">
    <?php Links_Plugin::output(); ?>
  </ul>
  <?php endif; ?>
  <?php endif; ?>
</div>