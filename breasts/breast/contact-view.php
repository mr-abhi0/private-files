<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title>Kam-Ratan</title>



    <link rel="stylesheet" href="./web_files/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .comments {
            font-family: Tahoma, Arial;
            width: 100%;
            background: #fff none repeat scroll 0% 0%;
            margin-top: 5px;
            border: 1px solid #e9eaed!important
        }
        
        .comment {
            font-family: Tahoma, Arial;
            margin: 0px 15px;
            padding: 15px 0px;
            border-bottom: 1px solid #e9eaed!important
        }
        
        .comment:last-child {
            border: medium none
        }
        
        .comment .avatar {
            float: left;
            width: 35px;
            height: 35px
        }
        
        .comment .text {
            margin-left: 45px;
            font-size: 13px
        }
        
        .comment .text .login {
            color: #3b5998;
            font-weight: bold;
            cursor: pointer
        }
        
        .comment .text .date {
            color: #000;
            font-size: 11px;
            font-style: italic
        }
        
        .comment .text .data {
            display: block;
            margin-top: 2px;
            width: 100%
        }
        
        .comment .text .data img {
            display: block;
            position: relative;
            top: 5px;
            max-width: 80%;
        }
        
        .comment .text .ft {
            color: #3b5998;
            font-size: 12px;
            cursor: pointer
        }
        
        .comment .text .dot {
            color: #9197a3;
            font-size: 12px;
            cursor: pointer
        }
        
        .photo {
            width: 100%;
            background: #fff none repeat scroll 0% 0%;
            margin-top: 5px;
            padding-bottom: 10px
        }
        
        .footer {
            background: #fff none repeat scroll 0% 0%;
            margin-top: 5px;
            padding: 15px;
            height: 50px;
            font-size: 11px
        }
    </style>

    <style>
        body {
            background: #eee;
        }
        
        .logo {
            font-family: Amiri, serif;
            color: red
        }
        
        footer.page-footer .footer-copyright {
            overflow: hidden;
            background-color: rgba(0, 0, 0, .2);
            font-size: .9rem;
            color: rgba(255, 255, 255, .6)
        }
        
        background body {
            background: #eee
        }
        
        #logo {
            font-family: 'Open Sans', sans-serif;
            color: #2d2d2d;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 40px;
            font-weight: 800;
            letter-spacing: -3px;
            line-height: 1;
            text-shadow: #ededed 2px 2px 0;
            position: relative
        }
        
        #logo:after {
            content: "HealthBeauty";
            position: absolute;
            left: 10px;
            top: 12px
        }
        
        #logo:after {
            background-image: -webkit-linear-gradient(left top, transparent 0, transparent 25%, #555 25%, #555 50%, transparent 50%, transparent 75%, #555 75%);
            background-size: 4px 4px;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            z-index: -5;
            display: block;
            text-shadow: none
        }
        
        .quotenew {
            background: #f0ffec;
            border-left: 10px solid #0f6;
            padding: 2.5% 1% .1%
        }
        
        detailBox {
            width: 320px;
            border: 1px solid #bbb;
            margin: 50px
        }
        
        .titleBox {
            background-color: #fdfdfd;
            padding: 10px
        }
        
        .titleBox label {
            color: #444;
            margin: 0;
            display: inline-block
        }
        
        .commentBox {
            padding: 10px;
            border-top: 1px dotted #bbb
        }
        
        .actionBox .form-group:first-child,
        .commentBox .form-group:first-child {
            width: 80%
        }
        
        .actionBox .form-group:nth-child(2),
        .commentBox .form-group:nth-child(2) {
            width: 18%
        }
        
        .actionBox .form-group * {
            width: 100%
        }
        
        .taskDescription {
            margin-top: 10px 0
        }
        
        .commentList {
            padding: 0;
            list-style: none;
            overflow: auto
        }
        
        .commentList li {
            margin: 0;
            margin-top: 10px;
            background: #f8f8f8;
            padding: 1% 7px;
            border: 2px solid #f0f0f0;
            border-radius: 7px
        }
        
        .commentList li>div {
            display: table-cell
        }
        
        .commenterImage {
            width: 30px;
            margin-right: 5px;
            height: 100%;
            float: left
        }
        
        .commenterImage img {
            width: 100%;
            border-radius: 50%
        }
        
        .commentText p {
            margin: 0
        }
        
        .sub-text {
            color: #aaa;
            font-family: verdana;
            font-size: 11px
        }
        
        .actionBox {
            border-top: 1px dotted #bbb;
            padding: 10px
        }
    </style>
    <style>
        */:root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }
        
        *,
         ::after,
         ::before {
            box-sizing: border-box
        }
        
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent
        }
        
        @-ms-viewport {
            width: device-width
        }
        
        footer,
        nav {
            display: block
        }
        
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
        }
        
        h2 {
            margin-top: 0;
            margin-bottom: .5rem
        }
        
        p {
            margin-top: 0;
            margin-bottom: 1rem
        }
        
        b,
        strong {
            font-weight: bolder
        }
        
        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }
        
        a:hover {
            color: #0056b3;
            text-decoration: underline
        }
        
        img {
            vertical-align: middle;
            border-style: none
        }
        
        html [type=button] {
            -webkit-appearance: button
        }
        
        [type=button]::-moz-focus-inner {
            padding: 0;
            border-style: none
        }
        
         ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }
        
        h2 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }
        
        h2 {
            font-size: 2rem
        }
        
        .img-fluid {
            max-width: 100%;
            height: auto
        }
        
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }
        
        @media (min-width:576px) {
            .container {
                max-width: 540px
            }
        }
        
        @media (min-width:768px) {
            .container {
                max-width: 720px
            }
        }
        
        @media (min-width:992px) {
            .container {
                max-width: 960px
            }
        }
        
        @media (min-width:1200px) {
            .container {
                max-width: 1140px
            }
        }
        
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }
        
        .col-lg-8 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }
        
        @media (min-width:768px) {
            .offset-md-2 {
                margin-left: 16.666667%
            }
        }
        
        @media (min-width:992px) {
            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }
        }
        
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }
        
        @media screen and (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }
        
        .btn:focus,
        .btn:hover {
            text-decoration: none
        }
        
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }
        
        .btn:disabled {
            opacity: .65
        }
        
        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }
        
        .btn:not(:disabled):not(.disabled).active,
        .btn:not(:disabled):not(.disabled):active {
            background-image: none
        }
        
        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf
        }
        
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }
        
        .btn-secondary:not(:disabled):not(.disabled).active,
        .btn-secondary:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #545b62;
            border-color: #4e555b
        }
        
        .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-secondary:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }
        
        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430
        }
        
        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }
        
        .btn-info:not(:disabled):not(.disabled).active,
        .btn-info:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #117a8b;
            border-color: #10707f
        }
        
        .btn-info:not(:disabled):not(.disabled).active:focus,
        .btn-info:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }
        
        .btn-warning:not(:disabled):not(.disabled).active,
        .btn-warning:not(:disabled):not(.disabled):active {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500
        }
        
        .btn-warning:not(:disabled):not(.disabled).active:focus,
        .btn-warning:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }
        
        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }
        
        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130
        }
        
        .btn-danger:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }
        
        .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }
        
        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d
        }
        
        .btn-danger:not(:disabled):not(.disabled).active:focus,
        .btn-danger:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }
        
        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df
        }
        
        .btn-light:not(:disabled):not(.disabled).active:focus,
        .btn-light:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }
        
        .btn-dark:not(:disabled):not(.disabled).active,
        .btn-dark:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d
        }
        
        .btn-dark:not(:disabled):not(.disabled).active:focus,
        .btn-dark:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }
        
        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }
        
        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }
        
        .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .btn-outline-secondary:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }
        
        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }
        
        .btn-outline-success:not(:disabled):not(.disabled).active,
        .btn-outline-success:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }
        
        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .btn-outline-success:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }
        
        .btn-outline-info:not(:disabled):not(.disabled).active,
        .btn-outline-info:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }
        
        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }
        
        .btn-outline-warning:not(:disabled):not(.disabled).active,
        .btn-outline-warning:not(:disabled):not(.disabled):active {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }
        
        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }
        
        .btn-outline-danger:not(:disabled):not(.disabled).active,
        .btn-outline-danger:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }
        
        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }
        
        .btn-outline-light:not(:disabled):not(.disabled).active,
        .btn-outline-light:not(:disabled):not(.disabled):active {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }
        
        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .btn-outline-light:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }
        
        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .btn-outline-dark:not(:disabled):not(.disabled):active {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }
        
        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }
        
        .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }
        
        .btn-block {
            display: block;
            width: 100%
        }
        
        .navbar {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: .5rem 1rem
        }
        
        .navbar>.container {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between
        }
        
        .navbar-toggler:not(:disabled):not(.disabled) {
            cursor: pointer
        }
        
        @media (max-width:991.98px) {
            .navbar-expand-lg>.container {
                padding-right: 0;
                padding-left: 0
            }
        }
        
        @media (min-width:992px) {
            .navbar-expand-lg {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-lg>.container {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
        }
        
        .page-link:not(:disabled):not(.disabled) {
            cursor: pointer
        }
        
        .close:not(:disabled):not(.disabled) {
            cursor: pointer
        }
        
        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {}
        
        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {}
        
        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {}
        
        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {}
        
        .bg-white {
            background-color: #fff!important
        }
        
        .rounded {
            border-radius: .25rem!important
        }
        
        .d-block {
            display: block!important
        }
        
        @supports ((position:-webkit-sticky) or (position:sticky)) {}
        
        .mb-1 {
            margin-bottom: .25rem!important
        }
        
        .mt-2 {
            margin-top: .5rem!important
        }
        
        .mt-4 {
            margin-top: 1.5rem!important
        }
        
        .py-3 {
            padding-top: 1rem!important
        }
        
        .py-3 {
            padding-bottom: 1rem!important
        }
        
        .pt-4 {
            padding-top: 1.5rem!important
        }
        
        .mx-auto {
            margin-right: auto!important
        }
        
        .mx-auto {
            margin-left: auto!important
        }
        
        .text-center {
            text-align: center!important
        }
        
        a:not(.btn) {
            text-decoration: underline
        }
    </style>
    <style>
        #mybutton {
            position: fixed;
            bottom: -4px;
            right: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-header">
        <div class="container">
            <div id="header">
                <p style="color:#115419;font-weight: bold;font-size:xx-large"> Kam-Ratan</p>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-8 offset-md-2"><br>
                <h2 class="md-5 text-center"><b>कैसे अपनी पूर्व प्रेमिका को वापस पायें और 15 दिनों में अपने औजार को हथोड़ा बनायें? आसान है</b> </h2>
                <a class="links" href="#order"><img alt="" class="rounded mx-auto d-block mb-1 img-fluid" src="./web_files/0.png"></a>
                <p> नमस्ते, मेरा नाम विजय है। मैं पंजाब से हूँ. मैं एक छोटी फर्म में काम करता हूँ। हम सभी के जीवन में कुछ न कुछ नकारात्मक यादें होती हैं: फालतू बॉस, समय सीमा का पास में आना, पर्याप्त पैसा न होना, बहुत अधिक काम का होना आद। ऐसे तनाव के कारण,
                    मेरा लिंग खड़ा होन बंद हो गया। यहां तक कि मेरी प्रेमिका ने जब मेरे लंड को अपने मुँह से चूसा तब भी यह खड़ा नहीं हुआ।
                </p>
                <p> कडापन न पा सकने के दो हफ्तों के बाद, मेरी प्रेमिका ने मुझे छोड़ दिय। हमारा रिश्ता बहुत अच्छा नहीं था: हम हमेशा झगड़ा करते थे, सेक्स भी सामान्य ही था और मैं हमेशा जल्दी ठंडा पड़ जाता था। हमारा सेक्स अधिकतम ५ मिनट तक चला करता था।
                </p>
                <a class="links" href="#order"><img alt="" class="rounded mx-auto d-block img-fluid mb-1" src="./web_files/1.png"></a>
                <p> जब वह मुझे छोड़ कर चली गयी तो जैसे मैं तबाह हो गया और कुछ समझ नहीं आ रहा था कि अब मैं करूँ तो क्या करूँ। काम अच्छी तरह से नहीं चल रहा था, मेरा निजी जीवन बिगड़ गया था और अब इस कम्बख्त लंड ने खड़े होने से इंकार कर दिया। फिर मैं अपने पिता
                    के पास गया और उनसे इस संबंध में सलाह मांगी।

                </p>
                <p> कुछ ड्रिंक्स पीने के बाद, मैंने पिता जी को अपनी मर्दानगी की समस्या के बारे में बताया। उन्होंने मेरी बातों को सुना और कहा कि उन्होंने अपने जीवन में भी ऐसी समस्या का अनुभव किया था।
                </p>
                <div class="quotenew mb-1">

                    <p> <em>उन्होंने बहुत काम किया और शारीरिक रूप से बहुत थके हुए थे, और तो और एक बार वे जब मलेशिया में छुट्टी के लिए गए तो वहां की महिलाओं के साथ भी सफल न हो पाये। भारत में उन्हें सलाह दी गई थी कि वे फार्मेसी में <a class="links" href="#order"><b>Kam-Ratan</b></a> खरीद लें।  5 दिनों के उपयोग के बाद, पोर्न को देखते ही उनका लंड खड़ा हो गया तो उन्होंने उस कड़ेपन को एक वेश्या पर आज़माने का निर्णय लिया। <br><br>
 </em></p>
                    <a class="links" href="#order"><img alt="" class="rounded mx-auto d-block img-fluid" src="./web_files/2.png"></a>
                    <a type="button" href="#order" class="btn btn-danger btn-lg btn-block"><b>५०% की छूट पर ऑर्डर दें.</b></a><br>

                </div>
                <p> मेरे पिताजी की कहानियां हमेशा दिलचस्प होती हैं। लेकिन मुझे पता है कि वह हमेशा उसमे कुछ मिर्च मसाला मिला देते हैं। मैंने <a class="links" href="#order"><b>Kam-Ratan</b></a> को दवाखाने में खोजा, लेकिन यह वहां नहीं मिला। भारत में इसे केवल
                    आधिकारिक निर्माता की वेबसाइट पर बेचा जाता है। इसकी डिलिवरी में लगभग ५ दिन लगे।

                </p>
                <a class="links" href="#order"><img alt="" class="rounded mx-auto d-block img-fluid mb-1" src="./web_files/product.jpg"></a>
                <p> आख़िरकार यह आ गया। आधिकारिक वेबसाइट पर दिए हुए निर्देशों के अनुसार मैंने <a class="links" href="#order"><b>Kam-Ratan</b></a> को यूज़ किय। सब कुछ बहुत ही आसान था. तीसरे दिन एक जगह मैं लाइन में लगा हुआ था तभी एक लड़की के मम्मे देखकर मेरा लंड
                    सलामी देने लगा। मुझे ऐसी खुशी बहुत समय के बाद महसूस हो रही थ। सब कुछ बहुत अच्छा महसूस हो रहा था लेकिन फिर भी मैंने हस्तमैथुन नहीं किया, मेरा लिंग एकदम जोश से भर गया था।

                </p>
                <p> 15 दिनों के बाद, मेरी पूर्व प्रेमिका मुझे लेने के लिए आय। थोड़ी देर की बातचीत के बाद ही हमारे आधे कपडे उतर गए थे और उसे मेरा खड़ा लंड भी महसूस होने लगा था। उसने आश्चर्यचकित होकर मेरे लंड को देखा और मुझे कंडोम लगाने के लिए कहा। यह मेरी परीक्षा
                    का समय थ।

                </p>
                <p> और आपको भरोसा नहीं होगा कि मेरे पिता जी एकदम सही बात बोल रहे थे। मैंने तीन घंटे तक अपनी प्रेमिका को खुस किया । और तब से आज का दिन है हम अब हर रात पागलों की तरह हर आसन में करते हैं। एक बार अगर मेरा पानी निकल भी जाए तो दोबारा तैयार होने
                    में मुझे केवल 5 मिनट लगता है।

                    <a class="links" href="#order"><img alt="" class="rounded mx-auto d-block img-fluid" src="./web_files/4.jpg"></a>
                </p>
                <p> मेरी पूर्व प्रेमिका अब फिर से मेरे साथ है। मेरा आत्मविश्वास वापस आ गया है और अब मैं एक सेक्स मशीन की तरह उसको और खुद को खुस करने में लगा रहता हूँ । मेरे पिता की कहानियों और <a class="links" href="#order"><b>Kam-Ratan</b></a> का धन्यवाद।

                </p>
                <p> क्या आप ऐसे मजे देना चाहते हैं कि लड़कियां आपसे मजे लेने के लिए लाइन में लगी रहें? ऑर्डर करें <a class="links" href="#order"><b>Kam-Ratan</b></a>

                </p>
                <p>आपको परेशान होने की ज़रुरत नहीं है और न ही फ़ार्मेसियों के चक्कर लगाने की ज़रुरत है, निर्माता की आधिकारिक वेबसाइट पर जाने के लिए नीचे दिए गए बटन पर क्लिक करें। <strong id="datetime">17/01/2022</strong> अभी 50% की छूट दी जा रही है। </p>

                <a class="links" href="#order"><img alt="" class="rounded mx-auto d-block img-fluid mt-2" src="./web_files/product.jpg"></a>
                <a type="button" href="#order" class="btn btn-danger btn-lg btn-block"><b>50% की छूट पर ऑर्डर दें। </b></a><br>
                <div class="text-center">
                        <img src="./web_files/img27.png" alt="img27" style="margin-bottom: 20px;">
                    </div>
                <style>
                    #order {
                        background-color: darkred;
                        color: #fff;
                    }
                </style>
                <div class="container" id="order">
                    <h4 class="text-center font-weight-bold"> अभी ऑर्डर कीजिए</h4>
                    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6" style="z-index:9">
                                <div class="form-group">
                                    <label for="name">नाम</label>
                                    <input value="" name="userName" placeholder="नाम" type="text" id="name" class="form-control rounded-0" required>
                                </div>
                            </div>
                            <div class="col-md-6" style="z-index:9">
                                <div class="form-group">
                                    <label for="phone">फोन नंबर</label>
                                    <input value="" name="subject" placeholder="फोन नंबर" type="text" id="phone" maxlength="10" pattern="[789][0-9]{9}" class="form-control rounded-0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                   
<select class="form-control" class="input only only_number" name="baddress" id="baddress" placeholder="price" type="text" value="">
<option value="Pack of 30 Capsules"> Pack of 30 Capsules</option>
	 <option value="Pack of 60 Capsules"> Pack of 60 Capsules</option>
	<option value="Pack of 90 Capsules"> Pack of 90 Capsules</option>
	</select> </div>
                            </div>
                            <!-- <div class="form__row">
</div> -->
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <button type="submit" value=" अभी ऑर्डर करें " name="send" class="btn btn-primary rounded-0">50% की छूट पर ऑर्डर दें।</button>
                                </div>
                            </div>
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

                <div class="comments">
                    <div style="border-bottom: 1px solid #e9eaed !important;padding:10px;">
                        <h4 class="text-center font-weight-bold"> Customer Reviews</h4>
                        <hr>
                        <div class="container">
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> सुनील प्रजापति </span><br><span class="date">3 Sep,  21</span><span class="data"> आप इतनी बिंदास पोस्ट करेंगी ये बड़ा हिम्मत वाला काम है ;) सच बोलूँ तो मैं भी इन गोलियों को लगभग एक साल से इस्तेमाल कर रहा हूँ और मैं बहुत खुश हूँ। सेक्स लंबा चलता है, मेरा पत्थर की तरह सख्त रहता है और लड़कियां मेरे पास बार-बार आती हैं!  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> प्रिया मोघे  </span><br><span class="date">8 Dec,  21</span><span class="data"> हैलो शालू, ये वाकई में काफी बढ़िया हुआ! मैं तुम्हारी सलाह मान कर अपने पति के लिए एक पैक लेने वाली हूँ।  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> असलम हुसैन  </span><br><span class="date">12 Dec,  21</span><span class="data"> मेरा भाई यूरोप में रहता है और उसने मुहे बताया कि ये गोलियां वहाँ काफी चलती हैं....मुझे पता नहीं है क्योंकि मैंने तो अभी तक ट्राय नहीं की हैं...  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> योगेश  </span><br><span class="date">1 Feb,  21</span><span class="data"> मैं इसको दो हफ्तों से इस्तेमाल कर रहा हूँ और मैं विश्वास से कह सकता हूँ कि मैंने इस तरह के जोरदार असर की उम्मीद नहीं की थी। ये जबर्दस्त है!  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> सेजल पटेल  </span><br><span class="date">10 Feb,  21</span><span class="data"> हाय, इस पोस्ट के कारण ही मैंने अपने पति के लिए एक पैकेट लिया। ये एक जादू के समान काम करता है और इनका अब इतना ज़्यादा बड़ा और सख्त खड़ा होता है कि पहले कभी नहीं हुआ। <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> रोहित खट्टर </span><br><span class="date">18 Feb,  21</span><span class="data"> मैंने एक पैकेट खरीदा और मैं हर किसी को गारंटी के साथ कह सकता हूँ कि ये जोरदार असर करती हैं। पहले मुझे बिस्तर पर कई समस्याएँ थीं - मेरा खड़ा होता था लेकिन बार-बार बैठ जाता था और मेरा सेक्स भी बहुत कमजोर होता था। अब हर चीज ठीक है। थैंक्स शालू!  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> सुधीर मकवाना  </span><br><span class="date">13 Apr,  21</span><span class="data"> मैं उम्मीद करता हूँ कि मेरे जैसे नतीजे हर किसी को मिलेंगे। मैं बड़े आराम से एक घंटे तक सेक्स कर लेता हूँ! मैं तो अचंभे में हूँ कि ये क्या हो गया है! पोस्ट के लिए धन्यवाद मैडम!!!  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> शिखा  </span><br><span class="date">8 Jun,  21</span><span class="data"> मेरे को भी इन गोलियों के बारे में पता है ... मेरा पति तो इनको कई दिनों से इस्तेमाल कर रहा है और अब वो मेरी दिन में कई-कई बार लेता है...मैं तो इससे परेशान हो गई हूँ यार ;)  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> पुनीत वर्मा  </span><br><span class="date">2 Jul,  21</span><span class="data"> मैंने इन गोलियों को कौतूहल के कारण आजमाने का फैसला किया। मुझे पता नहीं था कि कोई गोली खड़ा करने में मदद करके सेक्स का समय बढ़ा सकती हैं। मुझे मेरा पैकेट मिलने के बाद मैं सीधे अपनी गर्लफ्रेंड के बाद गया। यदि मैं आपको ये बताऊंगा कि कितनी देर मैने सेक्स किया, तो आपको भरोसा नहीं होगा!  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> सिकंदर </span><br><span class="date">8 Feb,  21</span><span class="data"> ये चीज कोई नई नहीं है। जिस किसी को ठीक से खड़ा करना है और बिस्तर पर लंबे समय तक चलना है, उसे ये इस्तेमाल करना चाहिए!  <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Sandeep Rathore </span><br><span class="date">11 Feb,  21</span><span class="data"> ❤️❤️❤️❤️❤️❤️❤️❤️❤️ <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Imran </span><br><span class="date">20 Aug,  21</span><span class="data"> I have been using this stuff for two weeks and I can definitely say that could never expect such a strong effect. This is simply AMAZING!. <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Arif </span><br><span class="date">8 Mar,  21</span><span class="data"> Mujhe ek mahine k pack
Me 40% fayeda hua hai 
Mai fir dubara mangva rhaa hun <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Sonu kumar </span><br><span class="date">9 Mar,  21</span><span class="data"> After wasting thousands rupees to sexologists gaining nothing.Then I tried Your Product using for a month its result is amazing it solved  not only my erection problem but aslo improve my timing  at reasonable price  ,Thanks a lot  A person  suffering from  such problem must go for it.
 <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login">  मोहित रघुवंशी   </span><br><span class="date">23 Nov,  21</span><span class="data">  मेरी बीवी अब बहुत खुश है! अब वो मुझे पूछती है कि मुझे क्या हुआ और मैं बिस्तर में इतनी देर तक कैसे चल पाता हूँ और मेरा हमेशा एक पत्थर की तरह सख्त क्यों रहता है! यहाँ एक और खुश कस्टमर है। मैंने गोलियों का ऑर्डर दिया जो मुझे बिना किसी झंझट के बड़ी जल्दी ही मिल गईं।   <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login">  नीरज पांडा   </span><br><span class="date">30 Nov,  21</span><span class="data">  बहुत धन्यवाद शालू! मेरा पैकेज कल ही आया और मैंने इसका टेस्ट कर लिया! सेक्स 1 घंटे तक चला और मेरा तो संतुष्ट ही नहीं होता - ये मेरी उम्मीद से कहीं ज़्यादा है और मुझे बहुत बढ़िया लग रहा है!   <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Rajeev Singh </span><br><span class="date">31 May,  21</span><span class="data"> Very good Kam-Ratan.Anyone wants to this Kam-Ratan I will recomend this Kam-Ratan.
 <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Kratika Batham </span><br><span class="date">2 May,  21</span><span class="data"> I like this Kam-Ratan <br>
