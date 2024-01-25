<?php
include_once('DatabaseConnection.php');

    class product_functions{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertProduct($product){
            $conn = $this->connection;

            $name = $product->getName();
            $imagePath = $product->getimagePath();
            $description = $product->getDescription();
            $price = $product->getPrice();

            $sql = "INSERT INTO products ([name], imagePath, [description], price, category) VALUES (?, ?, ?, ?)";
            try{
            $statement = $conn->prepare($sql);
            $statement->execute([$name,$imagePath,$description,$price,$category]);

            echo "<script>alert('U shtua me sukses')</script>";
            }catch(PDOException $e){
                echo "<script>alert('Error:".$e->getMessage()."')</script>";
            }
        }
    

    public function getAllProducts(){
        $conn = $this->connection;
        
        $sql = "SELECT * FROM products";
        $statement = $conn->query($sql);
        
        $products = $statement->fetchAll();
        return $products;
    }

    public function editProduct($id, $name,$imagePath,$description,$price,$category){
        $conn = $this->connection;
        $sql = "UPDATE products SET username=?, email=?, password=?, role=?, category=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$name,$imagePath,$description,$price,$category, $id]);

        echo "<script>console.log('U ndryshua me sukses')</script>";
    }

    function deleteProduct($id){
        $conn = $this->connection;
        $sql = "DELETE FROM products WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

    function getProductById($id){
        $conn = $this->connection;
        $sql="SELECT * FROM products WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $product=$statement->fetch();

        return $product;
    }

    function getProductByCategory($category){
        $conn = $this->connection;
        $sql = "SELECT * FROM products WHERE category=?";

        $statement->execute([$category]);
        $product=$statement->fetch();

        return $product;
    }
}


?>