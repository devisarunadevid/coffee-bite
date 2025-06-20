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
      background-color: #fff8e7;
      color: #3e2723;
      /* Prevent extra scrolling */
      overflow-x: hidden;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      /* Ensure no extra space */
      margin: 0;
      padding: 0;
    }

    main {
      flex: 1;
      width: 100%;
      /* Prevent content from being too short */
      padding-bottom: 20px;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(to right, #f8e5c0, #f6d6a8);
      padding: 30px 15px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .hero img {
      width: 280px;
      border-radius: 12px;
      margin: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .hero-text {
      max-width: 500px;
      margin: 10px;
      text-align: center;
      font-size: 18px;
      line-height: 1.6;
      font-weight: 500;
    }

    /* Features Section */
    .features {
      background-color: #fef1dc;
      padding: 30px 15px;
      text-align: center;
    }

    .features h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .feature-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background-color: #fffaf0;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      padding: 15px;
      max-width: 220px;
      transition: transform 0.3s;
    }

    /* Favorites Gallery */
    .favorites {
      padding: 30px 15px;
      text-align: center;
      background-color: #fff8e7;
    }

    .favorites h2 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #5d4037;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }

    .gallery-item {
      width: 120px;
      height: 120px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Footer Fix */
    footer {
      width: 100%;
      background: #3e2723;
      color: white;
      padding: 20px;
      text-align: center;
      /* Pushes footer to bottom */
      margin-top: auto;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .hero {
        padding: 20px 10px;
      }

      .hero img {
        width: 90%;
        margin: 10px 0;
      }

      .hero-text {
        font-size: 16px;
      }

      .features, .favorites {
        padding: 20px 10px;
      }

      .card {
        max-width: 100%;
        width: 100%;
      }

      .gallery-item {
        width: 45%;
        height: 100px;
      }

      /* Ensure no extra space on mobile */
      html, body {
        overflow-y: auto;
      }
    }
  </style>
</head>

<body>
  <main>
    <div class="hero">
      <img src="cafe.jpg" alt="Coffee shop interior" />
      <div class="hero-text">
        Good days start with great coffee. Cozy up with a book or catch up with friends at Coffee Bite – your daily dose of warmth and taste.
      </div>
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
          <p>From snacks to sweet treats, we’ve got you covered.</p>
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