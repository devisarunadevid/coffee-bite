<?php include("header.html")
?>
<head>
    <style>
        *{
            margin:0%;
            padding:0%;
        }
        #register{
            height: 700px;
            width:100%;
            background-image: url('Coffee pattern3.jpeg');
            background-size:cover;
        }
        table{
            height:350px;
            width: 500px;
            top: 7px;
            left:20%;
             position:relative;
        }
        .button{
            background-color:chocolate;
            border:none;
            border-radius:25px;
        }
         .button:hover{
            background-color:chocolate;
            border:none;
            border-radius:5px;
            box-shadow:brown 0px 0px 10px 7px;
        }
        td{
            font-size:25px;
            text-transform:capitalize;
        }
         input,select{
            width:100%;
            height:30px;
            border:black double;
            background-color:white;
        }
          input[type="submit"]{
            width:80%;
            left:30%;
            position: relative;
        }
        input[type="reset"]{
            width:50%;
            left:30%;
            position: relative;
        }
        </style>
</head>
<body>
    <form action="connect.php" method="post">
        <div id="register">
            <table>
                <tr>
                    <td>
                        name
                    </td>
                    <td><input name="name" type="text"></td>
                </tr>
                <tr>
                    <td>
                       email
                    </td>
                    <td><input name="email" type="email"></td>
                </tr>
                <tr>
                    <td>
                       password
                    </td>
                    <td><input name="password" type="password"></td>
                </tr>
                <tr>
                    <td>
                        phone_number
                    </td>
                    <td><input name="phone_number" type="tel"></td>
                </tr>
                <tr>
                    <td>
                        specials
                    </td>
                    <td><select name="specials" id="">
                        <option value="coffee">coffee</option>
                        <option value="mocha">mocha</option>
                        <option value="cappuccino">cappuccino</option>
                        <option value="brownie">brownie</option>
                        <option value="quinoa salad">quinoa salad</option>
                        <option value="rosemilk">rosemilk</option>
                        <option value="croissants">croissants</option>
                        <option value="latte">latte</option>
                        <option value="excelsa">excelsa</option>
                         <option value="robusta">robusta</option>
                        <option value="americano">americano</option>           
                        <option value="espresso">espresso</option>
                    </select></td>
                </tr>
                <tr>
                <td>dob</td>
                <td><input name="dob" type="date"></td>
            </tr>
            <tr>
                <td>id_proof</td>
                <td><input name="id_proof" type="file"></td>
            </tr>
             <tr>
                <td><input class="button" type="submit"></td>
                <td><input class="button" type="reset"></td>
            </tr>
            </table>
        </div>
    </form>
</body>
<?php include("footer.html")
?>