<div class="foot">
  <div class="copy">
    <ul>
      <li><a href="<?php $this->options->siteurl(); ?>">&copy; <?php $this->options->date('Y'); ?> <?php $this->options->title(); ?></a></li>
      <li></li>
      <li>本站所有文章版权归 <a href="" rel="nofollow"><?php $this->options->title(); ?></a> 所有</li>
      <li></li>
      <li> 未经许可禁止一切转载！<a href=""></a></li>
      <li></li>
      <li><a href="">京ICP备14006825号-1</a></li>
    </ul>
  </div>

</div>
</div>


<a href='#' id='sToTop' style='display:none;'>返回顶部</a>

<script type="text/javascript" src="<?php $this->options->themeUrl('lib/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('lib/lazyload.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/white-m.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('lib/jquery.nailthumb.1.1.min.js'); ?>"></script>
<script type="text/javascript">
  jQuery(function() {
    jQuery('.thumbnail').nailthumb({
      width:160,
      height:120
    });
    jQuery("img").not(".thumb").lazyload({
      placeholder:"<?php $this->options->themeUrl('image/loading.gif'); ?>",
      effect:"fadeIn"
    });
  });
</script>
<!-- plugin addon footer -->
<?php $this->footer(); ?>
<!-- baidu share and statistic. -->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"1","bdPos":"left","bdTop":"50"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F057cf9952dcda301fa9693432b4156c2' type='text/javascript'%3E%3C/script%3E"));</script>

</body>
</html>