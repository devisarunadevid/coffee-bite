<?php include ("header.html")
?>
<head>
    <style>
        #service{
            height:700px;
            width: 100%;
            background-image:linear-gradient(chocolate,white);
        }
        .row10{
            height: 350px;
            width: 100%;
            margin: auto;
        }
       .col15{
        height:300px;
        width:15%;
        float:left;
        border:solid;
        border-color:black;
        margin-top:30px;
        margin-left:30px;
        border-radius:35px;
        box-shadow:black 10px 10px;
       }
       .col15 h3{
        font-size: 20px;
        right: 10px;
        position: relative;
       }
       .col15 img{
        top:40px;
        left: 20px;
        position:relative;
        border-radius: 35px;
       }
       .col15 h4{
        font-size: 20px;
        text-transform: capitalize;
        top: 20%;
        left: 40px;
        position: relative;
       }
       .col15 a{
        text-decoration:none;
        border-radius: 15px 20px;
        background-color: peru;
        padding: 8px;
        bottom:15px;
        left:16px;
        position:relative;
       }
       .col15 a:hover{
        border-color: brown;
        color:white;
        box-shadow:0 0 10 7px rgba(131, 15, 54, 0.5);
        transition:all 0.3s ease;
       }
    </style>    
<body>
    <div id="service">
        <div class="row10">
            <div class="col15">
                <h3>
                   QUINOA SALAD
                </h3>
                <img src="quinoasalad.jpg"height="200px" width= 80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            <div class="col15">
                <h3>
                   BROWNIE
                </h3>
                <img src="brownie.jpg"height="200px" width= 80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            <div class="col15">
                <h3>
                   CROISSANTS
                </h3>
                <img src="croissants.jpg"height="200px" width=80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            <div class="col15">
                <h3>
                   LATTE
                </h3>
                <img src="latte.jpg"height="200px" width=80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            </div>
            <div class="row10">
            <div class="col15">
                <h3>
                   MOCHA
                </h3>
                <img src="mocha.jpg"height="200px" width=80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            <div class="col15">
                <h3>
                   EXPRSSEO
                </h3>
                <img src="expresso.jpg"height="200px" width=80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            <div class="col15">
                <h3>
                   AMERICANO
                </h3>
                <img src="americano.jpg"height="200px" width= 80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
            <div class="col15">
                <h3>
                   CAPPUCCINO
                </h3>
                <img src="cappuccino.jpg"height="200px" width= 80%>
                <h4>
                    <a href="">buy now</a>
                </h4>
            </div>
        </div>
 </div>
</body>
<?php include ("footer.html")
?>