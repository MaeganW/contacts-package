<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .profile {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Profile
            </div>

            <div class="links">
                <a href="{{ route('home') }}">Go to Home</a>
            </div>

            <div class="profile">
                <div>
                    <label for="firstName" class="firstName">First Name: </label>
                    <?php echo $_GET['firstName']; ?>
                </div>
                <div>
                    <label for="lastName" class="lastName">Last Name: </label>
                    <?php echo $_GET['lastName']; ?>
                </div>
            </div>
        </div>
    </body>
</html>
