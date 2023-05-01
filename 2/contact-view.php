<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script type="text/javascript" src="./assets/jquery-1.12.4.min.js"></script>

    <script>
        function adc_clearFooter() {
            var ac_footer__elem = document.getElementsByClassName('ac_footer'),
                ac_footer__p = ac_footer__elem.length ? ac_footer__elem[0].getElementsByTagName('p') : [],
                ac_footer__p_last = ac_footer__p[ac_footer__p.length - 1];
            ac_footer__p_last && ac_footer__p_last.innerText === '' && ac_footer__p_last.remove();
        }
    </script>

    <script type="text/javascript" src="./assets/secondPage.js"></script>
    <link type="text/css" href="./assets/secondPage.css" rel="stylesheet" media="all">

    <style>
        .ac_footer {
            position: relative;
            text-align: center;
            overflow: hidden;
            padding: 50px 0;
            color: #A12000;
        }
        
        .ac_footer a {
            color: #A12000;
        }
        
        .ac_footer p {
            text-align: center;
        }
        
        img[height="1"],
        img[width="1"] {
            display: none !important;
        }
    </style>
    <!--retarget-->

    <!--retarget-->



    <script type="text/javascript" src="./assets/11_12.min.js"></script>



    <!-- optimizations -->


    <!---->



    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title> Kam-Ratan </title>
    <link href="./assets/jquery.bxslider.css" rel="stylesheet">
    <link href="./assets/animation.css" rel="stylesheet">
    <link href="./assets/animate.css" rel="stylesheet">
    <link href="./assets/style.css" rel="stylesheet">
    <link href="./assets/media.css" rel="stylesheet">
    <link href="./assets/bootstrap.min.css" rel="stylesheet">
</head>

