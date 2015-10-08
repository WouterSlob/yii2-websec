<?php
namespace wouterslob\yii2-websec;

use yii\base\BootstrapInterface;
use yii\base\Application;

class PublicKeyPinning implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->on(Application::EVENT_AFTER_REQUEST, function () {
             // todo: modify headers
        });
    }
}
