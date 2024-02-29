<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Contact Form<h2>
            <form action="{{route('send.email')}}" method="POST">
                @csrf
                <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
             </div>
             <div class="col-md-6">
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
             </div>
             <div class="form-group my-2">
                <label for="message">Your Email:</label>
               <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Enter your message"></textarea>
             </div>
             <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
            </form>
    </div>
</body>
</html>
