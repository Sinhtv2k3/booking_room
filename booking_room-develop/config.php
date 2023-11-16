<?php

function pdo_get_connnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=du_an_1", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return "Connection failed: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connnection();
        $statement = $conn->prepare($sql);
        $statement->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// function pdo_executes($sql, $params)
// {
//     try {
//         $conn = pdo_get_connnection();
//         $conn->beginTransaction();

//         $statement = $conn->prepare($sql);

//         foreach ($params as $param) {
//             $statement->execute($param);
//         }

//         $conn->commit();
//     } catch (PDOException $e) {
//         $conn->rollBack();
//         throw $e;
//     } finally {
//         unset($conn);
//     }
// }
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connnection();
        $statement = $conn->prepare($sql);
        $statement->execute($sql_args);
        $result = $statement->fetchAll();
        return $result;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connnection();
        $statement = $conn->prepare($sql);
        $statement->execute($sql_args);
        $result = $statement->fetch();

        return $result;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connnection();
        $statement = $conn->prepare($sql);
        $statement->execute($sql_args);
        $result = $statement->fetchColumn();

        return $result;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
