<!-- <script>alert('message not send')</script> -->





<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- <meta name="google-site-verification" content="IicphvEVAY8LRUByeh1QExW3wehp5DnfiPtjWC5U32I" /> -->
    <meta charset="utf-8" />
    <title>Kam-Ratan No1 </title>
    <!-- <link rel="icon" href="images/favicon.html" type="image/x-icon"> -->
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="format-detection" content="telephone=yes">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/icomoon.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="style.css" />

    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.html"></script>


    <script>
        function myFunction() {
            alert("Form submitted successfully Our Team Will Contact You");
        }
    </script>
   
    <style>
        #successAlert {
            display: none;
        }
    </style>
</head>

<body>
    <div class="fixed-wrapper">
        <div class="call-order-button">
            <ul>
                <!-- <li>
                    <a href="tel:+919810978267"><img src="assets/images/call-now-button.png"></a>
                </li> -->
                <li>
                    <a href="#login-form"> <i class="icon-shopping-cart"></i></a>
                </li>
            </ul>
        </div>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                        <a href="#login-form">
                                <b>Kam-Ratan</b> </a>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6 hidden-xs">
                        <div class="contact">
                            <a href="tel:+919810978267" class="zoomable">9810978267	</a>
                        </div>
                    </div> -->
                    <div class="col-xs-4 visible-xs">
                        <div class="mobile-menu-button"> <i class="icon-bar-graph"></i></div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <ul class="menu">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#about-popup">About</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#testimonial-popup">Testimonial</a>
                            </li>
                            <li>
                                <a href="#packages">order</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#faq-popup">FAQ</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#contact-popup">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <!-- <div id="fixed-contact" class="visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="contact">
                            <a href="#login-form" class="zoomable"><img src="assets/images/call-now.png" />&nbsp;&nbsp;9810978267</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="fact hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="item">
                            <img src="assets/images/best.png" />
                            <p>भारत का सबसे अच्छा पेनिस इंलार्जमेंट</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                            <img src="assets/images/safe.png" />
                            <p>100% सुरक्षित है क्योंकि यह प्राकृतिक है</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                            <img src="assets/images/doctor.png" />
                            <p>दुनिया भर में 42 डॉक्टरों द्वारा स्वीकृत</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner" style="background-image: url(assets/images/banner5.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 ">
                        <div class="login-form" id="login-form">
                            <h3>अभी 50% तक बचाएं <br> ऑफ़र केवल 1 दिन के लिए मान्य</h3>
                            <h4>स्टॉक में छूटे हुए उत्पादों की संख्या <span>8</span></h4>
                            <h5 class=" heading animated wow zoomIn" data-wow-delay=".5s">इंडिया का नंबर 1 लिंग वर्धक उत्पाद</h5>
                            <form action="" enctype="multipart/form-data" id="contactForm" method="POST">
                                <div class="form-group">
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="userName" placeholder="नाम" id="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" data-msg-required="Please enter Phone Number." rows="10" class="form-control" name="subject" placeholder="फोन नंबर" id="email" maxlength="10" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" value="" data-msg-required="Please enter your address" rows="10" class="form-control" name="userEmail" placeholder="पता" id="message">
                                </div>
                                <!--<div class="form-group">-->
                                <!--   <div class="g-recaptcha" data-sitekey=""></div>-->
                                <!--</div>-->
                                <div class="order-now-btn">
                                    <button type="submit" id="submitOrder" value=" अभी ऑर्डर करें " name="send" onclick="myFunction()">आर्डर करे</button>
                                </div>
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
                            </form>
                            <h1 id="timer"></h1>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 ">
                        <div class="product-image">
                        <a href="#login-form">   <img src="assets/images/product.png" /> </a>
                            <!-- <div class="off"><img src="assets/images/offer.png" /></div> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="content">
                            <!-- <ul class="icons">
                                <li>
                                    <img src="assets/images/brand1.png">
                                </li>
                                <li>
                                    <img src="assets/images/brand2.png">
                                </li>
                                <li>
                                    <img src="assets/images/brand3.png">
                                </li>
                                <li>
                                    <img src="assets/images/brand4.png">
                                </li>
                            </ul> -->
                            <h1>अब <span>3+</span> इंच प्राप्त करें </h1>
                            <h2>लड़कियां हमेशा ज्यादा चाहती हैं</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="benifits">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="image wow bounceInLeft">
                        <a href="#login-form">   <img src="assets/images/girl-with-product.jpg" /> </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="content wow bounceInRight">
                            <h3>75% महिलाओं का कहना है कि उन्हें बिस्तर पर पूर्ण संतुष्टि नहीं मिलती है क्या आपका साथी उनमें से एक है? क्या आप इसके बारे में कुछ भी कर सकते हैं?</h3>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="icon-circle-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>क्या आप अपनी पत्नी की सारी यौन आवश्यकताओं को संतोषजनक तरीके से पूरा कर के उसे कभी न भूलने वाली राते देना चाहते हैं?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-circle-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>क्या आपको ऐसा लगता है कि आपके जीवन साथी को पूरी तरह से संतुष्ट करना असंभव है ?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-circle-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>क्या आप अपने लिंग के आकार के लिए अश्लील सितारों से ईर्ष्या करते हैं या आप चाहते हैं कि आपका लिंग उनके जेसा बड़ा हो जाये ?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-circle-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Kam-Ratan भारत का नंबर १ लिंग वर्धक फार्मूला है इसके उपयोग से कुछ ही दिनों में आपका लिंग 2 से 3 इंच तक लम्बा आवर पूरी लम्बाई के अनुपात में मोटा हो जाएगा.</p>
                                    </div>
                                </li>
                            </ul>
                            <button class="btn-red">ये उपचार आपके यौन जीवन को हमेशा के लिए बदल देगा।</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="packages" style="background-image:url(assets/images/packages-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h3>सुनिश्चित कीजिये कि आप अपने लिंग में कितनी वृद्धि चाहते हैं ।</h3>
                            <h2>Product Packages</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="item">
                            <h3>1 महीने का उपचार</h3>
                            <h4>(परीक्षण कार्यक्रम)</h4>
                            <a href="#login-form">  <img src="assets/images/product1.png" class="img-responsive"> </a>
                            <p>यदि आप ने अभी तक Kam-Ratan का उपयोग नहीं किया है तो आप इस पैकेज का उपयोग कर सकते हैं । ये शुरुआती 1 महीने में आपको शानदार नतीजे देने के लिए काफी होंगे। आपका लिंग 1 इंच तक बढ़ सकता है।</p>
                            <a href="#" data-toggle="modal" data-target="#booknow-popup" class="btn-red">ऑर्डर करें </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="item">
                            <h3>2 महीने के उपचार</h3>
                            <h4>(शुरुआती कार्यक्रम)</h4>
                            <a href="#login-form"> <img src="assets/images/product2.png" class="img-responsive"> </a>
                            <p>Kam-Ratan के 2 महीने के इलाज के साथ आपको शानदार नजीते मिलेंगे बहुत ही उचित कीमत पर। आप के लिंग की लम्बाई केवल 2 महीनो में 1.5 इंच तक बढ़ जायेगी।</p>
                            <a href="#" data-toggle="modal" data-target="#booknow-popup" class="btn-red">ऑर्डर करें </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="item">
                            <h3>3 महीने के उपचार</h3>
                            <h4>(महत्वाकांक्षी कार्यक्रम)</h4>
                            <a href="#login-form"> <img src="assets/images/product3.png" class="img-responsive"> </a>
                            <p>Kam-Ratan 3 महीने का ट्रीटमेंट उन पुरुषों के लिए तैयार किया गया है जो कि बेहतरीन बढ़त चाहते हैं। इस के द्वारा शानदार नतीजे मिलते हैं और लिंग की मोटाई में भी बहुत वृद्धि होती है। इस विकल्प के द्वारा आपका लिंग 3+ इंच तक बढ़ सकता
                                है।
                            </p>
                            <a href="#" data-toggle="modal" data-target="#booknow-popup" class="btn-red">ऑर्डर करें </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="product-fact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="item">
                            <img src="assets/images/guaranted.png" alt="">
                            <h3 style="color: #000;">हम आपको देते है पैसे वापसी की गारंटी.</h3>
                            <p>हमारे उत्पाद में हमें बहुत विश्वास है हम इसकी प्रभावशीलता और परिणामों के बारे में 100% निश्चित हैं</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item">
                            <img src="assets/images/packaging.png" alt="">
                            <h3 style="color: #000;">विचारशील पैकेजिंग और सुविधाजनक सीओडी भुगतान.</h3>
                            <p>हमारा विचारशील पैकेजिंग 100% गोपनीयता सुनिश्चित करता है कोई भी यह नहीं बता सकेगा कि पैकेज में क्या है।</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="item">
                            <img src="assets/images/doctors.png" alt="">
                            <h3 style="color: #000;">42 से अधिक urologists डॉक्टरों द्वारा स्वीकृत.</h3>
                            <p>इसके अलावा, हमें दुनिया भर से 20,000 से ज्यादा संतुष्ट ग्राहक होने पर गर्व है।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div id="your-product">
            <div class="container">
                <div class="row">
                    <h2 class="title">आपका उत्पाद - Kam-Ratan </h2>
                    <hr>
                    <div class="col-md-4 col-xs-12">
                        <h4>सूत्र जल्दी से काम करता है और आपकी लिंग को 3+ इंच बढ़ाता है.</h4>
                        <p>1 महीने के उपचार से आपका लिंग 1 इंच तक लम्बा हो जएगा. </p>
                        <p> उपचार के 2 महीने के बाद, आपका लिंग 1.5 इंच तक लंबा हो जाएगा। </p>
                        <p> इसे 3 महीने तक लेने से आपका लिंग 3+ इंच तक लम्बा हो जाएगा. </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h4>Our Solution</h4>
                        <h2>Kam-Ratan </h2>
                        <a href="#login-form">  <img src="assets/images/product.png" class="img-responsive" alt="Kam-Ratan "> </a>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h4>Kam-Ratan सूत्र लिंग वृद्धि दर को बढ़ाता है.</h4>
                        <p> यह रक्त वाहिकाओं का विस्तार करता है और आपके लिंग को मोटा बनाता है.</p>
                        <p>ताकत और erections की अवधि में सुधार.</p>
                        <p>Kam-Ratan आपके लिंग की नसों को मजबूत बनता है और आपके संभोग करने की क्षमता को बढ़ा देता है।.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="dose">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h3>खुराक <br>Kam-Ratan <br>कैप्सूल</h3>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="assets/images/night.svg">
                        <h4>प्रत्येक रात</h4>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="assets/images/dinner.svg">
                        <h4>रात के खाने के बाद</h4>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <img src="assets/images/pill.svg">
                        <h4>एक गोली दूध के साथ</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div id="facts">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <br>
                            <div class="icon"><i class="fa fa-leaf"></i></div>
                            <h4>बिना कोई दुष्प्रभाव के साथ 100% सुरक्षित ।</h4>
                            <p>Kam-Ratan इसका मतलब ये है की ये हर उम्र के व्यक्तियों के लिए 100% सुरक्षित है ।</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <br>
                            <div class="icon"><i class="fa fa-inr"></i></div>
                            <h4>100% मनी बैक गारंटी ।</h4>
                            <p>हम ये गारंटी इस लिए दे रहे हैं क्योंकि हमें इस बात का 100% भरोसा है की हमारी दवा काम करेगी और शानदार नतीजे देगी। इसके परिणाम हमेशा आप की उम्मीद से बेहतर ही रहेंगे।</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <br>
                            <div class="icon"><i class="fa fa-user-md"></i></div>
                            <h4>42 से अधिक urologists (पुरुषों के जनन्नागों के चिकित्सक) चिकित्सकों द्वारा मान्यता प्राप्त।</h4>
                            <p>इसके साथ ही हमें इस बात का भी गर्व है की पूरी दुनिया में हमारे पास 10,000 से ज्यादा संतुष्ट कस्टमर्स है।</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <br>
                            <div class="icon"><i class="fa fa-truck"></i></div>
                            <h4>हम प्रोडक्ट के घर पहुँचने पर पैसे देने की सुविधा के साथ तेजी से प्रोडक्ट पहुँचाने की सुविधा देते हैं</h4>
                            <p>हम प्रोडक्ट को भेजने से पहले विशेष एंव पेशेवर तरीके से पैक करते हैं ताकि कोई और ये ना जान सके की आपने क्या मंगवाया है। आपकी प्राइवेसी हमारे लिए सब से पहली प्रार्थमिकता है ।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="how_it_works">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                    <a href="#login-form">    <img src="assets/images/order-image.jpg"> </a>
                    </div>
                    <div class="col-md-6">
                        <div class="wrapper">
                            <div class="heading">
                                <h2>यह काम किस प्रकार करता है?</h2>
                                <h4>यह HERBS और VITAMINS की पसंद के साथ मार्क को ऑर्गेनिक और नेचुरल APHRODISIACS के नाम से जाना जाता है।</h4>
                            </div>
                            <ul>
                                <li><i class="fa fa-arrow-right"></i>लिंग का सख्त और सख्त होना टिशू कॉर्पोरा कैवर्नोसा और कॉर्पस स्पोंजियोसम के तीन स्तंभों से जुड़ा है। जैसे ही यह आपको अधिक ऊर्जा प्रदान करता है, पेनकिलिंग उन्हें विस्तारित करने में मदद करती
                                    है।
                                </li>
                                <li><i class="fa fa-arrow-right"></i>यह आपके शरीर के टेस्टोस्टेरोन स्तर को भी बढ़ाता है ताकि आपके अंडकोष में आपके अथक सेक्स ड्राइव के लिए पर्याप्त ऊर्जा हो।</li>
                                <li><i class="fa fa-arrow-right"></i>इस फॉर्मूले को पुरुषों द्वारा आजमाया और परखा गया है और हमें उनके भागीदारों से प्रतिक्रिया मिली है जिन्होंने हमें बताया कि वे कभी भी खुश नहीं रहे हैं</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="testimonials" style="background: url(assets/images/6.jpg); background-size: cover;">
            <section class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="testimonial_heading">
                                <h2>हमारे सभी ग्राहक इसके प्रभाव से संतुष्ट हैं</h2>
                                <h3>हम इस बात को पूरे विश्वाश से कह सकते हैं कि ये नतीजे 1000 से ज्यादा कस्टमर्स द्वारा दिए गए सामाजिक सर्वेक्षण के आधार पर बनाये गए हैं ।</h3>
                                <h3>Kam-Ratan कितनी अच्छी तरह से काम करता है ?</h3>
                                <h4>आइए जानते हैं कि हमारे संतुष्ट ग्राहकों का Kam-Ratan के बारे में क्या कहना है!</h4>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="testimonial-image">
                                            <img src="assets/images/testimonial3.jpg" class="img-responsive">
                                            <h4><strong>ज़हीन 26 साल</strong></h4>
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="testimonial_para" align="justify">
                                                <span class="fa fa-quote-left testimonial_fa" aria-hidden="true"></span> मैं अपनी बीवी को कभी पूरी संतुष्टि नहीं दे पाया और वो भी इसको लेकर हमेशा नाराज़ रहती थी: उसने मुझसे कई बार इसके लिए कुछ करने को कहा
                                                क्योंकि मेरा लिंग बहुत छोटा था! मैं बहुत दुखी रहता था और मैंने कई तरह के इलाजों के बारे में सोचा। आखिर में मुझे पसंद आई Kam-Ratan .अब मुझे इसे लगाते 3 हफ्ते हो चुके हैं, और मेरा लिंग काफी बड़ा हो गया है
                                                और मेरी बीवी को भी महसूस होने लगा है। वो अब मुझसे कई बार सेक्स करने को कहती है।
                                                <span class="fa fa-quote-right testimonial_fa" aria-hidden="true"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-image">
                                            <img src="assets/images/testimonial4.jpg" class="img-responsive">
                                            <h4><strong>राजन 30 साल</strong></h4>
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="testimonial_para">
                                                <span class="fa fa-quote-left testimonial_fa" aria-hidden="true"></span> फ़र्क दिखता है लिंग जितना बड़ा हो उतना अच्छा। मैं अपनी मर्दानगी खोना नहीं चाहता था और इसलिए ऑपरेशन का रिस्क नहीं लिया। मैंने ट्राय
                                                की Kam-Ratan क्योंकि ये ज़्यादा सुरक्षित है और इससे मुझे बढ़िया फायदा भी हुआ, मेरा साइज़ 3 सेमी बढ़ गया। मेरी बीवी को साइज़ में बढ़त तुरंत महसूस हुई।
                                                <span class="fa fa-quote-right testimonial_fa" aria-hidden="true"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-image">
                                            <img src="assets/images/testimonial2.jpg" class="img-responsive">
                                            <h4><strong>हार्दिक 27 साल</strong></h4>
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="testimonial_para" align="justify">
                                                <span class="fa fa-quote-left testimonial_fa" aria-hidden="true"></span> सबसे बेहतरीन प्रोडक्ट जो असर करता है मेरी शादी बीस साल की उम्र में हो गई थी और मेरी बीवी तब 25 की थी। मेरी पत्नी की ये दूसरी शादी
                                                थी इसलिए मुझे हमेशा डर लगा रहता था कि मैं उसे संतुष्ट नहीं कर पाऊँगा। मैंने इंटरनेट पर बहुत सर्च की कि अनुभवी आदमी इस परिस्थिती में क्या करते हैं, और मुझे यही समझ में आया कि Kam-Ratan लेना ही समझदारी होगी।
                                                इसलिए मैंने अपनी पत्नी से पूछा और उसने खुशी से हाँ कह दिया!
                                                <span class="fa fa-quote-right testimonial_fa" aria-hidden="true"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="controls testimonial_control ">
                                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic" data-slide="prev"></a>
                                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic" data-slide="next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="after-before">
            <div class="container">
                <h2>हमारे संतुष्ट ग्राहक की स्पष्ट पुष्टि</h2>
                <p>हमारे समर्पित ग्राहकों द्वारा साथ में चित्र और घोषणाएं भेजी गईं:</p>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="item">
                            <div class="image"> <a href="#login-form"><img src="assets/images/beforeafter1.jpg" class="img-responsive"> </a></div>
                            <div class="content">
                                <p align="justify">एक छोटा लिंग की समस्या मेरे लिए स्पष्ट नहीं थी जब तक कि मैं शादी नहीं करता। मेरी शादी के बाद, मुझे एहसास हुआ कि मुझे एक समस्या है और मेरी पत्नी अक्सर शिकायत करती थी कि वह बिस्तर पर मेरे प्रदर्शन से संतुष्ट नहीं थे मेरे
                                    पास कोई विकल्प नहीं था, लेकिन बाजार में किसी समाधान की तलाश करने के लिए। मैंने कई उपचार करने की कोशिश की, लेकिन जब तक मैंने Kam-Ratan की कोशिश नहीं की तो कोई परिणाम नहीं देखा। मैंने इसके बारे में किसी ऐसे मित्र से सुना
                                    है जिसने उसी मुद्दे को हल करने के लिए Kam-Ratan का इस्तेमाल किया था।</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="item">
                            <div class="image"><a href="#login-form"><img src="assets/images/beforeafter2.jpg" class="img-responsive"></a></div>
                            <div class="content">
                                <p align="justify">मैं Kam-Ratan के लिए आपका धन्यवाद लिख रहा हूं, जिसने मेरे छोटे लिंग की समस्या को हल करने में मदद की। कैप्सूल लेने शुरू करने के बाद, मेरे लिंग की लंबाई काफी बढ़ गई और अब मुझे इस ग्रह पर किसी भी महिला को संतुष्ट करने का आश्वासन
                                    है। Kam-Ratan की कोशिश करने से पहले, मैंने तेल और यहां तक ​​कि डॉक्टरों द्वारा लिखी गई दवाइयों सहित कई अन्य उपचार अपनाये लेकिन मुझे उससे कोई संतुष्टि नही मिली मैंने Kam-Ratan के बारे में सुना और उसने मेरी जिंदगी बदल
                                    दी। अब, मेरी पत्नी को संतुष्ट करने में कोई समस्या नहीं है और अंत में, मैं एक आदमी की तरह महसूस करता हूं.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="item">
                            <div class="image"><a href="#login-form"><img src="assets/images/beforeafter3.jpg" class="img-responsive"></a></div>
                            <div class="content">
                                <p align="justify">मेरी शादी शुदा जिंदगी को अच्छी तरह से नई ऊंचाइयों पर पहुंचने के लिए Kam-Ratan का धन्यवाद। मैं अपने लिंग की लंबाई को 3 इंच से 6 इंच तक बढ़ाना चाहता था। फिर मैंने आपका उत्पाद Kam-Ratan प्रयोग किया जिससे मुझे बेहत्तर परिणाम
                                    मिले मोटाई में भी 25% से अधिक का फायदा हुआ वास्तव में आपके द्वारा आपके वेबसाइट पर जो भी कहा गया है, उससे बेहतर परिणाम मिल गया है। यह मेरे सोची अपेक्षाओं से परे था मेरी जीवन साथी और प्रेमिका स्पस्ट रूप से प्रसन्न है,
                                    लेकिन इसके साथ ही मेरा आत्मविश्वास और मेरे विकल्प भी बढ़ गए हैं। इस लाभदायक उत्पाद को मुझे देने के लिए आपका धन्यवाद.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        </div>
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <img src="assets/images/aboutus.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h2 style="color: #000;">Kam-Ratan के बारे में</h2>
                        <p align="justify">हमने इस उत्पाद के निर्माण के लिए सावधानीपूर्वक चयन किया है और जब मिलकर, ये सामग्रियां समग्र प्रभावशीलता बढ़ाने के लिए मिलकर काम करती हैं। यह तुरन्त आपके शरीर के भीतर सक्रिय हो जाता है और वह उत्कृष्ट परिणामों के पीछे का रहस्य है
                            जो इसे प्रदान करता है।</p>
                        <p>जब आप इस उत्पाद को नियमित रूप से लेते हैं, तो यह विकास में सुधार करता है, यौन कार्यों को फिर से जीवंत करता है और उत्तेजना में सुधार करता है.</p>
                        <p>गुणवत्ता के साथ हम बहुत अच्छी देखभाल करते हैं यदि दुर्लभ उदाहरण में आपको कोई समस्या या उत्पाद के साथ शिकायत है, तो कृपया हमें सूचित करें और हम तुरंत आपको एक प्रतिस्थापन भेज देंगे.</p>
                        <p>बाकी हमने आश्वासन दिया कि केवल सबसे बेहतरीन और उच्च गुणवत्ता वाली सामग्री Kam-Ratan के निर्माण में आती है.</p>
                        <p>यह अब स्पष्ट है कि Kam-Ratan एक 100% सुरक्षित और प्रभावी लिंग आकार बढ़ाने है.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="ingredients" style="background-image: url(assets/images/ingredient_bg.jpg) ;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="heading">
                            <h2>Kam-Ratan - सामग्री का अवलोकन</h2>
                            <p>इस पोस्ट में, हम इस उत्पाद के घटकों को आपको इसकी दक्षता के बारे में बेहतर जानकारी देने के लिए कहेंगे। यह आपको एक अच्छी तरह से वाकिफ पसंद करने में मदद करेगा।</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Kam-Ratan FORMULA</h3>
                        <p>पुरुषों के लिए पूरी तरह से प्राकृतिक प्रदर्शन बूस्टर अनुपूरक प्रदान करने के लिए, हम लिंग बूस्टर एनर्जी पिल्स तैयार करने में बेहतर गुणवत्ता वाले अवयवों का उपयोग करते हैं।</p>
                        <p>यह रक्त के प्रवाह को प्रोत्साहित करता है जिससे आपका लिंग मजबूत और लंबा होता है</p>
                        <p>यह आपको सक्रिय रखता है और सेक्स ड्राइव के माध्यम से सहनशक्ति को बनाए रखता है</p>
                        <p>यदि आपको किसी दुर्लभ मामले में हमारे उत्पाद के बारे में कोई शिकायत है, तो आप उत्पाद को बदलने के लिए हमसे संपर्क कर सकते हैं।</p>
                        <p>Kam-Ratan बनाने में केवल बहुत अच्छी गुणवत्ता वाली सामग्री का उपयोग किया जाता है।</p>
                        <p>प्राकृतिक और सिद्ध सामग्री के साथ, पावर जेन स्ट्रॉ 100% सुरक्षित और प्रभावी है।</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="image"><img src="assets/images/ingredient1.jpg"></div>
                        <div class="content">
                            <h4>सफेद मुसली</h4>
                            <p align="justify">मुसली एक महत्वपूर्ण एमिनो एसिड है। यह मानव शरीर की कई विविध महत्वपूर्ण भूमिकाओं में गतिशील रूप से शामिल है। मूसली घिसने से निर्माण की अवधि और संकल्प में सुधार होता है। यह आवश्यक औसत समय को भी कम कर देता है मांसपेशियों के विकास
                                के लिए। इसके कारण, यह संभोग की अवधि को लम्बा कर सकता है।</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="image"><img src="assets/images/ingredient2.jpg"></div>
                        <div class="content">
                            <h4>अश्वगंधा</h4>
                            <p align="justify">जब यौन क्रिया की बात आती है, तो यह आपके शरीर के सबसे महत्वपूर्ण अवयवों में से एक है। अनुचित रूप से, अधिकांश पुरुषों को इस घटक की पर्याप्त मात्रा प्राप्त नहीं होती है। आर्जिनिन आवश्यक मांसपेशियों के तंतुओं को खड़ा करने में मदद
                                करता है उचित रक्त परिसंचरण के लिए</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="image"><img src="assets/images/ingredient3.jpg"></div>
                        <div class="content">
                            <h4>शिलाजीत </h4>
                            <p align="justify">यह कोशिकाओं (cells) को पुनर्जीवित कर बुढ़ापे के लक्षणों और शारीरिक कमज़ोरी को दूर रखता है। शरीर को यौवन और फुर्ती से भर देता है। यह यौन शक्ति (sexual vitality) को बढ़ाकर यौन संभोग (sexual intercourse) को आनंदित बना देता है।</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="image"><img src="assets/images/ingredient4.jpg"></div>
                        <div class="content">
                            <h4>गोखरू सीड </h4>
                            <p align="justify">.गोखरू एक प्रभावी कामोद्दीपक (Aphrodisiac) के रूप में कार्य करता है और कामेच्छा (सेक्स की इच्छा) के स्तर को बढ़ाता है। यह वीर्य (semen) की मात्रा को बढ़ाने में और इसकी गुणवत्ता में सुधार लाने में भी बहुत फायदेमंद है। यह यौन
                                अंग में रक्त-प्रवाह को संचालित करता है। यह शरीर में हार्मोन (Hormone) के प्राकृतिक उत्पादन को उत्तेजित करता है और बेहतर सेक्स जीवन को प्राप्त करने में मदद करता है।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="graph">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <br>
                        <br>
                        <a href="#login-form">  <img src="assets/images/chart.png" style="width: 80%; margin: auto; display: block;"> </a>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrapper">
                            <div class="heading">
                                <h2>सांख्यिकी प्रस्ताव प्रदान करता है:</h2>
                                <h4>डेटा कुछ ऐसा है जो तथ्यों को स्थापित करने में मदद करता है और मामले का तथ्य Kam-Ratan आपके डिक आकार को बढ़ाता है। हमने 500 पुरुषों का एक सर्वेक्षण किया, जिन्होंने Kam-Ratan का इस्तेमाल किया और हमने Kam-Ratan का उपयोग करने
                                    से पहले और उनके सेंटीमीटर के धीरे-धीरे बढ़ने के साथ Kam-Ratan का उपयोग करने से पहले उनके डिक का माप लिया।
                                </h4>
                            </div>
                            <div class="">
                                <h3>लिंग की लंबाई में वृद्धि:</h3>
                                <p>औसतन, प्रतिवादियों ने एक महीने बाद 0.393 इंच की बढ़त दर्ज की। अध्ययन के अनुसार, 6.3 इंच से कम लिंग लंबाई वाले पुरुषों में एक्सवाईजेड से सबसे अधिक वृद्धि हुई। सभी प्रतिवादी पावर जेन स्ट्रॉ की प्रभावशीलता के बारे में आम थे।
                                    वे सभी सहमत थे कि यह हानिरहित और प्रभावी था।</p>
                            </div>
                            <div class="">
                                <h3>लिंग की मोटाई में वृद्धि:</h3>
                                <p>पहले महीने में लिंग के आकार में नियमित लाभ 0.397 इंच था। दो महीने के बाद, औसत कुल आकार बढ़कर 0.787 इंच हो गया था। एक और महीने (कुल मिलाकर 12 सप्ताह) के बाद, औसत लाभ 1.574 इंच था।</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <p>&copy; Kam-Ratan 2021. All rights reserved. | <a href="#" data-toggle="modal" data-target="#term-popup">Terms &amp; Conditions*</a> | <a href="#" data-toggle="modal" data-target="#privacy-popup"> Privacy Policy</a> |
                                <a href="#" data-toggle="modal" data-target="#disclaimer-popup"> Disclaimer</a>
                            </p>
                            <br>
                            <p>
                                Disclaimer : These statements have not been evaluated by the Food and Drug Administration.
                                <br> This product is not intended to diagnose, treat, cure, or prevent any disease.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="fixed-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-4">
                    <a href="#login-form"> <div class="image"><img src="assets/images/girl.png" /></div> </a>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-8">
                        <!-- <a href="" class="call-now-button"><span class="icon"><img src="assets/images/call.png" /></span>9810978267</a> -->
                        <a href="#" data-toggle="modal" data-target="#booknow-popup" class="order-now-button visible-xs"><span class="icon"><img src="assets/images/cart.png" /></span>अभी आर्डर करे</a>
                    </div>
                    <div class="col-md-5 col-sm-5 hidden-xs">
                        <a href="#" data-toggle="modal" data-target="#booknow-popup" class="order-now-button"><span class="icon"><img src="assets/images/cart.png" /></span>अभी आर्डर करे</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------about popup------------>
    <!-- <div id="about-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="assets/images/icon-cross.svg"></button>
                    <h4 class="modal-title">About Us</h4>
                </div>
                <div class="modal-body scroll">
                    <div class="image"><img src="assets/images/8.jpg"></div>
                    <p align="justify">Kam-Ratan is without a doubt the best penis expansion drug in India. In the event that you are extremely genuine about expanding your size, you can't disregard this. From the creators of Kam-Ratan and All-in-One Sex Power bundle,
                        this item is created by Rajshahi Herbal Healthcare, a confided in name in India for more than four decades. With more than a huge number of containers sold in India and abroad this is the No1 decision for all men craving to broaden
                        their penis. </p>
                    <p align="justify">Regardless of the amount you have effectively attempted, regardless of how a lot of cash you have squandered and regardless of how old you are, Kam-Ratan is ensured to work for you. Till now POWER GEN XTRA Penis Enlargement Pills
                        were just accessible to our OPD visiting patients as it were. In any case, with the enormous interest and mind-boggling reaction we got from our patients, we chose to open this item to everyone. Presently you can likewise get a
                        tremendous penis with only 3 months of treatment. Okay, trust that over 95% of the clients who buy Kam-Ratan have energizing outcomes and over 70% of our requests originated from rehash clients?</p>
                    <h3>Kam-Ratan Large can be very helpful if you have:</h3>
                    <h5><i class="fa fa-check"></i> Less than adequate size</h5>
                    <h5><i class="fa fa-check"></i> Soft erections</h5>
                    <h5><i class="fa fa-check"></i> Premature Ejaculation</h5>
                </div>
            </div>
        </div>
    </div> -->

    <!------------testimonial popup------------>
    <!-- <div id="testimonial-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="assets/images/icon-cross.svg"></button>
                    <h4 class="modal-title">Testimonial</h4>
                </div>
                <div class="modal-body scroll">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="icon-circle-check"></i>
                            </div>
                            <div class="text">
                                <p align="justify">This treatment completely transformed me. Before I had a little penis, which made me feel embarrassed and I needed trust in myself. Ladies accomplices were disillusioned after sexual contact and evaded me. On account of
                                    you, I have an extensive penis to be glad for and fulfilled ladies accomplices. I can't thank you enough! </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-circle-check"></i>
                            </div>
                            <div class="text">
                                <p align="justify">I am a devotee. I began utilizing Ayurveda Sanda on 2 November 2018. When I began I was 15.5 cm erect and about 11.75 cm bigness. I have been utilizing it consistently. As of now, I am 16.5 cm erect. I haven't checked my
                                    circumference, yet when it is in its erect state, it is recognizably and feels much thicker. 19 cm is the objective.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-circle-check"></i>
                            </div>
                            <div class="text">
                                <p align="justify">I was searching for something that could enable me to get erections when I required them. Some of the time after a couple of beverages, I found that things weren't 'working' very like previously. ProlargentSize changed
                                    all that, and now my erections resemble steel. </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-circle-check"></i>
                            </div>
                            <div class="text">
                                <p align="justify">My better half cherishes this stuff thus do I. on the off chance that you are hoping to fulfill your ladies, at that point go no more distant than this item. Out it an attempt and you will compose audits straightaway, I
                                    guarantee you. Extraordinary stuff, by and large, basically the best I have attempted available.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-circle-check"></i>
                            </div>
                            <div class="text">
                                <p align="justify">I purchased this item for my significant other, who dependably said he wanted to be greater down there. Following a month and a half of normal use, and a considerable amount of fun simultaneously, we both are seeing some
                                    BIG changes down there. Our sex is increasingly agreeable, his certainty is improved. I would prescribe this to any spouse wishing her significant other had somewhat more size down there.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <div id="faq-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="assets/images/icon-cross.svg"></button>
                    <h4 class="modal-title">Frequently Asked Questions</h4>
                </div>
                <div class="modal-body scroll">
                    <h4>Can you given information about Kam-Ratan?</h4>
                    <p align="justify">Kam-Ratan is a completely Ayurvedic product that increases the Cock Size of your penis in a completely Ayurvedic manner. Along with penis enlargement, this product gives you better performance and Hard Erection as well which helps
                        you get the best pleasure, Guranteed satisfaction, and long lasting experience in sex with your partner.</p>

                    <h4>How POWER GEN XTRA work to gives the Good result?</h4>
                    <p>This Tablet contains a special formula that stimulate the blood flow into your penis and it also increases the expansion of your blood vessels in a safe way. As a result of that it increases the Cock Size and girth of your penis in
                        quick and easy way. In addition to penis enlargement, POWER GEN XTRA enhances the hormonal growth rate as well in your body which helps you get better sexual relationship.</p>

                    <h4>Can you please explain Kam-Ratan?</h4>
                    <p align="justify">POWER GEN XTRA not only increase the Cock Size and girth of your penis, but it will improve your sex dive and pleasure as well in sexual relationship. Along with penis enlargement, you get stronger erection that last for longer period
                        and it gives you higher level of confidence as well.</p>

                    <h4>How to we get & time Kam-Ratan to my address?</h4>
                    <p align="justify">In a normal situation, we would ship the same on next working day. That means you will get the same from us in 4-6 working days which may vary depending on your specific location.</p>

                    <h4>What are the recommended doses for Kam-Ratan?</h4>
                    <p align="justify">To get the best result for penis enlargement you should take one Tablet of POWER GEN XTRA every morning with a glass of Fresh Milk.</p>

                    <h4>What are the side effects of Kam-Ratan?</h4>
                    <p align="justify">The simple answer of this question is none. POWER GEN XTRA is a solution which is made of completely Ayurvedic products. So, you are not going to have any kind of side effects by this penis enlargement Tablet. That also means you can
                        use it without any kind of prescription. Is result of POWER GEN XTRA are permanent or temporary? The results that you get with the help of POWER GEN XTRA are completely permanent. That means length and girth of your penis will
                        remain increased even after you stop consuming the Tablet by completing its course. But it is also recommended that you should repeat the course with regular interval to maintain the strength.</p>

                    <h4>How long do I need to take Kam-Ratan?</h4>
                    <p align="justify">Ideally you shall take the complete 6 months’ treatment to get the best penis enlargement result by Kam-Ratan. That will help you get up to 2.5-inch addition in your penis Cock Size. In addition to this you should also repeat the
                        treatment for few weeks every year so you can have some good result every time.</p>

                    <h4>How I can order Kam-Ratan for my use?</h4>
                    <p align="justify">Ordering Kam-Ratan is very simple. You would see an order form on our website and you can place and order using that order form. Other than this, you can also make a call to us on our number 0733881462 and you can order on the
                        phone.
                    </p>

                    <h4>Do I need to pay money before getting the product in my hand?</h4>
                    <p align="justify">We trust on our customer and that is why we offer COD service to all of our customers. That means you can order us on phone or on website and you can pay for same when you get it in your hand.</p>
                </div>
            </div>
        </div>
    </div> -->

    <!------------contact popup------------>
    <div id="contact-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-circle-cross"></i></button>
                    <h4 class="modal-title">Contact Us</h4>
                </div>
                <div class="modal-body scroll">
                    <div class="alert alert-success" id="successAlert">
                        <strong>Success!</strong> Your Request has been successfully sent
                    </div>
                    <form action="" enctype="multipart/form-data" id="contactForm" method="POST">
                        <div class="form-group">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="userName" placeholder="नाम" id="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" data-msg-required="Please enter Phone Number." rows="10" class="form-control" name="subject" placeholder="फोन नंबर" id="email" maxlength="10" required>
                        </div>

                        <div class="form-group">
                            <input type="text" value="" data-msg-required="Please enter your address" rows="10" class="form-control" name="userEmail" placeholder="पता" id="message">
                        </div>
                        <!--<div class="form-group">-->
                        <!--   <div class="g-recaptcha" data-sitekey=""></div>-->
                        <!--</div>-->
                        <div class="order-now-btn">
                            <button type="submit" id="submitOrder" value=" अभी ऑर्डर करें " name="send" onclick="myFunction()">आर्डर करे</button>
                        </div>
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
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-----------booknow popup------------>
    <div id="booknow-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-circle-cross"></i></button>
                    <h4 class="modal-title">Book your order here</h4>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data" id="contactForm" method="POST">
                        <div class="form-group">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="userName" placeholder="नाम" id="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" data-msg-required="Please enter Phone Number." rows="10" class="form-control" name="subject" placeholder="फोन नंबर" id="email" maxlength="10" required>
                        </div>

                        <div class="form-group">
                            <input type="text" value="" data-msg-required="Please enter your address" rows="10" class="form-control" name="userEmail" placeholder="पता" id="message">
                        </div>
                        <!--<div class="form-group">-->
                        <!--   <div class="g-recaptcha" data-sitekey=""></div>-->
                        <!--</div>-->
                        <div class="order-now-btn">
                            <button type="submit" id="submitOrder" value=" अभी ऑर्डर करें " name="send" onclick="myFunction()">आर्डर करे</button>
                        </div>
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
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!------------terms popup------------>
    <!-- <div id="term-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-circle-cross"></i> x</button>
                    <h4 class="modal-title">Terms & Conditions</h4>
                </div>
                <div class="modal-body">

                    <p align="justify"> Terms and condition for utilization of this site and obtaining from it Following are few of the terms and conditions that are material to the majority of our customers or clients. You can think about this as an assention among you
                        and <strong>Kam-Ratan </strong>. Before you peruse our site any further, we would request that you read and comprehend the terms and condition painstakingly. We roll out improvements in wording and condition all the time because
                        of different necessities and that is the reason you may see a few changes in it from your past visit. On the off chance that you are utilizing our site, it implies you acknowledge our terms and conditions without having any inquiries
                        or worries for same. Likewise, when you utilize the site again in future, you will check this page so you can remain refreshed with current terms and condition. On the off chance that, you have a conflict with the terms or conditions,
                        at that point you will quit utilizing our site immediately on the grounds that your consistent utilize would be named as an acknowledgment for same.</p>
                    <br>
                    <h4><strong>GENERAL</strong></h4>

                    <p align="justify">Following terms that are referenced on this page will control your rights on our site. On the off chance that you have any past variant of terms or conditions, you can overlook that in light of the fact that just directly referenced
                        terms are adequate for same.</p>

                    <p align="justify">To utilize this site, you should be over 18 years of age. On the off chance that you are underneath this age, you have to take your folks or watchmen authorization to utilize our site <strong>Kam-Ratan</strong> and to arrange penis
                        amplification items from us. In the event that you have any nearby law that confines you to utilize a penis broadening arrangement which isn't affirmed by FDA, at that point we would recommend you to withstand the law and not to
                        arrange it from us. We may not assume any liability about nearby laws or different things and that is the reason you will check things shrewdly before utilizing our site or before requesting an item from us.</p>

                    <p align="justify">Following terms may change without giving any notice to you or some other individual You have this acknowledgment that we gave every one of the guarantees and data to you legitimately and its endorsed according to terms and conditions.</p>

                    <p align="justify">We dependably attempt to ensure that every single detail that you see on <strong>Kam-Ratan </strong> is precise, refreshed and finished. Be that as it may, paying little respect to our everything the endeavors, a portion of the sites
                        might be obsolete, fragmented or have needed in precision because of different reasons.</p>

                    <p align="justify">All the points of interest, pictures, portrayal, or particular that you see on this site for penis amplification are there just for instructive reason. Likewise, it gives you just a surmised outcome about the effectiveness and aftereffects
                        of this penis expansion solution.</p>

                    <p align="justify">Please comprehend, you ae permitted to utilize <strong>Kam-Ratan </strong> in a totally legitimate, harmless and genuine way. You ought to pursue all the general practices that are suggested by your locale for keeping the elevated
                        requirement of the society.</p>

                    <p align="justify">Our site <strong><strong>Kam-Ratan </strong></strong> may have some graphical substance that can be grown-up in different nature. These graphical substance can incorporate pictures and recordings. These grown-up graphical substance
                        could possibly have the immediate association with our penis expansion medication. By getting to this site, you demonstrate your affirmation for these graphical substance and you would not take it in a hostile way. Additionally,
                        you have to concur that you are utilizing this site in your knowledge.</p>

                    <p align="justify">We endeavored to specify the data in a totally easy to understand way. So please ensure you read it deliberately and comprehend it as well.</p>

                    <br>

                    <h4><strong>Order of Products</strong></h4>

                    <p align="justify">At <strong>Kam-Ratan </strong>, we have all rights to access or decline any request that you place to us for penis extension prescription from us.</p>

                    <p align="justify">When you would submit a request with COD component, at that point our agents may call you for having an affirmation of your request. When we call you, at that point we may record the call as verification for your future correspondence.</p>

                    <br>

                    <h4><strong>COD</strong></h4>

                    <p align="justify">order. On the off chance that you decline to acknowledge the request in the wake of putting in the request, you should pay for delivery expenses both side else we will have the privilege to take all essential legitimate activities
                        against you.</p>

                    <p align="justify">While putting in the request, you have to ensure that you give precise data to delivery of your request. On the off chance that we dispatch the request at the wrong location given by you or on the off chance that it doesn't get transported
                        by any stretch of the imagination, you will be considered in charge of giving incorrectly data. We will think about your email affirmation, telephone affirmation or request on telephone as confirmation for same.</p>

                    <p align="justify">The accessibility of the items is subject to stocks. In the event that we don't have it in stock, we will give you points of interest for same when we have accessibility of the item with us. In that circumstance, you can either sit
                        tight for the item till it's accessible or you can drop the request and you can recover your cash whenever paid in advance.</p>

                    <p align="justify">In instance of any confusion, concerns or issues related <strong>POWER GEN XTRA </strong> or our penis growth drug, you may get in touch with us on telephone number which is accessible on our website.</p>

                    <p>Our messenger accomplice will make three endeavors for conveying the item to you at your given address.</p>

                    <p align="justify">They would likewise reach you by means of the telephone number that you gave to us. Be that as it may, on the off chance that you are not accessible on telephone or on your given location, you will be considered in charge of same and
                        we won't acknowledge your unconditional promise in that circumstance. Likewise, in the event that not paid ahead of time, we may charge shipping expense (both side) for the burden that you provided for us.</p>

                    <p align="justify">We pick our messenger accomplice in, and we do the bundling in a way that you don't get any harm for same. In any case, in the event that you get it in a harmed circumstance, you can deny taking the item from them. In any case, when
                        you deny a similar then we suggest you take a few photos of the harmed box and you get in touch with us with that data. This data will enable us to distinguish the bundling and we would likewise have enough subtle elements to raise
                        a grievance to our dispatch partner.</p>

                    <p align="justify">As far as the arrival of boxes is concerned, we will reclaim each one of those containers our penis broadening drug that is organization stuffed. In this arrival, we won't have the capacity to reclaim the open boxes, and we will discount
                        your cash just for the got boxes. In this sum, we will deduct 10% preparing expenses and all the transportation charges.</p>

                    <p>With this request situation at <strong>Kam-Ratan </strong>, you give us expert to reach you for advancement or data purpose.</p>

                    <br>

                    <h4><strong>Liability Related to this order</strong></h4>

                    <p>The term risk is utilized for any sort of harm, procedures, activities, costs, cost, cases and all sort of other losses.</p>

                    <p align="justify">At <strong>Kam-Ratan</strong> we don't make any sort of guarantee for the penis augmentation items that we move on our site. We never give any sort of duty about reasonableness or acknowledgment of the material for an explicit or nonspecific
                        reason. Every one of the items or materials that you get on our site, you get that as it has no guarantees in any manner.</p>

                    <p align="justify">We explicitly <strong>DENY ALL THE WARRANTIES FOR THE PENIS ENLARGEMENT PRODUCTS THAT YOU SEE ON OUR WESITE.</strong> This disavowal of guarantees is pertinent on title, merchantability, wellness and the various factors as well.</p>

                    <p align="justify">All the conclusions, information, data, articulations or any sort of proposal that you see on <strong>Kam-Ratan</strong> depend on the subtle elements that we got from outsiders. These subtle elements from outsiders likewise included
                        restorative research, clients tribute, specialists that underwrite our penis augmentation medication, providers of the items, volunteers taking part by means of web discussions and other accessible writing. We or any delegate of
                        <strong>Kam-Ratan </strong> never vouch for the precision, dependability, conclusion or cases that you see on our site. Here, we consider your utilization of our site as an affirmation from you that in the event that you trust
                        on any of these things or sentiments, you will take all obligations regarding that. The penis growth arrangement that we give to you are conveyed to you "As may be" and we don't include any sort of guarantees for same on our website.</p>

                    <p align="justify">Although our site is anchored and totally free from any sort of infection, Trojans or other malware, however then additionally we prescribe you to utilize appropriate safety efforts while utilizing <strong>Kam-Ratan </strong> or some
                        other site. In the event that you get any sort of infection or other contamination in your PC or system while perusing our site to take in more about our penis augmentation arrangement, at that point we won't assume any liability
                        for that damaged.</p>

                    <p align="justify">We don't take or acknowledge any sort of obligation for the disappointment or imperfection of the items in any circumstance. That implies in the event that you are not getting appropriate outcome with the penis broadening prescription
                        as a result of abuse, misuse, change in the generation or any complexity issue, we won't assume liability for that in any condition.</p>

                    - - -

                    <p align="justify">Before you utilize our items for penis extension, it is unequivocally prescribed that you accept some exhortation from a prepared and approved restorative professional. In the event that you are taking a drug or other enhancement,
                        that may have some similarity issue with our penis augmentation arrangement. Other than this, at some point your therapeutic condition may likewise make you unfit for the utilization of this item. We won't take any sort of reactions
                        or wounds because of absence of master exhortation or some other reasons.</p>

                    <p align="justify">If you think of a few that make a question among you and us as a result of our disclaimer, protection strategy, terms-condition, or in light of some other reason, at that point first you will raise
                    </p>
                </div>
            </div>
        </div>
    </div> -->


    <!------------Privacy  popup------------>
    <!-- <div id="privacy-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="assets/images/icon-cross.svg"></button>
                    <h4 class="modal-title">Privacy and Policy</h4>
                </div>
                <div class="modal-body">

                    <p align="justify">We are happy to have you on our site and we will endeavor to give the best administrations to you in your penis amplification needs. Be that as it may, before moving any further, we ask for you to precisely peruse and comprehend the
                        protection arrangement in a nitty gritty way. We implement this protection approach on our site <strong>Kam-Ratan </strong> to give the best administrations to the majority of our customers.</p>

                    <p align="justify">We utilize this security arrangement on <strong>Kam-Ratan </strong> to ensure all privileges of our site guests, clients and our partners too. That is the reason it is fundamental that you perused it painstakingly and you utilize our
                        site just on the off chance that you don't have any sort of issue with it.</p>

                    <p align="justify"><strong>Collected information:</strong> When you visit our site to find out about out penis development arrangement, at that point we gather various subtle elements that can incorporate your own data also some non-individual information
                        too. In the non-individual data, we may gather data, for example, your ISP name, IP address, PC screen goals, working framework name, program name, time of utilization, etc.</p>

                    <p>In your private data we will gather every one of the information that you will provide for us in any of our structures. This private information can incorporate your name, email ID, telephone number, address, or any data that you would
                        provide for us on our website.</p>

                    <p align="justify"><strong>Protection of information:</strong> We comprehend penis broadening is a subject that requires prudence and we regard your security too. So we gather and assemble every one of the information from you, however, we never share
                        the equivalent with any obscure individual or gathering. We keep all the gathered the information in our anchored servers and we give careful consideration on the security of the information also. Thus, we can give you a confirmation
                        that your information will never go into wrong delivers any condition.</p>

                    <p align="justify"><strong>Sharing of information:</strong> Indeed, we keep the information in our anchored servers and we will never share it to non-dependable people.</p>

                    <p align="justify">? We generally bolster the law and legal framework and in the event that we get a demand for data sharing from any law implementation office, at that point we will have no alternative other than sharing of the information to them.
                        In this circumstance, we may need to share fractional or finish information with them. Be that as it may, before sharing the information, we do check that asks for is originating from the correct source and we give just those points
                        of interest that are needed.</p>

                    <p align="justify">? In the event of any burglary or misrepresentation action, we may need to share the data or gathered information to those private offices that are helping us in the examination part. Be that as it may, we will ensure they don't pitch
                        the information to anybody, and they could never utilize it again for their advantage or for your loss.</p>

                    <p align="justify">? We may likewise need to impart the information to our sister concerns and to different associations that can enable us to develop our business or to help our clients in a better way. That implies in the event that we or our sister
                        concern locate any new achievement in penis development arrangements, at that point we may share information to them.</p>

                    <p align="justify"><strong>Use of information:</strong> The utilization of gathered information may shift contingent upon the gathered information and circumstance. We can utilize it for enhancing our site, we can utilize it for upgrading our administrations
                        and we can utilize it some advancement function too. Be that as it may, when will utilize it for advancement or showcasing reason, at that point we will ensure you get no complexity from our side. Likewise, we will never tell individuals
                        that you got to our site <strong>Kam-Ratan</strong> or utilized penis growth arrangements from us. On some unique events, we may likewise utilize the information to connect with you so we can educate insights about offers and different
                        penis amplification answers for you.</p>

                    <p align="justify"><strong>We utilize cookies:</strong> In present time, each site utilizes treats for better working and its smooth task. Like different sites, we likewise utilize treats on our site that assistance we do different works in simple ways.</p>

                    <p align="justify">If you are unaware what a treat is, it is a little PC that gets replicated on your PC from our site server. This content record encourages us to recognize you on the individual way and we think that its simple to serve you in the most
                        ideal way. This little treat document recalls data or inclinations given by you and it helps the site route too. It would be ideal if you comprehend on the off chance that you would incapacitate the utilization of treats, you won't
                        see our site inappropriate way, and it will be hard for you to utilize. Along these lines, we would urge you not to incapacitate the treat while utilizing our site <strong>Kam-Ratan </strong> to find out about our penis development
                        medicine.
                    </p>

                    <p align="justify"><strong>Link to other website:</strong> Although we don't share any connection or URL on our site, however in the event that you see any connection that isn't partnered by <strong>POWERBOOSTER </strong>, at that point we would propose
                        you to utilize that all alone hazard. We have a duty just for <strong>Kam-Ratan </strong> and on the off chance that you get to different connections, you will peruse all the security arrangement and terms page of that site before
                        utilizing that website.</p>

                    <p align="justify"><strong>Users sentiment and comments:</strong> On our site, you can see a few remarks and conclusions from our clients and results identified with their penis development impacts. We don't have any control on their words and they give
                        their input based on their conclusions. Along these lines, when you trust on their positive or negative audits or suppositions, at that point ensure you do it all alone hazard. Likewise, before settling on any official conclusion
                        it is exhorted that you accept second feeling too in light of the fact that we won't hold any duty regarding the words given by users.</p>

                    <p align="justify"><strong>Change of policy:</strong> Things continue changing with time and over some undefined time frame, we may likewise need to change our protection arrangement too. Later on, we may need to roll out improvements in our security
                        arrangement and we can do that without giving any notice or data to anybody contingent upon the circumstance. Along these lines, in the event that you come here frequently, we propose you to continue checking this page for better
                        information.
                    </p>

                    <p align="justify">If you have any sort of conflict with our security strategy, at that point please leave the site and get in touch with us with your worries. On the off chance that despite everything you utilize this site, it will be a sign you have
                        no confusion or issues with this security arrangement. It will likewise mean you won't have any righto make a grumbling about the equivalent later on. Along these lines, if it's not too much trouble push forward just in the event
                        that you concur with this protection approach and every one of the substances given in it.</p>

                </div>
            </div>
        </div>
    </div>
 -->

    <!------------disclaimer popup------------>
    <!-- <div id="disclaimer-popup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><img src="assets/images/icon-cross.svg"></button>
                    <h4 class="modal-title">Disclaimer</h4>
                </div>
                <div class="modal-body">

                    <p align="justify">You need to understand that results are given by <strong>Kam-Ratan</strong> for penis enlargement will vary depending on various things including the physical condition of a person, diet, lifestyle, etc. So while expecting results,
                        it is advised that you keep following things as well in your mind.</p>

                    <p align="justify">Also, you shall keep this thing in your mind that all the testimonials that you see in our website are from real people who got a great result in their penis enlargement with this medicine. But these are few of the testimonials from
                        all those customers that used and got benefits with <strong>Kam-Ratan</strong>. So, you may or may not get the same kind of result in your requirement with this medicine.</p>

                    <p align="justify">Doing exercise and following a healthy lifestyle is a good thing and we always encourage you for same. But we also recommend you to consult your physician or doctor before you make any changes in your diet or lifestyle. We would recommend
                        you to follow the same suggestion before choosing any kind of new exercise routine for your health.</p>

                    <p align="justify">Any of our penis enlargement medicine does not have any approval from the Food and drug administration department and we never claim it. Also, we do not claim any kind of treatment, cure or prevention of any kind of disease with any
                        of our medicine. That means when you use this then you shall remember this thing as well in your mind. At <strong>Kam-Ratan</strong> we never give any kind of medical treatment for penis enlargement, suggestions, and other
                        similar information. Therefore, you shall consult your doctor's advice before starting this medicine to get the best result and to avoid any complication</p>
                </div>
            </div>
        </div>
    </div> -->


    <script src="assets/js/jquery.1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/js/owlcarousel/owl.carousel.css">
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/wow.js"></script>

    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(e) {
            if (screen.width < 768) {
                $('.mobile-menu-button').click(function() {
                    $(".menu").slideToggle("");
                });
            }
        });
        $(document).ready(function() {
            $("header .menu a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();

                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll <= 500) {
                    $(".fixed-footer").removeClass("open");

                } else {
                    $(".fixed-footer").addClass("open");
                }
            });
        });
    </script>
    <script>
        // Set the date we're counting down to
        //var countDownDate = new Date("Aug 25, 2018 10:37:25").getTime();
        //new Date(milliseconds + 4 * 3600 * 1000 /*4 hrs in ms*/)

        var countDownDate = new Date();
        countDownDate.setTime(countDownDate.getTime() + 1.5 * 3600 * 1000);

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("timer").innerHTML = hours + "h:" + " " + minutes + "m:" + " " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "OFFER .EXPIRED";
            }
        }, 1000);
    </script>
</body>
<!-- 
<script>
    'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
            'tccl.baseHost': 'secureserver.net'
        }), _trfd.push({
            'ap': 'cpsh'
        }, {
            'server': 'sg2plcpnl0253'
        }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script> -->

</html>