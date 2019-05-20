<?php
namespace yunyinqing\datacenter;

class BannerModule {

    public function __construct()
    {

    }

    public static function getBannerList($param = [])
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Banner/getBannerList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getBanner($param = [])
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Banner/getBanner',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>