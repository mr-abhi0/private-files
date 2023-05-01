<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <base href=".">

    <title>Kam-Ratan</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }
        
        body {
            margin: 0;
        }
        
        main {
            display: block;
        }
        
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }
        
        a {
            background-color: transparent;
        }
        
        b {
            font-weight: bolder;
        }
        
        img {
            border-style: none;
        }
        
        input {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }
        
        input {
            overflow: visible;
        }
        
        [type="submit"] {
            -webkit-appearance: button;
        }
        
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }
        
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }
        
         ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }
        
        html {
            box-sizing: border-box;
            font-size: 16px;
        }
        
        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        body,
        h1,
        h2,
        p,
        li {
            margin: 0;
        }
        
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        input {
            color: inherit;
            font: inherit;
            letter-spacing: inherit;
        }
        
        img {
            display: block;
            max-width: 100%;
        }
        
        .clearfix::after {
            content: "";
            display: block;
            clear: both;
        }
        
        body {
            min-width: 320px;
            width: 100%;
            scroll-behavior: smooth;
            text-rendering: optimizeSpeed;
            line-height: 1.5;
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            color: #ffffff;
            background: #212121;
        }
        
        .wrapper {
            max-width: 1020px;
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        @media (max-width: 767px) {
            .wrapper {
                padding: 0 10px;
            }
        }
        
        .link {
            color: #FFF615;
            position: relative;
        }
        
        .link::after {
            position: absolute;
            content: "";
            bottom: -1px;
            left: 0;
            width: 100%;
            background: #FFF615;
            height: 1px;
            transform: scale(0);
            transition: all 0.3s;
        }
        
        .link:hover::after {
            transform: scale(1);
        }
        
        .header {
            padding-top: 10px;
            background: linear-gradient(90deg, #212121 0%, rgba(33, 33, 33, 0) 17.79%), linear-gradient(270deg, #212121 0%, rgba(33, 33, 33, 0) 18.15%), linear-gradient(180deg, rgba(33, 33, 33, 0) 43.21%, #212121 100%), url("assets/Image1.jpg") no-repeat center top;
            min-height: 500px;
        }
        
        @media (max-width: 991px) {
            .header {
                background: linear-gradient(90deg, #212121 0%, rgba(33, 33, 33, 0) 17.79%), linear-gradient(270deg, #212121 0%, rgba(33, 33, 33, 0) 18.15%), linear-gradient(180deg, rgba(33, 33, 33, 0) 43.21%, #212121 100%), url("assets/Image1.jpg") no-repeat center top/cover;
                min-height: auto;
            }
        }
        
        .head__nav {
            font-size: 0;
            margin-bottom: 50px;
        }
        
        @media (max-width: 991px) {
            .head__nav {
                margin-bottom: 300px;
            }
        }
        
        @media (max-width: 479px) {
            .head__nav {
                margin-bottom: 150px;
            }
        }
        
        .header__logo-wrapper {
            display: inline-block;
            width: calc(100% - 80px);
            text-align: center;
            vertical-align: middle;
        }
        
        .header__logo {
            display: inline-block;
        }
        
        .header__menu-btn {
            width: 40px;
            height: 3px;
            position: relative;
            display: inline-block;
            vertical-align: top;
            vertical-align: middle;
            position: relative;
            height: 50px;
            cursor: pointer;
        }
        
        .header__menu-btn span {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            display: block;
            width: 100%;
            height: 3px;
            background: #ffffff;
        }
        
        .header__menu-btn span::before,
        .header__menu-btn span::after {
            position: absolute;
            content: "";
            width: 100%;
            height: 3px;
            background: #ffffff;
        }
        
        .header__menu-btn span::before {
            top: 10px;
            left: 0;
        }
        
        .header__menu-btn span::after {
            bottom: 10px;
            left: 0;
        }
        
        .header__search {
            display: inline-block;
            width: 40px;
            height: 50px;
            vertical-align: middle;
            background: url("assets/header__search-icon.svg") no-repeat center/25px auto;
        }
        
        .header__inner {
            text-align: center;
        }
        
        .header__stat-list {
            margin-bottom: 25px;
        }
        
        .header__stat-item {
            font-weight: 300;
            font-size: 20px;
            line-height: 42px;
            color: #ffffff;
            display: inline-block;
            margin-right: 25px;
        }
        
        @media (max-width: 991px) {
            .header__stat-item {
                color: #ffffff;
            }
        }
        
        @media (max-width: 767px) {
            .header__stat-item {
                font-size: 14px;
                line-height: 16px;
            }
        }
        
        .header__stat-item::before {
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }
        
        .header__stat-item:nth-child(1)::before {
            content: url("assets/icon__update.svg");
        }
        
        .header__stat-item:nth-child(2)::before {
            content: url("assets/icon__eye.svg");
        }
        
        .header__title {
            font-weight: 900;
            font-size: 48px;
            line-height: 56px;
            text-align: center;
            color: #ffffff;
        }
        
        @media (max-width: 767px) {
            .header__title {
                font-size: 28px;
                line-height: 34px;
            }
        }
        
        @media (max-width: 991px) {
            .article {
                padding-top: 50px;
            }
        }
        
        .article__inner {
            max-width: 970px;
            background: #333333;
            padding: 60px;
            margin: 0 auto;
            border-radius: 5px;
        }
        
        @media (max-width: 991px) {
            .article__inner {
                padding: 25px 50px;
            }
        }
        
        @media (max-width: 767px) {
            .article__inner {
                padding: 25px 10px;
            }
        }
        
        .article__text {
            font-weight: normal;
            font-size: 20px;
            line-height: 34px;
            color: #ffffff;
            margin-bottom: 15px;
        }
        
        @media (max-width: 767px) {
            .article__text {
                font-size: 18px;
                line-height: 28px;
                margin-bottom: 10px;
            }
        }
        
        .article__title {
            font-weight: 500;
            font-size: 32px;
            line-height: 48px;
            color: #ffffff;
            margin-bottom: 25px;
        }
        
        @media (max-width: 767px) {
            .article__title {
                font-size: 24px;
                line-height: 32px;
                margin-bottom: 10px;
            }
        }
        
        .artcile__diagrams-wrapper {
            background: #474646;
            display: table;
            width: 100%;
            padding: 20px 50px;
            margin-bottom: 25px;
        }
        
        @media (max-width: 991px) {
            .artcile__diagrams-wrapper {
                display: block;
                font-size: 0;
                padding: 10px;
            }
        }
        
        .article__diagrams-title {
            display: table-cell;
            vertical-align: middle;
            font-weight: 500;
            font-size: 20px;
            line-height: 34px;
            text-align: center;
        }
        
        @media (max-width: 991px) {
            .article__diagrams-title {
                display: block;
                text-align: center;
            }
        }
        
        .article__diagram {
            display: table-cell;
            text-align: center;
        }
        
        .article__diagram p {
            font-weight: normal;
            font-size: 20px;
            line-height: 34px;
            text-align: center;
            color: #ffffff;
            margin-bottom: 15px;
        }
        
        .article__diagram img {
            margin: 0 auto;
        }
        
        @media (max-width: 991px) {
            .article__diagram {
                width: 50%;
                display: inline-block;
                padding: 0 5px;
            }
        }
        
        .article__reviews-list li {
            font-size: 0;
            margin-bottom: 25px;
        }
        
        @media (max-width: 767px) {
            .article__reviews-list li {
                border: 2px solid #00ff47;
                border-radius: 10px;
                padding: 15px 10px;
            }
        }
        
        .article__ava {
            width: 110px;
            height: 110px;
            margin-right: 20px;
            display: inline-block;
        }
        
        @media (max-width: 767px) {
            .article__ava {
                display: block;
                margin: 0 auto;
            }
        }
        
        .article__reviews-text {
            border: 2px solid #00ff47;
            border-radius: 10px;
            font-weight: normal;
            font-size: 20px;
            line-height: 34px;
            color: #ffffff;
            display: inline-block;
            width: calc(100% - 150px);
            vertical-align: top;
            padding: 20px;
        }
        
        @media (max-width: 767px) {
            .article__reviews-text {
                border: none;
                width: 100%;
                padding: 0;
                font-size: 18px;
                line-height: 28px;
            }
        }
        
        .article__reviews-text span {
            font-weight: bold;
            font-size: 20px;
            line-height: 32px;
            color: #00ff47;
            display: block;
        }
        
        @media (max-width: 767px) {
            .article__reviews-text span {
                font-size: 18px;
                line-height: 28px;
            }
        }
        
        .article__fact-wrapper {
            font-size: 0;
            display: table;
            width: 100%;
            background: #474646;
            margin-bottom: 25px;
        }
        
        @media (max-width: 991px) {
            .article__fact-wrapper {
                display: block;
                padding: 5px;
            }
        }
        
        .article__fact-text {
            font-weight: 500;
            font-size: 24px;
            line-height: 40px;
            color: #ffffff;
            display: table-cell;
            width: 50%;
            vertical-align: middle;
            height: 300px;
            padding: 20px 50px;
        }
        
        @media (max-width: 991px) {
            .article__fact-text {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px;
                font-size: 18px;
                line-height: 28px;
            }
        }
        
        .article__fact-img {
            background: url("assets/Image5.jpg") no-repeat right center/cover;
            display: table-cell;
            width: 50%;
        }
        
        @media (max-width: 991px) {
            .article__fact-img {
                display: block;
                width: 100%;
                height: 350px;
            }
        }
        
        @media (max-width: 767px) {
            .article__fact-img {
                height: 250px;
            }
        }
        
        .article__img-wrapper {
            font-size: 0;
            margin-bottom: 25px;
        }
        
        .article__img-column {
            width: 50%;
            display: inline-block;
        }
        
        @media (max-width: 767px) {
            .article__img-column {
                display: block;
                width: 100%;
            }
        }
        
        .article__img-column img {
            width: 100%;
        }
        
        .article__list {
            counter-reset: number;
            margin-bottom: 35px;
        }
        
        .article__list li {
            position: relative;
            padding-left: 70px;
            margin-bottom: 25px;
        }
        
        @media (max-width: 767px) {
            .article__list li {
                padding-left: 50px;
                margin-bottom: 15px;
            }
        }
        
        .article__list li::before {
            counter-increment: number;
            position: absolute;
            content: counter(number);
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: #00ff47;
            border-radius: 50%;
            font-weight: 500;
            font-size: 28px;
            line-height: 50px;
            text-align: center;
            color: #212121;
        }
        
        @media (max-width: 991px) {
            .article__list li::before {
                width: 40px;
                height: 40px;
                font-size: 24px;
                line-height: 40px;
                top: 5px;
                transform: none;
            }
        }
        
        .article__info-text {
            font-weight: 500;
            font-size: 24px;
            line-height: 40px;
            color: #ffffff;
            border: 2px solid #00ff47;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 25px;
        }
        
        @media (max-width: 767px) {
            .article__info-text {
                font-size: 18px;
                line-height: 28px;
                padding: 10px;
            }
        }
        
        .article__product-block {
            font-size: 0;
            display: table;
            width: 100%;
            background: #474646;
        }
        
        @media (max-width: 767px) {
            .article__product-block {
                display: block;
            }
        }
        
        .article__img {
            display: table-cell;
            width: 50%;
            background: url("assets/Gif3.gif") no-repeat center/cover;
        }
        
        @media (max-width: 767px) {
            .article__img {
                display: block;
                width: 100%;
                height: 350px;
            }
        }
        
        .article__product-wrapper {
            display: table-cell;
            width: 50%;
            padding: 20px 30px;
            vertical-align: top;
        }
        
        @media (max-width: 767px) {
            .article__product-wrapper {
                display: block;
                width: 100%;
                margin-top: -130px;
            }
        }
        
        .article__product-wrapper img {
            width: 200px;
            margin: 0 auto;
        }
    </style>
    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 70px;
            color: #a12000;
        }
        
        .ac_footer p {
            text-align: center;
        }
    </style>
    <style>
        .err2 {
            display: none;
        }
        
        .error-box {
            color: #fff;
            background-color: #DE5042;
            border-radius: 5px;
            text-align: center;
            width: 95%;
            font-size: 13px;
            line-height: 20px;
            z-index: 100;
            margin: 0 auto 0;
        }
        
        .error-box {
            color: #fff;
            background-color: #DE5042;
            border-radius: 5px;
            text-align: center;
            font-size: 26px;
            line-height: 35px;
            margin: 5px!important;
            z-index: 100;
        }
        
        input:invalid {
            box-shadow: none;
        }
        
        @media (min-width: 769px) {
            .error-box {
                font-size: 13px;
                line-height: 16px;
            }
        }
    </style>
    <style>
        .submit-roulette:hover {
            background: #bb0000;
            transition: background 0.3s;
        }
        
        .submit-roulette:active {
            transform: translateY(2px);
            box-shadow: none;
        }
        
        .submit-roulette {
            text-transform: uppercase;
            padding: 10px 15px;
            margin: 15px 0;
            outline: none;
            border: none;
            margin-top: 5px;
            border-radius: 5px;
            box-shadow: 0 4px 3px #242120;
            background: red;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .input-roulette {
            padding-left: 5px;
            height: 42px;
            margin-bottom: 10px;
            width: 300px!important;
        }
    </style>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="wrapper">
            <!-- <nav class="head__nav">
                <a href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;" class="header__menu-btn"><span></span></a>
                <div class="header__logo-wrapper">
                    <a class="header__logo" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"><img alt="" src="./assets/logo.svg"></a>
                </div>
                <a class="header__search" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"></a>
            </nav> -->
            <div class="header__inner">
                <ul class="header__stat-list">
                    <li class="header__stat-item">
                        25.01.2022 </li>
                    <li class="header__stat-item">57.975</li>
                </ul>
                <h1 class="header__title">एक छोटा लिंग बहुत शर्म की बात होती है।</h1>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="article">
            <div class="wrapper">
                <div class="article__inner">
                    <p class="article__text">
                        आज नामर्दी आधुनिक मर्द की सबसे बड़ी समस्या बनकर उभरी है। कभी न कभी हर सेक्स, सेक्स सम्बन्धों या अन्य विषय के फोरम पर आपको लिंग के साइज़ पर चर्चा होते हुए दिख जाएगी। लेकिन ज़्यादा महत्वपूर्ण क्या होता है? बड़ा साइज़ या इसे उपयोग करने की कला? एक असली मर्द का
                        लिंग लंबा और कड़क होना चाहिए जो फौलाद की तरह कठोर हो – यह मर्द के दम-खम और इज्जत का मुख्य सबूत है। एक बड़ा लिंग सफलता की गारंटी की तरह होता है।
                    </p>
                    <h2 class="article__title">यूनिवर्सिटी ऑफ यूटा (यूएसए) के वैज्ञानिकों ने खोज की है कि मर्दों में छोटा लिंग नामर्दी उत्पन्न करता है।</h2>
                    <div class="artcile__diagrams-wrapper">
                        <p class="article__diagrams-title">Risk of infertility</p>
                        <div class="article__diagram">
                            <p>Big penis</p>
                            <img alt="" src="./assets/Diagram1.svg">
                        </div>
                        <div class="article__diagram">
                            <p>Small penis</p>
                            <img alt="" src="./assets/Diagram2.svg">
                        </div>
                    </div>
                    <p class="article__text">
                        प्रजनन क्रिया एक बहुत ही आधारभूत प्राकृतिक मानव प्रवृत्ति होती है। हर औरत के लिए यह महत्वपूर्ण होता है कि उसका मर्द परिवार बढ़ा सके। इसलिए औरतें स्वाभाविक रूप से ही उन मर्दों को चुनती हैं जिनके लिंग बड़े होते हैं।
                    </p>
                    <ul class="article__reviews-list">
                        <li class="clearfix">
                            <img alt="" class="article__ava" src="./assets/Image2.png">
                            <p class="article__reviews-text">
                                <span> मनीषा, 23 साल </span> «एक छोटा लिंग पूरा मजा खराब कर देता है। मैं एक लड़के के साथ करीब एक महीने तक डेटिंग कर रही थी और जब सेक्स की बारी आई तो मुझे इससे ज़्यादा निराशा पहले कभी नहीं हुई थी। मैं उस लड़के को बहुत चाहती
                                थी लेकिन मुझे उसे छोड़ना ही पड़ा »
                            </p>
                        </li>
                        <li class="clearfix">
                            <img alt="" class="article__ava" src="./assets/Image3.png">
                            <p class="article__reviews-text">
                                <span> लीना, 29 वर्ष </span> «मैं कई महीनों से एक अमीर लड़के से डेट कर रही थी। उसके पास बड़ी कार, बड़े-बड़े प्लान और बहुत घमंड था। उसकी एक ही चीज खराब थी और वो यह थी कि उसका लिंग बहुत ही छोटा था। मैंने रिश्ता शुरू किया तो इसकी
                                भनक नहीं थी। वह अपनी आनुवांशिक कमी को जोश से भरने की कोशिश करता था लेकिन लिंग को बड़ा करने के लिए उसने कभी कोई प्रयास नहीं किया था। ऐसा लगता था मानो वह हर रात काम होने के बाद यह देखता ही नहीं था कि मैं हर बार असंतुष्ट ही
                                रह जा रही थी। वो बहुत ही बेकार आदमी था.. »
                            </p>
                        </li>
                        <li class="clearfix">
                            <img alt="" class="article__ava" src="./assets/Image4.png">
                            <p class="article__reviews-text">
                                <span> अलीशा,34 साल </span> «मेरे पिछले बॉयफ्रेंड का लिंग बड़ा छोटा और पतला था – समझ में नहीं आता था कि मैं हँसूँ या रोऊँ... हर बार सेक्स करने पर मैं यही सोचती थी कि – कुछ हुआ भी है या मैं वो बस मेरे ऊपर लेटकर गुदगुदी कर
                                रहा था?. »
                            </p>
                        </li>
                    </ul>
                    <div class="article__fact-wrapper">
                        <p class="article__fact-text">आंकड़ों के अनुसार, हर 3 में से 1 मर्द का लिंग जन्म से ही छोटा होता है, और आगे चलकर 80% मर्द अपने लिंग के साइज़ से असंतुष्ट होते हैं।</p>
                        <div class="article__fact-img"></div>
                    </div>
                    <h2 class="article__title">लिंग का क्या साइज़ सामान्य होता है?</h2>
                    <p class="article__text">यदि एक खड़ा लिंग 13 सेमी से छोटा हो तो औरत को ओरगाज़्म का एहसास करवाना असंभव ही होता है। ऐसे में आपको जहां तक हो सके अपना लिंग बड़ा करके मुद्दे को हल करने की सोचना चाहिए।</p>
                    <p class="article__text">मेडिकल नजरिए से 13-16 सेमी का लिंग पूरी तरह सामान्य माना जाता है लेकिन इससे एक औरत को संतुष्ट करना मुश्किल होता है।</p>
                    <p class="article__text">16-18 सेमी का लिंग औसत साइज़ का होता है, लेकिन सर्वे में हिस्सा लेने वाले अधिकतर मर्दों ने माना कि वे इसे और बड़ा करना चाहते हैं।</p>
                    <p class="article__text">यदि एक खड़ा लिंग 18 सेमी से लंबा हो तो इससे औरत को ओरगाज़्म का एहसास करवाना आसान होता है।</p>
                    <div class="article__img-wrapper">
                        <div class="article__img-column">
                            <img alt="" src="./assets/Gif1.gif"><img alt="" src="./assets/Gif2.gif">
                        </div>
                        <div class="article__img-column"><img alt="" src="./assets/Image6.jpg"></div>
                    </div>
                    <h2 class="article__title">क्या घर पर ही लिंग को सुरक्षित और असरदार तरीके से बड़ा करना संभव होता है?</h2>
                    <p class="article__text">
                        आज मार्केट में कई तरह की जैल और गोलियां उपलब्ध हैं लेकिन प्रयोगशालों में किए गए शोधों और मेडिकल प्रैक्टिस की आधार पर इनमें से सबसे असरदार नुस्खा है
                        <a class="link" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"> Kam-Ratan </a> . इसकी क्लीनिकल रिसर्च पर 3 साल से भी ज़्यादा लगाए गए हैं और इस अनुसार
                        <a class="link" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"> Kam-Ratan </a> ने सभी आवश्यक सुरक्षा और कार्यक्षमता प्रमाणपत्र हासिल कर लिए हैं। एक बार जैल लगा लेने के बाद लिंग तुरंत 3 से 7 सेमी लंबा
                        हो जाता है। यदि जैल को नियमित रूप से लगाया जाए तो (कम से कम एक माह), तो नतीजा बना रहता है। इसलिए, पूरा कोर्स कर लेने के बाद लिंग स्थायी रूप से अपना नया साइज़ पा लेता है।
                    </p>
                    <h2 class="article__title">
                        <a class="link" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"> Kam-Ratan </a> का कोर्स करने से निम्नलिखित फायदे होते हैं:</h2>
                    <ul class="article__list">
                        <li class="article__text">
                            लिंग का साइज़ बढ़ जाता है। खड़ा लिंग 3 से 7 सेमी बड़ा हो जाता है। नोट करें कि महत्वपूर्ण यह होता है कि यह असर लंबा चलेगा या नहीं। प्रोडक्ट लगाना बंद करने के बाद भी असर एक महीने तक चलता है।
                        </li>
                        <li class="article__text">अच्छे से खड़ा होना। आपका तुरंत खड़ा होने लगता है। आपका लिंग पूरे सेक्स के दौरान पत्थर जैसा सख्त बना रहेगा।</li>
                        <li class="article__text">ओरगाज़्म तीव्र हो जाता है। लिंग की संवेदनशीलता बढ़ जाने के कारण ओरगाज़्म बहुत तीव्र हो जाता है और मर्द की सेक्स इच्छा प्रबल हो जाती है।</li>
                        <li class="article__text">संभोग लंबा चलता है। सेक्स की अवधि काफी बढ़ जाती है।</li>
                        <li class="article__text">धातु की क्वालिटी में बढ़ोतरी। ओरगाज़्म के समय बाहर निकलने वाली धातु बहुत बेहतर हो जाती है।</li>
                    </ul>
                    <h2 class="article__title">
                        <a class="link" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"> Kam-Ratan </a> कहाँ से और कैसे खरीदा जा सकता है?</h2>
                    <div class="article__info-text">
                        खुद को और अपनी पार्टनर को सजा देना बंद करें। आप मात्र दो हफ्तों में अपनी समस्या सुलझा सकते हैं। नीचे दी लिंग को फॉलो करें और आपको एकमात्र ऑफिशियल सप्लायर से क्लीनिकली टेस्ट किया हुआ
                        <a class="link" href="#form2" onclick="document.location.hash=&#39;form2&#39;;return false;"> Kam-Ratan </a> 50% डिस्काउंट पर मिल जाएगा। एक बड़े लिंग के साथ एक नई ज़िंदगी की ओर पहला कदम उठाएँ।
                    </div>
                    <div class="article__product-block">
                        <div class="article__img"></div>
                        <div class="article__product-wrapper">
                            <img alt="" src="./assets/product.png">
                        </div>
                    </div>
                    <br>
                    <div id="form2" class="toform"></div>
                    <div class="">
                        <center>
                            <!-- <form method="post" class="   orderForm     " id="form" action="" onsubmit="validateform(this); return false;">
                                <input type="text" class="input-roulette" id="name" style="max-width:100%; color:black" name="name" placeholder="आपका नाम" required="required" value=""><br> <input type="tel" class="input-roulette phone-mask mob1 val2 "
                                    style="max-width:100%; color:black" id="phone" name="phone" maxlength="13" minlength="13" required="required" placeholder="फ़ोन नंबर" value="+91"><br>
                                <div class="error-box err2"> +91XXXXXXXXXX</div>
                                <button type="submit" class="submit-roulette sub2">यहां एक  कहें    </button>

                            </form> -->
                            <div class="order__column order__column--right">
                                <h3 class="order__text"> Kam-Ratan को 50% छूट पर ऑर्डर करें</h3>
                                <form action="" enctype="multipart/form-data" class="anchor order__form form" method="post">


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
                                    <button class="js_submit section__btn form__btn button__text btn anchor" type="submit" value=" अभी ऑर्डर करें " name="send"><span> 50% छूट पर ऑर्डर करें </span></button>
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
                        </center>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="ac_footer">
        <p> Disclaimer : These statements have not been evaluated by the Food and Drug Administration.
            <br> This product is not intended to diagnose, treat, cure, or prevent any disease.
        </p>
    </div>

    <script>
        document.querySelectorAll('.phone-mask').forEach((phone) => {
            mask(phone)
        });

        function mask(block) {
            block.addEventListener('keydown', (e) => {
                if (e.keyCode == 38 || e.keyCode == 37) {
                    e.preventDefault();
                }
            })

            block.onclick = function() {
                this.setSelectionRange(this.value.length, this.value.length);
            }
            block.addEventListener('input', function() {
                if (block.value.length <= 3) {
                    block.value = '+91';
                }
            });
        }
    </script>
    <script>
        const anchorst = document.querySelectorAll('a[href*="#"]')

        for (let anchort of anchorst) {
            anchort.addEventListener('click', function(e) {
                e.preventDefault()
                const blockID = anchort.getAttribute('href')

                document.querySelector('' + blockID).scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                })
            })
        }
    </script>



</body>

</html>