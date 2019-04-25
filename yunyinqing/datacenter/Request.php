<?php
namespace yunyinqing\datacenter;

class Request {

    public function __construct()
    {

    }

    /**
     * 模拟post进行url请求
     * @param string $url
     * @param string $param
     */
    function request_post($url = '', $param = '') {

        if (empty($url) || empty($param)) {
            return false;
        }

        $postUrl = $url;
        $curlPost = $param;
        $ch = curl_init();//初始化curl

        curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);

        $data = curl_exec($ch);//运行curl
        if($data === FALSE ){
            echo "CURL Error:".curl_error($ch);
        }
        curl_close($ch);

        return $data;
    }

    function request_get($url = ''){
        if (empty($url)) {
            return false;
        }

        $ch = curl_init(); //初始化

        curl_setopt($ch,CURLOPT_URL,$url);//设置选项，包括URL
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);

        $data = curl_exec($ch);//运行curl
        if($data === FALSE ){
            echo "CURL Error:".curl_error($ch);
        }

        curl_close($ch);// 4. 释放curl句柄

        return $data;
    }
}

?>