<?php
namespace yunyinqing\datacenter;

class ProductModule {

    public function __construct()
    {

    }

    public static function getProductCate($param)
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Product/getProductCateList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getProductList($param)
    {
        $param['appid'] = Config::APPID;
        if(!empty($title_eng)){
            $param['title_eng'] = $title_eng;
        }
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Product/getProductList',$param);
        return $result ? json_decode($result,1) : false;
    }
    public static function getProduct($param)
    {
        $param['appid'] = Config::APPID;
        $result = (new RequestModule)->request_post(Config::ServerUrl.'/client/Product/getProduct',$param);
        return $result ? json_decode($result,1) : false;
    }
}

?>