<?php
namespace yunyinqing\datacenter;

class Banner {

    public function __construct()
    {

    }

    public static function getBannerCate($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Banner/getCateList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getBannerList($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Banner/getArticleList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getBanner($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Banner/getArticle',$param);
        return $result ? json_decode($result) : false;
    }
}

?>