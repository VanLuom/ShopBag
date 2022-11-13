<?php

require_once './core/mysql.php';

$pdo = get_pdo();

//Insert order
function insert_order($pdo){
    $sql = "INSERT INTO ORDERS(ID, CODE, STATUS) VALUES(NULL, :code, :status)";
    $stmt = $pdo->prepare($sql);
    
    $code = 'eddddd';
    $status = 'lovetien';
   
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':status', $status);

    $stmt->execute();
}

//update order
function update_order($pdo){
    $sql = "UPDATE ORDERS SET CODE=:code, STATUS=:status WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    
    $code = 'khachhang';
    $status = 'damua';
    $id = 1;

   
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}

//delete order
function delete_order($pdo){
    $sql = "DELETE FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    
    $id = 2;
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}

//Select data
function select_order($pdo){
    $sql = "SELECT * FROM ORDERS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    // Lặp kết quả
    foreach ($result as $row){
        echo $row['code'] . ' - '. $row['status']. '<br>';
    }
}
?>