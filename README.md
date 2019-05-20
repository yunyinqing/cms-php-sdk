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
    
        use yunyinqing\datacenter\ArticleModule; //如果您需要获取文章则添加这句，获取其他内容请看下方文档替换成其他命名空间即可
   

## 文档

### 使用示例：获取文章内容

    <?php
    
        require_once './vendor/autoload.php';
    
        use yunyinqing\datacenter\ArticleModule; 
        
        $articleCateList = ArticleModule::getArticleCate(['id'=>1]);//这句话的意思是获取文章分类1下的分类
        
        $articleList = ArticleModule::getArticleList(['id'=>1]);//这句话的意思是获取文章分类1下的文章列表
   
    
### 命名空间规则：

use yunyinqing\datacenter\命名空间名;

|模块名|命名空间名|
|---|---|
|banner模块 | BannerModule|
|文章模块 | ArticleModule|
|产品模块 | ProductModule|
|对象模块 | ObjectModule|

### 获取数据的方法

例子：获取文章分类

$r = ArticleModule::getArticleCate($param); //$param这个参数和接口参数一致，但是类型为数组

强烈建议你使用phpstorm开发。