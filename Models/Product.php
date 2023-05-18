<?php

class Product
{
    public $img;
    public $id;
    public $title;
    private $price;
    public $category;
    public $type;

    function __construct($_img, $_id, $_title, $_category, $_type)
    {
        $this->img = $_img;
        $this->id = $_id;
        $this->title = $_title;
        $this->category = $_category;
        $this->type = $_type;
    }

    public function setPrice($_price)
    {
        if ($_price < 0) {
            throw new Exception("Il prezzo non puo essere gratis altrimenti non guadagnamo niente");
        } else {
            $this->price = $_price;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }
}
