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
                <li class="active">Manage Company</li>
            </ol>
        </div><!-- /.col-lg-12 -->
    </div><!-- /row -->
    <div class="row">
        <div class="col-sm-12">

            <?php Flash::Show() ?>

            <div class="white-box">
                <h3 class="box-title"><a class="btn btn-danger waves-effect waves-light pull-right" href="<?php echo URL; ?>company/add">Add New</a></h3>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#HII">High Intensity Industry</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#MII">Moderate Intensity Industry</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#LII">Low Intensity Industry</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="HII">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>E-Mail</th>
                                        <th>Contact Number</th>
                                        <th>Business Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($this->HiCompanies == NULL) : ?>
                                        
                                        <tr>
                                            <td colspan="8" align="center"> No Result Found in Database. Please add new Company to this section</td>
                                        </tr>

                                    <?php else : ?>

                                        <?php foreach ($this->HiCompanies as $HiCompany): ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $HiCompany['C_Name']; ?></td>
                                            <td><?php echo $HiCompany['C_Address']; ?></td>
                                            <td><?php echo $HiCompany['C_Country']; ?></td>
                                            <td><?php echo $HiCompany['C_Email']; ?></td>
                                            <td><?php echo $HiCompany['C_ContactNum']; ?></td>
                                            <td><?php echo $HiCompany['C_BusinessType']; ?></td>
                                            <td>
                                                <a class="fa fa-trash btn btn-danger waves-effect waves-light" href="<?php echo URL; ?>company/delete/<?php echo $HiCompany['C_ID']; ?>" onclick="return confirm('Are you sure?')"></a> 
                                                <a class="fa fa-edit btn btn-success waves-effect waves-light" href="<?php echo URL; ?>company/edit/<?php echo $HiCompany['C_ID']; ?>"></a>
                                            </td>
                                        </tr><?php endforeach ?>

                                    <?php endif; ?>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="MII">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>E-Mail</th>
                                        <th>Contact Number</th>
                                        <th>Business Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($this->MiCompanies == NULL) : ?>
                                        
                                        <tr>
                                            <td colspan="8" align="center"> No Result Found in Database. Please add new Company to this section</td>
                                        </tr>

                                    <?php else : ?>

                                        <?php foreach ($this->MiCompanies as $MiCompany): ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $MiCompany['C_Name']; ?></td>
                                            <td><?php echo $MiCompany['C_Address']; ?></td>
                                            <td><?php echo $MiCompany['C_Country']; ?></td>
                                            <td><?php echo $MiCompany['C_Email']; ?></td>
                                            <td><?php echo $MiCompany['C_ContactNum']; ?></td>
                                            <td><?php echo $MiCompany['C_BusinessType']; ?></td>
                                            <td>
                                                <a class="fa fa-trash btn btn-danger waves-effect waves-light" href="<?php echo URL; ?>company/delete/<?php echo $MiCompany['C_ID']; ?>" onclick="return confirm('Are you sure?')"></a> 
                                                <a class="fa fa-edit btn btn-success waves-effect waves-light" href="<?php echo URL; ?>company/edit/<?php echo $MiCompany['C_ID']; ?>"></a>
                                            </td>
                                        </tr><?php endforeach ?>

                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="LII">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>E-Mail</th>
                                        <th>Contact Number</th>
                                        <th>Business Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($this->LiCompanies == NULL) : ?>
                                        
                                        <tr>
                                            <td colspan="8" align="center"> No Result Found in Database. Please add new Company to this section</td>
                                        </tr>

                                    <?php else : ?>

                                        <?php foreach ($this->LiCompanies as $LiCompany): ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $LiCompany['C_Name']; ?></td>
                                            <td><?php echo $LiCompany['C_Address']; ?></td>
                                            <td><?php echo $LiCompany['C_Country']; ?></td>
                                            <td><?php echo $LiCompany['C_Email']; ?></td>
                                            <td><?php echo $LiCompany['C_ContactNum']; ?></td>
                                            <td><?php echo $LiCompany['C_BusinessType']; ?></td>
                                            <td>
                                                <a class="fa fa-trash btn btn-danger waves-effect waves-light" href="<?php echo URL; ?>company/delete/<?php echo $LiCompany['C_ID']; ?>" onclick="return confirm('Are you sure?')"></a> 
                                                <a class="fa fa-edit btn btn-success waves-effect waves-light" href="<?php echo URL; ?>company/edit/<?php echo $LiCompany['C_ID']; ?>"></a>
                                            </td>
                                        </tr><?php endforeach ?>

                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->