<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <title>Hello, world!</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Online Shop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./controllers/products/index.php">Products <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
              </li>
            </ul>
            <button onclick="loadDoc()">Click me</button>
          </div>
          <a id="myAnchor" href="http://www.stackoverflow.com">StackOverflow</a>
        </nav>
    

        <script src="./js/bootstrap.min.js"></script>
        <script>
            var host = "<?= $_SERVER['HTTP_HOST'] ?>";
            console.log(host);
        </script>
        <script>

            function loadDoc() {
                var myAnchor = document.getElementById("myAnchor");
                  var mySpan = document.createElement("span");
                  mySpan.innerHTML = "replaced anchor!";
                  myAnchor.parentNode.replaceChild(mySpan, myAnchor);
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                 // document.getElementById("demo").innerHTML = this.responseText;
                 console.log(this.responseText);
                }
              };
              xhttp.open("GET", "/controller/products/index.php", true);
              xhttp.send();
            }
        </script>
    </body>
</html>
