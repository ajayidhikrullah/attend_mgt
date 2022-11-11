<?php
    require 'vendor/autoload.php';

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            $key = '';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom('ajayidhikrullah@gmail.com', 'Dhikrullah');
            $email->addTo($to);
            $email->addContent('text/plain', $content);

            $sendGrid = new \SendGrid($key);
            try {
                return $response;
            } catch (\Exception $e) {
                echo 'Email Exception caught ooo: ' . $e->getMessage() ."\n";
                return false;
            }
        }
    }


?>