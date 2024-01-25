<?php
class Product{
    private $id;
    private $name;
    private $imagePath;
    private $description;
    private $price;
    private $category;

    public function __construct($name, $imagePath, $description, $price, $category){
        $this->name = $name;
        $this->imagePath=$imagePath;
        $this->description=$description;
        $this->price=$price;
        $this->category=$category;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getImagePath(){
        return $this->imagePath;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getCategory(){
        return $this->category;
    }


    public function setName($name){
         $this->name=$name;
    }
    public function setImagePath($imagePath){
         $this->imagePath=$imagePath;
    }
    public function setDescription($description){
         $this->description=$description;
    }
    public function setPrice($price){
         $this->price=$price;
    }
    public function setCategory($category){
        $this->category=$category;
    }
    public function __toString(){
        return "Product:".$this->name."<br> ".$this->imagePath."- description:".$this->description." - price:".$this->price;
    }
}
?>
