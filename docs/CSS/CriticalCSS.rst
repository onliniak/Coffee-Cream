############
Critical CSS
############

This file is responsible for the correct display of the website, so we load it very early.

*************
Main Template
*************

I am sub-section of critical.css, I am responsible for dividing the page between the sidebar and your entries.
I also designate the size of the font, its color and coloring the links in black.

Main color
==========

This is main color of our website. I call it Coffee Brown or brown darken-4 Materialize.css

.. literalinclude:: /../css/critical.css
   :language: css
   :lines: 1-3

Content/Post Area
=================

.. literalinclude:: /../css/critical.css
   :language: css
   :lines: 5-11

This is most important part of our file.

* We are about to display your entries here.
* In a big simplification, I create a slightly rounded rectangle (25%), with a contrasting cream color.
* That's why the first version was called Coffee Cream.
* I noticed that placing a light element on a dark background is less eyes-tiring than the "classic" white and black text.
* Our rectangle will be 75% wide, in this way I leave myself 25% side for the sidebar … and I create a nice brown frame.
* Why background-color is !important ? Long time ago, in the days of CSS1 the browsers was not able to display two backgrounds simultaneously, and when this happened, it choosed the lowest one. In other words, if I skip !important, I risk that older browsers display dark text on a dark background.

Why is margin set to auto? Well … it's best to see it on your own eyes.
Let's say blue is our article a.k.a. "Content Area", red is main or just page and Coffee Brown is our menu.

.. raw:: html

    <div style="background-color: #3e2723"; width="50px">.</div><div style="background-color: red">.
    <div style="background-color: blue;width:300px">.</div></div>

The site align to left? And with a margin?

.. raw:: html

    <div style="background-color: #3e2723"; width="50px">.</div><div style="background-color: red">.
    <div style="background-color: blue;width:300px;margin:auto">.</div></div>

Our "Content Area" is symetrically in center.

Bonus: Padding, violet = 0, tomato = 1cm and … tomato = 1cm 5cm.

Padding
   "The CSS padding properties are used to generate space around an element's content, inside of any defined borders." W3Schools <https://www.w3schools.com/css/css_padding.asp>"

.. raw:: html

    <div style="background-color:violet">di di di di di di</div>
    <div style="background-color:tomato;padding:1cm">di di di di di di</div>
    <div style="background-color:tomato;padding:1cm 5cm">di di di di di di</div>

Font
====

Here, I create secend important part of this site - typography.

* I use 3 Helvetica's fonts → more info <http://www.identifont.com/differences?first=Nimbus+Sans&second=Helvetica>, <http://www.identifont.com/differences?first=Arial&second=Helvetica&q=Go>
* and "automatic/mathematic" font size.

.. math::

    14px + (0.25*0.01x)

Where x = height of article/content area and vw = % of x.

* For example on laptops (1366x768px) we use ~ 17.3px
* I am using 150% since I noticed that the "automatic" version causes problems with larger fonts like 30 / 40px
* And colors - dark grey for text and links.

.. literalinclude:: /../css/critical.css
   :language: css
   :lines: 13-26

****
Menu
****

Hi, I am another sub-section. I am not responsible for the whole page, like my sister, but I focus on the menu.
I make it visible to both computers and mobile devices.

.menu
	sand background
.menu li
	menu is displayed vertically by default, by use **float:left**, I create single level (horizontally) menu. 
.menu li a
	I separate individual links and give them a more "button-like" look. If I did not do it, the links would display in a line as a super long text.
.menu li a:hover
	I change background color to blue (to give you the illusion of a pressed button).
.menu ul ul
	I create submenus, position: absolute; padding: 0; background-color: #d2bc83; border-top: 2px solid is responsible for displaying submenus below the main level.
.menu ul li:hover>ul
	I display a submenu, without me all levels will be displayed simultaneously, creating a super high block of links
#ocean_cream_mobile_menu_icon
	I hide "hamburger-menu" (© Bytesize icons) icon on desktops (>999px).


.. literalinclude:: /../css/critical.css
   :language: css
   :lines: 28-67

******
Mobile
******

I am responsible for mobile. I hide unecessary elements like sidebar or full-menu.
Thanks to my help, mobile devices can see only one area - your entries.
I also make sure that the content does not go beyond my area.

@media screen and (max-width:999px)
	Display only, when window width under 1000px (mobile) <https://www.w3schools.com/cssref/css3_pr_mediaquery.asp>
nav.menu li
	Show vertically menu (look at menus section).
#ocean_cream_sidebar_open
	hide "show sidebar" button.
#ocean_cream_mobile_menu
	hide menu until click "Hamburger menu" (© Bytesize icons). More info in buttons.js
#ocean_cream_mobile_menu_icon
	Show "Hamburger menu" icon (© Bytesize icons).
article
	Display only "content area" (or hide sidebar).

.. literalinclude:: /../css/critical.css
   :language: css
   :lines: 69-100

***************
Another changes
***************

I am last subsection, I am responsible for others changes like buttons, change entries width when sidebar is open or hide comments. So, I clean your website.

#ocean_cream_sidebar
	hide sidebar, by default.
.ocean_cream_button
	display buttons (© Materialize CSS)
.ocean_cream_button:hover
	I change background color to blue (to give you the illusion of a pressed button)
#ocean_cream_sidebar[style*='display: block']~article {
	Display sidebar → if sidebar is open (display:block), change article ("content area") width and show sidebar in new, empty place. 
#comments
	Hide comments

.. literalinclude:: /../css/critical.css
   :language: css
   :lines: 102-127