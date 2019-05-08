<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Report</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Report</li>
            </ol>
        </div><!-- /.col-lg-12 -->
    </div><!-- /row -->
    <div class="row">

        <div class="col-md-12"> 
            <?php Flash::Show() ?>
        </div>
        
        <div class="col-sm-12 col-md-6">
            <div class="white-box">
                <h3 class="box-title">View Saved Report</h3>
                <form action="<?php echo URL; ?>report" class="form-horizontal form-material" method="post">
                    <div class="form-group">
                        <label class="col-md-12">Please input year of report in the field below.</label>
                        <div class="col-md-12">
                            <input class="form-control form-control-line" name="year" placeholder="1995" type="number">
                        </div>
                    </div><input class="btn btn-danger waves-effect waves-light" name="company" type="submit">
                </form>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->