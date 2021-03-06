# Translators
1. Translate theme.
- Please, check https://translate.wordpress.org/projects/wp-themes/ocean-cream/.
2. Translate documentation. 
- Download pot → https://github.com/onliniak/ocean-cream/tree/master/docs/_build/gettext
- Rename to language.pot
- Send Pull Request
# Documentation
- We use Sphinx documentation based on reStructuredText.
- Main documentation will be in polish.
- Link all files to rst instead of including it, for example 
```
.. literalinclude:: /css/critical.css
   :language: css
   :lines: 66-92
```
- Include all code with comments. 
- Maybe I will use Read The Docs website …
- Tutorial → http://docutils.sourceforge.net/docs/user/rst/quickref.html#enumerated-lists or https://documentation-style-guide-sphinx.readthedocs.io/en/latest/style-guide.html
- Today, we must replace '_static' with 'https://cdn.staticaly.com/gh/onliniak/ocean-cream/master/_static' in html files.
# Issues
- Please, write issues in english or polish.
- It's good idea to include screenshots.
- Write as simply as possible, for example instead of "something broke" or "I wanted to click on the given blue button, the one at the top with dark letters but I can not and I do not know what to do and I do not want to work and help me immediately".
  - write "I click on the button but the sidebar will not open".
    - or even "I can't open sidebar".
- Don't remove first tag/bracket, for example for bugs we use [🐛], for suggesions [🤔] and [❓] for questions. 
# Pull Requests
- TLDR: We use [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) with [custom ruleset](https://github.com/onliniak/ocean-cream/blob/intro/ruleset.xml) based on PSR-2.
- Long version:
-We use PSR-2 Coding Standards with little WordPress Coding Standards influence :
  - Tabs instead of spaces
  - Reasonably line high
  - UNIX-like new line
  - elseif instead of else if 
  - New line after <?
  - array as new line
  - No Shorthand PHP Tags
  - PHP 5 compatible syntax
  - Remove Trailing Spaces
    - One exception - functions.php
  - All functions and variable we write in *snake_case* like
    - {prefix}{main group(optional)}{sub-group(optional)}{name}
    - For example in depreciated https://github.com/onliniak/ocean-cream/wiki/ocean_cream_author_meta I used:
      - ocean_cream = Prefix
      - author = main group (from author.php or author's page)
      - meta = subgroup (from WordPress's the_author_meta)
      - localization = name (this variable translate something)
  - Readibility is the most important.
  - Please, use english comments (WordPress-like/simple/A2 level (EU) for example Do something with blah blah blah)
  - New code should be checked in [theme sniffer](https://github.com/WPTRT/theme-sniffer) for minimal supported PHP compatibility and escaping rules.
  - If you want to change current coding standard → please, send pull request to intro branch. 
