-- add foriegn key to attendee_tb
ALTER TABLE `attendee_tb` ADD CONSTRAINT `fk_attendee_specialty` FOREIGN KEY (`specialty_id`) REFERENCES `specialty_tb`(`specialty_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

