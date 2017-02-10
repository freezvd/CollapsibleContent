<dl class="qa--container">
    <dt class="qa--question" itemscope itemtype="http://schema.org/Question" data-show-icon="<?php echo $attributes['show_icon'];?>" data-hide-icon="<?php esc_attr_e( $attributes['hide_icon'] );?>">
        <span class="dashicons <?php echo $attributes['show_icon'];?>" aria-hidden="true"></span>
        <span class="screen-reader-text">Click to reveal the answer</span> <?php esc_html_e( $attributes['question'] );?> 
    </dt>
    <dd class="qa--answear" itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer" style="display: none;"><?php echo $hidden_content;?></dd>
</dl>