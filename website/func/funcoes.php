<?php
function listarTabela($campos,$tabela,$campoOrdem)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela ORDER BY $campoOrdem ");
        $sqlLista->execute();
        $conn->commit();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
};



function validarSenha($campos, $tabela, $campoBdString, $campoBdString2, $campoParametro, $campoParametro2, $campoBdAtivo, $valorAtivo)
{
    $conn= conectar();

    try {
    $conn->beginTransaction();
    $sqlLista = $conn->prepare("SELECT $campos "
    . "FROM $tabela "
    . "WHERE $campoBdString = ? AND $campoBdString2 = ? AND $campoBdAtivo = ? ");
    $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_STR);
    $sqlLista->bindValue(2, $campoParametro2, PDO::PARAM_STR);
    $sqlLista->bindValue(3, $valorAtivo, PDO::PARAM_STR);
    $sqlLista->execute();
    $conn->commit();
    if ($sqlLista->rowCount() > 0) {
        return $sqlLista ->fetchAll(PDO::FETCH_OBJ);

    }else {
        return 'Vazio';
    }

    } 
    catch (Throwable $e) {
    $error_message = 'Throwable:'. $e->getMessage() . PHP_EOL;
    $error_message .='File: '. $e->getFile(). PHP_EOL;
    $error_message .='Line: '. $e->getLine(). PHP_EOL;
    error_log($error_message, 3, 'arquivo_de_log.txt');
    $conn->rollback();
    throw $e;    
    }
};

// function validarSenhaCriptografia($campos, $tabela, $campoBdString, $campoBdString2, $campoParametro, $campoParametro2, $campoBdAtivo, $valorAtivo)
// {
//     $conn= conectar();

//     try {
//     $conn->beginTransaction();
//     $sqlLista = $conn->prepare("SELECT $campos "
//     . "FROM $tabela "
//     . "WHERE $campoBdString = ? AND $campoBdAtivo = ? ");
//     $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_STR);
//     $sqlLista->bindValue(2, $valorAtivo, PDO::PARAM_STR);
//     $sqlLista->execute();
//     $conn->commit();
//     if ($sqlLista->rowCount() > 0) {
//         $retornoSql=$sqlLista->fetch(PDO::FETCH_OBJ);
//         $senha_hash = $retornoSql->$campoBdString2;
//         if (password_verify($campoParametro2, $senha_hash)) {
//             return $retornoSql;

//         }
//         return 'senha';
//     }else {
//         return 'usuario';
//     }
//     return null;
//     }catch(Throwable $e){
//         $error_message = 'Throwable: ' . $e->getMessage() . PHP_EOL;
//         $error_message = 'File: ' . $e->getFile() . PHP_EOL;
//         $error_message = 'Line '  . $e->getLine() . PHP_EOL;
//         error_log($error_message,3, 'arquivo_de_log.txt');
//         $conn->rollback();
//         throw $e;

//     }
// };

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

function insertDoisid($tabela, $campos, $valeu1, $valeu2) {
    $conn = conectar();
    try{
        $conn->beginTransaction();
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($campos) VALUES (?,?)");
        $sqlInsert ->bindValue(1, $valeu1, PDO::PARAM_STR);
        $sqlInsert ->bindValue(2, $valeu2, PDO::PARAM_STR);
        $sqlInsert ->execute();
        $IdInsertRetorno = $conn -> lastInsertId();
        $conn->commit();

        if ($sqlInsert->rowCount() > 0) {
            return $IdInsertRetorno;
        }else {
            return 'nGravado';
        };
    }catch
    (PDOException $e) {
        echo 'Exception ->';
        return ($e->getMessage());
        $conn->rollBack();
    };
    $conn = null;
};

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
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
};

function updateum($tabela, $campobd, $campobdId, $valorReceberinput, $inputvalorinvisivel) {
    $conn = conectar();
    try{
        $conn->beginTransaction();
        $sqlUpdate = $conn->prepare("UPDATE $tabela SET $campobd = ? WHERE $campobdId = ? "  );
        $sqlUpdate ->bindValue(1, $valorReceberinput, PDO::PARAM_STR);
        $sqlUpdate ->bindValue(2, $inputvalorinvisivel, PDO::PARAM_INT);
        $sqlUpdate ->execute();
        $conn->commit();

        if ($sqlUpdate->rowCount() > 0) {
            return 1;
        }else {
            return null;
        }
        
        return null;
    }catch
    (Throwable $e) {
      
    };
   
};

function deletarRegistro($tabela, $campoReferencia, $idparametro){
    $conn=conectar();
    try{
        $conn->beginTransaction();
        $sqlUpdate = $conn->prepare("DELETE FROM $tabela WHERE $campoReferencia = ?");
        $sqlUpdate ->bindValue(1, $idparametro, PDO::PARAM_INT);
        $sqlUpdate ->execute();
        $conn->commit();

        if ($sqlUpdate->rowCount() > 0) {
            return true;
        }else {
            return null;
        };
        
    
    }catch
    (PDOException $e) {
        echo 'Exception ->';
        return ($e->getMessage());
        $conn->rollBack();
    };
   
    $conn = null;

};


