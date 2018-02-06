<?php

page::$methods['copyright'] = function($page) {

  $html = '';
  $html .= html($page->artist()->html());
  $html .= ' - ' . $page->title()->html();
  $html .= ' © ';
  if($page->date()) $html .= $page->date('m/Y').', ';
  $html .= site()->title()->html();

  return $html;
};