<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace user1007017\hyphenator;

use yii\web\AssetBundle;
use yii\helpers\Json;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Hyphenator extends \yii\base\Widget
{
    public $language = 'en-us';

    /**
     * @var array widget plugin options
     */
    public $pluginOptions = [];

    public function init()
    {
        $this->registerAssets();
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        HyphenatorAsset::register($view)->language = $this->language;
        $options = Json::encode($this->pluginOptions);
        $js  = "Hyphenator.config($options);";
        $js .= 'Hyphenator.run();';
        $view->registerJs($js);
    }
}
