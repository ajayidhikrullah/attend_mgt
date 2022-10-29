<?php
// require_once 'crud.php';
    Class Validate extends Crud{
        // private $db;
        public $firstname;
        public $email;
        
        function __construct($conn){
            $this->db = $conn;
        }

        public function backEndValidation(){
            try{
                // if ($this->emptyInput($this->firstname) || ($this->email) == false) {
                //     echo "<div class='error'>Error empty Input for Firstname</div>";
                //     // header('Location: includes/errormessage.php');
                //     exit;
                // }

                if ($this->invalidEmail($this->email) == false) {
                    echo 'Invalid email, please check again';
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if ($this->emailExist() == false) {
                    echo 'Email already exist, please use another email.';
                    exit;
                }
            }
                catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }
        }

        //functons to handle different errors scenarios
        public function invalidEmail(){
            $result = NULL;
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }

        public function emptyInput(){
            $result = NULL;
            if(!empty($this->firstname)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        public function emailExist(){
            $result;
            // $fetch = $validate->getAttendee();
                // while ($r = $fetch->fetch(PDO::FETCH_ASSOC)) {
                //     var_dump($r['email']);exit;

                    // if ($r['email'] > 0 ) {
                    //     var_dump('ooops');exit;
                    //     $result = false;
                    // }else{
                    //     $result = true;
                    // }
                // }
        }            

    }


?>