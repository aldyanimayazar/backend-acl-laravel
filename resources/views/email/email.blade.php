<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="primary-heading">
                    <h1>Click the Link To Verify Your Email</h1>
                    Click the following link to verify your email {{url('/verifyemail/'.$email_token)}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>