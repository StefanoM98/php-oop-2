<?php
class Category
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}

class Dogs extends Category
{
    public function __construct()
    {
        parent::__construct("Cane");
    }
}

class Cats extends Category
{
    function __construct()
    {
        parent::__construct("Gatto");
    }
}
