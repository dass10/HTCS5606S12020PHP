<?php


class Product
{
    public $id;
    public $name;
    public $categoryid;
    public $image;
    public $price;
    public $description;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $categoryid
     * @param $image
     * @param $price
     * @param $description
     */
    public function __construct($id, $name, $categoryid, $image, $price, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryid = $categoryid;
        $this->image = $image;
        $this->price = $price;
        $this->description = $description;
    }


}