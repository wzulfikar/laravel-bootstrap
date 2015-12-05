<meta charset="utf-8">
<title>{{ $pageTitle or 'Bootswatch: Flatly' }}</title>
<meta name="title" content="{{ $pageTitle or 'Bootswatch: Flatly' }}">
<meta name="description" content="{{ $siteDescription or 'Bootswatch: Flatly' }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="{{ env('BOOTSTRAP_THEME','/assets/css/bootswatch-flatly.css') }}" media="screen">
<link rel="stylesheet" href="/assets/css/custom.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
  <script src="../bower_components/respond/dest/respond.min.js"></script>
<![endif]-->
<script>

 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', {{ env('GOOGLE_ANALYTIC_KEY','') }}]);
  _gaq.push(['_setDomainName', "bootswatch.com"]);
    _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();

</script>