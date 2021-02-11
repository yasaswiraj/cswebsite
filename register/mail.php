<?php

  $email = "jvs.ravanan@gmail.com";
$message = "<html> hi </html>";                                                                                                                                                                                                                $sender = "executives@codingstudio.club";                                                                                                                                                                                                    $subject = "succesfully registered for codingstudio";                                                                                                                                                                                        $headers = 'From: codingstudio Admin <excutives@codingstudio.club>' . "\r\n";                                                                                                                                                                if(mail($email, $subject, $message, $headers)){
	echo "done";
  }else{
	  echo "no";
  }




?>
