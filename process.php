<?php 
        $EmailFrom = "From: Cedo Landing Page<example@gmail.com>";
        $EmailTo = "frankwilson.quad@gmail.com, emmasmith.quad@gmail.com";
        $name=$_POST['name-form'];
        $email=$_POST['email-form'];
        $details=$_POST['message-form'];
        //echo $name " / ". $email ." / ". $phone . " / " . $message  ; 
        // prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $name ;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "\n";
        $Body .= "Details: ";
        $Body .= $details;
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "This is message sent from cedo Landing Page";

        $Subject = "cedo Landing Page Contact Form Submission";
 
        // send email 
        if(str_replace(' ', '', $name) != "" && str_replace(' ', '', $email)  != "" && str_replace(' ', '', $message) != "" ){
            $data['success'] = mail($EmailTo, $Subject, $Body, $EmailFrom);
        }else{
            $data['success'] = "false";
        }

       if ($data['success'] ){
     
            print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html\">";
       }
       else{
            print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
       }
?>