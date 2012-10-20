<!doctype html>
<html>
  <head>
    <title>Andrew Rasmussen</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/smoothness/jquery-ui-1.9.0.custom.min.css" />
    <script src="/js/jquery-1.8.2.js"></script>
    <script src="/js/jquery-ui-1.9.0.custom.min.js"></script>
    <script type="text/javascript">
      $(function() {
        $('#accordion').accordion({
          heightStyle: "content"
        });
        $('#tabs').tabs();
      });
    </script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34368328-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
    <div id="center">
      <div id="left">
        <div id="profile">
          <img src="/img/andrew.png" alt="andrew" />
        </div>
        <div id="nav">
          <ul>
<?php

$domains = array(
  'facebook' => 'https://www.facebook.com',
  'stackoverflow' => 'http://stackoverflow.com',
  'linkedin' => 'http://linkedin.com',
  'twitter' => 'https://twitter.com',
  'github' => 'https://github.com',
  'resume' => 'http://www.rasmuzen.com'
);
$profiles = array(
  'facebook' => '/rasmussen.andrew',
  'stackoverflow' => '/users/710360/arasmussen',
  'linkedin' => '/pub/andrew-rasmussen/18/95/21b',
  'twitter' => '/rasmuzen',
  'github' => '/arasmussen',
  'resume' => '/resume.php'
);
$icons = array(
  'facebook' => '/img/icons/facebook.png',
  'stackoverflow' => '/img/icons/stackoverflow.png',
  'linkedin' => '/img/icons/linkedin.png',
  'twitter' => '/img/icons/twitter.png',
  'github' => '/img/icons/github.png',
  'resume' => ' /img/icons/rasmuzen.png'
);

foreach ($domains as $site => $domain) {
  echo '<li>';
  echo   '<a href="' . $domain . $profiles[$site] . '">';
  echo     '<img class="navImg" src="' . $icons[$site] . '" alt="' . $site . ' icon" />';
  echo     '<span class="navSite">' . $site . '</span>';
  echo   '</a>';
  echo '</li>';
}
?>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Andrew Rasmussen</h1>
        <h2>arasmussen (at) katworks (dot) com</h2>
        <div id="accordion">
          <h3>About me</h3>
          <div>
            <ul>
              <li>Originally from Seattle, WA</li>
              <li>21 years old</li>
              <li>Currently in my 4th year of my Bachelor of Software Engineering at the University of Waterloo in Ontario, Canada</li>
              <li>I love side projects and have a hard time working on one without thinking about a business model</li>
              <li>I'm currently looking for a software engineering internship at an earlier stage startup in the Bay Area, New York City, Seattle, or Boston</li>
              <li>I've lived in San Diego CA, Mountain View CA, Seattle WA, New York NY, Waterloo ON, and London ON</li>
              <li>Right now I'm working on a website that will let people create chess algorithms and compete with other algorithms</li>
            </ul>
          </div>
          <h3>Work experience</h3>
          <div>
            <p>I've had six software development internships</p>
            <ul>
              <li>Facebook (Menlo Park, CA): May-Aug 2012</li>
              <li>Digital Extremes (London, ON): Sep-Dec 2011</li>
              <li>Morgan Stanley (New York, NY): Jan-Apr 2011</li>
              <li>Qualcomm (San Diego, CA): May-Aug 2010</li>
              <li>Microsoft (Seattle, WA): Jun-Aug 2008, Jun-Aug 2009</li>
            </ul>
            <p>I've done some consulting too!</p>
            <ul>
              <li>Tungsten Property (New York, NY): Dec 2011 to current</li>
            </ul>
          </div>
          <h3>Stuff I've built</h3>
          <div>
            <div id="tabs">
              <ul>
                <li><a href="#tab1">Tungsten Property</a></li>
                <li><a href="#tab2">Chess AI Site</a></li>
                <li><a href="#tab3">3D OpenGL Demo</a></li>
                <li><a href="#tab4">Tri Grid Viewer</a></li>
                <li><a href="#tab5">Rasmuzen</a></li>
              </ul>
              <div id="tab1">
                <p>I single-handedly developed and launched Tungsten Property's <a href="http://www.tungstenproperty.com">current site</a> using ec2/LAMP. I still maintain the site and work on new features when I have time to.</p>
                <img src="/img/tungsten.png" alt="tungsten" />
              </div>
              <div id="tab2">
                <p>I'm currently working on a website which would allow users to upload their chess algorithm to see how it does against other users' chess algorithms and watch the games live online. The website is written in PHP using CodeIgniter and the service running the algorithms is written in C++. PHP scripts communicate with the C++ service via Thrift.</p>
                <img src="/img/chess.png" alt="chess" />
              </div>
              <div id="tab3">
                <p>Having played a ton of video games as a kid, I got a pretty deep interest in computer graphics when I got to school. I tried using game engines such as OGRE and Unity but ended up finding it much more interesting to work directly with OpenGL. The project shown lets the user, a beautiful cube, walk around a heightmap terrain with all the associated physics/collision detection. Written from scratch using C++ and modern OpenGL with shaders.</p>
                <img src="/img/graphics.jpg" alt="graphics" />
              </div>
              <div id="tab4">
                <p>This project is super small, but was a really fun take-home interview assignment! As you can see from the image below, I can easily enjoy blowing a lot of time using this app.</p>
                <img src="/img/trigrid.png" alt="trigrid" />
              </div>
              <div id="tab5">
                <p>Rasmuzen is this actual site that you're on right now. I enjoy creating an online identity for myself by keeping a graphical collection of my past/current projects and providing links to many other websites that I spend a lot of time on.</p>
                <p>As you can see it's not the prettiest right now and still has a long way to go!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="footer">
      </div>
    </div>
  </body>
</html>
