<?php

namespace yunyinqing\datacenter;

class ArticleModule
{

    public function __construct()
    {

    }

    public static function getArticleCate($param = [])
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl . '/client/article/getArticleCateList', $param);
        return $result ? json_decode($result, 1) : false;
    }

    public static function getArticleList($param = [])
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl . '/client/article/getArticleList', $param);
        return $result ? json_decode($result, 1) : false;
    }

    public static function getArticle($param = [])
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl . '/client/article/getArticle', $param);
        return $result ? json_decode($result, 1) : false;
    }
}

?>