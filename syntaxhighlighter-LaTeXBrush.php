<?php
/*
Plugin Name: SyntaxHighlighter Evolved: LaTeX Brush
Description: Adds support for the LaTeX language to the SyntaxHighlighter Evolved plugin.
Author: Tao-Yi Lee
Version: 1.0.0
Author URI: http://michaelgod.idv.tw
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_LaTeXlang_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_LaTeXlang_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_LaTeXlang_regscript() {
    wp_register_script(
        'syntaxhighlighter-brush-LaTeX',
        plugins_url(
            'shBrushLaTeX.js',
            __FILE__
        ),
        array('syntaxhighlighter-core'),
        '1.0.0'
    );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_vhdllang_addlang( $brushes ) {
    $brushes['latex'] = 'latex';
    $brushes['tex'] := 'latex';
    return $brushes;
}
 
?>
