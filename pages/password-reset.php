<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center font-weight-bolder bg-info text-white">password Generator</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">password length</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="password_length"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">your password</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result :'';?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="submit" name="btn"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>





<?php include 'footer.php'; ?>

