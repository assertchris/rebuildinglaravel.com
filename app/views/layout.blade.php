<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Rebuilding Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/css/shared.css" />
  </head>
  <body>
    <div class="banner">&nbsp;</div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @yield("body/content")
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include("include/body/pages")
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @include("include/body/footer")
          </div>
        </div>
      </div>
    </div>
    @if (App::environment() == "production")
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51138736-1', 'rebuildinglaravel.com');
      ga('send', 'pageview');
    </script>
    @endif
    <script type="text/javascript" src="//use.typekit.net/ldf0izr.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </body>
</html>
