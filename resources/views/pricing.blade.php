@extends('layouts.app')
@section('content')
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4shaw Test</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/price.css"/>
    </head>
    <body>
    <br>
    <div class="container">
        <div class="top">
            <h1>Plans & Pricing</h1>
            <div class="toggle-btn">
                <span style="margin: 0.8em;">Annually</span>
                <label class="switch">
                    <input type="checkbox" id="checbox" onclick="check()" ; />
                    <span class="slider round"></span>
                </label>
                <span style="margin: 0.8em;">Monthly</span></div>
        </div>

        <div class="package-container">
            <div class="packages">
                <h1>Basic</h1>
                <h2 class="text1">R9.99</h2>
                <h2 class="text2">R119.99</h2>
                <ul class="list">
                    <li class="first">500 Subscribers</li>
                    <li>12,000 Emails/month</li>
                    <li>Multi-User Accounts</li>
                    <li>Email Support</li>
                </ul>
                <a href="#" class="button button1">Start Now</a>
            </div>
            <div class="packages">
                <h1>Professional</h1>
                <h2 class="text1">R19.99</h2>
                <h2 class="text2">R239.99</h2>
                <ul class="list">
                    <li class="first">Basic +</li>
                    <li>Landing Pages</li>
                    <li>Pop-up Forms</li>
                    <li>Premium Support</li>
                </ul>
                <a href="#" class="button button2">Start Now</a>
            </div>
            <div class="packages">
                <h1>Master</h1>
                <h2 class="text1">R29.99</h2>
                <h2 class="text2">R359.99</h2>
                <ul class="list">
                    <li class="first">Professional +</li>
                    <li>Marketing Automation</li>
                    <li>Instagram Ads</li>
                    <li>Facebook Ads</li>
                </ul>
                <a href="#" class="button button3">Start Now</a>
            </div>
        </div>
    </div>

    <script src="./script.js"></script>
    </body>
    </html>

    <script>
        function check() {
            let checkBox = document.getElementById("checbox");
            let text1 = document.getElementsByClassName("text1");
            let text2 = document.getElementsByClassName("text2");

            for (let i = 0; i < text1.length; i++) {
                if (checkBox.checked == true) {
                    text1[i].style.display = "block";
                    text2[i].style.display = "none";
                } else if (checkBox.checked == false) {
                    text1[i].style.display = "none";
                    text2[i].style.display = "block";
                }
            }
        }
        check();

    </script>

@endsection
