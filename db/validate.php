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

                // if ($this->invalidEmail($this->email) == false) {
                //     echo "<div class='error'>Invalid email, please check again'</div>";
                //     // header('Location: includes/errormessage.php');
                //     exit;
                // }


                // $ans = $this->checkEmail($this->pdo, $this->email);                   
                // if ($this->checkEmail($this->email)){
                    
                //     var_dump('TAKEN OOOOO' . $this->email);exit;
                // } else {
                //     var_dump('Not taken  m' . $this->email);exit;
    
                // }
    

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

        
        public function checkEmail($email){
            // $result = $this->checkEmail($email);
            //        $result = NULL;
            // if( $result == true){
            //     $result = false;
            // }
            // else{
            //     $result = true;
            // }
            // return $result;
            
            
       
        }            

    }


?>