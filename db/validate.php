<?php
// require_once 'crud.php';
    Class Validate extends Crud{
        private $db;
        
        function __construct($conn){
            $this->db = $conn;
            // $this->crud = $crud;
            // $this->firstname = $firstname;
        }

        public function backEndValidation($firstname, $email){
            try{
                if ($this->emptyInput($firstname) || ($email) == false) {
                    echo 'Error empty Input for Firstname';
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if ($this->invalidEmail($this->email) == false) {
                    echo 'Invalid email, please check again';
                    // header('Location: includes/errormessage.php');
                    exit;
                }

                if ($this->checkEmail($email)) {

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

    // print_r(get_class_methods('Validate'));
    // $results = $validate->getAttendee();

    // while ($a = $results->fetch(PDO::FETCH_ASSOC)) {
    //     var_dump($a['email']);exit;
    //     # code...
    // }

?>