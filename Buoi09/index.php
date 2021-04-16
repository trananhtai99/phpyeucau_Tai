<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <?php require_once 'html/head.php'; 
    require_once 'vendor/autoload.php';
    require_once 'libs/Mailer.class.php';
    ?>

</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">
        <?php require_once 'html/header.php';
            error_reporting(E_ALL & ~E_NOTICE);
            $result = array();
            $errors = '';
            
            if (!empty($_POST)) {
                
                $source = $_POST;

                require_once 'libs/Validate.class.php';
                $validate = new Validate($source);
                $mail = new Mail($source);

                // Rule
                $validate->addRule('name', 'string', 10, 100)
                    ->addRule('email', 'email')
                    ->addRule('title', 'string', 10, 100)
                    ->addRule('content', 'string', 10, 1000);

                // Run
                $validate->run();
                $errors = $validate->showErrors();
                $result = $validate->getResult();
                $flag = false;
                    
                if (empty($errors)) {                   
                    $mail->sendMail($source, 'send-email-from-user');   
                    $mail->conTent($source, 'send-email-from-user');
                    $mail->send();
                    $messEmail = 'Tin nhắn đã gửi thành công';
                    $flag = true;
                } else {
                    $messEmail = "Tin nhắn gửi không thành công";            
                } 
            }

            if(@$flag == true){   
                $mail2 = new Mail($source); 
                $mail2->sendMail($source, 'send-email-from-admin'); 
                $mail2->conTent($source, 'send-email-from-admin');
                $mail2->send();
            }
        ?>

        <section id="page-title">

            <div class="container clearfix">
                <h1>LIÊN HỆ</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                </ol>
            </div>

        </section>

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row align-items-stretch col-mb-50 mb-0">
                        <!-- Contact Form -->
                        <div class="col-lg-6">
                            <div class="fancy-title title-border">
                                <h3>Gửi tin nhắn cho chúng tôi</h3>
                            </div>
                            <?php echo @$errorMessage ?>
                            <div class="">
                                <form class="mb-0" action="" method="post">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="name">Họ tên <small>*</small></label>
                                            <input type="text" id="name" name="name" value="<?php echo @$result['name'] ?>" class="sm-form-control" />
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="email">Email <small>*</small></label>
                                            <input type="email" id="email" name="email" value="<?php echo @$result['email'] ?>" class="email sm-form-control" />
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="title">Tiêu đề <small>*</small></label>
                                            <input type="text" id="title" name="title" value="<?php echo @$result['title'] ?>" class="sm-form-control" />
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="message">Nội dung <small>*</small></label>
                                            <textarea class="sm-form-control" id="message" name="message" rows="6" cols="30"><?php echo @$result['message'] ?></textarea>
                                        </div>
                                        <div class="col-12 form-group">
                                            <button type="submit" tabindex="5" class="button button-3d m-0">Gửi tin
                                                nhắn</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- Contact Form End -->

                        <!-- Google Map -->
                        <div class="col-lg-6 min-vh-50">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3258401571543!2d106.6903714146227!3d10.786336792314813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2f20ed1c49%3A0x5781806fe59379f4!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gTOG6rXAgVHLDrG5oIFplbmQgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1617941882260!5m2!1svi!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div><!-- Google Map End -->
                    </div>

                    <!-- Contact Info -->
                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map-marker2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Địa chỉ<span class="subtitle">Tầng 5, Tòa nhà Songdo, 62A Phạm Ngọc Thạch,
                                            Phường 6, Quận 3, HCM</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Hotline<span class="subtitle">090 5744 470 <br /> 0383 308 983</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-email"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Email<span class="subtitle">training@zend.vn</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info End -->

                </div>
            </div>
        </section>
        <!-- #content end -->
        <?php require_once 'html/footer.php' ?>

    </div>
    <?php require_once 'html/script.php' ?>

</body>

</html>