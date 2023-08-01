<?php
class GroceryProductDAO{
    
    private static $db;    

    //initialize
    static function initialize(string $className)   {                
        self::$db = new PDOAgent($className);
    }

    //get all products
    static function getAllGroceryProducts(): array
    {
        $selectAll = "SELECT * FROM grocery_products";

        self::$db->query($selectAll);
        self::$db->execute();
        return self::$db->resultSet();
    }

    //get certain product based on id
    static function getGroceryProduct(int $product_id): GroceryProduct
    {
        $selectProduct = "SELECT * FROM grocery_products WHERE product_id = :product_id";

        self::$db->query($selectProduct);
        self::$db->bind(":product_id", $product_id);
        self::$db->execute();

        return self::$db->singleResult();
    }
    
    //insert
    static function createGroceryProduct(GroceryProduct $newProduct): int
    {
        $insertProduct = "INSERT INTO grocery_products (product_name, price, quantity, category) ";
        $insertProduct .= "VALUES (:product_name, :price, :quantity, :category)";

        self::$db->query($insertProduct);
        self::$db->bind(":product_name", $newProduct->getProductName());
        self::$db->bind(":price", $newProduct->getPrice());
        self::$db->bind(":quantity", $newProduct->getQuantity());
        self::$db->bind(":category", $newProduct->getCategory());
        self::$db->execute();

        return self::$db->lastInsertId();
    }

    //delete based on id
    static function deleteGroceryProduct(int $product_id): bool
    {
        $deleteProduct = "DELETE FROM grocery_products WHERE product_id = :product_id";
        try {
            self::$db->query($deleteProduct);
            self::$db->bind(":product_id", $product_id);
            self::$db->execute();

            if (self::$db->rowCount() != 1) {
                throw new Exception("Problem in deleting the product with ID {$product_id}");
            }
        } catch (Exception $e) {
            // Log the error to the error_log.txt file
            error_log("Error with deleting product with ID of : {$product_id}: " . $e->getMessage(), 0);
            return false;
        }

        return true;
    }

    //edit based on id
    static function editGroceryProduct(GroceryProduct $newProduct): int
    {
        $editProduct = "UPDATE grocery_products SET product_name=:product_name,price=:price, quantity=:quantity, category=:category ";
        $editProduct .= "WHERE product_id=:product_id";

        self::$db->query($editProduct);
        self::$db->bind(":product_id", $newProduct->getProductID());
        self::$db->bind(":product_name", $newProduct->getProductName());
        self::$db->bind(":price", $newProduct->getPrice());
        self::$db->bind(":quantity", $newProduct->getQuantity());
        self::$db->bind(":category", $newProduct->getCategory());
        self::$db->execute();

        return self::$db->rowCount();
    }

    //filter based on category
    static function getGroceryProductsByCategory(string $category): array
    {
        $selectProductsByCategory = "SELECT * FROM grocery_products WHERE category = :category";
        self::$db->query($selectProductsByCategory);
        self::$db->bind(":category", $category);
        self::$db->execute();
        return self::$db->resultSet();
    }

    //this will show products based on a partial search or name
    static function getGroceryProductsByName(string $Name): array
    {
        $selectProductsByName = "SELECT * FROM grocery_products WHERE product_name LIKE :name";
        self::$db->query($selectProductsByName);
        self::$db->bind(":name", '%' . $Name . '%');
        self::$db->execute();
        return self::$db->resultSet();
    }

    //sort by price the defualt is ascending 
    static function getGroceryProductsSortedByPrice(string $Order = 'ASC'): array
    {
        $Order = strtoupper($Order);
        switch ($Order) {
            case 'ASC':
                $orderBy = 'ASC';
                break;
            case 'DESC':
                $orderBy = 'DESC';
                break;
            default:
                $orderBy = 'ASC'; 
                break;
        }
        $selectProductsSortedByPrice = "SELECT * FROM grocery_products ORDER BY price $orderBy";
        self::$db->query($selectProductsSortedByPrice);
        self::$db->execute();
        return self::$db->resultSet();
    }

    //sort by name by defualt it is ascending
    static function getGroceryProductsSortedByName(string $Order = 'ASC'): array
    {
        $Order = strtoupper($Order);
        switch ($Order) {
            case 'ASC':
                $orderBy = 'ASC';
                break;
            case 'DESC':
                $orderBy = 'DESC';
                break;
            default:
                $orderBy = 'ASC'; 
                break;
        }
        $selectProductsSortedByName = "SELECT * FROM grocery_products ORDER BY product_name $orderBy";
        self::$db->query($selectProductsSortedByName);
        self::$db->execute();
        return self::$db->resultSet();
    }

    //sort by price range
    static function getGroceryProductsByPriceRange(float $minPrice, float $maxPrice): array
    {
        $selectProductsByPriceRange = "SELECT * FROM grocery_products WHERE price BETWEEN :min_price AND :max_price";

        self::$db->query($selectProductsByPriceRange);
        self::$db->bind(":min_price", $minPrice);
        self::$db->bind(":max_price", $maxPrice);
        self::$db->execute();

        return self::$db->resultSet();
    }






}
