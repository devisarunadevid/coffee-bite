<?php include("header.html"); ?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #fef6e4;
      color: #333;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .marquee {
      overflow: hidden;
      background-color: burlywood;
      color: #3e2723;
      padding: 10px 0;
      text-align: center;
      font-size: 22px;
      font-weight: bold;
    }

    .map-container {
      width: 100%;
      height: 350px;
      overflow: hidden;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
      display: block;
    }

    .contact-info {
      display: flex;
      flex-wrap: wrap;
      background-color: #f8e5c0;
      padding: 30px 10px;
      justify-content: center;
      align-items: flex-start;
      text-align: center;
    }

    .info-box {
      flex: 1 1 100%;
      padding: 20px;
      color: #3e2723;
    }

    .info-box h4 {
      font-size: 26px;
      margin-bottom: 10px;
      color: #5d4037;
    }

    .info-box p {
      font-size: 18px;
      margin: 8px 0;
    }

    @media (min-width: 769px) {
      .info-box {
        flex: 1 1 45%;
        text-align: left;
      }

      .contact-info {
        text-align: left;
      }
    }

    .filler {
      background-color: #f3d9b1;
      text-align: center;
      padding: 25px 15px;
      font-size: 18px;
      color: #3e2723;
      font-weight: 500;
    }
  </style>
</head>

<body>
  <main>
    <div class="marquee">Welcome to Coffee Bite!</div>

    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6858630384!2d80.21442297484171!3d12.991932987325296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dfa2ed55f3b%3A0x5178b7858fba797f!2sStarbucks!5e0!3m2!1sen!2sin!4v1735031550976!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact-info">
      <div class="info-box">
        <h4><i class="fas fa-map-marker-alt"></i> Location</h4>
        <p>No 142, Phoenix Marketcity</p>
        <p>Velachery Road, Indira Gandhi Road</p>
        <p>Chennai - 600042</p>
      </div>
      <div class="info-box">
        <h4><i class="fas fa-phone-alt"></i> Contact Us</h4>
        <p>18602660010</p>
        <p>coffeebite@gmail.com</p>
      </div>
    </div>

    <div class="filler">
      We’re open daily from <strong>8 AM – 10 PM</strong>. Visit us and enjoy the perfect blend of coffee and comfort!
    </div>

  </main>

  <?php include("footer.html"); ?>
</body>
