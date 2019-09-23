<?php

namespace uraankhayayaal\setting;

/**
 * setting module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'uraankhayayaal\setting\controllers';
    public $defaultRoute = 'back';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}