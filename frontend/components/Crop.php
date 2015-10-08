<?php
/**
 * Created by PhpStorm.
 * User: kdp
 * Date: 7/3/15
 * Time: 5:46 AM
 */
namespace frontend\components;

class Crop
{

    /************
     * Created By Jason Stockton
     * © Jason Stockton 2010
     * http://www.thewebdevelopmentblog.com/
     * http://www.jasonstockton.com.au/
     *************/
    function resizeImage($f, $w = 999999, $h = 999999, $nf = false, $fs = true, $q = 100)
    {
        $ext = strtolower(substr($f, strrpos($f, ".")));
        $quality = $q;
        $maxwidth = $w;
        $maxheight = $h;

        switch ($ext) {
            case ".png":
                $source = imagecreatefrompng($f);
                break;
            case ".gif":
                $source = imagecreatefromgif($f);
                break;
            case ".jpg":
            case ".jpeg":
                $source = imagecreatefromjpeg($f);
                break;
            default:
                die("File type not supported ($ext)");
                break;
        }

        list($width, $height) = getimagesize($f);

        if ($fs) {
            $newwidth = $width;
            $newheight = $height;
        } else {
            $newwidth = $w;
            $newheight = $h;
        }
        if ($width > $maxwidth || $height > $maxheight) {
            $newwidth = $maxwidth;
            $newheight = round($height / ($width / $newwidth));
            if ($newheight > $maxheight) {
                $newheight = $maxheight;
                $newwidth = round($width / ($height / $maxheight));
            }
        }

        $thumb = imagecreatetruecolor($newwidth, $newheight);

        if ($ext == ".png") {
            imagealphablending($thumb, false);
            imagesavealpha($thumb, true);
        } else {
            imagealphablending($thumb, true);
        }
        imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        if (!$nf) {
            $nf = $f;
        }

        switch ($ext) {
            case ".png":
                imagepng($thumb, $nf);
                break;
            case ".gif":
                imagegif($thumb, $nf);
                break;
            case ".jpg":
            case ".jpeg":
                imagejpeg($thumb, $nf, $quality);
                break;
        }

        imagedestroy($thumb);
    }

    function rotateImage($f, $a, $nf = 0)
    {
        $ext = strtolower(substr($f, strrpos($f, ".")));

        switch ($ext) {
            case ".png":
                $source = imagecreatefrompng($f);
                break;
            case ".gif":
                $source = imagecreatefromgif($f);
                break;
            case ".jpg":
            case ".jpeg":
                $source = imagecreatefromjpeg($f);
                break;
            default:
                die("File type not supported ($ext)");
                break;
        }

        $rotate = imagerotate($source, $a, 0);

        if (!$nf) {
            $nf = $f;
        }

        switch ($ext) {
            case ".png":
                imagepng($rotate, $nf);
                break;
            case ".gif":
                imagegif($rotate, $nf);
                break;
            case ".jpg":
            case ".jpeg":
                imagejpeg($rotate, $nf);
                break;
        }
    }

    function cropImage($f, $x1, $y1, $x2, $y2, $w = 0, $h = 0, $nf = false)
    {
        $ext = strtolower(substr($f, strrpos($f, ".")));

        if (!$w) {
            $w = $x2 - $x1;
        }
        if (!$h) {
            $h = $y2 - $y1;
        }

        switch ($ext) {
            case ".png":
                $source = imagecreatefrompng($f);
                break;
            case ".gif":
                $source = imagecreatefromgif($f);
                break;
            case ".jpg":
            case ".jpeg":
                $source = imagecreatefromjpeg($f);
                break;
            default:
                die("File type not supported ($ext)");
                break;
        }

        list($width, $height) = getimagesize($f);

        $thumb = imagecreatetruecolor($w, $h);

        if ($ext == ".png") {
            imagealphablending($thumb, false);
            imagesavealpha($thumb, true);
        } else {
            imagealphablending($thumb, true);
        }
        imagecopyresampled($thumb, $source, 0, 0, $x1, $y1, $w, $h, $x2 - $x1, $y2 - $y1);

        if (!$nf) {
            $nf = $f;
        }

        switch ($ext) {
            case ".png":

                imagepng($thumb, $nf);
                break;
            case ".gif":
                imagegif($thumb, $nf);
                break;
            case ".jpg":
            case ".jpeg":
                imagejpeg($thumb, $nf);
                break;
        }

        imagedestroy($thumb);
    }

}