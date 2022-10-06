<?php
    class Crud{
        //private DB Obj 
        private $db;
        //constructor to initialize private variable to the DB conn
        function __construct($conn){
            $this->db = $conn;
        }
        //insert record in DB
        public function insertAttendee($fname, $lname, $dob, $spec, $email, $contact, $avatar_path){
            try {
                $sql = "INSERT INTO attendee_tb (`firstname`, `lastname`, `dob`, `specialty_id`, `email`, `phone`, `avatar_path`) VALUES (:fname,:lname,:dob,:spec,:email,:contact, :avatar_path)";
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':spec', $spec);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':avatar_path', $avatar_path);
                
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function editAttendee($id, $fname, $lname, $dob, $spec, $email, $contact ){
            try {
                //code...
                $sql = "UPDATE `attendee_tb` SET `firstname`=:fname, `lastname`=:lname, `dob`=:dob, `specialty_id`=:spec, `email`=:email, `phone`=:contact WHERE `attendee_id`=:id";

                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':spec', $spec);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteAttendee($id){
            try {
                $sql = "DELETE FROM attendee_tb WHERE `attendee_id` = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam('id', $id);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function getAttendee(){
            try {
                $sql = "SELECT * FROM `attendee_tb` attd INNER JOIN specialty_tb spec ON attd.specialty_id = spec.specialty_id ORDER BY `attendee_id` DESC";
                $result = $this->db->query($sql);
                return $result;
            } catch (\PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendeeDetail($id){
            try {
                //code...
                $sql = "SELECT * FROM attendee_tb attend INNER JOIN specialty_tb spec on attend.specialty_id = spec.specialty_id WHERE attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function getSpecialty(){
            try {
                $sql = "SELECT * FROM specialty_tb";
                $result = $this->db->query($sql);
                return $result;
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function getSpecialtyById($id){
            try {
                $sql = "SELECT * FROM `specialty_tb` WHERE `specialty_id` = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }






    }


?>