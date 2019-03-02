<?php
if(isset($_POST['email'])) {
     
    // EDIT THE BELOW TWO LINES AS REQUIRED
    $email_to = "jorgenieto@formatoweb.net";
    $email_subject = "Mensaje desde Formatoweb";
     
     
    function errorMesg() {
        // Error code can go here
        echo "Lo sentimos mucho, pero hay un error encontrado en el formulario enviado.";
        echo "<br /><br />";
        echo "Por favor, volver atrás y corregir estos errores.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        errorMesg();       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = utf8_decode($_POST['comments']); // required
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
//$header .= "Content-type: text/html; charset=iso-8859-1 \r\n";
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_message, $headers);
?>

<?php
}
?>