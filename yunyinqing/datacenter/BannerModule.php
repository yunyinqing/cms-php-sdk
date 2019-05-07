<?php
namespace yunyinqing\datacenter;

class BannerModule {

    public function __construct()
    {

    }

    public static function getBannerList($page = 1, $limit = 10)
    {
        $param['appid'] = Config::APPID;
        $param['page'] = $page;
        $param['limit'] = $limit;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Banner/getBannerList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getBanner($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Banner/getBanner',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>