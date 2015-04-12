<?php

function themeConfig($form) {
    $sinaUrl = new Typecho_Widget_Helper_Form_Element_Text('sinaUrl', NULL, NULL, _t('新浪微博'), _t('在这里填入一个新浪微博地址'));
    $form->addInput($sinaUrl);
    $qqUrl = new Typecho_Widget_Helper_Form_Element_Text('qqUrl', NULL, NULL, _t('腾讯微博'), _t('在这里填入一个腾讯微博地址'));
    $form->addInput($qqUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'Links' => _t('显示友情链接')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'Links'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

function thumnail($obj,$width,$height){
    $content = $obj->text;
    preg_match_all( "/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $content, $matches );
    $imgCount = count($matches[0]);
    if( $imgCount >=1 ){
        echo '<img src="'. Helper::options()->themeUrl . '/timthumb.php?w='.$width.'&h='.$height.'&src='.$matches[2][0].'" alt="'. $obj->title .'">';
    }else{
        echo '<img src="'. Helper::options()->themeUrl . '/timthumb.php?w='.$width.'&h='.$height.'&src='.Helper::options()->themeUrl.'/screenshot.png" alt="'. $obj->title .'">';
    }
}