<body data-lang="IN">
    <!--retarget-->

    <!--retarget-->

    <section class="wrapper s__main">
        <div class="strong">
            <div class="container">
                <div class="strong__inner">
                    <div class="logo" style="margin-top:5px">
                        <p class="logo-title"> <a href="#order_form">Kam-Ratan</a>  <span class="logo-title__item" style="font-size: 60px;font-weight: 600;"></span>
                            <span class="logo__afterword"> पुरुषों के लिए क्रांतिकारी कैप्सूल </span>
                        </p>
                    </div>
                    <div class="cert-stamp">
                        <img alt="" src="./assets/cert-1.png">
                        <img alt="" src="./assets/cert-2.png">
                        <img alt="" src="./assets/cert-3.png">
                    </div>
                    <div class="power">
                        <h3 class="power-title"> जोश जवानी और
                            <span class="power-title__item">ताकत
                                
                            </span>
                        </h3>
                        <ul class="plus" id="change_d">
                            <li class="plus__list plus__list_img1"> अधिक
                                <span class="plus__list__item"> स्टैमिना </span>
                            </li>
                            <li class="plus__list plus__list_img2"> लंबे समय तक
                                <span class="plus__list__item"> खड़ापन </span>
                            </li>
                            <li class="plus__list plus__list_img3"> अधिक शक्तिशाली
                                <span class="plus__list__item"> स्खलन </span>
                            </li>
                        </ul>
                        <a href="#order_form"> <img id="img" src="./assets/product1.png"></a>
                    </div>
                    <!--/power-->
                </div>
            </div>
            <!--/strong__inner-->
        </div>
        <!--/container-->
        <!--/strong-->
        <section class="section-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <form action="" enctype="multipart/form-data" class="form-submit pt-4" id="form" method="POST">
                            <h4 class="animated pulse infinite">अब ऑर्डर करें</h4>
                            <!-- <div class="strong-price">
                                <span class="old-price">20% OFF</span>
                                <span class="new-price">50% OFF</span>
                            </div> -->
                            <input class="form__element form__element--input" value="" name="userName" placeholder="नाम" type="text" required="">
                            <input class="form__element form__element--last form__element--input only_number onlynumber" value="" name="subject" placeholder="फोन नंबर" type="text" required="">
                            <div class="form__element form__element--wrapper">
                                <div class="form__arrow"></div>
                                <select class="form__element form__element--select" id="country_code_selector" name="baddress" placeholder="price" type="text" value="">
                                    <option value="Pack of 1"> Pack of 1 </option>
                                    <option value="Pack of 2"> Pack of 2 </option>
                                   <option value="Pack of 3"> Pack of 3 </option>
                                    </select>
                            </div>
                            <button class="animated  pulse infinite  btn" type="submit" value=" अभी ऑर्डर करें " name="send"><span> 50% छूट पर ऑर्डर करें </span></button>
                            <input type="hidden" name="time_zone" value="5.5">
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
                        <style>
                            form {
                                width: 100%;
                                margin-left: auto;
                                margin-right: 50px;
                            }
                            
                            @media (max-width: 767px) {
                                form {
                                    max-width: 480px;
                                    margin: 0 auto;
                                }
                            }
                            
                            .form__element {
                                display: block;
                                width: 100%;
                                border: none;
                                box-sizing: border-box;
                                background: #dcdcdc;
                                border-radius: 50px;
                                padding: 12px 0;
                                padding-right: 15px;
                                margin: 0 auto;
                                margin-bottom: 10px;
                                position: relative;
                                font-size: 16px;
                                line-height: 19px;
                                color: #000000;
                                padding-left: 15px;
                                position: relative;
                                z-index: 5;
                                outline: none;
                            }
                            
                            .form__element--wrapper {
                                padding: 0;
                                border: none;
                                position: relative;
                            }
                            
                            .form__element--select {
                                cursor: pointer;
                                z-index: 1;
                                white-space: nowrap;
                                text-indent: 0.01px;
                                background: transparent;
                                -webkit-appearance: none;
                                margin-bottom: 0;
                            }
                            
                            .form__arrow {
                                display: block;
                                width: 45px;
                                height: 100%;
                                background: transparent;
                                position: absolute;
                                right: 0;
                            }
                            
                            .form__arrow::before {
                                content: "";
                                display: block;
                                position: absolute;
                                width: 0;
                                height: 0;
                                top: 3px;
                                bottom: 0;
                                right: 0;
                                left: 0;
                                margin: auto;
                                border-right: 5px solid transparent;
                                border-left: 5px solid transparent;
                                border-top: 6px solid #5c5c5c;
                            }
                            
                            select::-ms-expand {
                                display: none;
                            }
                            
                            .form__select::-ms-expand {
                                display: none;
                            }
                            
                            .form__btn {
                                width: 100%;
                                border: none;
                                position: relative;
                                z-index: 5;
                            }
                            
                            .order__column--right {
                                max-width: 370px;
                            }
                            
                            @media (max-width: 991px) {
                                .order__column--right {
                                    max-width: 100%;
                                }
                                .order__text p {
                                    font-size: 22px;
                                    line-height: 42px;
                                }
                                .order__columns {
                                    flex-direction: column;
                                }
                                .btn {
                                    font-size: 22px;
                                    line-height: 28px;
                                }
                            }
                            
                            .order__columns {
                                display: flex;
                                align-items: center;
                            }
                            
                            .btn {
                                background: #ffba00;
                                box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25);
                                border-radius: 50px;
                                font-weight: bold;
                                font-size: 22px;
                                line-height: 30px;
                                text-align: center;
                                color: #ffffff;
                                display: block;
                                padding: 9px 30px;
                                cursor: pointer;
                                transition: all 0.1s;
                                max-width: 580px;
                                transition: all 0.3s;
                                outline: none;
                                position: relative;
                            }
                            
                            .btn:hover {
                                transform: scale(1.05);
                            }
                        </style>
                    </div>
                    <div class="col-lg-8">
                        <h2>सेक्स टाइमिंग 40 से 45 मिनट तक बढ़ाये| असर देखे पहले ही दिन से | फायदा न होने पर पूरे पैसे वापस
                            <hr>
                            <span style="color:white; font-size:35px;">
                            <a href="#order_form"><img alt="" src="./assets/4.jpg" style="width: 305px;"></a><br><br>
