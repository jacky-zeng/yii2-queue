<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii2 Queue Extension</h1>
    <br>
</p>

从官方yiisoft/yii2-queue fork过来的代码，并做了小修改
修改了JobInterface里的execute接口 和RetryableJobInterface里的canRetry接口，暴露处理队列的id，便于业务层做二次处理。

安装我的版本 composer require "jacky-zeng/yii2-queue:2.0.3" --prefer-source

[如何使用](https://github.com/jacky-zeng/my_yii2)
