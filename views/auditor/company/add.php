<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Manage Company</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Add Company</li>
            </ol>
        </div><!-- /.col-lg-12 -->
    </div><!-- /row -->
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="white-box">
                <h3 class="box-title">New Company</h3>
                <form action="<?php echo URL; ?>company/add" class="form-horizontal form-material" method="post">
                    <div class="form-group">
                        <label class="col-md-12">Company Name</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="C_Name" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Address</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="C_Address" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Country</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="C_Country" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">E-mail Address</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="C_Email" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Contact Number</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="C_ContactNum" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Business Type</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="C_BusinessType" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Intensity Type</label>
                        <div class="col-md-12">
                            <select class="form-control form-control-line" name="C_IntensityType">
                                <option value="HI">
                                    High Intensity
                                </option>
                                <option value="MI">
                                    Medium Intensity
                                </option>
                                <option value="LI">
                                    Low Intensity
                                </option>
                            </select>
                        </div>
                    </div><input class="btn btn-danger waves-effect waves-light" name="company" type="submit">
                </form>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->