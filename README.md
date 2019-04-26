## 云引擎数据中心SDK

### 配置
1.使用composer安装,在您的项目根目录下输入下列指令回车即可
    
    composer require yunyinqing/datacenter



2.安装后请将 “项目目录/vendor/yunyinqing/datacenter/Config.php”中的APPID改为您的项目。
    
    const APPID = 'yyxxxxxxxx';//yyq开头的appid
    
    const ServerUrl = 'https://api.yunyinqing.com';//云引擎的api地址

3.在使用的文件顶部加上如下代码

    <?php
    
        require_once './vendor/autoload.php'; //如果您的项目没有引用了自动加载则需要加上这段代码
    
        use yunyinqing\datacenter\Article; //如果您需要获取文章则添加这句，获取其他内容请看下方文档替换成其他命名空间即可
   
4.示例：获取文章内容

    <?php
    
        require_once './vendor/autoload.php';
    
        use yunyinqing\datacenter\Article; 
        
        $articleCateList = Article::getArticleCate(1);//这句话的意思是获取文章分类1下的分类
        
        $articleList = Article::getArticleList(1);//这句话的意思是获取文章分类1下的文章列表
   
    
## 文档

### 命名空间规则：

use yunyinqing\datacenter\命名空间名;

|模块名|命名空间名|
|---|---|
|banner模块 | banner|
|文章模块 | article|
|产品模块 | product|
|对象模块 | object|

### 获取数据的方法

例子：获取文章分类

$r = Article::getArticleCate();

方法一览表

|模块方法|方法名|参数说明：参数|
|---|---|---|
|获取Banner列表|getBannerList()|无|
|获取Banner内容|getBanner()|Bannerid:id|
|获取文章分类|getArticleCateList()|分类id：id|
|获取文章列表|getArticleList()|分类id：id|
|获取文章内容|getArticle()|文章id：id|
|获取产品分类|getProductCateList()|分类id：id|
|获取产品列表|getProductList()|分类id：id|
|获取产品分类|getProduct()|产品id：id|
|获取对象分类|getObjectCateList()|分类id：id|
|获取对象列表|getObjectList()|分类id：id|
|获取对象|getObject()|对象id：id|