<?php
              if(!empty($_POST["send"])) {
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $contact = $_POST["contact"];
                $content = $_POST["textarea"];
                $toEmail = "info@bataitech.com";
                $subject="Enquiry";

                
                $mailHeaders = "From: " . $first_name." ". $last_name  . "<". $email .", ". $contact.">\r\n";
                if(mail($toEmail, $subject, $content, $mailHeaders)) {
                    $message = "Your contact information is received successfully.";
                    $type = "success";
                }
              }
              // require_once "contact-view.php";
            ?>