<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="uft-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="{{ base_url('assets/favicon.ico') }}">

        <title>ActivismeBE | {{ $title }} </title>

        {{-- Stylesheets --}}
        <link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ base_url('assets/css/ie10-viewport-bug-workaround.css') }}">
        <link rel="stylesheet" href="{{ base_url('assets/css/custom.css') }}">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="front-end background">
        {{-- Include the navbar --}}
        @include('layouts/partials/navbar')

        <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <img src="assets/images/front.jpg" style="height:400px; width:100%; border-top-right-radius: 6px; border-top-left-radius: 6px;" alt="Alternate Text">
              </div>
          </div>

          <div style="margin-bottom: -22px;" class="row">
              <div class="col-sm-12">
                  <div style="border-radius:0px; border: 0px;" class="panel panel-default">
                      <div class="panel-body">
                          <div class="col-md-8">

                              <h2>Beste vrienden sympathisanten,</h2>

                              <p>
                                  Deze web pagina is na het lang twijfelen er toch door gekomen door de vraag en het aanbod.
                                  Via deze weg kunnen we alle lopende petities en acties toch op een treffelijke manier aanbieden en bundelen .
                                  door besparingen, regeringsmaatregelen, privatiseren en andere oorzaken is er soms nood aan actie en petities om een alternatief die menselijk een eerlijk is naar voor te schuiven.
                                  Soms is de weg naar deze acties moeilijk te bereiken door de vele petities die er al zijn.
                              </p>

                              <p>
                                  Hier vind je ook de link naar de Facebook pagina waar je alles mooi kan volgen.
                                  Ook de geplande acties en evenementen worden mooi gedeeld.
                                  Iedereen alvast bedankt en welkom op mijn pagina !
                              </p>

                          </div>

                          <div class="col-md-4">
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      Petities:
                                  </div>

                                  <div class="list-group">
                                     <a href="http://www.begrotingstekort.activisme.be" class="list-group-item">
                                        <span class="glyphicon glyphicon-asterisk"></span> Help de regering.
                                     </a>

                                      <a href="http://www.zorgsector.activisme.be" class="list-group-item">
                                        <span class="glyphicon glyphicon-asterisk"></span> Invalide petitie.
                                      </a>

                                      <a href="http://www.asiel.activisme.be" class="list-group-item">
                                          <span class="glyphicon glyphicon-asterisk"></span> Stop Theo Francken.
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <footer class="footer-bs">
              <div class="row">
                  <div class="col-md-10 footer-brand animated fadeInLeft">
                      <h2>Over mezelf.</h2>

                      <p>
                          Zo hier ben je dan
                          Mijn naam is Tom Manhaeghe
                          Ik ben als persoon een simpele werkmens die heel wat harde werkjaren mooi mijn werk deed
                          Door een zwaar werkongeval werd me heel wat dingen onmogelijk gemaakt.
                          Ik ben begonnen met activisme door de vele pulsen die ik kreeg over de oneerlijke behandeling van mensen en kinderen !
                          Ik ben dus iemand die hard op kom voor mensen rechten en een rechtvaardig leven !
                          De maatschappij word vele keren verzuurd door dat men mensen boven elkaar gaat klasseren.
                          Ik wil dat onze kinderen en kleinkinderen toch opgroeien in een Multi culturele eerlijke samenleving,
                          Waar de mensen elkander helpen en niet elkander haten.
                          Mensen moeten hun ogen open doen voor de druk ze zal sluiten.
                      </p>

                      <p>© 2016 Tom Manhaeghe.</p>
                  </div>
                  <div class="col-md-2 footer-social animated fadeInDown">
                      <h4>Contact</h4>
                      <ul>
                          <li><a href="https://www.facebook.com/ActivismeTomManhaeghe/">Facebook</a></li>
                          <li><a href="mailto:info@activisme.be">Email</a></li>
                      </ul>
                  </div>
              </div>
          </footer>
      </div>

        {{-- Javascripts --}}
    </body>
</html>
