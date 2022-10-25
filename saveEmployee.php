<?php
    include_once('includes/header.php');

    $key = $_GET['key'] ?? null;
    
    $employee = [
        'name' => $_POST['employeeName'],
        'job' => $_POST['employeeJob'],
        'salary' => $_POST['employeeSalary'],
    ];

    if ($key) {
        $_SESSION['employee'][$key] = $employee;
    } else {
        $_SESSION['employee'][] = $employee;
    }

    include_once('list.php');

    include_once('includes/footer.php');
?>