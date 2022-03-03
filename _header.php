<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Fill Me In" />
    <meta name="author" content="John Doe" />

    <!-- This start file was build by Paul Cheney  -->
    <title>Assignment 2</title>

    <!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maxium-scale=1"
    />

    <!-- STYLE SHEETS -->
    <link href="css/styles.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- HEADER HERE -->
    <div class="headWrap">
      <header class="clearfix">
        <figure>
          <img
            src="images/logo0.png"
            alt="Logo"
            srcset="
              images/logo1.png 1x,
              images/logo2.png 2x,
              images/logo3.png 3x
            "
          />
        </figure>
        <h1>Cabot Cruises</h1>
        <a href="tel:+18005551234" class="phone">1-800-555-1234</a>
      </header>
    </div>
    <!-- NAVIGATION HERE -->
    <div class="navWrap">
      <nav class="clearfix">
        <button id="hamburgerBtn">
          <span class="line top"></span>
          <span class="line middle"></span>
          <span class="line bottom"></span>
        </button>

        <div class="menu-container">
          <ul id="primaryNav">
            <li><a href="index.php">Home</a></li>
            <li><a href="cruise.php">Cruises</a></li>
            <li class="parent">
              <a href="#">Agents</a>
              <ul>
                <li><a href="agent1.php">Sally Rogers</a></li>
                <li><a href="agent2.php">Buddy Sorrell</a></li>
              </ul>
            </li>
            <li><a href="bookCruise.php">Book</a></li>
          </ul>
        </div>

        <div id="formContainer">
          <form id="form" method="get" action="/">
            <input type="search" placeholder="Search" name="s" />
            <button class="search" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </nav>
    </div>