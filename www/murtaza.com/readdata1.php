<?php

$server='localhost';
$username='root';
$password='#sajjan2';
$database = 'company';

header("Content-Type:application/json");

    try {
            $database_name     = $database;
            $database_user     = $username;
            $database_password = $password;
            $database_host     = $server;

            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);          

            $sql = 'select *                    
                    from employees
                    ';           

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
           
            $data = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                 $data[] = $row;  
            } 

           $response         = [];
           $response['data'] =  $data;

           echo json_encode($response, JSON_PRETTY_PRINT);

        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
	}        

?>
