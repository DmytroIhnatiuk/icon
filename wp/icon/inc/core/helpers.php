<?php
function get_img_link($imgName)
{
    $path = get_template_directory_uri();
    return "$path/assets/img/$imgName";
}

function get_picture_img($imgName, $alt = '', $classes = '')
{
    $className = $classes ?? '';
    $className .= ' lazy-image';
    $image = get_img_link($imgName);
    return "    <picture>
    <source data-srcset = '$image.webp' type = 'image/webp' >
    <img class='$className' data-src = '$image.png' alt = '$alt' >
    </picture >";
}


function dn_get_items($slug = 'post', $numberPosts = -1, $paged = false, $acf = false)
{
    $args = [
        'post_type' => $slug,
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        'posts_per_page' => $numberPosts,
    ];
    if ($paged) {
        $args['paged'] = $paged;
    }
    if ($acf) {
        $args['meta_query'] = array(
            $acf
        );
    }
    $args['lang'] = pll_current_language();
    return get_posts($args);
}

function get_idx_with_zero($index)
{
    return $index > 10 ? $index : '0' . $index;
}

function dn_get_image_attachment($id, $thumb = 'medium', $alt = '', $className = '', $width = '', $height = '')
{
    $thumbArgs = [];
    if ($alt) {
        $thumbArgs['alt'] = $alt;
    }
    if ($className) {
        $thumbArgs['class'] = $className;
    }
    if ($width) {
        $thumbArgs['width'] = $width;

    }
    if ($height) {
        $thumbArgs['height'] = $height;
    }

    return wp_get_attachment_image($id, $thumb, false, $thumbArgs);

}


function dn_length_correct($string, $number)
{
    if (mb_strlen($string, 'UTF-8') > $number) {
        return mb_substr($string, 0, $number - 3, 'UTF-8') . '...';
    } else {
        return $string;
    }
}

function dn_estimate_read_time($content) {
    $words = str_word_count(strip_tags($content));
    $minutes = ceil($words / 200);
    return $minutes;
}

