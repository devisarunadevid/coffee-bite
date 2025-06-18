<?php include("header.html")
?>
<head>
    <style>
        *{
            margin:0%;
            padding:0%;
        }    
        #about{
            height:700px;
            width:100%;
        }
        .row7{
            height:350px;
            width:100%;
            background-color:wheat;
            display:flex;
        }
        .col9{
              height: 350px;
            width :50%;
            float:left;
            top:30%;
            position:relative;
        }
        .col9 img{
             width:30%;
            left: 20%;
            bottom: 20px;
            position: relative;
        }
        .col10{
             height: 350px;
            width: 50%;
            float:right;
        }
        .col10 p{
            text-transform:capitalize;
            font-size: 23px;
            top:20%;
            position: relative;
        }
        .row8{
             height: 350px;
            width: 100%;
            display:flex;
            background-color:tan;
        }
        .col11{
             height:350px;
            width:50%;
            float:left;
            top:30%;
            position:relative;
        }
        .col11 p{
             text-transform:capitalize;
            font-size: 23px;
            top: 20px;
            left:20px;
            position: relative;
        }
        .col12{
              height:350px;
            width:50%;
            float:left;
            top:30%;
            left:10%;
            position:relative;
        }
        .col12 img{
               width:30%;
            left: 30px;
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
    <div id="about">
        <div class="row7">
            <div class="col9">
                <img src="cafe1.jpg" height="200px" width="50%" alt="about cafe">
            </div>
            <div class="col10">
                 <p>
                    At Coffee Bite, we take pride in our artisanal coffee,<br>
                    brewed to perfection using the finest beans sourced from around the world.<br>
                    Our menu is thoughtfully curated to offer a variety of delectable options,<br> 
                    from hearty breakfasts to light snacks and indulgent desserts.<br>
                    Whether you're looking for a quiet corner to read a book, <br>
                    a spot to catch up with friends, or a place to work, you'll find it here.<br>
                </p>
            </div>
        </div>
        <div class="row8">
            <div class="col11">
                <p>
                    Our friendly staff is dedicated to making your experience memorable.<br>
                    We believe in the power of connection, and we strive to create a warm<br>
                    and inviting atmosphere that feels like a home away from home. <br>
                    So come in, take a seat, and let us treat you to the best coffee and bites<br>
                    in townOur friendly staff is dedicated to making your experience memorable.<br> 
                </p>
            </div>
            <div class="col12">
                <img src="cafe2.jpg" height="200px" width="50%" alt="about cafe">
            </div>
        </div>
    </div>
</body>
<?php include("footer.html")
?>