</span>

                                </div>
                            </div>
                            <div class="comment">
                                <img class="avatar" src="./web_files/xava.jpg">
                                <div class="text">
                                    <span class="login"> Jatin Jadhav </span><br><span class="date">2 May,  21</span><span class="data"> Have recently started <br>
</span>

                                </div>
                            </div>

                            <br>
                            <!-- <div class="container">
                                <h4 class="text-center font-weight-bold"> Write a review </h4>
                                <form action="" method="POST" autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-6" style="z-index:9">
                                            <div class="form-group">
                                                <label for="name">Full name</label>
                                                <input type="text" name="name" id="name" class="form-control rounded-0" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="z-index:9">
                                            <div class="form-group">
                                                <label for="phone">Mobile Number</label>
                                                <input type="tel" name="phone" id="phone" maxlength="10" pattern="[789][0-9]{9}" class="form-control rounded-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="comments">Message</label>
                                                <textarea class="form-control rounded-0" name="comments" id="comments" required></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="url">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" name="userfeedback" class="btn btn-primary rounded-0">Submit Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->

                        </div>
                        <br>

                    </div>
                </div>
              
                <center>
                    <p> Disclaimer : These statements have not been evaluated by the Food and Drug Administration.
                        <br> This product is not intended to diagnose, treat, cure, or prevent any disease.
                    </p>
                </center><br>
                <center>
                    <h6><a href="#">Terms &amp; Conditions</a> || <a href="#">Privacy Policy</a></h6>
                </center><br>

            </div>

            <div class="container">
                <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
                    <!--/.Social buttons-->
                    <!--Copyright-->
                    <div class="footer-copyright py-3 text-center">
                        <span href="#">   <b>Copyright 2022</b>
</span>
                    </div>
                </footer>
            </div>



            <div id="mybutton">
                <a href="#order"><img class="button1" src="./web_files/button.png" alt="joint" title="order"></a>
            </div>


        </div>
    </div>
</body>

</html>