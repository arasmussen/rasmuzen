<!doctype html>
<html>
  <head>
    <title>Andrew Rasmussen</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/styles.css" />
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
      <div id="content">
        <h1>Andrew Rasmussen</h1>
        <h2>arasmussen (at) katworks (dot) com</h2>
        <ul>
          <li>Originally from Seattle, WA</li>
          <li>Currently in the third year of undergraduate studies at the University of Waterloo in Waterloo, Ontario, Canada</li>
          <li>Have had six software development internships for:
            <ul>
              <li>Facebook (Menlo Park, CA): May-Aug 2012</li>
              <li>Digital Extremes (London, ON): Sep-Dec 2011</li>
              <li>Morgan Stanley (New York, NY): Jan-Apr 2011</li>
              <li>Qualcomm (San Diego, CA): May-Aug 2010</li>
              <li>Microsoft (Seattle, WA): Jun-Aug 2008, Jun-Aug 2009</li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="footer">
      </div>
    </div>
  </body>
</html>
