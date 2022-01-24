<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/331b91838d.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="calc.js"></script>
        <style>
           @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap');
           @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap');

            :root{
                --calculadora-bg: rgb(242, 242, 242, 0.3);
                --calculadora-bs: 0px 0px 3px 3px rgb(200, 200, 200, 0.8);
                --visor-bg: rgb(242, 242, 242, 0.0);
                --button1-bg: rgb(242, 242, 242, 0.3);
                --button-bg: rgb(242, 242, 242, 0.3);
                --button-color: black;
                --button2-color: white;
                --moonAndsun-bg: url("dark-moon2x.png");
            }

            .dark-mode:root{
                --calculadora-bg: black;
                --calculadora-bs: 1px 1px 4px 4px rgb(80, 80, 80, 0.4);
                --visor-bg: black;
                --button1-bg: rgb(31, 30, 30);
                --button-bg: #0d0d0d;
                --button-color: #f2f2f2;
                --button2-color: rgb(31, 30, 30);
                --moonAndsun-bg: url("dark-sun2x.png");
            }

            body{
                font-family: 'Rubik'; 
                background-image: url("backgimg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                padding: none;
                margin: none;  
                height: 100%; 
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;     
                overflow-y: hidden;
            }

           

            #button, #button0, #button1, #button2{
                color: var(--button-color);
                font-size: large;
                font-weight: bold;
                height: 60px;
                padding: 10px;
                margin: 5px;
                position: relative;
                border: none;
                width: 60px;
            }

            #button{
                background-color: var(--button-bg);
            }

            #button0{
                width: 135px;
                background-color: var(--button-bg);
            }

            #button1{
                color: #00cc44;
                background-color: var(--button1-bg);
            }

            #button2{
                background-color:  #00cc44;
                color: var(--button2-color);
            }

            #button:hover, #button0:hover, #button1:hover, #button2:hover{
                background-color: #00cc44;
                color: black;
                cursor: pointer;
            }   

            h1{
                font-size: xx-large;
                padding-right: 2%;
                position: absolute;
                top: 37%;
                left: 18%;
            }

            .p1{  
                font-size: medium;
                padding: 10px;
                position: absolute;
                border-left: 5px solid black;
            }

            .p2{
                position: absolute;
                padding-left: 2px;
                top: 45%;
                left: 18%;
            }

            .calculadora{
                background: var(--calculadora-bg);
                backdrop-filter: blur(4px);
                box-shadow: var(--calculadora-bs);
                border: none;
                padding-left: 7px;
                padding-right: 7px;
                padding-bottom: 7px;
                position: absolute;
                text-align: center;
                left: 50%;
                top: 20%;
               
            }

            #visor{
                background: var(--visor-bg);
               
                color: var(--button-color);
                width: 293px;
                padding-right: 10px;
                padding-bottom: 30px;
                font-weight: bold;
                font-size: 44px;
                border: none;
                margin: none;
                padding: none;
                text-align: right;
                position: relative;
            }

            #visor2{
                background: var(--visor-bg);
                color: var(--button-color);
                padding-right: 1px;
                padding-top: 30px;
                width: 250px;
                border: none;
                font-size: 20px;
                text-align: right;
                font-weight: bold;
                
            }

            #visor:focus, #visor2:focus{
                box-shadow: 0 0 0 0;
                border: 0 none;
                outline: 0;
                
            }

            .divimg{
                background: var(--moonAndsun-bg);
                width: 20px;
                height: 20px;
                border: none;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                cursor: pointer;
                padding-top: 3px;
                
            }

            .switch{
                padding-top: 10px;
                position: relative;
            }

            /* responsive */
            @media  only screen and (max-width: 700px) {
                h1{
                  top: 10%;
                  margin: none; 
                  float: center; 
                }

                .p2{
                    top: 8%;
                }

                .calculadora{
                    left: 20%;
                }
            }

            @media only screen and (max-height: 500px){

                body{
                background-image: url("back2.jpg");
                overflow-y: scroll;
               
                    
                }
                h1{
                    color: black;
                }

                .calculadora{
                    top: 30%;
                }
            }
        </style>
    </head>
    <body>
        <p class="p1">Tiago C. Santos</p>
        <center>
        <h1>CALCULADORA</h1>
        <?php 
            $horario = date('d/m/Y');
        ?>
        <p class="p2">Currenty day: <?php echo $horario ?></p> 
        <form name='calc'>
            <div class="calculadora">
                <div class="switch">
                    <label class="switch" for="switch">
                        <input hidden type="checkbox" id="switch" name="switch">
                        <div class='divimg'></div>
                    </label>
                </div>
           
            <input type='text' readonly id="visor2" name='visor2'/><br>
            <input type='text' id="visor" name='visor'/><Br>
            <input type='button' id="button1" value='C' onclick="reset();">
            <input type='button' id="button1" value='Del' onclick="del();">
            <input type='button' id="button1" value='%' onclick="botao(value);">
            <input type='button' id="button1" value='/' onclick="botao(value);">
            <br> 
            <input type='button' id="button" value='7' onclick="botao(value);">
            <input type='button' id="button" value='8' onclick="botao(value);">
            <input type='button' id="button" value='9' onclick="botao(value);">
            <input type='button' id="button1" value='+' onclick="botao(value);">
            <br>
            <input type='button' id="button" value='4' onclick="botao(value);">
            <input type='button' id="button" value='5' onclick="botao(value);">
            <input type='button' id="button" value='6' onclick="botao(value);">
            <input type='button' id="button1" value='-' onclick="botao(value);">
            <br>    
            <input type='button' id="button" value='1' onclick="botao(value);">
            <input type='button' id="button" value='2' onclick="botao(value);">
            <input type='button' id="button" value='3' onclick="botao(value);">
            <input type='button' id="button1" value='*' onclick="botao(value);">
            <br>
            <input type='button' id="button0" value='0' onclick="botao(value);">
            <input type='button' id="button" value='.' onclick="botao(value);">
            <input type='button' id="button2" value='=' onclick="calcule();">
            </div>
        </form>
        </center>
    </body>
    <script>
           // dark mode

            const $html = document.querySelector('html')
            const $checkbox = document.querySelector('#switch')
          

            $checkbox.addEventListener('change', function() {
                $html.classList.toggle('dark-mode')

            })
    </script>

</html>