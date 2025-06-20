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
      width: 100%;
      overflow-x: hidden;
      background-color: #fff8e7;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0 !important;
      padding: 0 !important;
    }

    main {
      flex: 1;
      padding-bottom: 0 !important;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .hero {
      background: linear-gradient(to right, #f8e5c0, #f6d6a8);
      padding: 40px 30px 30px 30px;
      text-align: center;
      max-width: 1000px;
      width: 100%;
      margin: 32px 0 40px 0;
      border-radius: 18px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    }

    .hero img {
      max-width: 520px;
      width: 100%;
      border-radius: 14px;
      margin: 18px auto 0 auto;
      display: block;
    }

    .hero-text {
      max-width: 700px;
      margin: 24px auto 0 auto;
      padding: 10px;
      font-size: 1.25rem;
    }

    .features {
      background-color: #fef1dc;
      padding: 40px 30px 30px 30px;
      text-align: center;
      max-width: 1000px;
      width: 100%;
      margin: 40px 0 40px 0;
      border-radius: 18px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    }

    .features h2 {
      font-size: 2.4rem;
      margin-bottom: 28px;
    }

    .feature-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin-top: 15px;
    }

    .card {
      background: #f3e0c7;
      border-radius: 8px;
      padding: 15px;
      width: 100%;
      max-width: 220px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .favorites {
      padding: 40px 30px 30px 30px;
      text-align: center;
      max-width: 1000px;
      width: 100%;
      margin: 40px 0 40px 0;
      border-radius: 18px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    }

    .favorites h2 {
      font-size: 2.2rem;
      margin-bottom: 28px;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 24px;
      margin: 24px auto 0 auto;
      max-width: 800px;
    }

    .gallery-item {
      width: 23%;
      max-width: 220px;
      min-width: 160px;
      aspect-ratio: 1/1;
      border-radius: 12px;
      overflow: hidden;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    footer {
      width: 100%;
      background: papayawhip;
      color: #3e2723;
      padding: 0;
      text-align: inherit;
      margin-top: 0 !important;
    }

    @media (max-width: 600px) {
      .hero, .features, .favorites {
        padding: 15px 5px;
      }
      .card {
        max-width: 100%;
      }
      .gallery-item {
        width: 90%;
        max-width: 320px;
      }

      html, body {
        overflow-y: auto;
        position: relative;
      }
    }
  </style>
</head>

<body>
  <main>
    <div class="hero">
      <img src="cafe.jpg" alt="Coffee shop interior">
      <p class="hero-text">
        Good days start with great coffee. Cozy up with a book or catch up with friends at Coffee Bite – your daily dose of warmth and taste.
      </p>
    </div>

    <div class="features">
      <h2>What We Offer</h2>
      <div class="feature-cards">
        <div class="card">
          <i class="fas fa-mug-hot"></i>
          <h4>Fresh Brews</h4>
          <p>Made with handpicked beans and crafted love.</p>
        </div>
        <div class="card">
          <i class="fas fa-utensils"></i>
          <h4>Tasty Bites</h4>
          <p>From snacks to sweet treats, we've got you covered.</p>
        </div>
        <div class="card">
          <i class="fas fa-wifi"></i>
          <h4>Free Wi-Fi</h4>
          <p>Work, chill or stream while you sip and snack.</p>
        </div>
      </div>
    </div>

    <div class="favorites">
      <h2>Customer Favorites</h2>
      <div class="gallery">
        <div class="gallery-item">
          <img src="cappuccino.jpg" alt="Cappuccino">
        </div>
        <div class="gallery-item">
          <img src="croissants.jpg" alt="Croissant">
        </div>
        <div class="gallery-item">
          <img src="latte.jpg" alt="Latte Art">
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1514517220017-8ce97a34a7b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Coffee Beans">
        </div>
      </div>
    </div>
  </main>

  <?php include("footer.html"); ?>
</body>