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
class HyphenatorAsset extends AssetBundle
{
    public $sourcePath;
    public $js = [
        'Hyphenator.js',
    ];

    public function init()
    {
    	$this->sourcePath = __DIR__ . '/../assets';
    }
}