<h2>मात्र 15 दिनों में लिंग की लम्बाई 7" से 8" इंच और मोटाई ३" तक बढ़ाये
                                    <hr><span style="color:white; font-size:35px;"></span></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h2>देर न करे अभी आर्डर करे <br> </h2>
                            </div>
                            <div class="col-md-6">
                                <a href="#order_form"> <img alt="" src="./assets/topsecret.gif" style="width: 155px;">
                                </a> <span style="color:white; font-size:35px; "><br>गुप्त डिलीवरी</span>
                            </div>
                        </div>
                        </span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="problem">
            <div class="container">
                <div class="problem__inner">
                    <div class="problem-title">
                        70% पुरुषों को
                        <span class="problem-title__item"> समस्याएँ होती हैं </span>
                    </div>
                    <div class="symptoms">
                        <p class="symptoms-item"> थकान </p>
                        <a href="#order_form"><img alt="" src="./assets/problem-img1.jpg"></a>
                    </div>
                    <div class="symptoms">
                        <p class="symptoms-item"> नामर्दी </p>
                        <a href="#order_form"> <img alt="" src="./assets/problem-img2.jpg"></a>
                    </div>
                </div>
                <div class="problem__inner problem__inner_modify">
                    <div class="symptoms symptoms_modify">
                        <p class="symptoms-title"> बस एक आँकड़ा बन कर न रह जाएँ </p>
                    </div>
                    <div class="symptoms">
                        <a href="#order_form"> <img alt="" src="./assets/problem-img3.jpg"> </a>
                        <p class="symptoms-item symptoms-item_modify"> दुर्लभ हो गए हैं <span class="symptoms-item_inner"> सेक्स </span> के मौके </p>
                    </div>
                    <div class="symptoms">
                        <a href="#order_form"> <img alt="" src="./assets/problem-img4.jpg"></a>
                        <p class="symptoms-item symptoms-item_modify"> कम समय चलता है <span class="symptoms-item_inner">
                                सेक्स </span> संभोग </p>
                    </div>
                    <div class="symptoms">
                        <a href="#order_form"> <img alt="" src="./assets/problem-img5.jpg"></a>
                        <p class="symptoms-item symptoms-item_modify"> खराब <span class="symptoms-item_inner"> शारीरिक
                            </span> बनावट </p>
                    </div>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--/problem-->
        <div class="change">
            <div class="container">
                <div class="change-wrap">
                    <div class="change__inner">
                        <div class="text-center">
                            <h3 style="color:white;"> तुरंत फर्क दिखेगा,
                                <span class="grid-title__item"> पहली </span> कैप्सूल लेते ही
                            </h3>
                            <a href="#order_form"> <img alt="" src="./assets/5.jpg" width="100%;"> </a>
                        </div>
                        <ul class="action">
                            <li class="action__list">
                                <span class="action__list__item"> इसमें शामिल एल-सिट्रूलीन </span> पदार्थ <span class="action__list__item"> उस फॉस्फ़ोडाईस्टेरसिस फ़र्मेंटेशन के विकास को रोकता है,
                                </span> जो लिंग में रक्त के प्रवाह में बाधा डालता है
                            </li>
                            <li class="action__list">
                                लिंग की मांसपेशियाँ रिलैक्स हो जाती हैं
                            </li>
                            <li class="action__list"> इसमें रक्त तुरंत प्रवेश कर जाता है,
                                <span class="action__list__item"> जिससे कामेच्छा आने पर तुरंत खड़ा हो जाता है </span>
                            </li>
                        </ul>
                    </div>
                    <div class="change__inner change__inner_modify">
                        <div class="grid">
                            <div class="grid__inner">
                                <div class="grid__img grid__img1"></div>
                                <div class="grid__img grid__img2"></div>
                                <div class="grid__img grid__img3"></div>
                                <div class="grid__img grid__img4"></div>
                                <div class="grid__img grid__img5"></div>
                            </div>
                            <div class="grid-arrows">
                                <div class="arrows__top"></div>
                                <div class="arrows__left"></div>
                            </div>
                        </div>
                        <h3 class="grid-title"> तुरंत फर्क दिखेगा,
                            <span class="grid-title__item"> पहली </span> कैप्सूल लेते ही
                        </h3>
                    </div>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--/change-->
        <div class="why">
            <div class="container">
                <div class="why-wrap">
                    <div class="why__inner">
                        <div class="garant-line">
                            <a href="#order_form">
                                <p class="why-title">Kam-Ratan </p>
                            </a>
                        </div>
                        <p class="why-techno">
                            इंस्टेंट एक्स्पांशन तकनीक से सक्रिय पदार्थ सीधे लिंग में जाते हैं, <span class="why-techno__item"> जिससे </span> वह <span class="why-techno__item"> जितना संभव हो
                                उतना बड़ा हो जाता है </span>
                        </p>
                    </div>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--/why-->
        <div class="effect">
            <div class="container">
                <div class="effect__inner">
                    <ul class="effects">
                        <li class="effects__list"> उत्तेजना
                            <span class="effects__list__item"> नाइट्रोजन ऑक्साइड (एनओ) का बाहर निकलना </span>
                            <span class="effects__list__number">1</span>
                        </li>
                        <li class="effects__list"> लिंग की मांसपेशियों का रिलैक्स हो जाना
                            <span class="effects__list__item"> गुआनोसाइन नाम के पदार्थ का उत्पादन होने लगता है </span>
                            <span class="effects__list__number">2</span>
                        </li>
                        <li class="effects__list"> लिंग को रक्त से भर देता है
                            <span class="effects__list__item"> साइक्लिक मोनोफॉस्फेट गुआनोसाइन सिंथेसिस (सीएमजीएस)
                            </span>
                            <span class="effects__list__number">3</span>
                        </li>
                        <li class="effects__list"> तुरंत खड़ा होता है
                            <span class="effects__list__item"> रक्त प्रवाह के लिए धमनियों का चौड़ा होना </span>
                            <span class="effects__list__number">4</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--/effect-->
        <div class="want">
            <div class="container">
                <div class="want__inner want__inner_modify">
                    <div class="want-title-wrap">
                        <h3 class="want-title"> क्या आप चाहते हैं
                            <span class="want-title__item"> शक्तिशाली <b>खड़ापन</b>, </span> एक शेर जैसा खड़ापन?
                        </h3>
                    </div>
                    <!-- <a href="#contact"> -->
                    <div class="want-line pre_toform">
                        <p class="want-line__text blink-text"> तो ऑर्डर करें </p>
                    </div>
                    <!-- </a> -->
                    <a href="#order_form"> <img id="img2" src="./assets/product1.png"> </a>
                    <div class="button-wrap button-wrap_want">
                        <button class="button pre_toform blink-text"> अभी ऑर्डर करें  </button>
                    </div>
                </div>
                <div class="brand">
                    <p class="brand__vertical"> Kam-Ratan </p>
                    <p class="brand__horisontal"> Kam-Ratan
                    </p>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--/want-->
        <section class="section-9" style="background-color: black;">
            <div class="container">
                <h3>हमारे संतुष्ट ग्राहकों का खुला सत्यापन<br><small>यहाँ दिखाए गए फोटो और कथन हमारे वफ़ादार ग्राहकों द्वारा भेजे गए हैं:</small></h3>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="sec-1">
                            <a href="#order_form"> <img alt="" src="./assets/gif.gif"></a>
                            <p>
                                मेरी पत्नी को हमारी शादी के बाद बहुत शिकायतें रहती थीं। इसका कारण थे मेरा छोटा लिंग और सेक्स मैं कमजोरी। मैंने कई तरह के प्रोडक्ट ट्राई करके देख लिए थे लेकिन कुछ भी असर नहीं करता था। इनमें से कई के तो साइड इफेक्ट होते थे। इसके बाद मुझे Kam-Ratan के बारे
                                में पता चला और मैंने इसे ऑर्डर कर दिया। मैंने जब से यह प्रोडक्ट लेना शुरू किया, तब से मुझे बहुत ही बढ़िया नतीजे मिल रहे हैं। मेरे लिंग का साइज बढ़ गया है और स्टेमिना भी अच्छा हो गया है। मेरी पत्नी अब शिकायत नहीं करती, वह
                                अब मुझे अपने प्यार में डुबा देती है। सुपर प्रोडक्ट!


                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="sec-2">
                            <a href="#order_form"> <img alt="" height="350px" src="./assets/gif2.gif"></a>
                            <p>
                                Kam-Ratan से मैंने अपना खोया हुआ आत्मविश्वास वापस पा लिया है। जिंदगी में पहली बार मुझे लगता है मैं एक असली मर्द बन गया हूं। मैं बिना झड़े कई घंटों तक सेक्स कर सकता हूं क्योंकि मेरा स्टैमिना और मर्दानगी बहुत बढ़ चुके हैं। अब मेरा लिंग बहुत मजबूत और कड़क
                                हो गया है और बहुत देर तक खड़ा रह पाता है। बहुत-बहुत धन्यवाद!


                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="sec-3">
                            <a href="#order_form"> <img alt="" src="./assets/gif1.gif"></a>
                            <p>
                                Kam-Ratan ने मेरी सेक्स लाइफ को बदल कर रख दिया है। अब मैं अपनी गर्लफ्रेंड को वह मजा दे सकता हूं जो वह चाहती है और जिसकी वह हकदार है। अब मेरे ज्यादा लंबे और बड़े लिंग और स्टेमिना से मैं उसे चरम सुख की गहराइयों में ले जाता हूं। उसकी आहें चीखें ही इस बात
                                का प्रमाण है कि उसे मेरे साथ सेक्स करने में कितना मजा आता है।

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <div class="testing">
            <div class="container">
                <div class="testing-title-wrap">
                    <h3 class="testing-title"> क्लीनिकल रूप से परीक्षित </h3>
                    <p class="testing-afterword">
                        <span class="testing-afterword__text"> स्वतंत्र प्रयोगशालाओं में </span>
                    </p>
                </div>
                <div class="specialist">
                    <p class="specialist-text"><b> मुंबई की क्लीनिकल प्रयोगशाला के </b> कर्मचारियों ने <b>
                            फाइटोट्रीटमेंट के असर का </b> पुरुष शरीर पर <b> अध्ययन किया है </b> - यह शोध 4 हफ्तों तक किया गया था </p>
                    <div class="specialist-line-wrap">
                        <div class="specialist-line">
                            <p class="specialist-line__text"><b> 89% पुरुष जो </b> फोकस ग्रुप में थे, उन्होने <b> अपनी
                                    कामेच्छा में काफी बढ़त महसूस की </b> और 79% <b> से भी ज़्यादा </b> पुरुषों <b> की
                                    मर्दानगी बढ़ गई </b></p>
                        </div>
                    </div>
                    <div class="specialist-test">
                        <div class="specialist-test__inner">
                            <p class="specialist-test__text"> शोध में 96 से भी ज़्यादा लोगों ने हिस्सा लिया था </p>
                        </div>
                        <div class="specialist-test__inner specialist-test__inner_modify">
                            <img alt="" src="./assets/cert-1.png">
                            <img alt="" src="./assets/cert-2.png">
                            <img alt="" src="./assets/cert-3.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/patent-->
        <div class="reviews">
            <div class="container">
                <h3 class="reviews-title">
                    <span class="reviews-title__item"> अब सीना ठोक कर बताएँ </span> और बिस्तर पर अपनी जीतों पर गर्व करें
                </h3>
                <div class="reviews-slider">
                    <ul class="review-block">
                        <li class="review-block__list">
                            <div class="review-block-wrap">
                                <div class="user__img">
                                    <img alt="" src="./assets/ava1.jpg">
                                </div>
                                <div class="user__name-wrap">
                                    <p class="user__name"> सचिन ***, उम्र 24 </p>
                                </div>
                                <div class="user__text-block">
                                    <div class="user__title"> मैं एक लीडर हूँ 100% -- और अब बिस्तर में भी! </div>
                                    <p class="user__text"> कौन कहता है 3 घंटे तक बिना रुके सेक्स नहीं किया जा सकता? Kam-Ratan से मैंने सिद्ध कर दिया कि ऐसा करना संभव है -- और मेरी गर्लफ्रेंड भी यही कहती है </p>
                                </div>
                                <div class="review-block__decor">
                                    <span class="review-block__decor__inner"></span>
                                </div>
                            </div>
                        </li>
                        <li class="review-block__list">
                            <div class="review-block-wrap">
                                <div class="user__img">
                                    <img alt="" src="./assets/ava3.jpg">
                                </div>
                                <div class="user__name-wrap">
                                    <p class="user__name"> अनीता***, उम्र 27 </p>
                                </div>
                                <div class="user__text-block">
                                    <div class="user__title"> उम्र से सेक्स नहीं रुकता </div>
                                    <p class="user__text"> मैंने हाल ही में अपनी पति को शादी की सालगिरह पर एक गिफ्ट देने का फैसला किया। अच्छी बात तो यह थी कि बच्चे घर पर नहीं थे। मेरे पति नै मेरे साथ 3 घंटे तक बिना रुके सेक्स किया </p>
                                </div>
                                <div class="review-block__decor">
                                    <span class="review-block__decor__inner"></span>
                                </div>
                            </div>
                        </li>
                        <li class="review-block__list">
                            <div class="review-block-wrap">
                                <div class="user__img">
                                    <img alt="" src="./assets/ava2.jpg">
                                </div>
                                <div class="user__name-wrap">
                                    <p class="user__name"> विक्की***, उम्र 29 </p>
                                </div>
                                <div class="user__text-block">
                                    <div class="user__title"> मेरी बीवी मज़ाक करती थी कि वो मुझे छोड़ कर जाने वाली है
                                    </div>
                                    <p class="user__text"> मैंने फैसला किया कि अपनी बीवी को एक नई चीज से सरप्राइज़ दूँगा और मैंने Kam-Ratan खरीद ली। मेरा आत्म-विश्वास बढ़ गया और मैं एक गबरू मर्द जैसा महसूस करने लगा </p>
                                </div>
                                <div class="review-block__decor">
                                    <span class="review-block__decor__inner"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/container-->
        </div>
        <!--/reviews-->
        <div class="live">
            <div class="container">
                <div class="live-title-wrap">
                    <form action="" enctype="multipart/form-data" class="form-submit pt-4" id="order_form" method="POST">
                        <h4 class="animated pulse infinite">अब ऑर्डर करें</h4>
                        <!-- <div class="strong-price">
                        <span class="old-price">20% OFF</span>
                        <span class="new-price">50% OFF</span>
                    </div> -->
                        <input class="form__element form__element--input" value="" name="userName" placeholder="नाम" type="text" required="">
                        <input class="form__element form__element--last form__element--input only_number onlynumber" value="" name="subject" placeholder="फोन नंबर" type="text" required="">
                        <div class="form__element form__element--wrapper">
                            <div class="form__arrow"></div>
                            <select class="form__element form__element--select" id="country_code_selector" name="baddress" placeholder="price" type="text" value="">
                            <option value="Pack of 1"> Pack of 1 </option>
                            <option value="Pack of 2"> Pack of 2 </option>
                           <option value="Pack of 3"> Pack of 3 </option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <center>
                                <input class="animated js_submit pulse infinite form-control btn" type="submit" value="सबमिट करें">
                                <div class="toform"></div>
                            </center>
                        </div> -->
                        <button class="animated pulse infinite  btn" type="submit" value=" अभी ऑर्डर करें " name="send"><span> 50% छूट पर ऑर्डर करें </span></button>
                        <input type="hidden" name="time_zone" value="5.5">
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
        <!--/container-->
        <!--/live-->
    </section>
    <script src="./assets/jquery.bxslider.min.js"></script>
    <script src="./assets/main.js"></script>


    <!--retarget-->

    <!--retarget-->


    <div class="ac_footer"><span>© 2022 Copyright. All rights reserved.</span><br>
        <a href="#" target="_blank">Privacy policy</a> | <a href="#">Report</a>
        <p>Disclaimer: "These statements have not been evaluated by the Food and Drug Administration. <br> This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
        <script>
            typeof adc_clearFooter !== 'undefined' && adc_clearFooter();
        </script>
    </div>
</body>

</html>