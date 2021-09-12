<?php
include '_template.php';

session_start();
if (!isset($_SESSION["api_token"])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
}
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
$result = get_CURL('https://api.smartfarmingunpad.com/dataset/6126f994de64260ac40aa98d/device');
$getDataseAPI = 'https://api.smartfarmingunpad.com/dataset';
$getResult = get_CURL($getDataseAPI);
$getDatasetId = $getResult[2]['_id'];
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
                        <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                            Sub Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link " href="SM2021.php">Soil Moisture (PPKI)</a>
                                <a class="nav-link " href="smoisture.php">Soil Moisture</a>
                                <a class="nav-link active" href="cs.php">Camera Surveillance</a>
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
                    <h1 class="mt-4">Camera Surveillance</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Berikut merupakan tabel dari Camera Surveillance.</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table table-bordered" id="datatablesSimple">
                                <thead class="table-light">
                                    <tr>
                                        <th>
                                            <center>No.</center>
                                        </th>
                                        <th>
                                            <center>Name</center>
                                        </th>
                                        <th>
                                            <center>Deskripsi</center>
                                        </th>
                                        <th>
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <?php
                                $nomor = 1;
                                foreach ($result as $u) {
                                    $getData = $u['name'];
                                    $getDesc = $u['description'];
                                    $getLB = $u['last_update'];
                                ?>
                                    <tr>
                                        <td>
                                            <center><?php echo $nomor; ?></center>
                                        </td>
                                        <td>
                                            <center><?= $getData ?></center>
                                        </td>
                                        <td>
                                            <center><?= $getDesc ?></center>
                                        </td>
                                        <td>
                                            <center><?php setlocale(LC_ALL, 'IND');
                                                    date_default_timezone_set('Asia/Jakarta');
                                                    echo strftime("%Y-%m-%d. %A. %X %p", strtotime($getLB)); ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <form action="POST">
                                                    <input type="text" hidden name="device_id" value="<?php $u['device_id'] ?>">
                                                    <a href="detail.php?id=<?php echo $getDatasetId ?>/<?php echo $u['device_id'] ?>" class="btn btn-success" type="submit" id="tombol"><i class="fas fa-info"></i>
                                                        &nbsp;&nbsp;Detail&nbsp;&nbsp;</a>&nbsp;

                                                    <a href="edit.php?id=<?php echo $u['device_id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>&nbsp;

                                                    <a href="delete.php?id=<?php echo $u['device_id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete&nbsp;&nbsp;
                                                    </a>
                                                </form>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </table>
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
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
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