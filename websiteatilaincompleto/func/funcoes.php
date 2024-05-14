<?php
function listarTabela($campos, $tabela, $campoOrdem)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela ORDER BY $campoOrdem");
        //        $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_INT);
        $sqlLista->execute();
        $conn->commit();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

// <---------------------------------------------------------- Login ----------------------------------------------------------->

/* function validarSenha($campos, $tabela, $campoBsString, $campoBdstring2, $campoParametro, $campoParametro2, $campoAtivo, $valorAtivo)
{
    $conn = conectar();

    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos "
            . "FROM $tabela "
            . "WHERE $campoBsString = ? AND $campoBdstring2 = ? AND $campoAtivo = ? ");
        $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $campoParametro2, PDO::PARAM_STR);
        $sqlLista->bindValue(3, $valorAtivo, PDO::PARAM_STR);
        $sqlLista->execute();
        $conn->commit();

        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
    } catch (Throwable $e) {
        $error_message = 'Throwable:' . $e->getMessage() . PHP_EOL;
        $error_message = 'File:' . $e->getFile() . PHP_EOL;
        $error_message = 'Line:' . $e->getLine() . PHP_EOL;
        error_log($error_message, 3, 'log/arquivo_de_log.txt');
        $conn->rollback();
        throw $e;
    }
} */

function validarSenhaCriptogtografia($campos, $tabela, $campoBsString, $campoBdstring2, $campoParametro, $campoParametro2, $campoAtivo, $valorAtivo)
{
    $conn = conectar();

    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos "
            . "FROM $tabela "
            . "WHERE $campoBsString = ? AND $campoAtivo = ? ");
        $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $valorAtivo, PDO::PARAM_STR);
        $sqlLista->execute();
        $conn->commit();

        if ($sqlLista->rowCount() > 0) {
            $retornoSql = $sqlLista->fetch(PDO::FETCH_OBJ);
            $senha_hash = $retornoSql->$campoBdstring2;
            if (password_verify($campoParametro2, $senha_hash)) {
                return $retornoSql;
            }
            return 'senha';
        } else {
            return 'usuario';
        }
        return null;
    } catch (Throwable $e) {
        $error_message = 'Throwable:' . $e->getMessage() . PHP_EOL;
        $error_message = 'File:' . $e->getFile() . PHP_EOL;
        $error_message = 'Line:' . $e->getLine() . PHP_EOL;
        error_log($error_message, 3, 'log/arquivo_de_log.txt');
        $conn->rollback();
        throw $e;
    }
}

// <---------------------------------------------------------- Cadastrar ----------------------------------------------------------->

function insertDoisId($tabela, $campos, $value1, $value2)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->execute();
        $idInsertRetorno = $conn->lastInsertId();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $idInsertRetorno;
        } else {
            return 'nGravado';
        };
    } catch (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}
function insertTresId($tabela, $campos, $value1, $value2, $value3)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqInsert->execute();
        $idInsertRetorno = $conn->lastInsertId();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $idInsertRetorno;
        } else {
            return 'nGravado';
        };
    } catch (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

function insertQuatroId($tabela, $campos, $value1, $value2, $value3, $value4)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?,?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqInsert->execute();
        $idInsertRetorno = $conn->lastInsertId();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $idInsertRetorno;
        } else {
            return 'nGravado';
        };
    } catch (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

function insertCincoId($tabela, $campos, $value1, $value2, $value3, $value4, $value5)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos)VALUES(?,?,?,?,?)");
        $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $value2, PDO::PARAM_STR);
        $sqInsert->bindValue(3, $value3, PDO::PARAM_STR);
        $sqInsert->bindValue(4, $value4, PDO::PARAM_STR);
        $sqInsert->bindValue(5, $value5, PDO::PARAM_STR);
        $sqInsert->execute();
        $idInsertRetorno = $conn->lastInsertId();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $idInsertRetorno;
        } else {
            return 'nGravado';
        };
    } catch (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

// <---------------------------------------------------------- Alterar ----------------------------------------------------------->

function up($tabela, $campos, $value1, $value2, $campoBdid)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlAletrar = $conn->prepare("UPDATE $tabela SET $campos = ? WHERE $campoBdid = ?");
        $sqlAletrar->bindValue(1, $value1, PDO::PARAM_STR);
        $sqlAletrar->bindValue(2, $value2, PDO::PARAM_INT);
        $sqlAletrar->execute();
        $conn->commit();
        if ($sqlAletrar->rowCount() > 0) {
            return true;
        } else {
            return null;
        };
    } catch (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

// <---------------------------------------------------------- Deletar----------------------------------------------------------->

function dlt($tabela, $campoReferencia, $idparametro)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlAletrar = $conn->prepare("DELETE  FROM $tabela WHERE $campoReferencia = ?");
        $sqlAletrar->bindValue(1, $idparametro, PDO::PARAM_INT);
        $sqlAletrar->execute();
        $conn->commit();
        if ($sqlAletrar->rowCount() > 0) {
            return true;
        } else {
            return null;
        };
    } catch (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}
