/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/wiki/SyntaxHighlighter:Donate
 *
 * @copyright
 * Copyright (C) 2004-2009 Alex Gorbatchev.
 *
 * @license
 * This file is part of SyntaxHighlighter.
 * 
 * SyntaxHighlighter is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * SyntaxHighlighter is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with SyntaxHighlighter.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * 
 * LISP Syntax Originally from Knut Haugen
 * http://blog.knuthaugen.no/2009/10/a-syntaxhighlighter-brush-for-lisp/
 */

SyntaxHighlighter.brushes.Lisp = function(){

    var funcs     = 'lambda list progn mapcar car cdr reverse member append format';
    var keywords  = 'let while unless cond if eq t nil defvar dotimes setf listp numberp not equal';
    var macros    = 'loop when dolist dotimes defun';
    var operators = '> < + - = * / %';

    this.regexList = [
     { regex: SyntaxHighlighter.regexLib.doubleQuotedString, css: 'string' },
     { regex: new RegExp('&\\w+;', 'g'), css: 'plain' },
     { regex: new RegExp(';.*', 'g'), css: 'comments' },
     { regex: new RegExp("'(\\w|-)+", 'g'), css: 'variable' },
     { regex: new RegExp(this.getKeywords(keywords), 'gm'), css: 'keyword' },
     { regex: new RegExp(this.getKeywords(macros), 'gm'), css: 'keyword' },
     { regex: new RegExp(this.getKeywords(funcs), 'gm'), css: 'functions' },
    ];
    
}

SyntaxHighlighter.brushes.Lisp.prototype = new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.Lisp.aliases   = ['lisp'];


