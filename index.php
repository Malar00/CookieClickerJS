<!DOCTYPE>
<HTML lang="en">
<HEAD>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="uft-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function priceOne() {
            var value=parseInt(document.getElementById('num').value, 10);
            var price=parseInt(document.getElementById('priceOne').value, 10);
            if(value > price) {
                buyOne();
                document.getElementById('num').value = value - price;
                document.getElementById('priceOne').value = (price * 2).toString();
            }
        }
        function priceTwo() {
            var value=parseInt(document.getElementById('num').value, 10);
            var price=parseInt(document.getElementById('priceTwo').value, 10);
            if(value > price) {
                buyTwo();
                document.getElementById('num').value = value - price;
                document.getElementById('priceTwo').value = (price * 2).toString();
            }
        }
        function priceThree() {
            var value=parseInt(document.getElementById('num').value, 10);
            var price=parseInt(document.getElementById('priceThree').value, 10);
            if(value > price) {
                buyThree();
                document.getElementById('num').value = value - price;
                document.getElementById('priceThree').value = (price * 2).toString();
            }
        }
        function addone() {
            var value = parseInt(document.getElementById('num').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('num').value = value;
        }
        function buyOne(){
            setInterval( addonepersec, 1000);
        }
        function buyTwo(){
            for (let i = 0; i < 2 ; i++) {
                setInterval(addonepersec, 1000);
            }
        }
        function buyThree(){
            for (let i = 0; i < 3 ; i++) {
                setInterval(addonepersec, 1000);
            }
        }
        function addonepersec() {
            var value = parseInt(document.getElementById('num').value, 10);
            value++;
            document.getElementById('num').value = value;
        }
    </script>
    <style>
        body{
            background-color: navajowhite;
        }
        .point-button{
            background-color: white;
        }
    </style>
</HEAD>
<BODY>
    <p>
        <div class="container pt-4">
            <h1><input type="button" class="rounded point-button" disabled value="0" id="num"></h1>
        </div>
        <div class="container text-center">
            <button class="btn text-center" onclick="addone()">
                <img src="cookie.png" class="mx-auto d-block" /></button>
        </div>
    <br>
        <div class="container-fluid">
            <div class="btn-group-vertical btn-block">
                Pricing:
                <input type="button" class="rounded point-button" disabled value="1" id="priceOne">
                <button class="btn btn-secondary btn-outline-danger text-white mb-1" onclick="priceOne()">Add one per sec</button>
                <input type="button" class="rounded point-button" disabled value="2" id="priceTwo">
                <button class="btn btn-secondary btn-outline-danger text-white mb-1" onclick="priceTwo()">Add two per sec</button>
                <input type="button" class="rounded point-button" disabled value="3" id="priceThree">
                <button class="btn btn-secondary btn-outline-danger text-white mb-1" onclick="priceThree()">Add three per sec</button>
            </div>
        </div>
    </p>
</BODY>
</HTML>