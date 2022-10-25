<?php 
    include_once('includes/header.php'); 
    
    $key = $_GET['key'] ?? null;

    $employee = null;
    $action = null;

    if (isset($_SESSION['employee'][$key])) {
        $employee = $_SESSION['employee'][$key];
        $action = "?key=" . $key;
    }
?>

<form action="saveEmployee.php<?php echo $action; ?>" method="POST">
    <div class="card mt-3">
        <div class="card-header">
            Cadastrar Funcionário
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="form-group">
                        <span> Nome do Funcionário </span>
                        <input type="text" value="<?php echo $employee['name'] ?? '' ?>" name="employeeName" class="form-control"></input>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-group">
                        <span> Cargo do Funcionário </span>
                        <input type="text" value="<?php echo $employee['job'] ?? '' ?>" name="employeeJob" class="form-control"></input>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-group">
                        <span> Salário do Funcionário </span>
                        <input type="text" value="<?php echo $employee['salary'] ?? '' ?>" name="employeeSalary" class="form-control"></input>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-success" value="Cadastrar Usuário"> </input>
        </div>

    </div>
</form>
<?php include_once('includes/footer.php'); ?>