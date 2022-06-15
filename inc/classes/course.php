<?php

class Course
{
    public $title;
    public $image;

    // public $price;
    // public $discount;

    public function __construct($title = '', $image = null)
    {
      $this->title = $title;
      $this->image = $image;
      // var_dump($this);
      // var_dump($title, $image);
    }

    // public function calculatePriceOnSolde()
    // {
    //     return 'prix soldé : ' . ($this->price * $this->discount / 100);
    // }
}