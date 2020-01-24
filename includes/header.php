<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrew Gormley | Dashboard</title>
    <link rel="icon" type="image/png" href="http://andrewgormley.co.uk/img/favicon.png" />
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="reveal" id="modal" data-reveal>
      <img src="img/hello.gif" />
      <p>
        Hey friend,<br /><br />Welcome to my website/portfolio/dashboard thing!<br /><br /> I built this site because I missed working on SaaS products and I want to get back to doing what I love therefore I built a quick and very messy prototype of a web app called 'ResumeDash' that hosts peoples portfolios. Please take a look around and contact me if you would like to have a chat.<br /><br />Andrew<br /><br />P.S. This is actually my portfolio :).
      </p>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <nav>

      <div class="avatar" data-open="modal">
        <img src="img/profile.jpg" />
        <h4>Andrew</h4>
        <div class="alert"></div>
      </div>

      <?php
        function active($currect_page){
          $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
          $url = end($url_array);
          if($currect_page == $url){
              echo 'active'; //class name in css
          }
        }
        ?>

      <ul class="grid-x grid-padding-x">

        <li class="small-3 large-12">
          <a class="<?php active('index.php');?>" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            <div class="nav-item">
              Experience
            </div>
          </a>
        </li>

        <li class="small-3 large-12">
          <a class="<?php active('projects.php');?>" href="projects.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            <div class="nav-item">
              Projects
            </div>
          </a>
        </li>

        <li class="small-3 large-12">
          <a class="<?php active('styleguide.php');?>" href="styleguide.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
            <div class="nav-item">
              Guidelines
            </div>
          </a>
        </li>

        <li class="small-3 large-12">
          <a class="<?php active('contact.php');?>" href="contact.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            <div class="nav-item">
              Contact
            </div>
          </a>
        </li>

      </ul>

    </nav>

    <header>
      <div class="left">
        <div class="avatar" data-open="modal">
          <img src="img/profile.jpg" />
          <h4>Andrew</h4>
          <div class="alert"></div>
        </div>
      </div>
      <div class="logo" data-open="modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        ResumeDash
      </div>
      <div class="right">
        <a href="contact.php"><button class="button">Contact</button></a>
      </div>
    </header>
