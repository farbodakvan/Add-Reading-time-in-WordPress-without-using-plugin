/*** ADD ESTIMATED READING TIME ***/
function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = explode(" ",$content);
	$all_word = count($word_count);
    $readingtime = ceil($all_word / 200);
    if ($readingtime == 1) {
      $timer = " دقیقه";
    } else {
      $timer = " دقیقه";
    }
    $totalreadingtime = $readingtime . $timer;
    return $totalreadingtime;
}
