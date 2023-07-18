<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
    <?php
    $today = date("N");
    if ($today == 1)
        echo "<div class = 'd-flex justify-content-center align-items-center'> Today is Monday. Work hard baby! </div>";
    elseif ($today == 2)
        echo "<div class = 'd-flex justify-content-center align-items-center'><h2>Today is Tuesday<h2> </div><br><div class = 'd-flex justify-content-center align-items-center'><h4>Let's check the weather!<h4></div><br>";
    else
        echo "<div class= 'd-flex justify-content-center'>Don't check your calendar, every day is a good day!</div>";
    ?>

    <!-- Create a function that can convert °F in °C and show the result on the screen. -->
    <?php
    function tempConvertor($fahrenheit)
    {

        $celsius = floor(($fahrenheit - 32) * (5 / 9));
        if ($celsius < 5) {
            $result = "<div class = 'd-flex justify-content-center align-items-center'> $fahrenheit °F is " . $celsius . " °C. Today is very cold</div>";
        } elseif ($celsius > 6 && $celsius < 10) {
            $result = "<div class = 'd-flex justify-content-center align-items-center'> $fahrenheit °F is " . $celsius . " °C. Today is quite cold</div>";
        } elseif ($celsius > 11 && $celsius < 15) {
            $result = "<div class = 'd-flex justify-content-center align-items-center'> $fahrenheit °F is " . $celsius . " °C. Today is very plesant</div>";
        } elseif ($celsius > 16 && $celsius < 25) {
            $result = "<div class = 'd-flex justify-content-center align-items-center'> $fahrenheit °F is " . $celsius . " °C. Today is warm</div>";
        } else {
            $result = "<div class = 'd-flex justify-content-center align-items-center'> $fahrenheit °F is " . $celsius . " °C. Today is very hot</div>";
        }
        return $result;
    }

    $output = '';
    if (isset($_POST['submit']) && isset($_POST['fahrenheit'])) {
        $output = tempConvertor($_POST['fahrenheit']);
    }
    ?>

    <form method='POST'>
        <div class="card d-flex m-auto" style="width: 18rem;">
            <img src="photos/main.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Weather Today</h5>
                <p class="card-text"><?= $output ?></p>
                <input type='text' class='form-control' placeholder='Fahrenheit' name='fahrenheit'>
                <br>
                <input type='submit' name="submit" class='btn btn-primary' Submit>
                <button a href='exercise_2.php' class='btn btn-primary m-75'>Reset</a></button>
            </div>
        </div>
    </form>


    <section>
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #0a4275;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            Sign up!
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright

            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
</body>

</html>