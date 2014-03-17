#Base Foundation

## Introduction
The idea behing Base Foundation is to give you a base theme that uses the Foundation Framework. It has very basic styling, too much in some places (three navigation bars, two in header.php, one in footer.php) and too little in others (some templates don't have much content). 

The idea is for you to be able to use it as a reference and take what you need from it.

## Highlights
There are a few files you will really need and some that need a bit of explanation.

### Including Foundation Styles and JavaScript
Foundation needs some CSS and JavaScript to run. You have to do two things in order to get them working

1. Copy the files to your theme
2. Copy the code in functions.php that will include the files in your theme.

#### Copying the files
It is important that you copy the files into folders with the names used here or the code in functions in the second step won't work. It's probably easier to do this if you first download a zip with all of the files shown here. 

Download the files by either going to the [Base Foundation branch](https://github.com/stein-bmcc/460-spring-14/tree/Base-Foundation) and clicking on the Download Zip link on the lower right, or going to the [Releases](https://github.com/stein-bmcc/460-spring-14/releases) and looking for the Base Foundation release.

**StyleSheets** Foundation uses these two sheets located in the css folder. Copy them into your theme in a folder also named **css**. If you don't have a css folder just move the whole thing into your theme.

1. normalize.css
2. foundation.min.css

**JavaScript** Inside the js folder you will find a folder named **vendor**. Copy this entire folder into your theme.

#### Code in functions.php
This code is what tells WordPress where to find the CSS and JS files and include them in your theme.

Open functions.php and copy the lines of code under ADD STYLESHEETS AND JAVASCRIPT. Stopy copying before you hit the next section. You're copying a function named **portfolio_styles_scripts** and the **add_action()** line after it.

If you don't want the admin bar to show (it's the black bar that lets you add new posts and things at the very top) then also copy this line
`show_admin_bar(false );`


### Foundation Layout
Foundation has two basic ways to layout content. One is with  classic **Grid** system that is made up of rows and columns. You define a row and then put divs inside that each span a number of columns that add up to the 12 columns in a Foundation row.

The content pages, content-single.php and content-page.php show examples of working with the Foundation Grid and WordPress content. Visit the [Foundation documentation](http://foundation.zurb.com/docs/) for more information.

The other system (which you can put inside of columns if you like) is called **Block Grid** and is for when you have a number of items that can change and you just want to make sure that they are laid out in a grid. The Block Grid uses an unordered list `<ul>` where each item is a `<li>`. You tell Foundation with classes how many items are in a row.

A good place to use the Block Grid is when you are showing a list of posts like on the homepage or in an archive page. You usually put the ul in the page template (front-page.php, archive.php) and then put themam

