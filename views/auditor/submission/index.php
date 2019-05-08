<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">New Submission for year <?php echo $_POST['year']; ?></h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Company List</li>
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


                <form method="POST" action="<?php echo URL; ?>submission/add"> 

                    <div class="tab-content"><!-- /.tab-content -->
                        <div class="tab-pane fade in active" id="HII">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Company Name</th>
                                                <th>Water Withdrawal</th>
                                                <th>Significance of Water Withdrawal</th>
                                                <th>Water Recycled and Reuse</th>
                                                <th>Water Risks</th>
                                                <th>Facility Level Water Accounting</th>
                                                <th>Governance and Strategy</th>
                                                <th>Compliance, Complaints and Senses</th>
                                                <th>Targets and Initiatives</th>
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
                                                    <td>
                                                        <input type="radio" name="S1-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S1-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S2-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S2-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S3-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S3-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S4-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S4-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S5-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S5-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S6-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S6-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S7-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S7-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S8-<?php echo $HiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S8-<?php echo $HiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>

                                                    <input type="hidden" name="C_ID[]" value="<?php echo $HiCompany['C_ID']; ?>">
                                                    <input type="hidden" name="C_IntensityTypes[]" value="HI">
                                                </tr><?php endforeach ?>

                                            <?php endif; ?>
                                        </tbody>
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
                                                <th>Water Withdrawal</th>
                                                <th>Significance of Water Withdrawal</th>
                                                <th>Water Recycled and Reuse</th>
                                                <th>Water Risks</th>
                                                <th>Facility Level Water Accounting</th>
                                                <th>Governance and Strategy</th>
                                                <th>Compliance, Complaints and Senses</th>
                                                <th>Targets and Initiatives</th>
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
                                                    <td>
                                                        <input type="radio" name="S1-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S1-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S2-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S2-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S3-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S3-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S4-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S4-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S5-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S5-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S6-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S6-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S7-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S7-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S8-<?php echo $MiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S8-<?php echo $MiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>

                                                    <input type="hidden" name="C_ID[]" value="<?php echo $MiCompany['C_ID']; ?>">
                                                    <input type="hidden" name="C_IntensityTypes[]" value="MI">
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
                                                <th>Water Withdrawal</th>
                                                <th>Significance of Water Withdrawal</th>
                                                <th>Water Recycled and Reuse</th>
                                                <th>Water Risks</th>
                                                <th>Facility Level Water Accounting</th>
                                                <th>Governance and Strategy</th>
                                                <th>Compliance, Complaints and Senses</th>
                                                <th>Targets and Initiatives</th>
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
                                                    <td>
                                                        <input type="radio" name="S1-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S1-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S2-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S2-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S3-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S3-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S4-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S4-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S5-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S5-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S6-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S6-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S7-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S7-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="S8-<?php echo $LiCompany['C_ID']; ?>" value="1" required=""> Yes </input>
                                                        <input type="radio" name="S8-<?php echo $LiCompany['C_ID']; ?>" value="0"> No </input>
                                                    </td>

                                                    <input type="hidden" name="C_ID[]" value="<?php echo $LiCompany['C_ID']; ?>">
                                                    <input type="hidden" name="C_IntensityTypes[]" value="LI">
                                                </tr><?php endforeach ?>

                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>

                        </div>

                        <input type="hidden" name="R_Year" value="<?php echo $_POST['year']; ?>">
                        <input type="submit" class="btn btn-primary" name="submission" value="submit">
                        <button class="btn btn-default">Calculate</button>

                    </div><!-- /.tab-content -->

                </form>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->