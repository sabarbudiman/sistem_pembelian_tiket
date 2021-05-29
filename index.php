<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Praktikum Basis Data</title>
    <style>
    h3 { 
        padding-top :25px;
    }
    
    </style>
</head>

<body> 

    <h3><center>SISTEM PEMBELIAN TIKET BUS</center></h3>
  
    <div class="container mt-5">
        <div class="row">
            <h4>Costumer</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Penumpang</th>
                        <th>Nama </th>
                        <th>Alamat </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM costumer';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID_CST'] ?></td>
                        <td><?php echo $row['NAMA_CST'] ?></td>
                        <td><?php echo $row['ALAMAT_CST'] ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>Tiket</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No Tiket</th>
                        <th>Tujuan</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM tiket';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID_TIKET'] ?></td>
                        <td><?php echo $row['TUJUAN'] ?></td>
                        <td><?php echo $row['HARGA'] ?></td>
                        <td><?php echo $row['TANGGAL'] ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>Pembelian ( INNER JOIN )</h4>
            <table class="table table-striped table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>Id Penumpang</th>
                        <th>Nama </th>
                        <th>Id Tiket</th>
                        <th>Tujuan</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT pl.ID_CST, pl.NAMA_CST, tr.TUJUAN, tr.HARGA, pl.ID_TIKET, tr.TANGGAL
                    FROM costumer pl
                    JOIN tiket tr USING(ID_TIKET)';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID_CST'] ?></td>
                        <td><?php echo $row['NAMA_CST'] ?></td>
                        <td><?php echo $row['ID_TIKET'] ?></td>
                        <td><?php echo $row['TUJUAN'] ?></td>
                        <td><?php echo $row['HARGA'] ?></td>
                        <td><?php echo $row['TANGGAL'] ?></td>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    </div>
    <div class="container mt-5">
        <div class="row">
            <h4>Pembelian ( LEFT JOIN )</h4>
            <table class="table table-striped table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>Id Penumpang</th>
                        <th>Nama </th>
                        <th>Id Tiket</th>
                        <th>Tujuan</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    // pl adalah singkatan dari customer
                    $sql = 'SELECT pl.ID_CST, pl.NAMA_CST, pl.ID_TIKET, tr.TUJUAN, tr.HARGA,  tr.TANGGAL
                    FROM costumer pl
                    JOIN tiket tr USING(ID_TIKET)';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['ID_CST'] ?></td>
                        <td><?php echo $row['NAMA_CST'] ?></td>
                        <td><?php echo $row['ID_TIKET'] ?></td>
                        <td><?php echo $row['TUJUAN'] ?></td>
                        <td><?php echo $row['HARGA'] ?></td>
                        <td><?php echo $row['TANGGAL'] ?></td>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>