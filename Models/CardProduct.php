<?php

class CardProduct
{
    public $prodotto;

    function __construct($_product)
    {
        $this->prodotto = $_product;
    }

    function printCard()
    {
        $print = "<div class='container'>";
        $print .= "<div class='card'>";
        $print .= '<img src="' . $this->prodotto->img . '" alt="' . $this->prodotto->title . '">';
        $print .= "<h3>" . "id_num " . $this->prodotto->id . "</h3>";
        $print .= "<h2>" . $this->prodotto->title . "</h2>";
        $print .= "<p>" . "€" . $this->prodotto->price . "</p>";
        $print .= "<p>" . $this->prodotto->category->name . "</p>";
        $print .= "<p>" . $this->prodotto->type . "</p>";
        $print .= "</div>";
        $print .= "</div>";

        return $print;
    }
}
