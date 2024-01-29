<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</table>

<table border = "1">

<th>
        Agent Table
</th>
  

        <tr>
            <th>
                agent_id
            </th>
            <th>
                agent_name
            </th>
            <th>
                agent_contact
            </th>
            <th colspan="7">
                agent_email
            </th>
            <th>
                agent_address
            </th>
            <th>
                agent_username
            </th>
            <th>
                agent_password
            </th>
        </tr>
    
<?php
    $serverName = "MRGDFK\SQLEXPRESS";
    $database = "real_estate_lisiting_property";
    $uid="";
    $pass = "";
    $connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
    ];
    $conn = sqlsrv_connect($serverName, $connection);
    if(!$conn)
        die(print_r(sqlsrv_errors(), true));
    $tsql = "select * from agent";
    $stmt = sqlsrv_query($conn, $tsql);
    if($stmt == false){

        echo 'Error';
    }
    while($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
    { 
        echo "<tr>";
        echo "<td>" . $obj['agent_id']."</td>";
        echo "<td>" . $obj['agent_name']."</td>";
        echo "<td>" . $obj['agent_contact']."</td>";
        echo "<td colspan= 7>" . $obj['agent_email']."</td>";
        echo "<td>" . $obj['agent_address']."</td>";
        echo "<td>" . $obj['agent_username']."</td>";
        echo "<td>" . $obj['agent_password']."</td>";
        echo "</tr>";
    }
    
    
    sqlsrv_free_stmt($stmt); 
    sqlsrv_close($conn);
?> 
</table>





    <table border = "1">

<th>
        Seller Table
</th>
  

        <tr>
            <th>
                sel_id
            </th>
            <th>
                sel_name
            </th>
            <th>
                sel_contact
            </th>
            <th colspan="7">
                sel_email
            </th>
            <th>
                sel_address
            </th>
            <th>
                sel_username
            </th>
            <th>
                sel_password
            </th>
            <th>
                agent_id
            </th>
        </tr>
    
<?php
    $serverName = "DESKTOP-AIKR8ED\SQLEXPRESS01";
    $database = "real_estate_lisiting_property";
    $uid="";
    $pass = "";
    $connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
    ];
    $conn = sqlsrv_connect($serverName, $connection); 
    if(!$conn)
        die(print_r(sqlsrv_errors(), true));
    $tsql = "select * from seller";
    $stmt = sqlsrv_query($conn, $tsql);
    if($stmt == false){

        echo 'Error';
    }
    while($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
    { 
        echo "<tr>";
        echo "<td>" . $obj['sel_id']."</td>";
        echo "<td>" . $obj['sel_name']."</td>";
        echo "<td>" . $obj['sel_contact']."</td>";
        echo "<td colspan= 7>" . $obj['sel_email']."</td>";
        echo "<td>" . $obj['sel_address']."</td>";
        echo "<td>" . $obj['sel_username']."</td>";
        echo "<td>" . $obj['sel_password']."</td>";
        echo "<td>" . $obj['agent_id']."</td>";
        echo "</tr>";
    }
    
    
    sqlsrv_free_stmt($stmt); 
    sqlsrv_close($conn);
?> 


</table>

<table border = "1">

<th>
        Client Table
</th>
  

        <tr>
            <th>
                clnt_id
            </th>
            <th>
                clnt_name
            </th>
            <th>
                clnt_contact
            </th>
            <th colspan="7">
                clnt_email
            </th>
            <th>
                clnt_address
            </th>
            <th>
                clnt_username
            </th>
            <th>
                clnt_password
            </th>
            <th>
                agent_id
            </th>
        </tr>
    
<?php
    $serverName = "DESKTOP-AIKR8ED\SQLEXPRESS01";
    $database = "real_estate_lisiting_property";
    $uid="";
    $pass = "";
    $connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
    ];
    $conn = sqlsrv_connect($serverName, $connection); 
    if(!$conn)
        die(print_r(sqlsrv_errors(), true));
    $tsql = "select * from client";
    $stmt = sqlsrv_query($conn, $tsql);
    if($stmt == false){

        echo 'Error';
    }
    while($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
    { 
        echo "<tr>";
        echo "<td>" . $obj['clnt_id']."</td>";
        echo "<td>" . $obj['clnt_name']."</td>";
        echo "<td>" . $obj['clnt_contact']."</td>";
        echo "<td colspan= 7>" . $obj['clnt_email']."</td>";
        echo "<td>" . $obj['clnt_address']."</td>";
        echo "<td>" . $obj['clnt_username']."</td>";
        echo "<td>" . $obj['clnt_password']."</td>";
        echo "<td>" . $obj['agent_id']."</td>";
        echo "</tr>";
    }
    
    
    sqlsrv_free_stmt($stmt); 
    sqlsrv_close($conn);
?> 
</table>

</table>

<table border = "1">

<th>
        Property Table
</th>
  

        <tr>
            <th>
                prop_id
            </th>
            <th>
                prop_price
            </th>
            <th>
                prop_status
            </th>
            <th colspan="7">
                prop_description
            </th>
            <th>
                prop_type
            </th>
            <th>
                sel_id
            </th>
            <th>
                agent_id
            </th>
            <th>
                clnt_id
            </th>
        </tr>
    
<?php
    $serverName = "DESKTOP-AIKR8ED\SQLEXPRESS01";
    $database = "real_estate_lisiting_property";
    $uid="";
    $pass = "";
    $connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
    ];
    $conn = sqlsrv_connect($serverName, $connection); 
    if(!$conn)
        die(print_r(sqlsrv_errors(), true));
    $tsql = "select * from property";
    $stmt = sqlsrv_query($conn, $tsql);
    if($stmt == false){

        echo 'Error';
    }
    while($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
    { 
        echo "<tr>";
        echo "<td>" . $obj['prop_id']."</td>";
        echo "<td>" . $obj['prop_price']."</td>";
        echo "<td>" . $obj['prop_status']."</td>";
        echo "<td colspan= 7>" . $obj['prop_description']."</td>";
        echo "<td>" . $obj['prop_type']."</td>";
        echo "<td>" . $obj['sel_id']."</td>";
        echo "<td>" . $obj['agent_id']."</td>";
        echo "<td>" . $obj['clnt_id']."</td>";
        echo "</tr>";
    }
    
    
    sqlsrv_free_stmt($stmt); 
    sqlsrv_close($conn);
?> 
</table>


<table border = "1">

<th>
        Comment Table
</th>
  

        <tr>
            <th>
                cmnt_id
            </th>
            <th>
                cmnt_datentime
            </th>
            <th colspan="7">
                comment
            </th>
            <th>
                cmnt_status
            </th>
            <th>
                sel_id
            </th>
            <th>
                agent_id
            </th>
            <th>
                clnt_id
            </th>
            <th>
               prop_id
            </th>

        </tr>
    
<?php
    $serverName = "DESKTOP-AIKR8ED\SQLEXPRESS01";
    $database = "real_estate_lisiting_property";
    $uid="";
    $pass = "";
    $connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
    ];
    $conn = sqlsrv_connect($serverName, $connection); 
    if(!$conn)
        die(print_r(sqlsrv_errors(), true));
    $tsql = "select * from comment";
    $stmt = sqlsrv_query($conn, $tsql);
    if($stmt == false){

        echo 'Error';
    }
    while($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
    { 
        echo "<tr>";
        echo "<td>" . $obj['cmnt_id']."</td>";
       // echo "<td>" . $obj["cmnt_datentime"]."</td>";
        echo "<td>" . $obj["cmnt_datentime"]->format('Y-m-d') . "</td>";
        echo "<td colspan= 7>" . $obj['comment']."</td>";
        echo "<td>" . $obj['cmnt_status']."</td>";
        echo "<td>" . $obj['sel_id']."</td>";
        echo "<td>" . $obj['agent_id']."</td>";
        echo "<td>" . $obj['clnt_id']."</td>";
        echo "<td>" . $obj['prop_id']."</td>";
        echo "</tr>";
    }
    
    
    sqlsrv_free_stmt($stmt); 
    sqlsrv_close($conn);
?> 
</table>

</body>
</html>