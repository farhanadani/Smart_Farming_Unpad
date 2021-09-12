<?php
include '_template.php';

session_start();
if (!isset($_SESSION["api_token"])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
}

$id = $_GET["id"];
function get_CURL($url)
{
    $auth_array = array(
        "Authorization:",
        "Bearer",
        $_SESSION["api_token"],
    );
    $new_token = implode(" ", $auth_array);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array($new_token, "Content-Type: application/json", "cache-control: no-cache"));
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}
$get = $_POST['device_id'];
$getDatasetDevice = 'https://api.smartfarmingunpad.com/dataset/' . $id;
$getResult = get_CURL($getDatasetDevice);
?>

<!DOCTYPE html>
<html lang="en">


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="smu2021.php">Smart Farming UNPAD</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="smu2021.php" method="post">

        </form>
        <!-- Navbar-->

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php" id="tombol">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="smu2021.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                            All Devices
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                            Sub Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="SM2021.php">Soil Moisture (PPKI)</a>
                                <a class="nav-link" href="smoisture.php">Soil Moisture</a>
                                <a class="nav-link" href="cs.php">Camera Surveillance</a>
                                <a class="nav-link" href="at.php">Air Temperature (PPKI)</a>
                                <a class="nav-link" href="ah.php">Air Humidity (PPKI)</a>
                            </nav>
                        </div>
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1>DETAIL</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Berikut merupakan Detail yang berisikan Grafik dari setiap sensor</li>
                    </ol>
                    <!-- <?php var_dump($u["value"]); ?> -->

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label"><b>Pilih Tanggal</b></label>
                        <div class="col-sm-2">
                            <select class="form-select" aria-label="Default select example" id="tes" name="tes">
                                <option disabled selected>--Pilih Tanggal--</option>
                                <option value="#">-</option>
                                <option value="#">-</option>
                                <option value="#">-</option>
                            </select>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div>
                            <canvas id="myChart" width="100%" height="40"></canvas>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <?php
                            $nomor = 1;
                            $getDatas = [];
                            $getUploads = [];
                            foreach ($getResult  as $u) {
                                $getData = $u['value'];
                                array_push($getDatas, $getData);
                                $getUpload = $u['uploaded'];
                                array_push($getUploads, $getUpload);
                                strftime("%Y-%m-%d. %A. %X %p", strtotime('$getUploads'));
                            ?>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">&copy; SmartFarming-Unpad <?= date('Y'); ?></div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/Chart.js"></script>
    <script>
        const tombol = document.querySelector('#tombol');
        tombol.addEventListener('click', function() {
            Swal.fire({
                title: 'Success',
                text: 'Logout Berhasil',
                type: 'success',
                timer: 5000,
            })
        })
    </script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($getUploads); ?>,
                datasets: [{
                    label: 'Grafik',
                    data: <?php echo json_encode($getDatas); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <!-- 
    <script>
        var flash = $('#flash2').data('flash');
        if (flash) {
            alert({
                icon: 'warning',
                title: 'Warning',
                text: flash
            })
        }
    </script>

    <script>
        swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script> -->

</body>

</html>