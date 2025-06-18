<?php include("header.html");
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        *{
            margin:0%;
            padding:0%;
        }
        #contact
        {
            height:700px;
            width:100%;
            background-image:url('coffee bean.png');
            background-size:cover;
        }
        .row7{
            height:350px;
            width:100%;
        }
        .column7{
            height:350px;
            width:50%;
            float:left;
        }
        h4{
            top:70px;
            position: relative;
            font-size:30px;
            text-align:center;
        }
        .column8{
            height:350px;
            width:50%;
            float:left;
        }
 .column8 p{
            left:40%;
            top:80px;
            position:relative;
            font-size:150%;
        }
        .column7 p{
            text-transform:capitalize;
            font-size:150%;
            top:80px;
            left:40%;
            position:relative;
        }
        marquee{
            height:45px;
            top:5px;
            position:relative;
            color:rgb(27,24,13);
            background-color:burlywood;
        }
        marquee h4{
            font-size:25px;
            top:10px;
            position: relative;
        }
    </style>
</head>
<body>
<marquee behaviour="" directions="">
        <h4>Welcome to Coffee Bite!</h4>
    </marquee>
    <div id="contact">
      <div class="row6">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6858630384!2d80.21442297484171!3d12.991932987325296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dfa2ed55f3b%3A0x5178b7858fba797f!2sStarbucks!5e0!3m2!1sen!2sin!4v1735031550976!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="row7">
        <div class="column7">
            <h4>
                <i class="fas fa-map-marker-alt"></i>Location
            </h4>
            <p> No 142,Phoenix Marketcity,</p>
            <p>Velachery road</p>
            <p>Indira Gandhi Road</p>
            <p>Chennai-600042.</p>
        </div>
        <div class="column8">
            <h4>
                <i class="fas fa-phone-alt"></i>Contact Us
            </h4>
            <p>
                18602660010
            </p>
            <p>
                coffeebite@gmail.com
            </p>
        </div>
      </div>
    </div>
</body>
<?php include("footer.html");
?>