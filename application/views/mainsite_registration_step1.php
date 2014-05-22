<?php
/**
 * Created by PhpStorm.
 * User: sadjad
 * Date: 5/21/14
 * Time: 5:08 PM
 *
 * Description: The view for the first step of website registration
 */
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        ثبت نام - مرحله 1
    </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css"><!-- Latest compiled and minified CSS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>

        function responsiveForm()
        {
            var w = window.innerWidth;
            if(w>768)
            {
                $("#inputDomain").css({"width":(w/4)-10,"margin-left":(w/4)});
                $("#selectDomain").css({"width":(w/5),"margin-left":0});
                $("#submitDomain").css({"width":(w/5),"margin-left":(w/5)*2});
                var y = $("#selectDomain").offset().top-3;
                var x = $("#selectDomain").offset().left+(w/5);
                $("#checkPicDomain").offset( {top:y,left:x});
            }
            else
            {
                $("#inputDomain").css({"width":(w-30),"margin-left":25});
                $("#selectDomain").css({"width":(w-30),"margin-left":25});
                $("#submitDomain").css({"width":130,"margin-left":((w-130)/2)+15});
                var y = $("#submitDomain").offset().top-75;
                var x = $("#submitDomain").offset().left+45;
                $("#checkPicDomain").offset( {top:y,left:x});
            }
        }
        x=0;
        $(document).ready(function(){
            $("#submitDomain").click(function(){
                var input = $("#inputDomain").val();
                if (input.length==0)
                {
                    console.log('not valid');
                    $("#checkPicDomain").attr('class', "yes_or_no no");
                    $("#checkPicDomain").html("no");
                    return;
                }
                input = input.concat(".",$("#selectDomain option:selected").text());
                //alert(input);
                $.get("index.php/getCheck",function(result){
                    alert(result);
                });
                /*var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        alert(xmlhttp.responseText);
                        document.getElementById("checkPicDomain").className = "yes_or_no ".concat(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET","http://localhost/cgbarbershops/index.php/mainsite_registration_step1/checkDomain?domain="+input,true);
                xmlhttp.send();*/
            });
            responsiveForm();
            $(window).resize(function(){
                responsiveForm();
            });
        });
    </script>
</head>
<body id="step1">
    <div class="row">
        <div class="col-xs-3 col-xs-push-9">
            <!--<span id="myText">text</span>
            <div class="visible-xs">xs</div>
            <div class="visible-sm">sm</div>
            <div class="visible-md">md</div>
            <div class="visible-lg">lg</div>-->
        </div>
    </div>
    <div class="row">
        <img src="../public/images/frame_and_logo.png" id="frame_and_logo" class="hidden-xs">
    </div>
    <div class="row pos">
            <img class="img-responsive center-block img-porgress" src="../public/images/step1_progressbar.png"/>
    </div>
    <div class="row pos2">
        <form role="form">
            <div class="form-inline center-block">
                <div class="form-group">
                    <label class="sr-only">دامنه مورد نظر</label>
                    <input type="text" class="form-control input-lg center_text" placeholder="دامنه مورد نظر شما"  id="inputDomain">

                    <label class="period" id="periodDomain">
                        .
                    </label>
                    <label class="sr-only">نوع دامنه</label>
                    <select class="form-control input-lg center_text" id="selectDomain">
                        <option value="ir">ir</option>
                        <option value="com">com</option>
                        <option value="org">org</option>
                    </select>
                    <label class="yes_or_no" id="checkPicDomain"></label>
                </div>
            </div>
            <div class="form-inline center-block">
                <button type="submit" class="btn btn-green btn-lg" id="submitDomain">بررسی دامنه</button>
            </div>
        </form>
    </div>
    <ul class="nav nav-pills nav-justified navbar-fixed-bottom " id="mainsiteNavbar">
        <li><a href="#">خانه</a></li>
        <li class="active"><a href="#">خرید</a></li>
        <li><a href="#">درباره ما</a></li>
        <li><a href="#">ارتباط با ما</a></li>
        <li><a class="btn-gold" href="#">ورود</a></li>
    </ul>
</body>