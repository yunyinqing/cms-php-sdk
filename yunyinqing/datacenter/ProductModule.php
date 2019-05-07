<?php
namespace yunyinqing\datacenter;

class ProductModule {

    public function __construct()
    {

    }

    public static function getProductCate($cateid = 0, $page = 1, $limit = 10)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $param['page'] = $page;
        $param['limit'] = $limit;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Product/getProductCateList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getProductList($cateid = 0, $page = 1, $limit = 10)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $param['page'] = $page;
        $param['limit'] = $limit;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Product/getProductList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getProduct($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Product/getProduct',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>