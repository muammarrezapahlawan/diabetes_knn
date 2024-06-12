<?php include('header.php'); ?>

<!-- /.card-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <strong>Please input your data</strong>
            </p>

            <div class="chart">

                <div class="container">
                    <form action="proses.php" method="POST">

                        <div class="form-group">
                            <label for="username">Name </label>
                            <input type="text" class="form-control" name="nama">
                            <small id="xx" class="form-text text-muted"> input your name </small>
                        </div>


                        <div class="form-group">
                            <label for="Pregnancies ">Pregnancies </label>
                            <input type="number" class="form-control" name="a">
                            <small id="xx" class="form-text text-muted"> input Pregnancies </small>
                        </div>

                        <div class="form-group">
                            <label for="Pregnancies ">Glucose </label>
                            <input type="number" class="form-control" name="b">
                            <small id="xx" class="form-text text-muted"> input Glucose </small>
                        </div>


                        <div class="form-group">
                            <label for="Pregnancies ">Blood Pressure </label>
                            <input type="number" class="form-control" name="c">
                            <small id="xx" class="form-text text-muted"> input Blood Pressure </small>
                        </div>


                        <div class="form-group">
                            <label for="Pregnancies ">Skin Thickness </label>
                            <input type="number" class="form-control" name="d">
                            <small id="xx" class="form-text text-muted"> input Skin Thickness </small>
                        </div>

                        <div class="form-group">
                            <label for="Pregnancies ">Insulin </label>
                            <input type="number" class="form-control" name="e">
                            <small id="xx" class="form-text text-muted"> input Insulin</small>
                        </div>


                        <div class="form-group">
                            <label for="Pregnancies ">BMI</label>
                            <input type="float" class="form-control" name="f">
                            <small id="xx" class="form-text text-muted"> input BMI </small>
                        </div>

                        <div class="form-group">
                            <label for="Pregnancies ">Diabetes Pedigree Function </label>
                            <input type="float" class="form-control" name="g">
                            <small id="xx" class="form-text text-muted"> input Diabetes Pedigree Function </small>
                        </div>

                        <div class="form-group">
                            <label for="Pregnancies ">Age</label>
                            <input type="number" class="form-control" name="h">
                            <small id="xx" class="form-text text-muted"> input Age </small>
                        </div>

                        <button type="submit" class="btn btn-primary">Calculation</button>
                        <button type="submit" class="btn btn-danger">Cancel</button>

                    </form>
                </div>



            </div>
            <!-- /.chart-responsive -->
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- ./card-body -->

<?php include('footer.php'); ?>