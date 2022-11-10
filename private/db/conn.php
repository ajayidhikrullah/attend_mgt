<?php

        $host = 'localhost';
        $db = 'attendance_db';
        $user = 'root';
        $password = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

            try{
                $pdo = new PDO($dsn, $user, $password);
                // echo 'Hello DB';
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo "<h1 class='text-danger'>Error in connection</h1>";
                throw new PDOException($e->getMessage());
            }
            
            require 'crud.php';
            // $crud = new \ACME\db\crud\Crud($pdo);
            require 'user.php';
            require 'validate.php';
            require 'event.php';
            require 'queries.php';
            
            $crud = new Crud($pdo);
            $user = new User($pdo);
            $validate = new Validate($pdo);
            $event = new Event($pdo);
            $createQuery = new Query($pdo);
            //Uncomment to run query here
            // $createQuery->runQuery();

             

            // $user->insertUser('Dhikr', 'pass');
            // $newU = $user->insertUser('Super-Admin', 'pass');
            // $newU = $user->insertUser('user', 'password');
            // $sql = "SELECT * FROM `users` WHERE `dob` = '0000-00-00
            // '";
            // $stmt = $pdo->prepare($sql);
            // $stmt->execute();


            // var_dump($crud->quick());exit;
            
        


                // print_r(get_class_methods('Validate'));
                // print_r(get_class_vars('Validate'));

                
            // $result = new Validate($pdo);
                       
?>