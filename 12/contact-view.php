<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Breast Cream</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Breast Cream" name="Breast Cream">



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
                <a href="#intro"><span><b>Breast Cream</b></span></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <!-- <li><a href="#about">Order Now</a></li> -->
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
            <h1 class="white animated-2s infinite bounceIn">इंडिया का नंबर <span style="color:#17a2b8; text-shadow:1px 1px 5px #fff,1px 1px 5px #fff,1px 1px 5px #fff,1px 1px 5px #fff,-1px -1px 5px #fff,-1px -1px 5px #fff,-1px -1px 5px #fff,-1px -1px 5px #fff; font-family: 'times'; font-weight: bold; font-size: 60px;">1</span> स्तन वर्धक उत्पाद</h1>
        </div>

        <div class="product-screens">

            <div class="product-screen-1 wow fadeInUp" data-wow-delay="1s" data-wow-duration="0.6s">
                <img src="img/5.png" alt="" class="img-fluid">
            </div>

            <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
                <img src="img/4.png" alt="" class="img-fluid">
            </div>

            <div class="product-screen-3 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
                <img src="img/3.png" alt="" class="img-fluid">
            </div>

            <div class="product-screen-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                <img src="img/2.png" alt="" class="img-fluid">
            </div>

            <div class="product-screen-5 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="img/1.png" alt="" class="img-fluid">
            </div>
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
                                    <input type="text" value="" name="userName" class="form-control" pattern="[a-z A-Z]{0,50}" required="">
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
                            <img src="./img/cream.png" alt="" class="img-fluid animated infinite pulse">
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
                            <h3 class="section-title"><b>Breast Cream</b> की विशेषताएं</h3>
                            <span class="section-divider"></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 features-img">
                        <img src="./img/cream.png" alt="" class="wow fadeInLeft">
                    </div>

                    <div class="col-lg-8 col-md-7 ">

                        <div class="row">

                            <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                                <h4 class="title"><a href="#" >लंबे समय तक चलने वाली यौन सहनशक्ति</a></h4>
                                <p class="description" ><b>Breast Cream</b> लंबे समय तक चलने वाली सहनशक्ति और शक्ति के साथ अधिकतम यौन सुख प्राप्त करने का खजाना है। यह आपकी सहनशक्ति को बढ़ाता है, जो आपको बिना किसी अंत के चलते-चलते रहने देता है। यह ऊर्जा की एक नई भीड़ के साथ उच्च
                                    महसूस करने का समय है।</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                                <h4 class="title"><a href="#" >बढ़ी हुई पौरुष क्षमता</a></h4>
                                <p class="description" >पुरुष वृद्धि <b>काम रतन</b> के साथ अपनी मर्दानगी को एक नया मौका दें . यह आपको सेक्स के सुखद सफर पर ले जाएगा। यही अनंत सुख का वास्तविक अर्थ है। हर दिन एक खुराक आपको एक उत्साही और अविस्मरणीय अनुभव प्रदान करेगी।</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                                <h4 class="title"><a href="#" >अधिकतम आनंद</a></h4>
                                <p class="description" ><b>Breast Cream</b> सबसे बड़ा सुख प्राप्त करने की मास्टर-कुंजी है। यह आपके साथी के साथ कुछ जंगली करने के लिए आपके शरीर के अंदर उत्साह पैदा करता है। यह आपके प्रेमी की योनि में यौन सुख के द्वार खोलता है। यह आपकी वासना, लालच
                                    को संतुष्ट करता है और कामुक संभोग के लिए चाहता है।</p>
                            </div>
                            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                                <h4 class="title"><a href="#" >दुनिया भर में जाने-माने डॉक्टर</a></h4>
                                <p class="description" ><b>Breast Cream</b> एनर्जी पिल्स को शीर्ष यूरोलॉजिस्ट द्वारा सत्यापित किया जाता है और हजारों खुश और संतुष्ट ग्राहकों के भरोसे का समर्थन किया जाता है और उनका सुझाव है कि ये गोलियां वास्तव में काम करती हैं।</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
      
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
                                        <td >उत्पाद के निर्माता ने ग्राहक को तत्काल और स्थायी परिणाम प्रदान करने के लिए सभी हर्बल अवयवों को मिला दिया है।</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-check"></i></td>
                                        <td >यह आपके शरीर के अंदर तुरंत काम करना शुरू कर देता है और बेहतरीन परिणाम देता है।</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-check"></i></td>
                                        <td >जब आप नियमित रूप से इस उत्पाद का उपयोग करते हैं, तो यह टेस्टोस्टेरोन वृद्धि, यौन उत्थान और उत्तेजना में सुधार करता है।</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-check"></i></td>
                                        <td >यदि संयोग से कोई शिकायत आती है, तो हम आपके वितरित उत्पाद को एक नए उत्पाद से बदल देंगे।</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-check"></i></td>
                                        <td >इसे शानदार बनाने के लिए केवल हर्बल और प्राकृतिक आयुर्वेदिक सामग्री का उपयोग किया जाता है <b>Breast Cream</b> </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-check"></i></td>
                                        <td >अब यह स्पष्ट हो गया है कि <b>Breast Cream</b> 100% सुरक्षित और प्रभावी है।</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-row">
                <div class="container">
                <div class="col-lg-8 offset-lg-4">
                        <div class="section-header wow fadeIn" data-wow-duration="1s">
                            <h1 class="section-title"><b>अविकसित स्तनों के बारे में तथ्य</b> </h1>
                            <span class="section-divider"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 wow fadeInRight">
                            <img class="advanced-feature-img-left" src="img/s5-img1.png" alt="">
                        </div>
                        <div class="col-md-5">
                            <div class="wow fadeInLeft">
                                <h2>स्तन हाइपोप्लेसिया या मैक्रोमैस्टिया</h2>
                                <p class="wow fadeInRight" data-wow-duration="0.5s">महिलाओं में छोटे या विषम स्तन बहुत आम समस्या है। ज्यादातर महिलाओं के ब्रेस्ट साइज में 15 से 20 फीसदी का अंतर होता है।</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 wow fadeInLeft  order-md-last">
                            <img class="advanced-feature-img-left" src="img/s5-img5.png" alt="">
                        </div>
                        <div class="col-md-5 order-md-first">
                            <div class="wow fadeInRight">
                                <h2>एकतरफा: स्तन </h2>
                                <p class="wow fadeInRight" data-wow-duration="0.5s">यह स्थिति तब होती है जब छाती के एक तरफ के स्तन का आकार विकसित स्तन ऊतक के नीचे होता है, और छाती के दूसरे हिस्से में सामान्य स्तन का आकार होता है।</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 wow fadeInRight">
                            <img class="advanced-feature-img-left" src="img/s5-img2.png" alt="">
                        </div>
                        <div class="col-md-5">
                            <div class="wow fadeInLeft">
                                <h2>द्विपक्षीय: स्तन</h2>
                                <p class="wow fadeInRight" data-wow-duration="0.5s">इस प्रकार की विशेषता छाती के दोनों ओर स्तन के ऊतकों के छोटे आकार की होती है।</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 wow fadeInLeft order-md-last">
                            <img class="advanced-feature-img-left" src="img/s5-img3.png" alt="">
                        </div>
                        <div class="col-md-5 order-md-first">
                            <div class="wow fadeInRight">
                                <h2>आनुवंशिकी:</h2>
                                <p class="wow fadeInRight" data-wow-duration="0.5s">यह कारण अनुवांशिक हो सकता है और जन्म के समय उपस्थित हो सकता है। सबसे आम स्थितियों में से एक पोलैंड सिंड्रोम (अविकसित मांसपेशियां) है, जिसमें छाती की दीवार के छोटे हिस्से गायब हैं। जबकि अन्य असामान्यताएं यौवन तक दिखाई नहीं दे सकती हैं।</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-7 wow fadeInRight">
                            <img class="advanced-feature-img-left" src="img/s5-img4.png" alt="">
                        </div>
                        <div class="col-md-5">
                            <div class="wow fadeInLeft">
                                <h2>हार्मोनल मुद्दे:</h2>
                                <p class="wow fadeInRight" data-wow-duration="0.5s">हार्मोनल असंतुलन उन कारणों में से एक हो सकता है जहां महिला के स्तन का आकार आवश्यक आकार तक नहीं बढ़ सकता है और कम विकसित रहता है।</p>
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
                            <p><b>Breast Cream</b> इसका मतलब है कि यह सभी उम्र के पुरुषों के लिए 100% सुरक्षित है।</p>
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
                    <h3 class="section-title"><br><b>Breast Cream</b> में प्रयुक्त सामग्री</h3>
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
                        <center><img src="img/img2.jpeg" class="img-fluid"></center>
                    </div>
                    <div class="col-md-4">
                        <p >एक दिन मैंने <b>Breast Cream's</b> की वेबसाइट को एक विज्ञापन के जरिए फेंक दिया। मुझे लगता है कि अगर मैंने इसे खरीदा और काम नहीं किया तो मैं इसके लिए गया। और अब परिणाम मेरा स्तन काफ़ी बड़े और सुडोल हो गए हैं। आपको
                            धन्यवाद
                            <b>Breast Cream</b>.
                        </p>
                    </div>


                    <div class="col-md-2">
                        <center><img src="img/img3.jpeg" class="img-fluid"></center>
                    </div>
                    <div class="col-md-4">
                        <p >मुझे आश्चर्य हुआ कि उसने कितने समय तक चुप्पी साधी रही और उसका कभी बाहरी संबंध नहीं रहा। फिर मैंने सोचा कि मुझे स्तन बड़ा करने की दवा लेनी चाहिए। और फिर मुझे <b>Breast Cream</b>के बारे में पता चला। और बस यही ! मेरी पत्नी ने कहा कि
                            यह शानदार है</p>
                    </div>

                    <div class="col-md-2">
                        <center><img src="img/img4.jpeg" class="img-fluid"></center>
                    </div>
                    <div class="col-md-4">
                        <p >​दूसरों के विपरीत मुझे भी बड़ा और आकर्षक ब्रेस्ट चाहिए थे। एक दिन मुझे इंटरनेट पर <b>Breast Cream</b> मिला, मैंने तुरंत इसके लिए ऑनलाइन ऑर्डर किया। मैंने इसे सात महीने पहले इस्तेमाल करना शुरू किया था, अब मेरे स्तन काफ़ी बड़े और आकर्षक भी लगते हैं!</p>
                    </div>

                    <div class="col-md-2">
                        <center><img src="img/img5.jpg" style="border-radius: 50%;" class="img-fluid"></center>
                    </div>

                    <div class="col-md-4">
                        <p >मेरी पत्नी की ब्रेस्ट बहुत छोटे थे जिसी वजह से हमन सेक्स करने में दीकत होती थी फिर एक दिन मैंने अपने दोस्त को यह समस्या बतायें तो उसे मुझे <b>Breast Cream</b> के बारे में बताया फिर मैं भी अपनी पत्नी को दिया और कुछ इस्तमाल करने में उसके ब्रेस्ट का साइज बढ़ाना हो गया अब देखने में काफी अच्छी लगती है और हम सेक्स भी कर पाते हैं </p>
                    </div>
                </div>

            </div>
        </section>
      

        <!--==========================
                  Contact Section
                ============================-->
        <section id="contact">
            <div class="container">
                <div class="row wow fadeInUp justify-content-center">
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
                                <div class="text-center"><button type="submit" name="send" value=" अभी ऑर्डर करें " title="Send Message">अभी ऑर्डर करें</button></div>
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
                &copy; Copyright @2022 <strong><span>Breast Cream</span></strong>. All Rights Reserved
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
                    <img src="./img/cream.png" class="img-fluid animated infinite pulse">
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
 <script src="js/main.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>