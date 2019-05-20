<?php
namespace yunyinqing\datacenter;

class ObjectModule {

    public function __construct()
    {

    }

    public static function getObjectCate($param)
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Object/getObjectCateList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getObjectList($param)
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Object/getObjectList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getObject($param)
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Object/getObject',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>