<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?> - <?php $this->options->description(); ?></title>
<link rel="shortcut icon" href="<?php $this->options->siteUrl(); ?>favicon.ico" />
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('lib/jquery.nailthumb.1.1.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('lib/font-awesome/css/font-awesome.min.css'); ?>" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php if($this->is('index')): ?>
<link rel="canonical" href="<?php $this->options->siteUrl(); ?>" />
<?php endif; ?>
<?php if($this->is('post')): ?>
<link rel="canonical" href="<?php $this->permalink() ?>" />
<?php endif; ?>
<!-- addon header -->
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>

<!--[if lte IE 8]>
<div style="border: 1px solid rgb(255, 204, 0); line-height: 25px; background-color: rgb(255, 255, 203); font-size: 14px; display: block; background-position: initial initial; background-repeat: initial initial;text-align:center;">
您正在使用的是老版IE浏览器哦，页面显示会不正常，强烈建议您升级至IE8或使用其他内核的浏览器！
</div>
<style>
#w2b-StoTop{margin:-300px 0 0 300px !important;display:none !important}
iframe,.cut_line{display:none !important}
.logo{padding:0px 20px;float:left;width:198px;}
.logo a{color:#1ba1e2;line-height:70px;height:70px;display:block;font-size:28px;}
</style>
<![endif]-->
</head>

<body>
<div class="container">
<div class="head">
  <h1 class="logo"><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a></h1>
  <h2 class="description"><?php echo substr($this->options->description, 0, strpos($this->options->description, '-')); ?></h2>
  <ul class="nav">
    <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>" title="<?php _e('首页'); ?>"><?php _e('首页'); ?></a></li>
	<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	<?php while($pages->next()): ?>
    <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
	<?php endwhile; ?>
  </ul>
</div>