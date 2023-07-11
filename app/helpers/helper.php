<?php
function view($view,$data=[],$print=true)
{
    $output="view Not Found";
    $extension="views/".$view.".php";
    if (file_exists($extension))
    {
        ob_start();
        extract($data);
        include $extension;
        $output=ob_get_clean();
    }
    if ($print)
    {
        print $output;
    }
}
