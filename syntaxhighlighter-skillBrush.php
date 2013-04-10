<?php
/*
Plugin Name: SyntaxHighlighter Evolved: SKILL Brush
Description: Adds support for the SKILL language to the SyntaxHighlighter Evolved plugin.
Author: Tao-Yi Lee
Version: 1.0.0
Author URI: http://michaelgod.idv.tw
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_skilllang_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_skilllang_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_skilllang_regscript() {
    wp_register_script('syntaxhighlighter-brush-skill', plugins_url('shBrushLatex.js',__FILE__),array('syntaxhighlighter-core'),'1.0.0');
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_skilllang_addlang( $brushes ) {
    $brushes['skill'] = 'latex';
    return $brushes;
}
?>
