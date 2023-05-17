<?php

class Product
{
    public $id;
    public $title;
    public $price;

    function __construct($_id, $_title, $_price)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->price = $_price;
    }
}
