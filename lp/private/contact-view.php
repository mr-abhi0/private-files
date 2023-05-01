<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Kam-Ratan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="Kam-Ratan" name="Kam-Ratan">



        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!--==========================
              Header
            ============================-->
        <header id="header" class="header-fixed">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="#intro"><span><b>Kam-Ratan</b></span></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#intro">Home</a></li>
                        <li><a href="#about">Order Now</a></li>
                        <li><a href="#features">Features</a></li>
                        <!--                    <li><a href="#pricing">Package</a></li>-->
                        <li><a href="#team">Testimonials</a></li>
                        <li><a href="#about">Order Now</i></a></li>

                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </header>
        <!-- #header -->

        <!--==========================
              Intro Section
            ============================-->
        <section id="intro">

            <div class="intro-text">
                <!--<img src="img/brand-logo.png">-->
                <a href="#about" class="btn-get-started btn-info scrollto" id="order-now" style="font-size: 18px;">
                    <i class="fa fa-phone"></i> <b>oder now</b></a>
                <br>
                <a href="#about" class="btn-get-started btn-info scrollto" id="order-now" style="font-size: 18px;">
                    <i class="fa fa-cart-arrow-down"></i> <b>Order Now</b></a>
                <h1 class="white animated-2s infinite bounceIn">इंडिया का नंबर <span style="color:#17a2b8; text-shadow:1px 1px 5px #fff,1px 1px 5px #fff,1px 1px 5px #fff,1px 1px 5px #fff,-1px -1px 5px #fff,-1px -1px 5px #fff,-1px -1px 5px #fff,-1px -1px 5px #fff; font-family: 'times'; font-weight: bold; font-size: 60px;">1</span>                लिंग वर्धक उत्पाद</h1>
            </div>

            <div class="product-screens">

                <div class="product-screen-1 wow fadeInUp" data-wow-delay="1s" data-wow-duration="0.6s">
                    <img src="img/5.png" alt="" class="img-fluid"> </div>

                <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                    <img src="img/4.png" alt="" class="img-fluid"> </div>

                <div class="product-screen-3 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                    <img src="img/3.png" alt="" class="img-fluid"> </div>

                <div class="product-screen-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                    <img src="img/2.png" alt="" class="img-fluid"> </div>

                <div class="product-screen-5 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                    <img src="img/1.png" alt="" class="img-fluid"> </div>
            </div>

        </section>
        <!-- #intro -->

        <main id="main">

            <!--==========================
                  About Us Section
                ============================-->
            <section id="about" class="section-bg">
                <div class="container">
                    <div class="section-header " style="text-align: center; margin-top: -40px;">
                        <h3 class="section-title animated infinite pulse btn btn-info" style="border-radius: 100px; color:#fff; font-weight: bold;">Order Now</h3>
                        <span class="section-divider animated infinite rubberBand"></span>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 content wow fadeInRight order-md-last" data-wow-duration="0.3s" data-wow-offset="-50" data-wow-delay="0s">
                            <form method="post" action="" enctype="multipart/form-data" name="frmContact" class="order-form-desktop">
                                <div class="col-md-12" style="border: 2px solid #801367; box-shadow: 0 0 15px #801367; border-radius: 6px;">
                                    <br>
                                    <div class="form-group">
                                        <label>नाम</label>
                                        <input type="text" value=""  name="userName" class="form-control" pattern="[a-z A-Z]{0,50}" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>फ़ोन नंबर</label>
                                        <input type="text" name="subject" value="" class="form-control" min='6999999999' max="Book Now" required="">
                                    </div>

                                   

                                    <div class="form-group">
                                        <label>पूरा पता</label>
                                        <textarea name="userEmail" value="" type="text" class="form-control"></textarea>
                                    </div>

                                  <input type="submit" name="send" value=" अभी ऑर्डर करें " class="btn btn-warning pull-right" style="font-weight: bold;">
                                    <div class="clearfix"></div>
                                    <br>
                                </div>
                            </form>
                            <br>
                        </div>

                        <div class="col-lg-6 about-img wow fadeInLeft order-md-first double-bottal">
                            <center>
                                <img src="https://dl.dropbox.com/s/wto22dsnfiu2c3r/kam-ratan.png" alt="" class="img-fluid animated infinite pulse">
                            </center>
                        </div>
                    </div>

                </div>
            </section>
            <!-- #about -->
            <div id="statusMessage">
                <?php
                if (!empty($message)) {
                    ?>
                    <p class='<?php echo $type; ?>Message'>
                        <?php
                        echo '<script language="javascript">';
                        echo 'window.location = "db.php";';
                        echo '</script>';
                        ?>
                    </p>
                    <?php
                }
                ?>
            </div>
            <!--==========================
                  Product Featuress Section
                ============================-->
            <section id="features">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-8 offset-lg-4">
                            <div class="section-header wow fadeIn" data-wow-duration="1s">
                                <h3 class="section-title"><b>Kam-Ratan</b> विशेषताएं</h3>
                                <span class="section-divider"></span>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 features-img">
                            <img src="https://dl.dropbox.com/s/bfhs1az3movgc2b/kam1.png" alt="" class="wow fadeInLeft">
                        </div>

                        <div class="col-lg-8 col-md-7 ">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                                    <h4 class="title"><a href="#" style="color:white;text-shadow:1px 1px 10px black;">लंबे समय तक चलने वाली यौन सहनशक्ति</a></h4>
                                    <p class="description" style="color:white;text-shadow:1px 1px 10px black;"><b>Kam-Ratan</b> लंबे समय तक चलने वाली सहनशक्ति और शक्ति के साथ अधिकतम यौन सुख प्राप्त करने का खजाना है। यह आपकी सहनशक्ति को बढ़ाता है, जो आपको बिना किसी अंत के चलते-चलते रहने देता है। यह ऊर्जा की एक नई भीड़ के साथ उच्च
                                        महसूस करने का समय है।</p>
                                </div>
                                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                                    <h4 class="title"><a href="#" style="color:white;text-shadow:1px 1px 10px black;">बढ़ी हुई पौरुष क्षमता</a></h4>
                                    <p class="description" style="color:white;text-shadow:1px 1px 10px black;">पुरुष वृद्धि <b>काम रतन</b> के साथ अपनी मर्दानगी को एक नया मौका दें . यह आपको सेक्स के सुखद सफर पर ले जाएगा। यही अनंत सुख का वास्तविक अर्थ है। हर दिन एक खुराक आपको एक उत्साही और अविस्मरणीय अनुभव प्रदान करेगी।</p>
                                </div>
                                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                    <h4 class="title"><a href="#" style="color:white;text-shadow:1px 1px 10px black;">अधिकतम आनंद</a></h4>
                                    <p class="description" style="color:white;text-shadow:1px 1px 10px black;"><b>Kam-Ratan</b> सबसे बड़ा सुख प्राप्त करने की मास्टर-कुंजी है। यह आपके साथी के साथ कुछ जंगली करने के लिए आपके शरीर के अंदर उत्साह पैदा करता है। यह आपके प्रेमी की योनि में यौन सुख के द्वार खोलता है। यह आपकी वासना, लालच
                                        को संतुष्ट करता है और कामुक संभोग के लिए चाहता है।</p>
                                </div>
                                <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                                    <h4 class="title"><a href="#" style="color:white;text-shadow:1px 1px 10px black;">दुनिया भर में जाने-माने डॉक्टर</a></h4>
                                    <p class="description" style="color:white;text-shadow:1px 1px 10px black;"><b>Kam-Ratan</b> एनर्जी पिल्स को शीर्ष यूरोलॉजिस्ट द्वारा सत्यापित किया जाता है और हजारों खुश और संतुष्ट ग्राहकों के भरोसे का समर्थन किया जाता है और उनका सुझाव है कि ये गोलियां वास्तव में काम करती हैं।</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- #features -->

            <!--==========================
                  Pricing Section
                ============================-->
            <!-- <section id="pricing" class="section-bg">
                <div class="container">
    
                    <div class="section-header text-center">
                        <h3 class="section-title btn btn-warning" style="font-size: 21px; font-weight: bold;">SELECT YOUR PACKAGE</h3>
                        <span class="section-divider"></span>
                    </div>
    
                    <div class="row">
    
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInLeft">
                                <h3>1 Months Course</h3>
    
                                <h5>(BEGINNERS PROGRAM)</h5>
    
                                <img src="img/bottal-1.png" class="img-fluid animated infinite pulse">
    
                                <h4><sup><i class="fa fa-inr"></i></sup>999/-</h4>
    
                                <a href="#about" class=" btn btn-lg btn-info scrollto">Order Now</a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6">
                            <div class="box featured wow fadeInUp">
                                <h3>1 Months Course</h3>
    
                                <h5>(AMBITIOUS PROGRAM)</h5>
    
                                <img src="img/bottal-2.png" class="img-fluid animated infinite pulse">
    
                                <h4><sup><i class="fa fa-inr"></i></sup>1499/-</h4>
    
                                <a href="#about" class=" btn btn-lg btn-info scrollto">Order Now</a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInRight">
                                <h3>2 Months Course</h3>
    
                                <h5>(COST-BENEFIT PROGRAM)</h5>
    
                                <img src="img/bottal-3.png" class="img-fluid animated infinite pulse">
    
                                <h4><sup><i class="fa fa-inr"></i></sup>2499/-</h4>
    
                                <a href="#about" class=" btn btn-lg btn-info scrollto">Order Now</a>
                            </div>
                        </div>
    
                    </div>
                </div>
            </section> -->
            <!-- #pricing -->

            <!--==========================
                  Product Advanced Featuress Section
                ============================-->
            <section id="advanced-features">

                <div class="features-row section-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 order-md-last">
                                <img class="advanced-feature-img-right wow fadeInRight" src="img/doctor-1.jpg" alt="">
                            </div>

                            <div class="col-md-6 order-md-first">
                                <div class="wow fadeInLeft">
                                    <table class="table ">
                                        <tr>
                                            <td><i class="fa fa-check"></i></td>
                                            <td style="color:white;text-shadow:1px 1px 10px black;">उत्पाद के निर्माता ने ग्राहक को तत्काल और स्थायी परिणाम प्रदान करने के लिए सभी हर्बल अवयवों को मिला दिया है।</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check"></i></td>
                                            <td style="color:white;text-shadow:1px 1px 10px black;">यह आपके शरीर के अंदर तुरंत काम करना शुरू कर देता है और बेहतरीन परिणाम देता है।</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check"></i></td>
                                            <td style="color:white;text-shadow:1px 1px 10px black;">जब आप नियमित रूप से इस उत्पाद का उपयोग करते हैं, तो यह टेस्टोस्टेरोन वृद्धि, यौन उत्थान और उत्तेजना में सुधार करता है।</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check"></i></td>
                                            <td style="color:white;text-shadow:1px 1px 10px black;">यदि संयोग से कोई शिकायत आती है, तो हम आपके वितरित उत्पाद को एक नए उत्पाद से बदल देंगे।</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check"></i></td>
                                            <td style="color:white;text-shadow:1px 1px 10px black;">इसे शानदार बनाने के लिए केवल हर्बल और प्राकृतिक आयुर्वेदिक सामग्री का उपयोग किया जाता है <b>Kam-Ratan</b> </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-check"></i></td>
                                            <td style="color:white;text-shadow:1px 1px 10px black;">अब यह स्पष्ट हो गया है कि <b>Kam-Ratan</b> 100% सुरक्षित और प्रभावी है।</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="features-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 wow fadeInRight">
                                <img class="advanced-feature-img-left" src="img/s5-img1.png" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="wow fadeInLeft">
                                    <h2>बेहतर कामेच्छा और सेक्स ड्राइव</h2>
                                    <p class="wow fadeInRight" data-wow-duration="0.5s"> <b>Kam-Ratan</b> मेल एन्हांसमेंट के साथ इच्छा और जुनून की एक धारा का अनुभव करने के लिए तैयार हो जाइए, जो पूरे शरीर में यौन ऊर्जा के भंडार को पहले की तरह भर देता है।</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7 wow fadeInLeft  order-md-last">
                                <img class="advanced-feature-img-left" src="img/s5-img5.png" alt="">
                            </div>
                            <div class="col-md-5 order-md-first">
                                <div class="wow fadeInRight">
                                    <h2>बड़ा, जबरदस्त और लंबा निर्माण</h2>
                                    <p class="wow fadeInRight" data-wow-duration="0.5s"><b>Kam-Ratan</b> मेल एन्हांसमेंट आपको जब भी चाहें, आपको और आपके साथी को पागल यौन सत्रों का आनंद लेने में मदद करने के लिए कमांड पर रॉक हार्ड इरेक्शन प्राप्त करने देता है।</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7 wow fadeInRight">
                                <img class="advanced-feature-img-left" src="img/s5-img2.png" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="wow fadeInLeft">
                                    <h2>इरेक्शन पावर बढ़ाएं</h2>
                                    <p class="wow fadeInRight" data-wow-duration="0.5s">शीघ्रपतन को अलविदा कहें! <b>Kam-Ratan</b> पुरुष संवर्द्धन आपके लिंग के कक्षों को रक्त के झोंके से भर देता है जिससे आप सामान्य से 5 गुना अधिक समय तक जीवित रहते हैं और आपको पूरी रात टिकने में मदद मिलती है!</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7 wow fadeInLeft order-md-last">
                                <img class="advanced-feature-img-left" src="img/s5-img3.png" alt="">
                            </div>
                            <div class="col-md-5 order-md-first">
                                <div class="wow fadeInRight">
                                    <h2>लिंग का आकार बढ़ाएं</h2>
                                    <p class="wow fadeInRight" data-wow-duration="0.5s">पेनाइल चेंबर क्षमता में वृद्धि और रक्त प्रवाह में नियमित वृद्धि से आपके लिंग के आकार में उन इंचों को जोड़ने में मदद मिल सकती है, दोनों लंबाई और परिधि के अनुसार।</p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-7 wow fadeInRight">
                                <img class="advanced-feature-img-left" src="img/s5-img4.png" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="wow fadeInLeft">
                                    <h2>बेहतर यौन विश्वास</h2>
                                    <p class="wow fadeInRight" data-wow-duration="0.5s">युवा यौन शक्तियों और ऊर्जा से लैस, आप निश्चित रूप से पहले की तरह यौन आत्मविश्वास का अनुभव कर रहे हैं, आपको सबसे वांछनीय महिलाओं के साथ अधिक सफलता प्रदान करता है!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- #advanced-features -->

            <!--==========================
                  Call To Action Section
                ============================-->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <i class="fa fa-leaf fa-5x"></i>
                            <div class="details">
                                <h3>कोई साइड इफेक्ट नहीं यह 100% प्राकृतिक है।</h3>
                                <p><b>Kam-Ratan</b> इसका मतलब है कि यह सभी उम्र के पुरुषों के लिए 100% सुरक्षित है।</p>
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fa fa-inr fa-5x"></i>
                            <div class="details">
                                <h3>बेहतरीन प्रदर्शन</h3>
                                <p>हमारा उत्पाद काम करेगा और उत्कृष्ट परिणाम देगा। यह हमेशा आपकी अपेक्षाओं से अधिक होता है।</p>
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fa fa-medkit fa-5x"></i>
                            <div class="details">
                                <h3> यूरोलॉजिस्ट डॉक्टरों द्वारा स्वीकृत।</h3>
                                <p>इसके अलावा, हमें दुनिया भर में 10,000 से अधिक संतुष्ट ग्राहक होने पर गर्व है।</p>
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="col-md-3 text-center">
                            <i class="fa fa-truck fa-5x"></i>
                            <div class="details">
                                <h3>हम तेजी से कॉड शिपिंग सेवाएं प्रदान करते हैं।</h3>
                                <p>हमारी पैकेजिंग भी बहुत अलग और पेशेवर है जिससे कोई भी यह नहीं जान सकता कि आपने क्या ऑर्डर किया है। आपकी गोपनीयता हमारे लिए सर्वोच्च प्राथमिकता है।</p>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>

                </div>
            </section>
            <!-- #call-to-action -->

            <!--==========================
                  More Features Section
                ============================-->
            <section id="more-features" class="section-bg">
                <div class="container">

                    <div class="section-header">
                        <h3 class="section-title"><br><b>Kam-Ratan</b> में प्रयुक्त सामग्री</h3>
                        <span class="section-divider"></span>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="box wow fadeInLeft">
                                <div class="icon">
                                    <img src="https://dl.dropbox.com/s/k49xeskjt5bsnn7/kali-musli-500x500-modified-100x100.png">
                                </div>
                                <br>
                                <h4>काली मुस्ली</h4>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="box wow fadeInRight">
                                <div class="icon">
                                    <img src="https://dl.dropbox.com/s/n1b8n6rtka2boxv/ashwagandha-root-500x500-modified.png">
                                </div>
                                <br>
                                <h4>अश्वगंधा</h4>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="box wow fadeInLeft">
                                <div class="icon">
                                    <img src="https://dl.dropbox.com/s/hbr5ye0nslon9rl/51mq75SluXL-modified-100x100.png">
                                </div>
                                <br>
                                <h4>गोखरू</h4>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="box wow fadeInRight">
                                <div class="icon">
                                    <img src="https://dl.dropbox.com/s/5tr0fsq30dij1hp/Shatavari-raw-roots-1-modified.png">
                                </div>
                                <br>
                                <h4>शतावरी</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- #more-features -->


            <!--==========================
                  Frequently Asked Questions Section
         
    
           ==========================
                  Our Team Section
                ============================-->
            <section id="team" class="section-bg ">
                <div class="container">
                    <div class="section-header">
                        <h3 class="section-title">लोगो का कहना इसके बारे में</h3>
                        <span class="section-divider"></span>
                    </div>
                    <div class="row customer">

                        <div class="col-md-2">
                            <center><img src="https://dl.dropbox.com/s/ha7fgl0f7l2thkf/1.png" class="img-fluid"></center>
                        </div>
                        <div class="col-md-4">
                            <p style="color:white;text-shadow:1px 2px 10px black">एक दिन मैंने <b>Kam-Ratan's</b> की वेबसाइट को एक विज्ञापन के जरिए फेंक दिया। मुझे लगता है कि अगर मैंने इसे खरीदा और काम नहीं किया तो मैं इसके लिए गया। और अब परिणाम मेरी पैंट के अंदर आठ इंच के लिंग के रूप में मेरे सामने है। आपको
                                धन्यवाद
                                <b>Kam-Ratan</b>.</p>
                        </div>


                        <div class="col-md-2">
                            <center><img src="https://dl.dropbox.com/s/wil9qoq2pbbegrh/3.png" class="img-fluid"></center>
                        </div>
                        <div class="col-md-4">
                            <p style="color:white;text-shadow:1px 2px 10px black">मुझे आश्चर्य हुआ कि उसने कितने समय तक चुप्पी साधी रही और उसका कभी बाहरी संबंध नहीं रहा। फिर मैंने सोचा कि मुझे लिंग बड़ा करने की दवा लेनी चाहिए। और फिर मुझे <b>Kam-Ratan</b>के बारे में पता चला। और बस यही ! मेरी पत्नी ने कहा कि
                                यह शानदार है</p>
                        </div>

                        <div class="col-md-2">
                            <center><img src="https://dl.dropbox.com/s/emh4u1q8xai4yga/4.png" class="img-fluid"></center>
                        </div>
                        <div class="col-md-4">
                            <p style="color:white;text-shadow:1px 2px 10px black">​दूसरों के विपरीत मुझे हमेशा से एक बड़ा और मजबूत लिंग चाहिए था। एक दिन मुझे इंटरनेट पर <b>Kam-Ratan</b> मिला, मैंने तुरंत इसके लिए ऑनलाइन ऑर्डर किया। जब से मैंने इसे सात महीने पहले इस्तेमाल करना शुरू किया था, अब मुझे 2 इंच का फायदा
                                हुआ है!</p>
                        </div>

                        <div class="col-md-2">
                            <center><img src="https://dl.dropbox.com/s/ann8kgrc4cihutb/dick1.jpg" style="border-radius: 50%;" class="img-fluid"></center>
                        </div>

                        <div class="col-md-4">
                            <p style="color:white;text-shadow:1px 2px 10px black">एक दिन मैं एक मित्र के पास पहुँचा जिसने मुझे <b>Kam-Ratan</b>की सिफारिश की थी। और अब मैं उतना ही सेक्सी महसूस करता हूं, जितनी बीसवीं की उम्र में था। मैं यह भी नहीं बता सकता कि <b>Kam-Ratan</b> ने यह कैसे किया और अब मेरा लिंग 7.2
                                इंच का है। मेरी पत्नी भी इससे बहुत खुश है।</p>
                        </div>

                        <!-- <div class="col-md-2">
                            <center><img src="img/customer/c8.jpg" class="img-fluid"></center>
                        </div>
                        <div class="col-md-4">
                            <p style="color:white;text-shadow:1px 2px 10px black">मेरे हिसाब से वियाग्रा और अन्य आयातित उत्पादों पर पैसा बर्बाद करना बंद करो। <b>Kam-Ratan</b>के साथ "देशी" का प्रयोग करें, जैसे मैंने किया और तत्काल लाभ देखें। लव द इंडियन आयुर्वेदिक मेडिसिन <b>Kam-Ratan</b>। बिना समय बर्बाद किए
                                इसके लिए जाएं
                            </p>
                        </div> -->





                    </div>

                </div>
            </section>
            <!-- #team -->

            <!--==========================
                  Gallery Section
                ============================-->
            <!--            <section id="gallery">
                    <div class="container-fluid">
                        <div class="section-header">
                            <h3 class="section-title">Gallery</h3>
                            <span class="section-divider"></span>
                            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                        </div>
    
                        <div class="row no-gutters">
    
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-item wow fadeInUp">
                                    <a href="img/gallery/gallery-1.jpg" class="gallery-popup">
                                        <img src="img/gallery/gallery-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-item wow fadeInUp">
                                    <a href="img/gallery/gallery-2.jpg" class="gallery-popup">
                                        <img src="img/gallery/gallery-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-item wow fadeInUp">
                                    <a href="img/gallery/gallery-3.jpg" class="gallery-popup">
                                        <img src="img/gallery/gallery-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-item wow fadeInUp">
                                    <a href="img/gallery/gallery-4.jpg" class="gallery-popup">
                                        <img src="img/gallery/gallery-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-item wow fadeInUp">
                                    <a href="img/gallery/gallery-5.jpg" class="gallery-popup">
                                        <img src="img/gallery/gallery-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6">
                                <div class="gallery-item wow fadeInUp">
                                    <a href="img/gallery/gallery-6.jpg" class="gallery-popup">
                                        <img src="img/gallery/gallery-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
    
                        </div>
    
                    </div>
                </section> #gallery -->

            <!--==========================
                  Contact Section
                ============================-->
            <section id="contact">
                <div class="container">
                    <div class="row wow fadeInUp justify-content-center">

                        <!-- <div class="col-lg-4 col-md-4">
                            <div class="contact-about">
                                <h3>Avilon</h3>
                                <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div> -->


                        <div class="col-lg-5 col-md-8">
                            <div class="form">
                                
                                <form action="" name="frmContact" enctype="multipart/form-data" method="post" role="form" class="contactForm">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="userName" class="form-control" id="name" placeholder="नाम" value="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" name="subject" id="email" value="" placeholder="फ़ोन नंबर" data-rule="minlen:4" data-msg="Please enter a valid Phone" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="userEmail" value="" id="subject" placeholder="पूरा पता" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
