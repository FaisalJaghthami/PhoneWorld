<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-danger" style="height: 70px;">
            <div class="col text-center">
                <h1>Phone World</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                <h2 class="text-center">Product Information:</h2>
                <br>
                <h5>Name: {{$phone->name}}</h5>
                <h5>Price: {{$phone->price}}</h5>
                <h5>Tax: {{$phone->tax}}</h5>
                <h5>Total: {{$phone->total}}</h5>
                <h5>Color: {{$phone->color}}</h5>
            </div>
            <div class="col-3">
                <h2 class="text-center">Your cart:</h2>
                <br>
                <h5>Name: {{$phone->name}}</h5>
                <h5>Total: {{$phone->total}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col bg-info text-center">
                <h5>This is the websites footer</h5>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>