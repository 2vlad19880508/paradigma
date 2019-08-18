<?php 
// if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['stat'])&&$_POST['stat']!="")){ 
        $to = 'paradigma.in.ua@gmail.com'; 
        $subject = 'Обратный звонок Лендинг'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p><b>Имя:</b><i> '.$_POST['name'].'</i></p>
                        <p><b>Телефон:</b><i> '.$_POST['phone'].'</i></p>                        
                        <p><b>Email:</b><i> '.$_POST['email'].'</i></p>                        
                        <p><b>Причина:</b><i> '.$_POST['stat'].'</i></p>                        
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <paradigma.in.ua@gmail.com>\r\n"; 
        mail($to, $subject, $message, $headers); 
// }
?>
