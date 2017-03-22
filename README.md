# Netease


Step1: 安装, `composer require "superman2014/netease:dev-master"`

Step2: 注册 `Superman2014\Netease\NeteaseServiceProvider` 到`config/app.php` 配置文件:

```
'providers' => [
    // Other service providers...

    Superman2014\Netease\NeteaseServiceProvider::class,
],

```

也可以, 添加 `Netease` 门面 到配置文件的 `aliases` 数组里:

```
    'Netease' => Superman2014\Netease\Facades\Netease::class,
```

Step3: 生成`config/netease.php`

```
    php artisan vendor:publish
```

配置文件内容如下:

```

<?php

return [
    'app_key' => env('NETEASE_APP_KEY'),
    'app_secret' => env('NETEASE_APP_SECRET'),
];

```

我们可以在.env文件里面配置这两个常量(网易云信app_key,网易云信app_secret):

`NETEASE_APP_KEY,NETEASE_APP_SECRET`

Step4: 代码中使用

