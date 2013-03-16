<!DOCTYPE html>
<html>
  <head>
    <title>Andrew Rasmussen</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/smoothness/jquery-ui-1.9.0.custom.min.css" />
    <link rel="stylesheet" href="/css/theme.css" />
    <script src="/js/jquery-1.8.2.js"></script>
    <script src="/js/jquery-ui-1.9.0.custom.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/rainbow-custom.min.js"></script>
    <script src="/js/analytics.js"></script>
  </head>
  <body>
    <div id="center">
      <div id="left">
        <div id="profile">
          <a href="http://www.rasmuzen.com"><img src="/img/andrew.png" alt="andrew" /></a>
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
  'facebook' => '/raz',
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
