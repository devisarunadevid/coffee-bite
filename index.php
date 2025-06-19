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

    body {
      background-color: #fff8e7;
      color: #3e2723;
    }

    .hero {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 50px 20px;
      background-color: beige;
    }

    .hero img {
      max-width: 300px;
      width: 100%;
      height: auto;
      margin: 10px 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .hero-text {
      max-width: 600px;
      margin: 10px 20px;
      font-size: 20px;
      line-height: 1.6;
    }

    .section {
      background-color: #f6e6cb;
      padding: 40px 20px;
      font-size: 18px;
      line-height: 1.7;
      text-align: justify;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }

      .hero-text {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="hero">
    <img src="cafe.jpg" alt="Coffee Cup Image" />
    <div class="hero-text">
      <p>Good days start with great coffee.</p>
      <p>Brewing comfort, one cup at a time.</p>
      <p>Escape the ordinary, embrace the extraordinary.</p>
      <p>A lot can happen over coffee.</p>
      <p>Inspiring and nurturing the human spirit.</p>
    </div>
  </div>

  <div class="section">
    <p>A coffee shop's atmosphere can be unique, crafted by lighting, music, and thoughtful design choices. A great coffee shop offers a unique experience, guided by friendly baristas eager to share recommendations.</p>
    <p>Our cafe is cozy, inviting, and designed to be your sanctuary. Enjoy pet-friendly spaces, grab-and-go convenience, and exciting events that make every visit memorable.</p>
  </div>
</body>
<?php include("footer.html"); ?>
