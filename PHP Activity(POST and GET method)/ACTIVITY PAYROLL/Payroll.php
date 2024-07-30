<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Employee's Payroll</h1>
    <div class="row">
      <form method="POST" action="Payslip.php">
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading"><strong>Employee Information</strong></div>
                <div class="panel-body">
                    <label for="empID">Employee ID</label>
                    <input type="number" name="employeeID" class="form-control"  placeholder="Enter Employee ID">

                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" class="form-control"  placeholder="Enter First Name">

                    <label for="middleInitial">Middle Initial</label>
                    <input type="text" class="form-control" name="middleInitial" placeholder="Enter Middle Initial">

                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading"><strong>Employee Salary Earnings</strong></div>
                <div class="panel-body">
                    <label for="basic">Basic</label>
                    <input type="number" class="form-control" name="basic" placeholder="Enter Basic">

                    <label for="incentivePay">Incentive Pay</label>
                    <input type="number" class="form-control" name="incentivePay" placeholder="Enter Incentive Pay">

                    <label for="houseRentAllowance">House Rent Allowance</label>
                    <input type="number" class="form-control" name="houseRentAllowance" placeholder="Enter House Rent Allowance">

                    <label for="mealAllowance">Meal Allowance</label>
                    <input type="number" class="form-control" name="mealAllowance" placeholder="Enter Meal Allowance">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading"><strong>Employee Deduction Earnings</strong></div>
                <div class="panel-body">
                    <label for="providentFund">Provident Fund</label>
                    <input type="number" class="form-control" name="providentFund" placeholder="Enter Provident Fund">

                    <label for="tax">Tax</label>
                    <input type="number" class="form-control" name="tax" placeholder="Enter Tax">

                    <label for="loan">Loan</label>
                    <input type="number" class="form-control" name="loan" placeholder="Enter Loan">
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
</body>
</html>
