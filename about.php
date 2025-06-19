<?php include("header.html"); ?>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #fef6e4;
      color: #333;
    }

    .marquee {
      overflow: hidden;
      background-color: burlywood;
      color: #3e2723;
      padding: 8px 0;
      text-align: center;
      position: relative;
    }

    .marquee-text {
      display: inline-block;
      white-space: nowrap;
      animation: marquee 12s linear infinite;
      font-size: 22px;
      font-weight: 600;
    }

    @keyframes marquee {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }

    .section {
      display: flex;
      flex-wrap: wrap;
      padding: 30px 10px;
      background-color: #f8e5c0;
      align-items: center;
      justify-content: center;
    }

    .section:nth-child(even) {
      background-color: #e9d4b2;
    }

    .section img {
      width: 80%;
      max-width: 300px;
      display: block;
      margin: 0 auto;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .text {
      flex: 1;
      min-width: 300px;
      padding: 20px;
      font-size: 18px;
      line-height: 1.6;
      color: #3e2723;
    }

    @media (max-width: 768px) {
      .section {
        flex-direction: column;
        text-align: center;
      }

      .text {
        padding: 15px;
      }
    }
  </style>
</head>

<body>
  <div class="marquee">
    <div class="marquee-text">Welcome to Coffee Bite! Enjoy the aroma & taste of perfection ☕</div>
  </div>

  <div class="section">
    <img src="cafe1.jpg" alt="about cafe">
    <div class="text">
      <p>At Coffee Bite, we take pride in our artisanal coffee, brewed to perfection using the finest beans from around the world. Our menu is thoughtfully curated to offer a variety of delectable options, from hearty breakfasts to indulgent desserts. Whether you're looking for a cozy corner to read a book or catch up with friends, you'll find it here.</p>
    </div>
  </div>

  <div class="section">
    <div class="text">
      <p>Our friendly staff is dedicated to making your experience memorable. We believe in the power of connection, creating a warm and inviting atmosphere that feels like a home away from home. So come in, take a seat, and let us treat you to the best coffee and bites in town.</p>
    </div>
    <img src="cafe2.jpg" alt="about cafe 2">
  </div>
</body>

<?php include("footer.html"); ?>
