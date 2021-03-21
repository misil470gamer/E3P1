<?php
use PHPMailer\PHPMailer\SMTP;

require "..\PHPMailer\PHPMailer.php";
require "..\PHPMailer\Exception.php";
require "..\PHPMailer\SMTP.php";
$name = $_POST['first_name'] . " " . $_POST['last_name'];
$cEmail = $_POST['payer_email'];

//Comprobamos el email del vendedor
if ($receiver_email == "2021.e3p1.talde.1.business@gmail.com") {
    //Comprobamos la divisa, el precio, el código de item y el estatus del pago
    if ($item_number == "Cart-01-WordPlug" && $currency == "USD" &&
        $paymentStatus == "Completed" && $price == 99) {

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try
        {

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ),
            );

            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = $receiver_email;
            $mail->Password = "XXXXXXXXXX"; // Business email password
            $mail->SMTPSecure = 'tls';
            $mail->setFrom($receiver_email, "John Doe's Test Store");
            $mail->addAddress($cEmail, $name);
            $mail->isHTML(true);
            $mail->Subject = "Your purchase Details";

            $mail->Body = "
                Hi, <br><br>
                Thank you for purchase. In the attachment you will find my Amazing Wordpress Plugin. <br><br>

                Kind regards,

                Julius Gwiny.

            ";

            if (!$mail->send()) {
                file_put_contents("test.txt", 'No se pudo enviar el mensaje');
            } else {
                file_put_contents("test.txt", 'Message sent successfully');
            }

        } catch (Exception $e) {
            file_put_contents("test.txt", 'Message could not be sent: ' . $mail->ErrorInfo);
        }

    } else {
        $data = "$price\r\n$currency\r\n$paymentStatus\r\n$item_number\r\n";
        file_put_contents("test.txt", "Error en el pago. Datos recibidos: \n" . $data);
    }
} else {
    //Error en el email recibido
    file_put_contents("test.txt", "El email del vendedor es incorrecto. Pago enviado a: " . $receiver_email);
}