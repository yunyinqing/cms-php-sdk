<?php
namespace yunyinqing\datacenter;

class ObjectModule {

    public function __construct()
    {

    }

    public static function getObjectCate($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Object/getObjectCateList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getObjectList($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Object/getObjectList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getObject($title = '')
    {
        $param['title'] = $title;
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Object/getObject',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>