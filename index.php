<?php
function getDay()
{
    $day = date("d");
    $dayArray = array(
        0 => $day - 03,
        1 => $day - 02,
        2 => $day - 01,
        3 => $day
    );
    var_dump($dayArray);
    return $dayArray;

}
$gun = getDay();
for ($i = 0; $i < count($gun); $i++) {
    $nowDate = date("d.m.Y");
    $cut = explode(".", $nowDate, 3);
    $cut[0] = $gun[$i];
    $imp = implode("/", $cut);
    $source = file_get_contents("https://raw.githubusercontent.com/ozanerturk/covid19-turkey-api/master/dataset/timeline.json");
    $data = json_decode($source, true);
    $cases[] = $data[$imp];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Last 4 Days Turkey Covid19 Table</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="covid19, türkiye covid19, vaka, virüs, koronavirüs, korona, corona">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

    <!-- css files -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //web-fonts -->

</head>

<body>
    <!--header-->
    <div class="header-w3l">
        <h1>Last 4 days Turkey Covid19 Table</h1>
        <!-- Language Area
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Türkçe
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                <label class="form-check-label" for="defaultCheck2">
                    English
                </label>
            </div>
        -->
    </div>
    <!--//header-->
    <!--main-->

    <!-- pricing plans -->
    <div class="pricing">
        <div class="w3l-pricing-grids">
            <div class="agileits-pricing-grid fourth">
                <div class="pricing_grid">
                    <div class="wthree-pricing-info pricing-top yellow-top">
                        <h3><?php echo $cases[3]["date"]; ?></h3>
                        <span>Today</span>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom yellow-pricing-bottom-top">
                            <?php
                            if ($cases[3] == NULL) {
                                $aciklama = "Todays number of cases has not yet been announced";
                                echo '<p><span>'. $aciklama .'</span></p>';
                            } else {
                            ?>
                                <p><span><?php echo $cases[3]["tests"]; ?> Tests</span></p>
                                <p><span><?php echo $cases[3]["patients"]; ?> Patients</span></p>
                                <p><span><?php echo $cases[3]["critical"]; ?> Critical Case</span></p>
                                <p><span><?php echo $cases[3]["pneumoniaPercent"]; ?> Pneumonia Percent </span></p>
                                <p><span><?php echo $cases[3]["deaths"]; ?> Deaths</span></p>
                                <p><span><?php echo $cases[3]["recovered"]; ?> Recovered</span></p>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="buy-button">
                            <a href="https://covid19.saglik.gov.tr/TR-68443/covid-19-durum-raporu.html">Go To Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="agileits-pricing-grid third">
                <div class="pricing_grid">
                    <div class="wthree-pricing-info pricing-top green-top">
                        <h3><?php echo $cases[2]["date"]; ?></h3>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom green-pricing-bottom-top">
                            <p><span><?php echo $cases[2]["tests"]; ?> Tests</span></p>
                            <p><span><?php echo $cases[2]["patients"]; ?> Patients</span></p>
                            <p><span><?php echo $cases[2]["critical"]; ?> Critical Case</span></p>
                            <p><span><?php echo $cases[2]["pneumoniaPercent"]; ?> Pneumonia Percent </span></p>
                            <p><span><?php echo $cases[2]["deaths"]; ?> Deaths</span></p>
                            <p><span><?php echo $cases[2]["recovered"]; ?> Recovered</span></p>
                        </div>
                        <div class="buy-button">
                            <a href="https://covid19.saglik.gov.tr/TR-68443/covid-19-durum-raporu.html">Go To Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="agileits-pricing-grid second">
                <div class="pricing_grid">
                    <div class="wthree-pricing-info pricing-top blue-top">
                        <h3><?php echo $cases[1]["date"]; ?></h3>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom blue-pricing-bottom-top">
                            <p><span><?php echo $cases[1]["tests"]; ?> Tests</span></p>
                            <p><span><?php echo $cases[1]["patients"]; ?> Patients</span></p>
                            <p><span><?php echo $cases[1]["critical"]; ?> Critical Case</span></p>
                            <p><span><?php echo $cases[1]["pneumoniaPercent"]; ?> Pneumonia Percent </span></p>
                            <p><span><?php echo $cases[1]["deaths"]; ?> Deaths</span></p>
                            <p><span><?php echo $cases[1]["recovered"]; ?> Recovered</span></p>
                        </div>
                        <div class="buy-button">
                            <a href="https://covid19.saglik.gov.tr/TR-68443/covid-19-durum-raporu.html">Go To Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="agileits-pricing-grid first">
                <div class="pricing_grid">
                    <div class="wthree-pricing-info pricing-top">
                        <h3><?php echo $cases[0]["date"]; ?></h3>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom">
                            <p><span><?php echo $cases[0]["tests"]; ?> Tests</span></p>
                            <p><span><?php echo $cases[0]["patients"]; ?> Patients</span></p>
                            <p><span><?php echo $cases[0]["critical"]; ?> Critical Case</span></p>
                            <p><span><?php echo $cases[0]["pneumoniaPercent"]; ?> Pneumonia Percent </span></p>
                            <p><span><?php echo $cases[0]["deaths"]; ?> Deaths</span></p>
                            <p><span><?php echo $cases[0]["recovered"]; ?> Recovered</span></p>
                        </div>
                        <div class="buy-button">
                            <a href="https://covid19.saglik.gov.tr/TR-68443/covid-19-durum-raporu.html">Go To Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //pricing plans -->
    <!--//main-->
    <!--footer-->
    <div class="footer">
        <p>&copy; 2020 Sedat Ünal | The Source is <a href="https://covid19.saglik.gov.tr/"><u>Republic Of Turkish Ministry</u></a></p>
    </div>
    <!--//footer-->

    <!--pop-up-grid-->
    <div id="popup">
        <div id="small-dialog" class="mfp-hide">
            <div class="signin-form profile">
                <h3>Register Here</h3>
                <div class="login-form">
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Username" required="">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="text" name="Number" placeholder="Contact Number" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <input type="password" name="password" placeholder="Confirm Password" required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--pop-up-grid-->

    <!-- jquery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jquery -->

    <!-- Pop-up for pricing tables -->
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //Pop-up for pricing tables -->

</body>

</html>