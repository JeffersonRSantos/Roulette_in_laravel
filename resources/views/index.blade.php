<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo!</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/global.css') }}">
</head>
<body>
    <section class="container">
        <article class="grid large center">
            <p>*Obtenha seu desconto girando a roleta</p> 
            <img src="{{ URL::asset('assets/img/roleta.jpg')}}" alt="">
        </article>
        <article class="grid large center">
            <button onclick="giro()" class="btn-girar">GIRAR</button>
            <h2 class="resp"></h2>
        </article>
        
    </section>
    <script>     

        function giro(){
            //array de descontos
            var $desc = ["5", "17", "10", "30", "7", "12", "20"];
            //pega valor aleatorio do array
            var $getDesc = $desc[Math.floor(Math.random() * $desc.length)];
            var $btnGirar = document.querySelector(".btn-girar");
            var $resp = document.querySelector(".resp");
            $resp.innerHTML = "Parabéns! Seu desconto é de " + $getDesc + "% em qualquer produto da loja.";

            //ocuta a informação após 3s
            document.querySelector(".btn-girar").innerHTML = "OBTER NOVO DESCONTO";
            setTimeout(function(){
                $resp.innerHTML = " ";
            }, 4000);

            //debug
            //console.log($getDesc);
        }

    </script>
</body>
</html>