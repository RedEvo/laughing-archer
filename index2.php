<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Added More Info</title>
    <script type="text/javascript" src="jquery-2.1.1.js"></script>
    <script type="text/javascript">
    $("document").ready(function() {
        //alert("The page just loaded");
        //$("p:first").css("border","3px solid red");
        //$("p:last").css("border","3px solid red");
        //$("p:even").css("border","3px solid red");
        //$("p:odd").css("border","3px solid red");
        //$(".a:first").css("border","3px solid red");
        //$(".b:even").css("border","3px solid red");
        //$("p:gt(1)").css("border","3px solid red");
        //$("p:not(p:eq(2))").css("border","3px solid red");
        //$("p[class]").css("border","3px solid red");
        //$("p[id=para1]").css("border","3px solid red");
        //$("p[id^=para]").css("border","3px solid red");
        //$("p[id^=para][lang*=en-]").css("border","3px solid red");
        //$("li:contains(3)").css("border","3px solid red");
        //$("p:parent").css("border","3px solid red");
        //$("ul:has(li[class=a])").css("border","3px solid red");
        //$("ul li:nth-child(3)").css("border","3px solid red");
        $("ul li:last-child").css("border","3px solid red");
    });
    </script>
    
    <style type="text/css">
        .a {color: Navy;}
        .b {color: Maroon;}
        </style>
    </head>
    <body>
    
        
    <ul id="list1">
        <li class="a">item 1</li>
        <li class="a">item 2</li>
        <li class="b">item 3</li>
        <li class="b">item 4</li>
        </ul>
    <p class="a">This is a paragraph 1</p>
        <p id="para1">This is a paragraph 2</p>
        <p class="b">This is a paragraph 3</p>
        <p id="para4" lang="en-us">This is a paragraph 4</p>
    <?php
phpinfo();
?>    
    </body>
    </html>