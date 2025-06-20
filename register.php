<?php include("header.html"); ?>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    html, body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    body {
      flex: 1;
      background-image: url('Coffee pattern3.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      color: #3e2723;
    }

    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px 20px;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.9);
      max-width: 500px;
      width: 100%;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: chocolate;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      text-transform: capitalize;
    }

    .form-group input, .form-group select {
      width: 100%;
      padding: 8px 10px;
      border: 2px solid chocolate;
      border-radius: 5px;
      background-color: #fff;
    }

    .form-group input[type="file"] {
      background-color: #fff;
      border: none;
    }

    .btn-group {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .btn {
      background-color: chocolate;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s, box-shadow 0.2s;
    }

    .btn:hover {
      background-color: #e6a86c;
      color: #3e2723;
      transform: scale(1.05);
      box-shadow: 0 4px 16px rgba(230,168,108,0.18);
    }

    @media(max-width: 500px) {
      .btn-group {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>

<body>
  <main>
    <div class="form-container">
      <div id="form-message" style="display:none; margin-bottom:16px; text-align:center; font-weight:bold;"></div>
      <h2>Register Now</h2>
      <form action="connect.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name</label>
          <input name="name" type="text" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input name="password" type="password" required>
        </div>

        <div class="form-group">
          <label for="phone_number">Phone Number</label>
          <input name="phone_number" type="tel" required>
        </div>

        <div class="form-group">
          <label for="specials">Specials</label>
          <select name="specials" required>
            <option value="">--Select--</option>
            <option value="coffee">Coffee</option>
            <option value="mocha">Mocha</option>
            <option value="cappuccino">Cappuccino</option>
            <option value="brownie">Brownie</option>
            <option value="quinoa salad">Quinoa Salad</option>
            <option value="rosemilk">Rosemilk</option>
            <option value="croissants">Croissants</option>
            <option value="latte">Latte</option>
            <option value="excelsa">Excelsa</option>
            <option value="robusta">Robusta</option>
            <option value="americano">Americano</option>
            <option value="espresso">Espresso</option>
          </select>
        </div>

        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input name="dob" type="date" required>
        </div>

        <div class="form-group">
          <label for="id_proof">ID Proof</label>
          <input name="id_proof" type="file" required>
        </div>

        <div class="btn-group">
          <button class="btn" type="submit">Submit</button>
          <button class="btn" type="reset">Reset</button>
        </div>
      </form>
    </div>
  </main>
</body>

<?php include("footer.html"); ?>
