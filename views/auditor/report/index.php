<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Yearly Reports</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Yearly Reports</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">
                                Report for year <?php echo $_POST['year']; ?>
                            </h3>
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
                                            <th>Total Disclosure</th>
                                            <th>Risk Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->reports as $report): ?>
                                        <?php
                                            switch ($report['R_Risk']) {
                                                case 'High Risk':
                                                    $riskColor = 'text-danger';
                                                    break;

                                                case 'Moderate Risk':
                                                    $riskColor = 'text-warning';
                                                    break;

                                                case 'Low Risk':
                                                    $riskColor = 'text-success';
                                                    break;
                                            }
                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $report['C_Name']; ?></td>
                                            <td><?php echo $report['R_TotalWithdrawal'] = ($report['R_TotalWithdrawal'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_WaterAffected'] = ($report['R_WaterAffected'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_RecycleReused'] = ($report['R_RecycleReused'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_WaterRisk'] = ($report['R_WaterRisk'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_Facility'] = ($report['R_Facility'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_Governance'] = ($report['R_Governance'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_Compliance'] = ($report['R_Compliance'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_Target'] = ($report['R_Target'] == 1 ? 'Yes': 'No'); ?></td>
                                            <td><?php echo $report['R_TotalDisclosure']; ?></td>
                                            <td class="<?php echo $riskColor; ?>"><?php echo $report['R_Risk']; ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->