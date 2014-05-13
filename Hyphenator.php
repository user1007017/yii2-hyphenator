<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace drenty\hyphenator;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Hyphenator extends \yii\base\Widget
{
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
        HyphenatorAsset::register($view);
        $options = Json::encode($this->pluginOptions);
        $js  = "Hyphenator.config($options);";
        $js .= 'Hyphenator.run();';
        $view->registerJs($js);
    }
}
