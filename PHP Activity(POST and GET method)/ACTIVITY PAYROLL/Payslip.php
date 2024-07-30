<!DOCTYPE html>
<html>

<head>
    <title>Employee Payslip</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h2>Employee's Payslip</h2>
        <?php
        $empID = $_POST['employeeID'];
        $firstName = $_POST['firstName'];
        $middleInitial = $_POST['middleInitial'];
        $lastName = $_POST['lastName'];
        $basic = $_POST['basic'];
        $incentivePay = $_POST['incentivePay'];
        $houseRentAllowance = $_POST['houseRentAllowance'];
        $mealAllowance = $_POST['mealAllowance'];
        $providentFund = $_POST['providentFund'];
        $tax = $_POST['tax'];
        $loan = $_POST['loan'];
        $totalEarn = $basic +  $incentivePay +  $houseRentAllowance +  $mealAllowance;
        $totalDeduct =   $providentFund + $tax + $loan;
        $netPay = $totalEarn - $totalDeduct;
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default half-width">
                    <div class="panel-heading"><strong>Employee Information</strong></div>
                    <div class="panel-body">
                        <p><strong>Employee ID:</strong><?= $empID ?></p>
                        <p><strong>Employee Name:</strong> <?= $firstName . " " . $middleInitial . ". " . $lastName ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><Strong>Earnings</Strong></div>
                    <div class="panel-body">
                        <p><strong>Basic:</strong> <?= $basic ?></p>
                        <p><strong>Incentive Pay:</strong> <?= $incentivePay ?></p>
                        <p><strong>House Rent Allowance:</strong> <?= $houseRentAllowance ?></p>
                        <p><strong>Meal Allowance:</strong> <?= $mealAllowance ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-danger">
                    <div class="panel-heading"><strong>Deductions</strong></div>
                    <div class="panel-body">
                        <p><Strong>Provident Fund:</Strong> <?= $providentFund ?></p>
                        <p><strong>Tax:</strong> <?= $tax ?></p>
                        <p><strong>Loan:</strong> <?= $loan ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading"><Strong>Computation</Strong></div>
                    <div class="panel-body">
                        <p><strong>Total Earnings:</strong> <?= $totalEarn ?></p>
                        <p><strong>Total Deductions:</strong> <?= $totalDeduct ?></p>
                        <p><strong>Net Pay:</strong> <?= $netPay ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
