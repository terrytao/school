<?

namespace frontend\assets;

use yii\web\AssetBundle;

class FineUploaderAsset extends AssetBundle
{
    public $sourcePath = '@webroot/js/fine-uploader';
    public $js = [
        'fine-uploader.js',
    ];
    public $css = [
        'fineuploader-new.css'
    ];
}
