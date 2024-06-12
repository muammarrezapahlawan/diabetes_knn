<?php include('header.php'); ?>

<!-- /.card-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <strong>Data Training</strong>
            </p>

            <div class="chart">


                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
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
		                $data = mysqli_query($koneksi,"select * from diabetes LIMIT 10");
		                while($d = mysqli_fetch_array($data)){
                                ?>
                        <tr>
                            <th scope="row"><?=$no++; ?></th>
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
            <!-- /.chart-responsive -->
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- ./card-body -->

<?php include('footer.php'); ?>