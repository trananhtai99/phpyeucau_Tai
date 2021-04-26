<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <?php require_once 'html/head.php' ?>
</head>

<body class="stretched overlay-menu">

    <div id="wrapper" class="clearfix bg-light">

    <?php require_once 'html/header.php' ?>
    <?php require_once 'function.php' ?>
    <?php $result = vnExpressRSS('https://vnexpress.net/rss/the-thao.rss') ?>

        <div class="container">
            <div class="row">
                <!-- Content -->
                <section id="content" class="bg-light">

                    <div class="content-wrap pt-lg-0 pt-xl-0 pb-0">

                        <div class="container clearfix">

                            <div class="heading-block border-bottom-0 center pt-4 mb-3">
                                <h3>Tin Tức Thể Thao</h3>
                            </div>

                            <?php echo $result;?>

                            <!-- Infinity Scroll Loader
					============================================= -->
                            <div class="text-center">
                                <div class="page-load-status hovering-load-status">
                                    <div class="css3-spinner infinite-scroll-request">
                                        <div class="css3-spinner-ball-pulse-sync">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning center infinite-scroll-last mx-auto" style="max-width: 20rem;">End of content</div>
                                    <div class="alert alert-warning center infinite-scroll-error mx-auto" style="max-width: 20rem;">No more pages to load</div>
                                </div>
                            </div>
                            <div class="center d-none">
                                <a href="demo-modern-blog-2.html" class="load-next-posts"></a>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- #content end -->

                <section class="right-side mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <?php require_once 'box-gold.php';?>
                                <?php require_once 'box-coin.php';?>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>

        <?php require_once 'html/footer.php';?>
    </div>

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up rounded-circle"></div>

    <?php require_once 'html/script.php' ?>
</body>

</html>