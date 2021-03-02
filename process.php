<?php 
        
        $EmailFrom = "From: Cedo Landing Page<frankwilson.quad@gmail.com>";
        $EmailTo = "frankwilson.quad@gmail.com, emmasmith.quad@gmail.com";
        $name=$_POST['name-form'];
        $email=$_POST['email-form'];
        $phone=$_POST['phone-form'];
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
        $Body .= "Phone: ";
        $Body .= $phone;
        $Body .= "\n";
        $Body .= "Details: ";
        $Body .= $details;
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "\n";
        $Body .= "This e-mail was sent from a contact form on Lift Floats (https://www.cedo.com)";

        $Subject = "cedo Landing Page Contact Form Submission";
 
        // send email 
        if(str_replace(' ', '', $name) != "" && str_replace(' ', '', $email)  != "" &&  str_replace(' ', '', $phone)  != "" &&  str_replace(' ', '', $details) != "" ){
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