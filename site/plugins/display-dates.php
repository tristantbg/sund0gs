<?php

page::$methods['displayDates'] = function($page) {

  $html = '';
  if($page->date()) $html .= $page->date('d.m');
  if($page->endDate()) {
  	$html .= $page->date('— d.m.Y', 'endDate');
  } else {
  	$html .= $page->date('Y');
  }

  return $html;
};