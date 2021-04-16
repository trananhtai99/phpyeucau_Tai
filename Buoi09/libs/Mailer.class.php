<?php require_once 'libs/Validate.class.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 class Mail{
     private $mail;
     public function __construct($source)
     {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 0;                      
        $this->mail->isSMTP();                                           
        $this->mail->Host       = 'smtp.gmail.com';                     
        $this->mail->SMTPAuth   = true;                                  
        $this->mail->Username   = 'xxanhtaixx2510@gmail.com';                     
        $this->mail->Password   = 'tat991025';                              
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $this->mail->Port       = 587;     
        $this->mail->CharSet = 'UTF-8';
        $this->source = $source;      
     }
     public function sendMail($source, $option = null){  
        $result = true;
        try{               
            switch ($option) {
                case 'send-email-from-admin':
                    $this->mail->setFrom($this->mail->Username, 'ZendVN');
                    $this->mail->addAddress($source['email'], $source['name']);     
                    $this->mail->addReplyTo('info@example.com', 'Information');      
                    break;
                case 'send-email-from-user':
                    $this->mail->setFrom($this->mail->Username, 'ZendVN');
                    $this->mail->addAddress($this->mail->Username, 'ZendVN');    
                    $this->mail->addReplyTo('info@example.com', 'Information');      
                    break; 
            }
        }catch (Exception $e) {
            $result = false;
        }
        return $result;
    }
    public function conTent($source, $option2 = null ){        
        switch ($option2) {
            case 'send-email-from-admin':
                $this->mail->isHTML(true);                                  //Set email format to HTML
                $this->mail->Subject = 'Bạn nhận được 1 thông báo từ ZendVN!';
                $this->mail->Body    = 'Xin chào '.$source['name'].', Cảm ơn bạn đã liên hệ với ZendVN, chúng tôi sẽ liên hệ với bạn trong vòng 24h tới, xin cảm ơn!';
                $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                break;
            case 'send-email-from-user':
                $this->mail->isHTML(true);                                  //Set email format to HTML
                $this->mail->Subject = 'Liên hệ mới: ' . $source['title'];
                $this->mail->Body    = 'Xin chào Admin, bạn có liên hệ mới từ trang ZendVN, Người gửi: '.$source['name'].' <br /> Email người gửi: '.$source['email'].' <br /> Nội dung: '.$source['content'].' ' ;
                $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';            
                break;
        }
        
    }
    public function send(){
        $this->mail->send();
    }
}