<?php include('header.php'); ?>

<!-- /.card-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <strong>New Data / Data Test</strong>
            </p>

            <div class="chart">

                <div class="container">
                    <?php include('koneksi.php');

                        $b_nama= $_POST['nama'];
                        $b_a = $_POST['a'];
                        $b_b = $_POST['b'];
                        $b_c = $_POST['c'];
                        $b_d = $_POST['d'];
                        $b_e = $_POST['e'];
                        $b_f = $_POST['f'];
                        $b_g = $_POST['g'];
                        $b_h = $_POST['h'];

                if(empty($b_nama) or empty($b_a) or empty($b_b) or empty($b_c) or empty($b_d) or empty($b_e) or empty($b_f) or empty($b_g) or empty($b_h))
                {
	                echo "There is something you haven't filled in yet";
                }
                    else
                    {
                    
                    //Membaca jumlah baris data pada database
	                    $sql = mysqli_query($koneksi, "SELECT * FROM diabetes ORDER BY id ASC");
	                        $numrows = mysqli_num_rows($sql);
                            
                        $k=13; 

                        ?>

                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>


                            <tr>


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

                            <tr>
                                <td><?=$b_a?></td>
                                <td>
                                    <?=$b_b?>
                                </td>
                                <td>
                                    <?=$b_c?>
                                </td>
                                <td>
                                    <?=$b_d?>
                                </td>
                                <td>
                                    <?=$b_e?>
                                </td>
                                <td>
                                    <?=$b_f?>
                                </td>
                                <td>
                                    <?=$b_g?>
                                </td>
                                <td>
                                    <?=$b_h?>
                                </td>
                                <td> ? </td>
                            </tr>

                        </tbody>
                    </table>



                    <?php

	                       
                            

                            //Perhitungan dengan KNN
	                for($i=1; $i <= $numrows; $i++)
	                    {	
		                    $sql1 = mysqli_query($koneksi, "SELECT * FROM diabetes Where id = $i");
		                    while($data = mysqli_fetch_array($sql1))
		                    {

                                 
                                  
			                //Pengurangan(KNN)
			                $v1 = $b_a - $data['Pregnancies'];
			                $v2 = $b_b - $data['Glucose'];
                            $v3 = $b_c - $data['BloodPressure'];
			                $v4 = $b_d - $data['SkinThickness'];
                            $v5 = $b_e - $data['Insulin'];
			                $v6 = $b_f - $data['BMI'];
                            $v7 = $b_g - $data['DiabetesPedigreeFunction'];
			                $v8 = $b_h - $data['Age'];
                            

                            // //Pengkuadratan(KNN)
			                $hit1 = (pow($v1,2)) + (pow($v2,2)) + (pow($v3,2)) + (pow($v4,2)) + (pow($v5,2)) + (pow($v6,2)) + (pow($v7,2)) + (pow($v8,2));

                        
                            
                        
			
			               //Pengakaran(KNN)
			                $hit2 = number_format(sqrt($hit1),2);
			
			                //Penyimpanan perhitungan ke database sementara
		                     mysqli_query($koneksi, "INSERT INTO sementara (id,jarak,Pregnancies,Glucose,BloodPressure, SkinThickness,Insulin,BMI,DiabetesPedigreeFunction,Age,Outcome) VALUES ('$i','$hit2','$data[Pregnancies]','$data[Glucose]','$data[BloodPressure]','$data[SkinThickness]','$data[Insulin]','$data[BMI]','$data[DiabetesPedigreeFunction]','$data[Age]','$data[Outcome]')");
		                    }	

                            

                        }

                        $sql3 = mysqli_query($koneksi,"SELECT * FROM  `sementara` ORDER BY  `sementara`.`jarak` ASC LIMIT 0 , $k  ");
	                    $x=1;
                        $no=1;
	                    while($data = mysqli_fetch_array($sql3)) 
		                {
            
			    //memasukkan data yang sudah di sorting mulai dari pertama sampai data nilai k ke dalam database sementara
			        mysqli_query($koneksi,"INSERT INTO ranking (id,
										jarak,
										Pregnancies,Glucose,BloodPressure, SkinThickness,Insulin,BMI,DiabetesPedigreeFunction,Age,Outcome)
								VALUES ('$x',
										'$data[jarak]',
										'$data[Pregnancies]',
										'$data[Glucose]',
                                        '$data[BloodPressure]',
                                        '$data[SkinThickness]',
                                        '$data[Insulin]',
                                        '$data[BMI]',
                                        '$data[DiabetesPedigreeFunction]',
                                        '$data[Age]',
										'$data[Outcome]')");
								$x=$x+1;
		                } 

                        
                        echo "<a href='euclidean.php' class='btn btn-primary'>Lihat</a>";
                   }
                
                        ?>




                </div>



            </div>
            <!-- /.chart-responsive -->
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- ./card-body -->

<?php include('footer.php'); ?>