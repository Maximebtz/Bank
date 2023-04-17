<?php 

    include 'BankAccount.php';

    $p1 = New Customer("Bertuzzi", "Maxime", "1998-03-30", "Colmar");
    $p2 = New Customer("Bertuzzi", "Laurine", "1996-05-22", "Colmar");

    $bankAccountMB1 = new BankAccount("MB_main_account", 0, "$", $p1);
    $bankAccountMB2 = new BankAccount("MB_side_account", 0, "$", $p1);

    $bankAccountLB1 = new BankAccount("LB_main_account", 0, "$", $p2);


    echo $bankAccountMB1->creditAccount(500);
    echo $bankAccountMB1->debitAccount(24.82);
    
    echo $bankAccountMB1->getBalance();

    echo $bankAccountMB1->makeTransfer($bankAccountMB2, 50);
    echo $bankAccountMB1->makeTransfer($bankAccountLB1, 68);

    echo $p1->getInfo();

?>