<?php

class Product
{
    public $img;
    public $id;
    public $title;
    public $price;
    public $category;
    public $type;

    function __construct($_img, $_id, $_title, $_price, $_category, $_type)
    {
        $this->img = $_img;
        $this->id = $_id;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;
    }
}
