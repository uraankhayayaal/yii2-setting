<?php

namespace uraankhayayaal\setting;

use Yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface{

    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {
        /*
         * Регистрация модуля в приложении
         * вместо указания в файле frontend/config/main.php
         */
        $app->setModule('setting', 'uraankhayayaal\setting\Module');
    }
}