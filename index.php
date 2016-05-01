<!DOCTYPE html>
<html>
  <head>
    <title>Drupal Camp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:title" content="Drupalcamp Manila 2016 - May 7 - 8, 2016" />
    <meta property="og:url" content="http://2016.drupalcampmanila.com/" />
    <meta property="og:image" content="http://2016.drupalcampmanila.com/images/drupalcamp_2014.jpg" />
    <meta property="og:description" content="Drupalcamp Manila 2016 is a 2-day event. The first day is full of informative sessions, inspiring keynotes, social events, BOFs, usability testing and more. The second day is full of workshops and hands-on trainings for beginners to advance skills. Join us in this joyous celebration of community and code!" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css" >
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>

  <body>

  <div class="Home">
    
    <!-- Upper header -->
    <header>
      <nav class="nav navbar-fixed-top" id="top-nav">
        <div class="container">
          <div class="navbar-nav col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a class="navbar-brand col-xs-4 col-sm-4 col-md-4" href="#" id="brand-img">
              <img alt="Brand" src="images/logo.png" class="drupal-img">
            </a>
            <div class="htop col-sm-4">
              <p class="navbar-text" id="date">MAY 07,2016 - May 08, 2016</p>
            </div>
            <div class="text-center col-sm-4 col-md-4 col-xs-6">
              <a class="fb-social navbar-right" href="https://web.facebook.com/groups/phdrug/"><img src="images/fb.png"></a>
              <!-- <p class="n3 navbar-text navbar-right"><a href="#register" class="navbar-link"><span id=m1>ATTEND</span></a></p> -->
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- END Upper header -->

    <!-- Navigation -->
    <div class="bg clearfix" id="bg-size">
      <div class="btn-nav">
        <nav class="navbar navbar-default" id="nav-menu">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand nav-toggle" href="#"><img src="images/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav col-lg-12 col-md-12 col-sm-12">
                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#speakers" ><img src="images/speakers.png"><p class="col-lg-12 col-md-12 col-sm-12">SPEAKERS</p></a></li>
                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#schedule" ><img src="images/session.png"><p class="col-lg-12 col-md-12 col-sm-12">SCHEDULE</p></a></li>
                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#sponsors" ><img src="images/sponsor.png"><p class="col-lg-12 col-md-12 col-sm-12">SPONSORS</p></a></li>
                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#register" ><img src="images/attend.png"><p class="col-lg-12 col-md-12 col-sm-12">REGISTER</p></a></li>
                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#venue"><img src="images/locate.png"><p class="col-lg-12 col-md-12 col-sm-12">VENUE</p></a></li>
                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#about"><img src="images/update.png"><p class="col-lg-12 col-md-12 col-sm-12">ABOUT</p></a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="drupal-box">
          <div class="bg-txt">
            <h1 class="col-xs-12" id="drupal-txt">DRUPAL CAMP</h1>
            <p class="col-xs-12" id="manila-txt">Manila</p>
            <h1 class="col-xs-12" id="lbl">2016</h1>
          </div>
        </div>
      </div>
      <div class="m2 col-md-12 col-sm-12 col-xs-12">
        <button type="button" class="btn  btn-responsive" alt="">
          <a href="#register" class="btn-attend-main"><img src="images/btn.png"><span id="attend-txt">ATTEND</span></a>
        </button>
      </div>
    </div>
    <!-- END Navigation -->

    <!-- Speakers -->
    <section id="speakers">
      <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <div class="text-center">
          <ol class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
            <li class="item4"></li>
            <li class="item5"></li>
            <li class="item6"></li>
            <li class="item7"></li>
            <li class="item8"></li>
          </ol>
        </div>

        <?php include_once('speakers.php'); ?>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php foreach ($speakers as $key => $speaker) : ?>
            <?php //if (!$speaker['name']) continue ?>
            <div class="item <?php echo $key === 0 ? 'active' :'' ?>" >
              <div class="row">
                <h4 class="col-md-9"><a href="<?php echo $speaker['link'] ?>"><?php echo $speaker['name'] ?></a></h4>
                <span class="col-md-12 col-sm-12 col-xs-12" id="span1"><?php echo $speaker['position'] ?></span>
                <span class="col-md-12 col-sm-12 col-xs-12" id="span2"><?php echo $speaker['company'] ?></span>
                <p class="col-md-8 col-sm-8 col-xs-8"><?php echo $speaker['intro'] ? $speaker['intro'] : '' ?></p>
                <a href="<?php echo $speaker['link'] ?>"><img class="col-md-4" id="speaker-img" src="images/speakers/<?php echo $speaker['image'] ?>" alt="<?php echo $speaker['name'] ?>"></a>
                <!-- <div class="m3 col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="btn  btn-responsive" alt=""><a href="#register"><img src="images/btn.png"><span id="attend-txt2">ATTEND</span></a></button>
                </div> -->
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" onclick="return false;" role="button">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" onclick="return false;"  role="button">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- END Speakers -->

    <!-- Schedule -->
    <section class="section-white" id="schedule">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12">
            <h2 class="block-title">SCHEDULE</h2>
            <div class="row">
              <div class="col-md-12">
                <h3>Day 1</h3>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal Basics for Non-Programmers</span><br>
                  <span class="speaker">Joseph Bonilla</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal Theming Basics</span><br>
                  <span class="speaker">Ma. Ruthie Hallarsis</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Module Basics</span><br>
                  <span class="speaker">Albert Causing</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">A Developer's Guide to Mastering Forms</span><br>
                  <span class="speaker">Bryan Manalo</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal Contribution</span><br>
                  <span class="speaker">Leolando Tan / John Ross Castano</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Automated Testing Will Save The World: Behavior-Driven Development and Behat</span><br>
                  <span class="speaker">Colin Sagan</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">How to Become a Better Drupal Developer (with real life case studies)</span><br>
                  <span class="speaker">Solihin Jinata</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Technical Discovery for Drupal 8 Project</span><br>
                  <span class="speaker">Ravindra Singh</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Scrum for Drupal Projects</span><br>
                  <span class="speaker">Solihin Jinata</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Study Case about FOX.com Website</span><br>
                  <span class="speaker">Pratomo Ardianto</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Design Principles for Minimum Viable Product</span><br>
                  <span class="speaker">Junaid Masoodi</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal 7 Configuration Management and Deployment of Content</span><br>
                  <span class="speaker">Harshil Maradiya</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal 8 Development Effective and Efficient with Drupal Console</span><br>
                  <span class="speaker">Eduardo Garcia</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal Continuous Integration Development with Docker</span><br>
                  <span class="speaker">Tom Tran</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal 8 Elastic Search</span><br>
                  <span class="speaker">Roal Umandal</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Advance Drupal 8 Theming</span><br>
                  <span class="speaker">Suryanto Rachmat</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">Automated Testing With Behat</span><br>
                  <span class="speaker">Joseph Chin</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">The Power of Terminus for Pantheon Platform</span><br>
                  <span class="speaker">Paul De Paula</span>
                </div>
              </div>
              <div class="col-md-12">
                <h3>Day 2</h3>
                <div class="col-md-6 sched">
                  <span class="topic">Drupal 8 Basic - Workshop</span><br>
                  <span class="speaker">Rachel Jaro</span>
                </div>
                <div class="col-md-6 sched">
                  <span class="topic">More Topics to be announced soon</span><br>
                  <span class="speaker"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Schedule -->

    <!-- Sponsors -->
    <section id="sponsors" class="section-white">
      <div class="container">
          
        <h2 class="block-title">SPONSORS</h2>

        <div class="row">
          <div class="col-md-6 sponsor-container silver">
            <h1>Silver</h1>
            <a href="https://www.prometsource.com/">
              <img src="images/sponsors/prometsource.png">
            </a>
            <a href="http://www.srijan.net/">
              <img src="images/sponsors/srijan.png">
            </a>
          </div>
          <div class="col-md-6 sponsor-container bronze">
            <h1>Bronze</h1>
            <a href="https://www.drupal.org/node/2466689">
              <img src="images/sponsors/annai.png">
            </a>
            <a href="https://pantheon.io">
              <img src="images/sponsors/pantheon.png">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 sponsor-container community">
            <h1>Community Sponsors</h1>
            <a href="http://www.cp-union.com/">
              <img src="images/sponsors/cpunion.png">
            </a>
            <a href="http://devcon.ph/">
              <img src="images/sponsors/devcon.png">
            </a>
            <a href="http://phil-it.org.ph/">
              <img src="images/sponsors/philit.png">
            </a>
            <a href="http://www.phpugph.com/">
              <img src="images/sponsors/phpugph.png">
            </a>
            <a href="http://8layeracademy.com/">
              <img src="images/sponsors/8layer.png">
            </a>
          </div>
          <div class="col-md-6 sponsor-container media-sponsor">
            <h1>Media Sponsors</h1>
            <a href="http://www.rappler.com/">
              <img src="images/sponsors/rappler.png">
            </a>
            <!--<a href="http://www.philstar.com/">
              <img src="images/sponsors/philstar.png">
            </a>-->
          </div> 
        </div>
        
      </div>
    </section>
    <!-- END Sponsors -->

    <!-- Registration -->
    <section id="register" class="section-white">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12">
            <h2 class="block-title">REGISTER</h2>

            <div data-tb="ticket-form" data-event="5106"></div>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://cdn.ticketbase.com/widgets/v0.1/ticketbase.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','ticketbase-wjs');</script>
          </div>
        </div>
      </div>
    </section>
    <!-- END Registration -->

    <!-- Venue -->
    <section id="venue" class="section-white">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12">
            <h2 class="block-title">VENUE</h2>
          </div>
          <div class="col-md-4">
            <div class="venue-overlay">
              <p>10th Fl, Hewlett Packard Enterprise <br/>Two Cyberpod Eton Centris EDSA cor. Quezon Ave., Quezon City 1100</p><br/>
            </div>
          </div>

          <div class="col-md-4">
            <p>How to get here:</p>
            <b>From the airport</b>
            <ol>
              <li>Take the Free shuttle bus to Pasay, City.</li>
              <li>Take the MRT from Taft to Quezon Ave.</li>
            </ol>
          </div>

          <div class="col-md-4">
            <p>&nbsp;</p>
            <b>Coming from the North via NLEX</b>
            <ol>
              <li>Take the MRT from North Ave. to Quezon Ave.</li>
            </ol>
          </div>
        </div>
      </div>

      <div class="map-overlay" onClick="style.pointerEvents='none'"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.2504459796082!2d121.037862614749!3d14.641719879993213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7aa1e9139cd%3A0x3dc172222f531309!2sEton+Centris!5e0!3m2!1sen!2sph!4v1457143656728"  height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
    </section>
    <!-- END Venue -->

    <!-- About -->
    <section id="about" class="section-white">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-12">
            <h2 class="block-title">ABOUT</h2>
            <div class="post">
              <div class="post-content">
                <p>DrupalCamp Manila is an annual event where all professional Drupal developers, enthusiasts, and students from different schools and universities gather to showcase learning and celebrate interest in Drupal and in the Drupal Community.</p>

                <p>Our theme for this year is <strong>​"Building stronger development community"</strong>.</p>

                <p>Drupal, with its 8th version released, is a Free Software tool to ease the development of web applications. Due to its versatility and power, its usage is growing in web projects of all kinds &mdash; from big industries to small companies.

                <p>The said event is being celebrated by several countries worldwide to show their support to Drupal which actively participated by New Jersey, Mumbai, South Wellington, Phoenix, London, Pune, Ottawa, Austin, Stanford and Amsterdam. This coming May 7­ to 8, Manila will be one of those cities that will be participating in the biggest Camp of Web Developers in the world to be hosted by Drupal Pilipinas.</p>

                <p>The first day is full of informative sessions, inspiring keynotes, social events, BOFs, usability testing and more.</p>
                <p>The second day is full of workshops and hands-on trainings for beginners to advance skills.</p>

                <p>Join us in this joyous celebration of community and code!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END About -->

    <!-- Footer -->
    <section class="footer section-white">
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-6">
            Organized by <a href="http://drupalpilipinas.org">Drupal Pilipinas</a> and <a href="http://koodi.ph">Koodi Systems</a> | Contact us via our <a href="https://web.facebook.com/groups/phdrug/">Facebook group</a>
            <a class="fb-social2 navbar-right" href="https://web.facebook.com/groups/phdrug/"><img src="images/fb.png"></a>
          </div>

          <div class="col-md-6"></div>
        </div>
      </div>
    </section>
    <!-- END Footer -->
  </div>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.waypoints.js"></script>
  <script src="js/script.js"></script>

  <!--Start of Zopim Live Chat Script-->
  <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="//v2.zopim.com/?3DTVhI6ueFMi2LHvDIs3ziMRyqEmuJvh";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
  </script>
  <!--End of Zopim Live Chat Script-->

  </body>
</html>