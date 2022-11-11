<?php

    Class Validate extends Crud{
        // private $db;
        public $firstname;
        public $email;

        function __construct($conn){
            $this->db = $conn;
            // $this->firstname = $firstname;
            // $this->email = $email;
        }

        public function backEndValidation($firstname, $email){
            try{
                if (!$this->emptyInput($firstname, $email)) {
                    echo "<div class='error'>Error empty Input for Firstname</div>";
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if (!$this->invalidEmail($email)) {
                    echo "<div class='error'>Invalid email, please check again</div>";
                    // header('Location: includes/errormessage.php');
                    exit;
                }


                if ($this->checkEmail($email)) {
                    echo "<div class='error'>Email already exist, please use another email</div>";
                    exit;
                }
            }
                catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }

        //functons to handle different errors scenarios
        public function invalidEmail($email){
            $result = NULL;
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }

        public function emptyInput($firstname, $email){
            $result = NULL;
            if(empty($firstname) || empty($email)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }           

    }


?>