<!--                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>-->
                                    <div class="text-center"><button type="submit" name="send" value=" अभी ऑर्डर करें "  title="Send Message">अभी ऑर्डर करें</button></div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- #contact -->

        </main>
         <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container text-center">
            <div class="copyright">
                &copy; Copyright <strong><span>Kam-Ratan</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Disclaimer:These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.
            </div>
        </div>
    </footer>
    <!-- End Footer -->
        <!--Scroll Popup - start -->

        <div class="popup mb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-4">
                        <img src="https://dl.dropbox.com/s/wto22dsnfiu2c3r/kam-ratan.png" class="img-fluid animated infinite pulse">
                    </div>

                    <div class="col-md-8 offset-md-2 col-7 offset-1">
                        <div class="row">
<!--                            <div class="col-md-6">
                                <a href='#about' class="scrollto "><button class="btn btn-block btn-warning  animated infinite pulse">Order Now</button></a>
                            </div>-->
                            <div class="col-md-6">
                                <a href='#about' class="scrollto "><button class="btn btn-block btn-warning  animated infinite pulse">Order Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Scroll Popup - end -->

        <!--back to top-->
        <!--<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>-->
        <!--back to top-->

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/magnific-popup/magnific-popup.min.js"></script>
        <script src="lib/sweet-alert/sweet-alert.js"></script>

        <!-- Contact Form JavaScript File -->
        <!--<script src="contactform/contactform.js"></script>-->

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
        <script src="js/custom.js"></script>
    </body>


    <!-- Mirrored from nightsrider.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 08:37:33 GMT -->

</html>