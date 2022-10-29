<?php

    Class Conn{
        private $host = 'localhost';
        private $db = 'attendance_db';
        private $user = 'root';
        private $password = '';
        private $charset = 'utf8mb4';

        public function __construct(Crud $crud, User $user, Validate $validate){
            $this->crud = $crud;
            $this->user = $user;
            $this->validate = $validate;
        }

        public function connect(){
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

            try{
                $pdo = new PDO($dsn, $user, $password);
                // echo 'Hello DB';
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                // echo "<h1 class='text-danger'>Error in connection</h1>";
                throw new PDOException($e->getMessage());
            }
        }
            
        public function instantiate(){
            require 'crud.php';
            require 'user.php';
            require 'validate.php';
            $crud = new Crud($pdo);
            $user = new User($pdo);
            $validate = new Validate($pdo);

            $user->insertUser('Admin', 'password');
            $newU = $user->insertUser('Super-Admin', 'pass');
            $newU = $user->insertUser('user', 'password');
            // $sql = "SELECT * FROM `users` WHERE `dob` = '0000-00-00
            // '";
            // $stmt = $pdo->prepare($sql);
            // $stmt->execute();


            // var_dump($crud->quick());exit;
            
        


                // print_r(get_class_methods('Validate'));
                // print_r(get_class_vars('Validate'));

                
            // $result = new Validate($pdo);
 
        }
    }
                       
?>