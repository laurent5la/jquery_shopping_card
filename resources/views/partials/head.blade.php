<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="robots" content="noindex, nofollow">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{$page_title or 'Company Search'}}</title>

    <!-- Bootstrap -->
    <!-- <link href="/css/style.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Jquery expansion -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <!-- <script src="/js/main.js"></script> -->
</head>
<body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-53BB6N"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
                {'gtm.start': new Date().getTime(),event:'gtm.js'}
        );var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-53BB6N');</script>
    <!-- End Google Tag Manager -->
    <!-- BoldChat Visitor Monitor HTML v5.00 (Website=D&B Chat (dnb.com),Ruleset=DNB-Ecomm Invite,Floating Chat=DNB Floating Sticky Button -->
    <script type="text/javascript">
        window._bcvma = window._bcvma || [];
        _bcvma.push(["setAccountID", "652348453108072006"]);
        _bcvma.push(["setParameter", "WebsiteID", "2775810355515379163"]);
        _bcvma.push(["setParameter", "InvitationID", "3732379330779100195"]);
        _bcvma.push(["addFloat", {type: "chat", id: "8663608318282512087"}]);
        _bcvma.push(["pageViewed", document.location.href, document.referrer]);
        var bcLoad = function(){
            if(window.bcLoaded) return; window.bcLoaded = true;
            var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
            vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/652348453108072006/bc.vms4/vms.js";
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
        };
        if(window.pageViewer && pageViewer.load) pageViewer.load();
        else if(document.readyState=="complete") bcLoad();
        else if(window.addEventListener) window.addEventListener('load', bcLoad, false);
        else window.attachEvent('onload', bcLoad);
    </script>
    <noscript>
        <a href="http://www.boldchat.com" title="Live Chat" target="_blank"><img alt="Live Chat" src="https://vms.boldchat.com/aid/652348453108072006/bc.vmi?&amp;wdid=2775810355515379163" border="0" width="1" height="1" /></a>
    </noscript>
    <!-- /BoldChat Visitor Monitor HTML v5.00 -->