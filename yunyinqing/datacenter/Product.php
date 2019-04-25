<?php
namespace yunyinqing\datacenter;

class Product {

    public function __construct()
    {

    }

    public static function getProductCate($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Product/getCateList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getProductList($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Product/getArticleList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getProduct($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Product/getArticle',$param);
        return $result ? json_decode($result) : false;
    }
}

?>