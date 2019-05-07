<?php

namespace yunyinqing\datacenter;

class ArticleModule
{

    public function __construct()
    {

    }

    public static function getArticleCate($cateid = 0, $page = 1, $limit = 10)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $param['page'] = $page;
        $param['limit'] = $limit;
        $result = (new RequestModule)->request_post(Config::ServerUrl . '/client/article/getArticleCateList', $param);
        return $result ? json_decode($result, 1) : false;
    }

    public static function getArticleList($cateid = 0, $page = 1, $limit = 10)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $param['page'] = $page;
        $param['limit'] = $limit;
        $result = (new RequestModule)->request_post(Config::ServerUrl . '/client/article/getArticleList', $param);
        return $result ? json_decode($result, 1) : false;
    }

    public static function getArticle($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl . '/client/article/getArticle', $param);
        return $result ? json_decode($result, 1) : false;
    }
}

?>