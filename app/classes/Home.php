<?php


namespace App\classes;
use App\classes\Category;

class Home
{

    public $product, $products = [], $category, $categories = [],$category_id;

    public function index()
    {
        $this->category= new Category();
        $this->categories = $this->category->allCategory();
        $this->product = new Products();
        $this->products = $this->product->allProducts();

        return view("home", ['products' => $this->products, 'categories'=>$this->categories]);
    }

}