<?php
    include_once('includes/header.php');

    $employee = [
        'name' => $_POST['employeeName'],
        'job' => $_POST['employeeJob'],
        'salary' => $_POST['employeeSalary'],
    ];

    $_SESSION['employee'][] = $employee;

    include_once('list.php');

    include_once('includes/footer.php');
?>