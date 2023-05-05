<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Check your IP!</title>
    <style>
        body {
            background: #000;
            font-family: 'Poppins', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .btn-shine {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 12px 48px;
            color: #fff;
            background: linear-gradient(to right, #4d4d4d 0, #fff 10%, #4d4d4d 20%);
            background-position: 0;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 3s infinite linear;
            animation-fill-mode: forwards;
            -webkit-text-size-adjust: none;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            white-space: nowrap;
        }

        @-moz-keyframes shine {
            0% {
                background-position: 0;
            }

            60% {
                background-position: 180px;
            }

            100% {
                background-position: 180px;
            }
        }

        @-webkit-keyframes shine {
            0% {
                background-position: 0;
            }

            60% {
                background-position: 180px;
            }

            100% {
                background-position: 180px;
            }
        }

        @-o-keyframes shine {
            0% {
                background-position: 0;
            }

            60% {
                background-position: 180px;
            }

            100% {
                background-position: 180px;
            }
        }

        @keyframes shine {
            0% {
                background-position: 0;
            }

            60% {
                background-position: 180px;
            }

            100% {
                background-position: 180px;
            }
        }
    </style>
</head>

<body>
    <h1 class="btn-shine">Access denied from: <code><?php echo $_SERVER['HTTP_X_REAL_IP']; ?></code></h1>
<?php # print_r($_SERVER); ?>
</body>

</html>