function insertclienteid($tabela, $campos, $valeu1, $valeu2, $valeu3) {
    $conn = conectar();
    try{
        $conn->beginTransaction();
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($campos) VALUES (?,?,?)");
        $sqlInsert ->bindValue(1, $valeu1, PDO::PARAM_STR);
        $sqlInsert ->bindValue(2, $valeu2, PDO::PARAM_STR);
        $sqlInsert ->bindValue(3, $valeu3, PDO::PARAM_STR);
        $sqlInsert ->execute();
        $IdInsertRetorno = $conn -> lastInsertId();
        $conn->commit();

        if ($sqlInsert->rowCount() > 0) {
            return $IdInsertRetorno;
        }else {
            return 'nGravado';
        };
    }catch
    (PDOException $e) {
        echo 'Exception ->';
        return ($e->getMessage());
        $conn->rollBack();
    };
    $conn = null;
};




function insertservico($tabela, $campos, $valeu1) {
    $conn = conectar();
    try{
        $conn->beginTransaction();
        $sqlInsert = $conn->prepare("INSERT INTO $tabela($campos) VALUES (?)");
        $sqlInsert ->bindValue(1, $valeu1, PDO::PARAM_STR);
        $sqlInsert ->execute();
        $IdInsertRetorno = $conn -> lastInsertId();
        $conn->commit();

        if ($sqlInsert->rowCount() > 0) {
            return $IdInsertRetorno;
        }else {
            return 'nGravado';
        };
    }catch
    (PDOException $e) {
        echo 'Exception ->';
        return ($e->getMessage());
        $conn->rollBack();
    };
    $conn = null;
};



function updatecliente($tabela, $campobd, $campobd2, $campobd3, $campobdId, $valorReceberinput, $valorReceberinput2, $valorReceberinput3, $inputvalorinvisivel) {
    $conn = conectar();
    try{
        $conn->beginTransaction();
        $sqlUpdate = $conn->prepare("UPDATE $tabela SET $campobd = ? , $campobd2 = ? , $campobd3 = ? WHERE $campobdId = ? "  );
        $sqlUpdate ->bindValue(1, $valorReceberinput, PDO::PARAM_STR);
        $sqlUpdate ->bindValue(2, $valorReceberinput2, PDO::PARAM_STR);
        $sqlUpdate ->bindValue(3, $valorReceberinput3, PDO::PARAM_STR);
        $sqlUpdate ->bindValue(4, $inputvalorinvisivel, PDO::PARAM_INT);
        $sqlUpdate ->execute();
        $conn->commit();

        if ($sqlUpdate->rowCount() > 0) {
            return 1;
        }else {
            return null;
        }
        
        return null;
    }catch
    (Throwable $e) {
        $conn->rollBack();
    };
   
};




function updateservico($tabela, $campobd, $campobdId, $valorReceberinput, $inputvalorinvisivel) {
    $conn = conectar();
    try{
        $conn->beginTransaction();
        $sqlUpdate = $conn->prepare("UPDATE $tabela SET $campobd = ?  WHERE $campobdId = ? "  );
        $sqlUpdate ->bindValue(1, $valorReceberinput, PDO::PARAM_STR);
        $sqlUpdate ->bindValue(2, $inputvalorinvisivel, PDO::PARAM_INT);
        $sqlUpdate ->execute();
        $conn->commit();

        if ($sqlUpdate->rowCount() > 0) {
            return 1;
        }else {
            return null;
        }
        
        return null;
    }catch
    (Throwable $e) {
        $conn->rollBack();
    };
   
};




function insertmuitos($tabela, $idcliente, $idservico, $prazo_inicio, $prazo_fim, $valor_contratado, $valor_entrada, $idadm, $prazo) {
    $conn = conectar(); 
    try {
        $conn->beginTransaction();
        $sqlInsert = $conn->prepare("INSERT INTO $tabela (idcliente, idservico, prazo_inicio, prazo_fim, valor_contratado, valor_entrada, idadm, a_vista) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sqlInsert->bindValue(1, $idcliente, PDO::PARAM_INT);
        $sqlInsert->bindValue(2, $idservico, PDO::PARAM_INT);
        $sqlInsert->bindValue(3, $prazo_inicio, PDO::PARAM_STR);
        $sqlInsert->bindValue(4, $prazo_fim, PDO::PARAM_STR);
        $sqlInsert->bindValue(5, $valor_contratado, PDO::PARAM_STR);
        $sqlInsert->bindValue(6, $valor_entrada, PDO::PARAM_STR);
        $sqlInsert->bindValue(7, $idadm, PDO::PARAM_INT);
        $sqlInsert->bindValue(8, $prazo, PDO::PARAM_STR); 
        $sqlInsert->execute();
        $IdInsertRetorno = $conn->lastInsertId();
        $conn->commit();

        if ($sqlInsert->rowCount() > 0) {
            return $IdInsertRetorno;
        } else {
            return 'nGravado';
        }
    } catch(PDOException $e) {
        echo 'Exception ->';
        echo ($e->getMessage());
        $conn->rollBack();
        return false;
    }
    $conn = null;
}
?>




