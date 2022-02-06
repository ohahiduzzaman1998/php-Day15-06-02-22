<?php


require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;
use App\classes\show;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'password-reset')
    {
        include 'pages/password-reset.php';
    }
    elseif ($_GET['pages'] == 'Blog')
    {
        $blog = new Blog();
        $blogs = $blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'show')
    {
        $show = new Show();
        $show = $show->getAllProduct();
        include 'pages/show.php';
    }
}
elseif (isset($_POST['btn']))
{
    $passwordGenerator = new PasswordGenerator($_POST);
    $result = $passwordGenerator->newPassword();
    include 'pages/password-reset.php';
}
else
{
    $home = new Home();
    $home->index();
}
