<?php
    Class Validate{
        private $db;
        // private $email;
        // private $firstname;


        function __construct($conn){
            $this->db = $conn;
            // $this->firstname = $firstname;
        }

    
        // public function userAlreadyExist(){
        //     return var_dump(getUser('ggg', 'tggg'));exit;
        // }

        public function backEndValidation($firstname, $email){
            try{
                if ($this->emptyInput($firstname) || ($email) == false) {
                    echo 'Error empty Input for Firstname';
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if ($this->invalidEmail($email) == false) {
                    echo 'Invalid email, please check again';
                    // header('Location: includes/errormessage.php');
                    exit;
                }
            }
                catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }
        }

        public function invalidEmail($email){
            $result;
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else{
                $result = true;
            }
            return $result;
        }

        public function emptyInput($firstname){
            $result;
            if(!empty($firstname)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

    }



?>