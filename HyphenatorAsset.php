<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace user1007007\hyphenator;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HyphenatorAsset extends AssetBundle
{
	public $language;
    public $sourcePath;
    public $js = [
        'js/Hyphenator.js',
    ];

    public function init()
    {
    	$this->sourcePath = __DIR__ . '/assets';
    }

    public function registerAssetFiles($view)
    {
        $language = $this->language ? $this->language : Yii::$app->language;
        $this->js[] = 'js/patterns/' . $language . '.js';
        parent::registerAssetFiles($view);
    }
}
