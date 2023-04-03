<?php 
    session_start();
    if(isset($_SESSION["userid"])){

?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plac Zabaw</title>
    </head>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #canvas{
            border: 2px solid black;
        }

        #canvas:hover{
            cursor: url("img/pen.png"), default;
        }

        .colors{
            display:flex;
        }

        .color{
            border-radius: 50%;
            border: 2px solid black;
            width: 30px;
            height: 30px;
            box-shadow: 2px 2px 2px black;
        }

        .color:not(:last-of-type){
            margin-right: 5px;
        }

        .color:hover{
            box-shadow: inset 0px 0px 5px 0px black;
            cursor: pointer;
        }

        .color:nth-child(1){
            background-color: #000;
        }
        .color:nth-child(2){
            background-color: white;
        }
        .color:nth-child(3){
            background-color: yellow;
        }
        .color:nth-child(4){
            background-color: red;
        }
        .color:nth-child(5){
            background-color: blue;
        }
        .color:nth-child(6){
            background-color: green;
        }
    </style>

    <body>
    <div class="playground">
        
        <canvas id="canvas"></canvas>
        <h4>Plac zabaw</h4>
        <div class="colors">
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
        </div>
        </div>
        <script src="script/canvas.js"></script>
    </body>
</html>

<?php
    
}else{
    echo "Musisz się zalogować, aby skorzystać z placu zabaw!";
}

?>


