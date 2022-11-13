<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_products(){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'img' => $row['img'],
            
        );
    }
    
    return $product_list;
}

function get_all_categories(){
    global $pdo;

    $sql = "SELECT * FROM CATEGORIES";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $categories_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $categories_list[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'img' => $row['img']
        );
    }
    
    return $categories_list;
}

/**
 * Get Product detail
 * host/product-detail.php?id=1
 * @id id of product
 */
function get_product($id){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'img' => $row['img'],
            'categories_id' => $row['categories_id']
        );
    }

    return null;
}

/**
 * Get product list by category
 */
function get_products_by_categories($categories_id){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE CATEGORIES_ID=:categories_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':categories_id', $categories_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
      
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'img' => $row['img'],
             'categories_id' => $row['categories_id']
        );
    }
    
    return $product_list;
}


/**
 * Get product by name
 */
function get_products_by_name($name){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE NAME LIKE :name";
    $stmt = $pdo->prepare($sql);

    $name = "%$name%";
    $stmt->bindParam(':name', $name);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'img' => $row['img'],
            'categories_id' => $row['categories_id']
        );
    }
    
    return $product_list;
}

/**
 * Get product related
 */
function get_products_related($product_id, $category_id){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE ID != :product_id AND CATEGORIES_ID = :categories_id LIMIT 4";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':categories_id', $categories_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'img' => $row['img'],
            'categories_id' => $row['categories_id']
        );
    }
    
    return $product_list;
}