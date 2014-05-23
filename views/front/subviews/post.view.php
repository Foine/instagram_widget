<?php
$image = null;
if (!empty($oPost->images->low_resolution)) {
    $image = $oPost->images->low_resolution;
} else {
    $image = $oPost->images->standard_resolution;
}
if (empty($image)) return '';
$caption = $oPost->caption;
$image_tag = \Html::img($image->url, array('width' => $image->width, 'height' => $image->height, 'alt' => (isset($caption->text) ? $caption->text : '')));
?>
<div class="instagram_item">
    <div class="instagram_image">
        <?= \Html::anchor($oPost->link, $image_tag, array('target' => '_blank')) ?>
    </div>
    <?php if ($show_post_info) : ?>
        <?php if (isset($caption->text) && !empty($caption->text)) : ?>
        <div class="instagram_caption">
            <?= $caption->text ?>
        </div>
        <?php endif; ?>
        <div class="instagram_user">
            <?= \Html::anchor($oPost->link, $oPost->user->username, array('target' => '_blank')) ?>
        </div>
    <?php endif; ?>
</div>