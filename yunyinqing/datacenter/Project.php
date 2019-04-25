<?php
namespace yunyinqing\datacenter;

class Project {

    public function __construct()
    {

    }

    public static function getProjectCate($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Project/getCateList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getProjectList($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Project/getArticleList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getProject($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Project/getArticle',$param);
        return $result ? json_decode($result) : false;
    }
}

?>