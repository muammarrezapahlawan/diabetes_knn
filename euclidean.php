<?php

include('header.php');

?>

<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <strong>Tabel Result</strong>
            </p>

            <div class="chart">

                <div class="container">

                    <?php  include('koneksi.php');?>
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Distance</th>
                                <th scope="col">Pregnancies (Kehamilan) </th>
                                <th scope="col">Glucose (Glukosa)</th>
                                <th scope="col">BloodPressure (Tekanan Darah)</th>
                                <th scope="col">SkinThickness (Ketebalan Kulit) </th>
                                <th scope="col">Insulin (Insulin)</th>
                                <th scope="col">BMI (Indeks massa tubuh)</th>
                                <th scope="col">Diabetes Pedigree Function (Silsilah Diabetes) </th>
                                <th scope="col">Age (Umur)</th>
                                <th scope="col">Outcome (hasil)</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php 
		                include 'koneksi.php';
		                $no = 1;
		                $data = mysqli_query($koneksi,"select * from sementara LIMIT 100");
		                while($d = mysqli_fetch_array($data)){
                                ?>
                            <tr>
                                <th scope="row"><?=$no++; ?></th>
                                <td><?=$d['jarak']?></td>
                                <td><?=$d['Pregnancies']?></td>
                                <td><?=$d['Glucose'];?></td>
                                <td><?=$d['BloodPressure'];?></td>
                                <td><?=$d['SkinThickness'];?></td>
                                <td><?=$d['Insulin'];?></td>
                                <td><?=$d['BMI'];?></td>
                                <td><?=$d['DiabetesPedigreeFunction'];?></td>
                                <td><?=$d['Age'];?></td>
                                <td><?=$d['Outcome'];?></td>

                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>

                </div>

                <div class="container">

                    <p class="text-center">
                        <strong>Closest distance</strong>
                    </p>
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Distance</th>
                                <th scope="col">Pregnancies (Kehamilan) </th>
                                <th scope="col">Glucose (Glukosa)</th>
                                <th scope="col">Insulin (Insulin)</th>
                                <th scope="col">BMI (Indeks massa tubuh)</th>
                                <th scope="col">Age (Umur)</th>
                                <th scope="col">Outcome (hasil)</th>



                            </tr>
                        </thead>
                        <tbody>

                            <?php


                        
                          //mencari hasil
                        $sqlrx = mysqli_query($koneksi, "SELECT * FROM ranking ORDER BY id ASC ");
                        //$hasil_nam = mysql_fetch_array($sql_nam);

                        $no=1;
                        while($d = mysqli_fetch_array($sqlrx))
                        { ?>
                            <tr>
                                <th scope="row"><?=$no++; ?></th>
                                <td><?=$d['jarak']?></td>
                                <td><?=$d['Pregnancies']?></td>
                                <td><?=$d['Glucose'];?></td>
                                <td><?=$d['Insulin'];?></td>
                                <td><?=$d['BMI'];?></td>
                                <td><?=$d['Age'];?></td>
                                <td><?=$d['Outcome'];?></td>

                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>




                </div>


            </div>
            <!-- /.chart-responsive -->
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- ./card-body -->

<?php
include('footer.php');
?>