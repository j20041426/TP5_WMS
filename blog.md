用ThinkPHP5从0开始搭建一个管理系统
=====

## 1 环境搭建

### 1.1 安装WAMP

WAMP = Windows + Apache + MYSQL + PHP，这是一个集成的服务器环境，一次安装就解决所有问题。[可以去这里下载](http://www.wampserver.com/en/)，因为是国外的网站，大家自行科学上网吧。安装好之后什么都不用管，先看下一步。

### 1.2 下载ThinkPHP框架

[点这里](http://down.thinkphp.cn/download.php?key=MTUxNzE5MzM1MY+xf56Yl8jWw3hrysCosKuvonSttXaTqLO2ZtyyY9nZgaGsnIS7qZG6q4fbtNyOaq9qhZ+/nJhnx7t3zrF1rJOZf6Gol5em0MR3apOyzHqqr4yFm8ChuaTIpmubxoqjzIR7f5uZrKbUwoiAysqppavEpKqryGWxYcC7h9nIZbTcko97p3/QlJ4)直接下载ThinkPHP5的框架，目前用的是5.0.14完整版。新建一个wms文件夹，把框架代码解压到这里面。

### 1.3 如何在本地访问

运行第一步安装的wamp，在任务栏点击图标，然后选择“www目录”这一项，这时会弹出www目录的文件夹，把上一步的wms文件夹剪切到这里面。搞定之后打开浏览器，输入`http://localhost/wms/public`就可以访问到ThinkPHP的默认首页。

## 2 项目搭建

### 2.1 修改项目配置

打开项目中`application/config.php`文件，修改里面`app_debug`这项的值为`true`，这样可以打开调试模式，以便出错时能够直观的看到错误原因和出错的地方。

### 2.2 实现登录页面

因为是做一个管理系统，就只用一个admin模块就可以了。打开cmd，进入到项目目录下，输入`php think make:controller admin/Login`，然后就可以看到`application`目录下多了一个admin文件夹，