<div class="instagram_widget">
    <?php foreach ($aData as $oPost) {
        echo \View::forge('instagram_widget::front/subviews/post',  array('oPost' => $oPost, 'show_post_info' => $show_post_info), false);
    } ?>
</div>