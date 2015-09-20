# Noscript Notification

A small, simple, all in one file that can be dropped into any site to hide the site's content and display a clean simple warning to visitors to the site that they have javascript disabled. The script will degrade gracefully though function, finding the best one supported by the user's browser.

## Usage

Simply download [noscript-min.php](https://github.com/torrentails/noscript-notification/blob/master/noscript-min.php) to your site's folder and add the following just after your `<body>` tag:

    <?php
    DEFINE ('MAINDIV', 'your-main-div-id');
    require './noscript-min.php';
    ?>
    
Make sure your main div is set to `display:hidden` and that it has the ID as above. For example:

    <div id='<?php echo MAINDIV; ?>' style='display:none;'>
    
## Licence

Copyright (C) 2015 Nathan Sullivan

This program is released under the GNU General Public Licence Version 3.0

This program is distributed in the hope that it will be useful,  
but WITHOUT ANY WARRANTY; without even the implied warranty of  
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the  
GNU General Public License for more details.