<?php
    class Crud{
        //private DB Obj 
        private $db;
        //constructor to initialize private variable to the DB conn
        function __construct($conn){
            $this->db = $conn;
        }
        //insert record in DB
        public function insertAttendee($fname, $lname, $dob, $spec, $email, $contact){
            try {
                //code...
                $sql = "INSERT INTO attendee_tb (`firstname`, `lastname`, `dob`, `specialty_id`, `email`, `phone`) VALUES (:fname,:lname,:dob,:spec,:email,:contact)";
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':spec', $spec);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
            }

        }

        public function getAttendee(){
            $sql = "SELECT * FROM `attendee_tb` attd INNER JOIN specialty_tb spec ON attd.specialty_id = spec.specialty_id ORDER BY `attendee_id` DESC";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getSpecialty(){
            $sql = "SELECT * FROM specialty_tb";
            $result = $this->db->query($sql);
            return $result;

        }






    }


?>