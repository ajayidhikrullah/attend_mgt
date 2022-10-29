<?php
    Class Validate extends Crud{
        // private $db;
        public $firstname;
        public $email;

        function __construct($conn, $firstname, $email){
            $this->db = $conn;
            $this->firstname = $firstname;
            $this->email = $email;
        }

        public function backEndValidation(){
            try{
                if ($this->emptyInput($this->firstname) || ($this->email) == false) {
                    echo "<div class='error'>Error empty Input for Firstname</div>";
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if (!$this->invalidEmail($this->email)) {
                    echo 'Invalid email, please check again';
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if ($this->checkEmail($this->email) == true) {
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
            if(!empty($this->firstname || $this->email)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }           

    }


?>