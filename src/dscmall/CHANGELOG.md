# 更新记录

### v2.1.3

- 在商城目录下执行以下脚本，移除废弃的文件

```
rm -f app/Console/Commands/CustomerService.php
rm -f app/Extensions/WorkerEvent.php
rm -rf resources/views/kefu
```

### v2.2.1

**安装 Supervisor**

这里仅举例 CentOS 系统下的安装方式：

```
# 安装 epel 源，如果此前安装过，此步骤跳过
yum install -y epel-release
yum install -y supervisor  
```

**配置 Supervisor**

Supervisor 的配置文件通常位于 /etc/supervisor/conf.d 目录下。在该目录中，你可以创建任意数量的配置文件，用来控制 supervisor 将如何监控你的进程。例如，创建一个 dscmall-worker.conf 文件使之启动和监控一个 queue:work 进程：

```
[program:dscmall-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /ecmoban/wwwroot/dscmall/artisan queue:work database --timeout=60 --memory=1024 --sleep=3 --tries=3
autostart=true
autorestart=true
user=www
numprocs=8
redirect_stderr=true
stdout_logfile=/ecmoban/wwwroot/dscmall/storage/logs/worker.log
```

在这个例子中，numprocs 指令将指定 Supervisor 运行 8 个 queue:work 进程并对其进行监控，如果它们挂掉就自动重启它们。

**启动 Supervisor**

配置文件创建完毕后，你就可以使用如下命令更新 Supervisor 配置并启动进程了：

```
supervisorctl reread
supervisorctl update
supervisorctl start dscmall-worker:*
```

supervisor 配置完毕，使用supervisorctl reload 和supervisorctl update 启动时候报错，启动报错如下：

```
error:class 'socket.error' [Errno 2] No such file or directory: file: /usr/lib64/python2.7/socke
```

解决方法使用下面命令启动

```
/usr/bin/python2 /usr/bin/supervisord -c /etc/supervisord.conf
```

**店铺可视化更新**

此次更新将店铺的三端（H5，小程序，App）页面可视化数据进行了分离，执行以下命令将已有的店铺可视化数据转为H5设备默认数据。

```
php artisan db:seed --class=TouchPageViewSeeder
```
