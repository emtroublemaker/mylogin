<html>
    <head>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <body>
    <style>.error{color:red;}
    body{
        background-color: skyblue;
    }
    div{
        background-image: url('second.jpg');
        background-color: MediumSeaGreen;
        width: 300px;
        border: 150 skyblue;
        padding: 30px;
        margin: 500px;
    }
    </style>
        </head>
    <div align="center">
        Welcome <?php echo $_POST['name']?><br><br>
        Your email address is:- <?php echo $_POST['email']?><br><br>
        You commented:- <?php echo $_POST['comment']?><br><br>
         Your Gender:- <?php echo $_POST['gender']?><br><br>
    </body>
    </html>
