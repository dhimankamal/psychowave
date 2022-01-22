<?php $page = basename($_SERVER['PHP_SELF']); ?>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css2/style.css" />
    <link rel="stylesheet" href="css2/tablet.css" />
    <link rel="stylesheet" href="css2/mobile.css" />
  </head>
  <body>
    <div class="header">
      <ul>
        <li>Vist Us daily from 10:00 AM to 7:00 PM</li>
        <li>
          <i class="bi bi-geo-alt-fill"></i>Head Office - 111,South Model Gram
          Ludhiana (Punjab) India
        </li>
        <li><i class="bi bi-envelope-fill"></i>info@psychowaves.in</li>
        <li><a class="none"  href="knownourlocation.php">Known Our All Locations</a></li>
      </ul>
    </div>
    <div class="navbar">
      <div class="logo"><img src="img/icons/logo.png" alt="" /></div>
      
      <div class="appointment">
        <div class="call">
          <p>Call : <span>+91 987 842 3202</span></p>
        </div>
        <div>
          <button class="button"><span>Book Appointment</span></button>
        </div>
      </div>
    </div>
    <hr class="hr1" />
    <div class="navbar2">
      <ul>
        <li><a href="index.php" id="<?php if ($page == 'index.php') : echo 'active';
												endif; ?>">Home</a></li>
        <li ><a id="<?php if ($page == 'services.php') : echo 'active';
												endif; ?>" href="services.php">Our Services</a></li>
        <li><a id="<?php if ($page == 'Contactus.php') : echo 'active';
												endif; ?>" href="Contactus.php">Contact Us</a></li>
        <li><a id="<?php if ($page == 'NOCCP2021.php') : echo 'active';
												endif; ?>" href="NOCCP2021.php">NOCCP2021</a></li>
        <li><a id="<?php if ($page == '') : echo 'active';
												endif; ?>"  href="http://mapngo.org/" >Our Ngo Map</a></li>
      </ul>
    </div>

    <hr class="hr1" />
    <div class="subnav" id="subnav">
      <ul>
        <li><a href="">For Psychology Students </a></li>
        <li><a href="">For Children</a></li>
        <li><a href="">For Adults</a></li>
        <li><a href="">For Old Age</a></li>
        <li><a href="">For Teenager</a></li>
        <li><a href="">For Couples</a></li>
        <li><a href="">For Organizations</a></li>
      </ul>
    </div>