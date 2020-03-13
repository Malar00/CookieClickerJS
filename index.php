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
            document.getElementById('priceOne').innerHTML = (document.getElementById('priceOne').innerHTML*2).toString();
        }
        function priceTwo() {
            document.getElementById('priceTwo').innerHTML = (document.getElementById('priceTwo').innerHTML*2).toString();
        }
        function priceThree() {
            document.getElementById('priceThree').innerHTML = (document.getElementById('priceTwo').innerHTML*2).toString();
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
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('num').value = value;
        }
    </script>
</HEAD>
<BODY>
    <p>
        <div class="container pt-4">
            <h1><input type="button" class="rounded" disabled value="0" id="num"></h1>
        </div>
        <div class="container"
            <button class="btn text-center" onclick="addone()">
                <img src="cookie.png" class="mx-auto d-block" /></button>
        </div>
    <br>
        <div class="container-fluid">
            <div class="btn-group-vertical btn-block">
                Pricing:
                <p id="priceOne">1</p>
                <button class="btn btn-secondary btn-outline-danger text-white mb-1" onclick="buyOne(); priceOne()">Add one per sec</button>
                <p id="priceTwo">2</p>
                <button class="btn btn-secondary btn-outline-danger text-white mb-1" onclick="buyTwo(); priceTwo()">Add two per sec</button>
                <p id="priceThree">3</p>
                <button class="btn btn-secondary btn-outline-danger text-white mb-1" onclick="buyThree(); priceThree()">Add three per sec</button>
            </div>
            </div>
        </div>
    </p>

</BODY>
</HTML>
