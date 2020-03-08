<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/fonts/roboto">
        <link rel="stylesheet"  href="scripts/local/index.css">
    </head>
    <body>
        <div class="p-3 mb-2 bg-secondary text-white">WORKLAB</div>
        <div id="center">
            <h1 id="welcome">Welcome</h1>
            <h4>How may I help you today?</h3>
            <div id="menu">
                <a id="customer" /*href="scratch/customer_form.php"*/>Customers</a>
                <a>Inventory</a>
                <a>Rates</a>
                <a>Login</a>
            </div>
        </div>

    </body>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/=js/jquery-ui.min.js"></script>
    
    <script>
    $("#customer").attr('href',"scratch/customer_form.php");


    </script>
</html>