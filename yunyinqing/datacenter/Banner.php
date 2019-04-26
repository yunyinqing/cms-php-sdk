<?php
namespace yunyinqing\datacenter;

class Banner {

    public function __construct()
    {

    }

    public static function getBannerList()
    {
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Banner/getBannerList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getBanner($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Banner/getBanner',$param);
        return $result ? json_decode($result) : false;
    }
}

?>