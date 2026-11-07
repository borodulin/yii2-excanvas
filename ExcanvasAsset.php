<?php
/**
 * @link https://github.com/borodulin/yii2-excanvas
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-excanvas/blob/master/LICENSE
 */

namespace conquer\excanvas;

use yii\web\AssetBundle;

/**
 * ExplorerCanvas: HTML5 canvas for Internet Explorer 8 and older.
 *
 * The script is included in a conditional comment, so only IE 8 and older load it;
 * other browsers (including IE 10+, which ignores conditional comments) skip it.
 *
 * @link https://github.com/arv/explorercanvas
 * @author Andrey Borodulin
 */
class ExcanvasAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'excanvas.min.js',
    ];

    public $jsOptions = [
        'condition' => 'lte IE 8',
    ];
}
