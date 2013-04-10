<?php
/*
Plugin Name: SyntaxHighlighter Evolved: LaTeX Brush
Description: Adds support for the LaTeX language to the SyntaxHighlighter Evolved plugin.
Author: Tao-Yi Lee
Version: 1.0.0
Author URI: http://michaelgod.idv.tw
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_latexlang_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_latexlang_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_latexlang_regscript() {
    wp_register_script('syntaxhighlighter-brush-latex', plugins_url('shBrushLatex.js',__FILE__),array('syntaxhighlighter-core'),'1.0.0');
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_latexlang_addlang( $brushes ) {
    $brushes['latex'] = 'latex';
    return $brushes;
}
?>
