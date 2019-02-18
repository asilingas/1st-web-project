<?php
  // print_r($_POST);
  require_once('libs\PHPMailer-master\PHPMailerAutoload.php');

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
    //Server settings
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->CharSet = 'UTF-8';

    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tomastomsonas1234@gmail.com';                 // SMTP username
    $mail->Password = 'Romas123';                 // SMTP username

    //Recipients
    $mail->setFrom('tomastomsonas1234@gmail.com', 'Projektas');
    $mail->addAddress($email, "$name $lname");     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Projektas.lt užsakymas patvirtintas";
    $mail->Body    = "<h2>Užsakymas Nr. $order_id patvirtintas.</h2> <p><strong>Prekė</strong>: $item_name</p> <p><strong>Siuntimo būdas:</strong> $shipping_name</p> <p><strong>Pristatymo adresas: </strong>$name $lname $tel</p> <p>$address $postcode $city</p> <p><strong>Kaina: $total_price €</strong></p> <p>Pinigus pervesti į sąskaitą: LT00 1111 2222 3333 5555</p>";
    $mail->AltBody = "Užsakymas Nr. $order_id patvirtintas. Pristatymo adresas:$name $lname $address $postcode $city";

    $mail->send();
    echo '<div class="bg-info">Užsakymo ir apmokėjimo informacija išsiųsta el. paštu. Užsakymo būseną galite sekti pagal užsakymo numerį.</div>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
 ?>
