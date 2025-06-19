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
    }

    body {
      display: flex;
      flex-direction: column;
      background-color: #fff;
    }

    main {
      flex: 1;
    }

    #service {
      padding: 50px 20px;
      background-image: linear-gradient(chocolate, white);
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .service-card {
      background-color: #fff8e1;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: transform 0.3s;
      text-align: center;
      padding-bottom: 15px;
    }

    .service-card:hover {
      transform: translateY(-5px);
    }

    .service-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .service-card h3 {
      margin: 10px 0;
      color: #4e342e;
    }

    .service-card a {
      display: inline-block;
      background-color: peru;
      color: white;
      padding: 8px 20px;
      margin-top: 8px;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .service-card a:hover {
      background-color: chocolate;
    }

    @media(max-width: 600px) {
      .service-card img {
        height: 150px;
      }
    }
  </style>
</head>

<body>
  <main>
    <div id="service">
      <div class="services-grid">
        <div class="service-card">
          <img src="quinoasalad.jpg" alt="Quinoa Salad">
          <h3>Quinoa Salad</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="brownie.jpg" alt="Brownie">
          <h3>Brownie</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="croissants.jpg" alt="Croissants">
          <h3>Croissants</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="latte.jpg" alt="Latte">
          <h3>Latte</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="mocha.jpg" alt="Mocha">
          <h3>Mocha</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="expresso.jpg" alt="Espresso">
          <h3>Espresso</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="americano.jpg" alt="Americano">
          <h3>Americano</h3>
          <a href="#">Buy Now</a>
        </div>
        <div class="service-card">
          <img src="cappuccino.jpg" alt="Cappuccino">
          <h3>Cappuccino</h3>
          <a href="#">Buy Now</a>
        </div>
      </div>
    </div>
  </main>

  <?php include("footer.html"); ?>
</body>
