<?php
/**
 * Created by PhpStorm.
 * User: rem
 * Date: 22.08.14
 * Time: 15:09
 */

namespace ads;


class Main extends AdsAbstract
{
    public $url;
    public $showUrl;
    public $caption;
    public $description;
    public $buttonText;
    public $imageUrl;
    public $imageFile;
    public $showButton;

    public function type(){
        return \models\Block::FORMAT_ADS_MAIN;
    }
} 