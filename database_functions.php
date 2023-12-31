<?php
    
    function insertLead($_name, $_email, $_phone, $_python, $_excel, $_powerbi, $_r){

        $user = 'USER DB';
        $pass = 'PASS DB';
        $table_name = 'TABLE NAME';
        $db_name = 'DB NAME';
        $host_name = 'HOST NAME';
        $pdo = new PDO('mysql:host='.$host_name.';dbname='.$db_name, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO $db_name.$table_name (
            col_fullname,
            col_email, 
            col_phone, 
            col_python,
            col_excel,
            col_powerBI,
            col_R) VALUES (
            $_name, $_email, $_phone, $_python, $_excel, $_powerbi, $_r);";

        try {
            $pdo->prepare($sql)->execute();

        }
        catch (PDOException $e) {
            echo "<br>" .$e->getMessage(). "<br>" ;
        }
        $pdo = null;
    }
?>