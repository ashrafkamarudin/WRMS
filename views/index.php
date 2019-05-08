<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link href="public/images/wrms.png" rel="icon">
	<title>Sign-in WRMS</title><!-- Bootstrap core CSS -->
	<link href="<?php echo URL; ?>public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	   html,
	   body {
	     height: 100%;
	   }

	   body {
	     display: -ms-flexbox;
	     display: -webkit-box;
	     display: flex;
	     -ms-flex-align: center;
	     -ms-flex-pack: center;
	     -webkit-box-align: center;
	     align-items: center;
	     -webkit-box-pack: center;
	     justify-content: center;
	     padding-top: 40px;
	     padding-bottom: 40px;
	     background-color: #f5f5f5;
	     margin-top: -100px;
	   }

	   .form-signin {
	     width: 100%;
	     max-width: 330px;
	     padding: 15px;
	     margin: 0 auto;
	   }
	   .form-signin .checkbox {
	     font-weight: 400;
	   }
	   .form-signin .form-control {
	     position: relative;
	     box-sizing: border-box;
	     height: auto;
	     padding: 10px;
	     font-size: 16px;
	   }
	   .form-signin .form-control:focus {
	     z-index: 2;
	   }
	   .form-signin input[type="email"] {
	     margin-bottom: -1px;
	     border-bottom-right-radius: 0;
	     border-bottom-left-radius: 0;
	   }
	   .form-signin input[type="password"] {
	     margin-bottom: 10px;
	     border-top-left-radius: 0;
	     border-top-right-radius: 0;
	   }
	</style>
</head>
<body class="text-center">

	<div class="text-center">
		<img alt="" class="mb-4" height="92" src="public/images/wrms.png" width="92">

	<h1>Water Risk Management System</h1>
	<hr>
	<h4 class="text-center">You can view published report below.</h4>
	</div>

	<?php if(isset($this->reports)) : ?>
	<div class="container">
		<div class="col-md-12">
			<h3 class="box-title">
                                Report for year <?php echo $_POST['year']; ?>
                            </h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
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
	<div class="text-center">
	<button class="btn btn-default" onclick="window.print()">Download</button>
	<a class="btn btn-success" href="<?php echo URL;?>">Home</a>
	</div>
	<?php else : ?>

		<form action="<?php echo URL; ?>published" class="form-signin" method="post">
			<?php Flash::Show() ?>
			<div class="form-group">
				<label class="col-md-12">Please input year of report in the field below.</label>
				<div class="col-md-12">
					<input class="form-control form-control-line" name="year" placeholder="1995" type="number"> 
					<button style="margin-top: 10px;margin-bottom: 10px" class="btn btn-primary" name="login" type="submit">Search</button>
				</div>
			</div>
			<div class="col-md-12">
				<p class="mt-5 mb-3 text-muted">If you are an Auditor, Please <a href="<?php echo URL; ?>authenticate">login here</a>.</p>
			</div>
		</form>

	<?php endif ?>
</body>
</html>