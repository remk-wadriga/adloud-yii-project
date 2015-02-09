<?php
/**
 * @var $this \ads\AdsStandard
 */
?>

<div class="adloud-teaser-item adloud-teaser-600x300"><!--start item teaser-->
    <div class="teaser_btn text-center">
        <a href="<?= $this->clickUrl  ?>" target="_blank" class="btn btn-block btn-embossed"><?= $this->buttonText ?></a>
    </div>
    <p class="teaser_title text-center"><a href="<?= $this->clickUrl  ?>"  target="_blank"><?= $this->caption ?></a></p>
    <div class="teaser_link text-center">
        <a href="<?= $this->clickUrl  ?>"  target="_blank"><img src="<?= $this->getFavicon()  ?>" class="teaser_logo"/><?= $this->showUrl ?></a>
    </div>
    <div class="center-content">
        <div class="teaser_img">
            <a href="<?= $this->clickUrl  ?>"  target="_blank">
            <img src="<?= $this->imageUrl  ?>"/></a>
        </div>
        <a href="<?= $this->clickUrl  ?>"  target="_blank">
        <p class="teaser_description text-center"><?= $this->description  ?></p></a>
    </div>
</div>
