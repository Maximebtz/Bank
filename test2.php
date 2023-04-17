<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bank</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>

    <h1><span>Jean-Sophie </span> Bank</h1>

    <form action="">
        <input class="input" type="text" placeholder="">
    
        <div class="inputs">
            <div class="input-enter">
                <input class="input credit" type="input" placeholder="Crédit">
                <input class="btn" type="button" value="Crédit">
            </div>
            <div class="input-enter">
                <input class="input debit" type="input" placeholder="Débit">
                <input class="btn" type="button" value="Débit">
            </div>
            
        </div>
    </form>
    <?php 
    @require 'Account.php';
    @require 'Customer.php';
    $bankAccount = new BankAccount("main_account", 0, "USD", $p1);
          $bankAccount->creditAccount(100);
          ?>
</body>
</html>