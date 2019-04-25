##云引擎数据中心SDK

使用composer安装后，可直接在需要使用的地方引用。

### 配置
1.安装后请将vendor/yunyinqing/datacenter/Config.php中的APPID改为您的项目。
    
    const APPID = 'yyxxxxxxxx';//yyq开头的appid
    
    const ServerUrl = 'https://api.yunyinqing.com';//云引擎的api地址

2.在使用的地方文件顶部加上如下代码


    require_once './vendor/autoload.php'; //如果您没有引用了自动加载则按需要加上这段代码
    
    use yunyinqing\datacenter\Article; //引用文章
    
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

|模块方法|方法名|
|---|---|
|获取文章分类|getArticleCate|
|获取文章列表|getArticleList|
|获取文章内容|getArticle|
|获取产品分类|getProductCate|
|获取产品列表|getProductList|
|获取产品分类|getProduct|
|获取对象分类|getObjectCate|
|获取对象列表|getObjectList|
|获取对象|getObject|