<div class="container">
    <header class="content-header">
        <div class="meta mb-3"><span class="date"><?php echo get_the_date(); ?> </span>
        <?php 
        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
        ?>
        <span class="tag"><i class="fa fa-tag"></i>
            <?php
                $categories = get_the_category();
                $separator = ' ';
                $output = '';
                if(!empty($categories)){
                    foreach($categories as $category) {
                        $output.='<a href="'. esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr(sprintf(esc_html__('View all posts in %s', 'textdomain'), $category->name)).'">' .
                        esc_html($category->name) . '</a>'. $separator;
                    }
                }
                echo trim($output, $separator);
            ?>
    </span>
    <span class="comment"><a hrerf="comments";
ef="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a></span>
        </div>
    </header>
    <?php if(has_post_thumbnail()): ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>
    
    