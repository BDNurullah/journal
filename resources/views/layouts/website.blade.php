<!DOCTYPE html>
<html>
    <head>
        <meta name="google-site-verification" content="9VBDyj9SfSnRYPABXzgHLkVRIiChSUQ7JTM2HjgZp7c" />
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title>Welcome to Hotcak Product </title>
        <link rel="shortcut icon" href="{{asset('assets/website/logo.png')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/cssverticalmenu.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/footer.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/menu.css')}}"/>
        <script type="text/javascript" src="{{asset('assets/website/js/cssverticalmenu.js')}}"></script>
        <!--slider-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/skitter.styles.css')}}"/>
        <script type="text/javascript" src="{{asset('assets/website/js/jquery-2.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/website/js/jquery.easing.1.3.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/website/js/jquery.skitter.min.js')}}"></script>
        <script type="text/javascript">
$(document).ready(function ()
{
    $('.box_skitter_large').css({width: 998, height: 316}).skitter({
        animation: 'random',
        theme: 'default',
        dots: true,
        preview: true,
        navigation: false,
        numbers_align: 'center'
    });
});
        </script>
        <!--end slider-->

        <!--pagination contents-->
        <!--end pagination contents-->

        <!--popup-->
        <script type="text/javascript">
            function displayHideBox(boxNumber)
            {
                if (document.getElementById("LightBox" + boxNumber).style.display == "none")
                {
                    document.getElementById("LightBox" + boxNumber).style.display = "block";
                    document.getElementById("grayBG").style.display = "block";
                }
                else
                {
                    document.getElementById("LightBox" + boxNumber).style.display = "none";
                    document.getElementById("grayBG").style.display = "none";
                }
            }
        </script>
        <!--end popup-->

        <!--update popup-->
        <script language="javascript">
            function total(price, product_id)
            {
                var quantity = document.forms["form_" + product_id]["quantity"].value;
                var total = price * quantity;
                document.getElementById("total_" + product_id).innerHTML = total;
            }
        </script>
        <!--end update popup-->

        <!--form validation-->
        <script type="text/javascript">
            function validateForm(product_id)
            {
                // quantity validation
                var n = document.forms["form_" + product_id]["quantity"].value;
                if (n == null || n == "")
                {
                    alert("Quantity field can't be empty");
                    return false;
                }

                // user name validation
                var n = document.forms["form_" + product_id]["user_name"].value;
                if (n == null || n == "")
                {
                    alert("User Name field can't be empty");
                    return false;
                }

                // phone validation
                var n = document.forms["form_" + product_id]["phone"].value;
                if (n == null || n == "")
                {
                    alert("Phone No. field can't be empty");
                    return false;
                }

                // address validation
                var n = document.forms["form_" + product_id]["address"].value;
                if (n == null || n == "")
                {
                    alert("Address field can't be empty");
                    return false;
                }

                // shipping_address validation
                var n = document.forms["form_" + product_id]["shipping_address"].value;
                if (n == null || n == "")
                {
                    alert("Shipping Address field can't be empty");
                    return false;
                }

                // summation answar validation
                var n = document.forms["form_" + product_id]["answer"].value;
                if (n == null || n == "")
                {
                    alert("Write Summation Value to make sure that you are Human.");
                    return false;
                }

                // agree validation
                if (!document.forms["form_" + product_id].checkbox.checked)
                {
                    alert('You must agree to the terms first.');
                    return false;
                }
            }
        </script>

        <script>
            function MM_preloadImages()
            {
                var d = document;
                if (d.images)
                {
                    if (!d.MM_p)
                        d.MM_p = new Array();

                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        ;

                    if (a[i].indexOf("#") != 0)
                    {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
                }
            }
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-PXJ43QG');
        </script>
        <!-- End Google Tag Manager -->
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments)
            }
            ;
            gtag('js', new Date());

            gtag('config', 'UA-107039682-1');
        </script>
        <!--        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"/>-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/font-awesome.css')}}"/>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXJ43QG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="mainbody"> 
            @include('includes.header')	
            @yield('content')
            <div class="clear"></div>
            @include('includes.footer')
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </body>
</html>