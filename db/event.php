<?php
    class Event{
        //private DB Obj 
        protected $db;
        //constructor to initialize private variable to the DB conn
        function __construct($conn){
            $this->db = $conn;
        }
        //insert record in DB
        public function insertEvent($eventName, $venue, $numOfSeat){
            try {

                $sql = "INSERT INTO events_tb (`name`, `num_of_seat`, `address`, `users_id`) VALUES (:eventName, :numOfSeat, :venue, ((SELECT `users_id` FROM `users` WHERE `username` = 'admin')))";
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindParam(':eventName', $eventName);
                $stmt->bindParam(':numOfSeat', $numOfSeat);
                $stmt->bindParam(':venue', $venue);
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();

                return false;
            }
        }

        public function editEvent($id, $eventName, $location, $numOfSeat){
            try {
                //code...
                $sql = "UPDATE `events_tb` SET `name`=:eventName, `num_of_seat`=:numOfSeat, `address`=':location' WHERE `id`=:id";

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

        public function deleteEvent($id){
            try {
                $sql = "DELETE FROM events_tb WHERE `attendee_id` = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam('id', $id);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getEvent(){
            try {
                $sql = "SELECT * FROM events_tb ORDER BY `id` DESC";
                // $sql = "SELECT * FROM `events_tb` attd INNER JOIN specialty_tb spec ON attd.specialty_id = spec.specialty_id ORDER BY `attendee_id` DESC";
                $result = $this->db->query($sql);
                return $result;
            } catch (\PDOException $e) {
                echo $e->getMessage();
                // return false;
            }
        }

        public function getEventDetail($id){
            try {
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

        // public function getSpecialty(){
        //     try {
        //         $sql = "SELECT * FROM specialty_tb";
        //         $result = $this->db->query($sql);
        //         return $result;
        //     } catch (\PDOException $e) {
        //         echo $e->getMessage();
        //     }
        // }

        // public function getSpecialtyById($id){
        //     try {
        //         $sql = "SELECT * FROM `specialty_tb` WHERE `specialty_id` = :id";
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->bindparam(':id', $id);
        //         $stmt->execute();
        //         $result = $stmt->fetch();
        //         return $result;
        //     } catch (PDOException $e) {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }

        // public function checkEmail($email){
        //     try {
        //         $sql = "SELECT * FROM `attendee_tb` WHERE `email` = :email";
        //         // var_dump($sql);exit;
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->bindparam(':email', $email);
        //         $stmt->execute();
        //         // var_dump($stmt);exit;

        //         // $result = $stmt->fetch();
        //         $ans = $stmt->rowCount();
        //         return $ans > 0 ? true : false;
        //         if ($ans > 0) {
        //             var_dump('TAKEN OOOOO');exit;
        //         } else {
        //             var_dump('Not taken');exit;

        //         }
        //         return $ans;
        //     } catch (\PDOException $e) {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }



    }


?>