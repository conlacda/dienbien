<html xml:lang="vi-VN" lang="vi-VN" xmlns="http://www.w3.org/1999/xhtml">
<title>
    QUỸ BẢO TRỢ TRẺ EM VIỆT NAM
</title>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<meta content="text/javascript" http-equiv="Content-Script-Type"/>
<meta content="text/css" http-equiv="Content-Style-Type"/>
<meta id="MetaDescription" name="DESCRIPTION" content="Quỹ bảo trợ Trẻ em Việt Nam"/>
<meta id="MetaKeywords" name="KEYWORDS" content="Quỹ bảo trợ Trẻ em Việt Nam,DotNetNuke,DNN"/>
<meta id="MetaCopyright" name="COPYRIGHT" content="Copyright 2019 by Trí Nam Jsc"/>
<meta id="MetaGenerator" name="GENERATOR" content="DotNetNuke "/>
<meta id="MetaAuthor" name="AUTHOR" content="Quỹ bảo trợ Trẻ em Việt Nam"/>
<meta name="RESOURCE-TYPE" content="DOCUMENT"/>
<meta name="DISTRIBUTION" content="GLOBAL"/>
<meta id="MetaRobots" name="ROBOTS" content="INDEX, FOLLOW"/>
<meta name="REVISIT-AFTER" content="1 DAYS"/>
<meta name="RATING" content="GENERAL"/>
<meta http-equiv="PAGE-ENTER" content="RevealTrans(Duration=0,Transition=1)"/>

{{-- CSS--}}
<link href="/css/default.css" type="text/css" rel="stylesheet"/>
<link href="/css/skins/skin.css" type="text/css" rel="stylesheet"/>
<link href="/css/skins/container.css" type="text/css" rel="stylesheet"/>
<link href="/css/skins/menucss.css" rel="stylesheet" type="text/css"/>
<link href="/css/skins/news.css" rel="stylesheet" type="text/css"/>
<link href="/css/skins/common.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="/libraries/jquery-f/style.css" media="screen"/>

{{--Plugin--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<link rel="stylesheet" href="/custom/index.css">
<link rel="stylesheet" href="/css/app.css">

@stack('css')

@include('layouts.navbar')
<body id="Body">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v4.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="108245903945218"
     logged_in_greeting="Xin chao !"
     logged_out_greeting="Xin chao !">
</div>

@yield('content')
</body>
@include('layouts.footer')

{{--Script--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="/custom/index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
@stack('js')
</html>
