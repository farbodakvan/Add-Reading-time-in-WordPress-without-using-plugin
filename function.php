/*** ADD ESTIMATED READING TIME ***/
function reading_time() {
    $post_id = get_the_ID();
    $content = get_post_field( 'post_content', $post_id );
    $word_count = explode(" ",$content);
	$all_word = count($word_count);
    $readingtime = ceil($all_word / 300);
    if ($readingtime == 1) {
        if (is_rtl()) {
            $timer = "دقیقه";
        } else {
            $timer = "min";
        }
    } else {
        if (is_rtl()) {
            $timer = "دقیقه";
        } else {
            $timer = "min";
        }
    }
    $totalreadingtime = $readingtime . ' ' . $timer;
    return $totalreadingtime;
}
