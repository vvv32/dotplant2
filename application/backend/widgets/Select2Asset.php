<?php

namespace app\backend\widgets;

use Yii;

class Select2Asset extends \kartik\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(Yii::getAlias('@kartik/select2/lib'));
        $this->setupAssets('js', ['select2']);
        parent::init();
    }
}
