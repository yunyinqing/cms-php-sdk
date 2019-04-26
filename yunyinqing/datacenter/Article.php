<?php
namespace yunyinqing\datacenter;

class Article {

    public function __construct()
    {

    }

    public static function getArticleCate($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/article/getArticleCateList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getArticleList($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/article/getArticleList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getArticle($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/article/getArticle',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>