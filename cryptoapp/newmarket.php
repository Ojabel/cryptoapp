<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Price Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>

    

    <div class="pricebox">

        <div class="assetprice">

            <img class="asset-logo" src="https://bitcoin.org/img/icons/opengraph.png?1662473327" />
            <br>
            Bitcoin<br>
            <span id="btc-price">$000</span>
        </div>
        <div class="assetprice">

            <img class="asset-logo" src="assets/images/crypto/eth.png" />
            <br>
            Ethereum<br>
            <span id="eth-price">$000</span>
        </div>

        <div class="assetprice">

        <img class="asset-logo" src="assets/images/crypto/lite.png" />
           <br>
             Litecoin<br>
              <span id="bnb-price">$000</span>
        </div>


        <div class="assetprice">

          <img class="asset-logo" src="assets/images/crypto/doge.png" />
           <br>
           dogecoin<br>
            <span id="doge-price">$000</span>
        </div>

 

        <div class="assetprice">

            <img class="asset-logo" src="https://cryptologos.cc/logos/solana-sol-logo.png" />
            <br>
            Solana<br>
            <span id="sol-price">$000</span>
        </div>

    </div>





    <style>
        .asset-logo{
            width: 100px;
            height: 100px;
        }
        .assetprice{
            display: inline-block;
         
            padding: 10px;
        }
    </style>

    <script>
       
       function loadData(){
        $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=solana,bitcoin,litecoin,dogecoin,ethereum&vs_currencies=usd",function(data){
            console.log(data)

            $('#btc-price').html("$"+data.bitcoin.usd)
            $('#eth-price').html("$"+data.ethereum.usd)
            $('#bnb-price').html("$"+data.litecoin.usd)
            $('#doge-price').html("$"+data.dogecoin.usd)
            $('#sol-price').html("$"+data.solana.usd)

        })
       }

       loadData();

        setInterval(function(){

            loadData();
        },5000)


    </script>


    
</body>
</html>