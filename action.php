<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\Categories;
use App\classes\Products;
$home=new Home();

if (isset($_GET['page']))
{
    if ($_GET['page']=="home")
    {
        $home->index();
    }
    if ($_GET["page"]=="latest_news")
    {
        $home->categoryProduct();
    }
}
