<?php


/*
* Customize list of allowed HTML tags in comments
*/
function behi_customize_allowedhtmlTagsInComments() {

  global $allowedtags;

  // remove unwanted tags
  $unwanted = array(
    'a',
    'i',
    'abbr',
    'acronym',
    'blockquote',
    'cite',
    'code',
    'del',
    'strike',
    'strong',
    'b',
    'em',
    'q'
  );
  foreach ( $unwanted as $tag ) {
    unset($allowedtags[$tag]);
  }
}
add_action('init', 'behi_customize_allowedhtmlTagsInComments');

?>