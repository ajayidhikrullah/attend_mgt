<?php
    Class Query{
        protected $db;

        public function __construct($conn){
            $this->db = $conn;
        }
      


        public function runQuery(){
            try {
                // $query = "ALTER TABLE events_tb ADD `users_id` INT";
                $query = "ALTER TABLE `events_tb` ADD CONSTRAINT `fk_event_user` FOREIGN KEY (`users_id`) REFERENCES `users`(`users_id`) ON DELETE RESTRICT ON UPDATE RESTRICT";
                // $query = "SELECT * FROM `attendee_tb` WHERE `email` = 'ajayidhikrullah@gmail.com'";
                $stmt = $this->db->query($query);
                // var_dump($stmt);exit;
                $stmt->execute();
                return true;
            } catch (\PDOException $e) {
                echo $e->getMessage();
                return false;
            }        
    }
}
?>
