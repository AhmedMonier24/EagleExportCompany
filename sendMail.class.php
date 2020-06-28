<?php

    class sendMail{

        private $mail;
        private $nameSender;
        private $emailSender;
        private $phoneSender;
        // private $productItem;
        private $subject;
        private $message;

        public function sendMailFunction($name, $email, $phone, $subj, $message)
        {

            if(!empty($name) && isset($name) && !empty($email) && isset($email) && !empty($phone) && isset($phone) && !empty($subj) && isset($subj) && !empty($message) && isset($message))
            {
                $this->nameSender = trim(strip_tags($name));
                $this->emailSender = trim(strip_tags($email));
                $this->phoneSender = trim(strip_tags($phone));
                $this->subject = trim(strip_tags($subj));
                $this->message = trim(strip_tags($message));

                require_once("PHPMailer/PHPMailerAutoload.php");
                $this->mail = new PHPMailer;
                $this->mail->IsSMTP();
                $this->mail->Host = 'localhost';
                $this->mail->SMTPAuth = false;
                $this->mail->SMTPAutoTLS = false;
                $this->mail->Username = 'ahmed@eagleexportsco.com';
                $this->mail->Password = 'p&L23#bM-yMX';
                $this->mail->SMTPSecure = none;
                $this->mail->Port = 25;
                $this->mail->setFrom($this->emailSender, 'رسالة من الموقع');
                $this->mail->addAddress('Eagle.exportsworld@gmail.com', 'ToME');
                $this->mail->isHTML(true);
                $this->mail->CharSet = 'UTF-8';
                $this->mail->setLanguage('ar', '/PHPMailer/language/phpmailer.lang-ar.php/');
                $this->mail->Subject = $this->subject;
                $this->mail->Body    = "<div style='text-align:right;'><bdi>Client Name : ". $this->nameSender ."<br> Client Maile : ". $this->emailSender ."<br> Phone : ". $this->phoneSender ."<br> Message : ". $this->message ." </bdi></div>";
                // $mail->AltBody = "";
                if(!$this->mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $this->mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }

            }
        }

    }