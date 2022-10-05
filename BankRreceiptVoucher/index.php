<!DOCTYPE html>
<html>
<head>
	<title>Bank Receipt Voucher</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="SOSLogo.png">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body>div:nth-child(4)>a>img {
            display: none !important;
        }
    </style>
</head>
<body>
	<div class="container">
		<h2>BANK RECEIPT VOUCHER</h2>
        <h2>SOS CHILDREN'S VILLAGES OF PAKISTAN</h2>
		<form action="action.php" method="post">
			<!-- <div class="form-group">
				<div class="row">
					<label class="col-md-2">Location: </label>
					<div class="col-md-10">
						<input type="checkbox" name="locations" value="Karachi">Karachi
						<input type="checkbox" name="locations" value="Hyderabad">Hyderabad
						<input type="checkbox" name="locations" value="Lahore">Lahore
						<input type="checkbox" name="locations" value="Sakkhar">Sakkhar
					</div>
				</div>
			</div> -->
			<!-- <div class="form-group">
				<div class="row">
					<label class="col-md-2">Unit: </label>
					<div class="col-md-10">
						<input type="checkbox" name="units" value="School">School
						<input type="checkbox" name="units" value="Social Center">Social Center
						<input type="checkbox" name="units" value="Youth Home">Youth Home
					</div>
				</div>
			</div> -->
			<!-- <div class="form-group">
				<div class="row">
					<label class="col-md-2">Voucher No.</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="voucher_no" min="6">
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Date: </label>
					<div class="col-md-10">
						<input type="date" class="form-control" name="date">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Project</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="project">
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="row">
					<label class="col-md-2">Cheque No.</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="cheque_no">
					</div>
				</div>
			</div> -->
			<!-- <div class="form-group">
				<div class="row">
					<label class="col-md-2">A/C No.</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="account_no">
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Received from</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="paid_to">
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="row">
					<label class="col-md-2">Cheque Date</label>
					<div class="col-md-10">
						<input type="date" class="form-control" name="cheque_date">
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Account Code</label>
					<label class="col-md-3">Head of Account</label>
					<label class="col-md-1">Folio</label>
					<label class="col-md-2">Debit Rs.</label>
					<label class="col-md-1">Ps.</label>
					<label class="col-md-2">Credit rs.</label>
					<label class="col-md-1">Ps.</label>
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_1">
					<input type="text" class="form-control col-md-3" name="head_of_account_1">
					<input type="text" class="form-control col-md-1" name="folio_1">
					<input type="text" class="form-control col-md-2" name="debit_rs_1">
					<input type="text" class="form-control col-md-1" name="debit_ps_1">
					<input type="text" class="form-control col-md-2" name="credit_rs_1">
					<input type="text" class="form-control col-md-1" name="credit_ps_1">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_2">
					<input type="text" class="form-control col-md-3" name="head_of_account_2">
					<input type="text" class="form-control col-md-1" name="folio_2">
					<input type="text" class="form-control col-md-2" name="debit_rs_2">
					<input type="text" class="form-control col-md-1" name="debit_ps_2">
					<input type="text" class="form-control col-md-2" name="credit_rs_2">
					<input type="text" class="form-control col-md-1" name="credit_ps_2">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_3">
					<input type="text" class="form-control col-md-3" name="head_of_account_3">
					<input type="text" class="form-control col-md-1" name="folio_3">
					<input type="text" class="form-control col-md-2" name="debit_rs_3">
					<input type="text" class="form-control col-md-1" name="debit_ps_3">
					<input type="text" class="form-control col-md-2" name="credit_rs_3">
					<input type="text" class="form-control col-md-1" name="credit_ps_3">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_4">
					<input type="text" class="form-control col-md-3" name="head_of_account_4">
					<input type="text" class="form-control col-md-1" name="folio_4">
					<input type="text" class="form-control col-md-2" name="debit_rs_4">
					<input type="text" class="form-control col-md-1" name="debit_ps_4">
					<input type="text" class="form-control col-md-2" name="credit_rs_4">
					<input type="text" class="form-control col-md-1" name="credit_ps_4">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_5">
					<input type="text" class="form-control col-md-3" name="head_of_account_5">
					<input type="text" class="form-control col-md-1" name="folio_5">
					<input type="text" class="form-control col-md-2" name="debit_rs_5">
					<input type="text" class="form-control col-md-1" name="debit_ps_5">
					<input type="text" class="form-control col-md-2" name="credit_rs_5">
					<input type="text" class="form-control col-md-1" name="credit_ps_5">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_6">
					<input type="text" class="form-control col-md-3" name="head_of_account_6">
					<input type="text" class="form-control col-md-1" name="folio_6">
					<input type="text" class="form-control col-md-2" name="debit_rs_6">
					<input type="text" class="form-control col-md-1" name="debit_ps_6">
					<input type="text" class="form-control col-md-2" name="credit_rs_6">
					<input type="text" class="form-control col-md-1" name="credit_ps_6">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_7">
					<input type="text" class="form-control col-md-3" name="head_of_account_7">
					<input type="text" class="form-control col-md-1" name="folio_7">
					<input type="text" class="form-control col-md-2" name="debit_rs_7">
					<input type="text" class="form-control col-md-1" name="debit_ps_7">
					<input type="text" class="form-control col-md-2" name="credit_rs_7">
					<input type="text" class="form-control col-md-1" name="credit_ps_7">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_8">
					<input type="text" class="form-control col-md-3" name="head_of_account_8">
					<input type="text" class="form-control col-md-1" name="folio_8">
					<input type="text" class="form-control col-md-2" name="debit_rs_8">
					<input type="text" class="form-control col-md-1" name="debit_ps_8">
					<input type="text" class="form-control col-md-2" name="credit_rs_8">
					<input type="text" class="form-control col-md-1" name="credit_ps_8">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_9">
					<input type="text" class="form-control col-md-3" name="head_of_account_9">
					<input type="text" class="form-control col-md-1" name="folio_9">
					<input type="text" class="form-control col-md-2" name="debit_rs_9">
					<input type="text" class="form-control col-md-1" name="debit_ps_9">
					<input type="text" class="form-control col-md-2" name="credit_rs_9">
					<input type="text" class="form-control col-md-1" name="credit_ps_9">
				</div>
				<div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_10">
					<input type="text" class="form-control col-md-3" name="head_of_account_10">
					<input type="text" class="form-control col-md-1" name="folio_10">
					<input type="text" class="form-control col-md-2" name="debit_rs_10">
					<input type="text" class="form-control col-md-1" name="debit_ps_10">
					<input type="text" class="form-control col-md-2" name="credit_rs_10">
					<input type="text" class="form-control col-md-1" name="credit_ps_10">
				</div>
				<!-- <div class="row">
					<input type="text" class="form-control col-md-2" name="account_code_11" disabled="disabled">
					<input type="text" class="form-control col-md-3" name="head_of_account_11" disabled="disabled">
					<input type="text" class="form-control col-md-1" name="folio_11" disabled="disabled">
					<input type="text" class="form-control col-md-2" name="debit_rs_11" disabled="disabled">
					<input type="text" class="form-control col-md-1" name="debit_ps_11" disabled="disabled">
					<input type="text" class="form-control col-md-2" name="credit_rs_11" disabled="disabled">
					<input type="text" class="form-control col-md-1" name="credit_ps_11" disabled="disabled">
				</div> -->
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Amount in Words</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="amount_in_words">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Deposited in A/C:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="deposited_in_ac">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Account Title:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="account_title">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Bank Name & Branch:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" name="bank_name_branch">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Description</label>
					<div class="col-md-10">
						<textarea class="form-control" rows="3" name="description"></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2">Prepared by: </label>
					<div class="col-md-10">
						<input type="date" class="form-control" name="prepared_by_date">
					</div>
				</div>
			</div>
			<div class="text-right mb-2">
				<input type="submit" name="submit" value="Submit" class="btn btn-success">
			</div>
		</form>
	</div>
	<script src="jQuery.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>