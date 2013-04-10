<?php
/*
Plugin Name: SyntaxHighlighter Evolved: LISP Brush
Plugin URI: https://github.com/michaelgod/SyntaxHighlighter-Evolved-LISP-Brush.git
Description: Adds support for the SKILL language to the SyntaxHighlighter Evolved plugin.
Author: Tao-Yi Lee
Version: 0.1
Author URI: http://michaelgod.idv.tw
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_lisplang_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_lisplang_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_lisplang_regscript() {
    wp_register_script('syntaxhighlighter-brush-lisp', plugins_url('shBrushLatex.js',__FILE__),array('syntaxhighlighter-core'),'1.0.0');
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_lisplang_addlang( $brushes ) {
    $brushes['lisp'] = 'latex';
    return $brushes;
}
?>
