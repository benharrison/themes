<?php

if ( function_exists('register_sidebar') )
    register_sidebar();
    
// 
function ThemeUrl($path = "")
{
    if ($path != "")
    {
        echo get_bloginfo('template_url');
        echo '/';
        echo StripPrefixSlashes($path);
    }
}

// i.e., input "/css/style.css" returns "css/style.css"
function StripPrefixSlashes($path)
{
    if (strlen($path) > 0)
    {
        $newpath = $path;
        $firstchar = substr($newpath, 0, 1);
        while ($firstchar == "/")
        {
            $newpath = substr($newpath, 1);
            $firstchar = substr($newpath, 0, 1);
        }
        echo $newpath;
    }
}

?>