<?php

require_once './vendor/autoload.php';

use yunyinqing\datacenter\Article;

$r = Article::getArticleList();

var_dump($r);