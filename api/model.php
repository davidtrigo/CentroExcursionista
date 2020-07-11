<?php

class Model
{
    private $_conection;

    /** Conexion a la BBDD
     * Model constructor.
     * @param $datosConexion
     */
    public function __construct($datosConexion)
    {
        $this->_conection = new PDO("mysql:host={$datosConexion['host']}; dbname={$datosConexion['dbname']};charset=utf8", $datosConexion['user'], $datosConexion['password']);
        $this->_conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /** Método que retorna un listado de socios, en el caso que se pase un valor por paramemtro mostrará los socios que coincidan con el valor de búsqueda
     * @param $params  valor que guarda una cadena para la búsqueda de los nombres coincidentes.
     * @return $consulta  retorna un conjunto de resultados.
     */
    public function getAllSocios($params)
    {
        if ($params == null) {
            $consulta = $this->_conection->query("select * from SOCIO;");
        } else {
            $consulta = $this->_conection->query("select * from SOCIO WHERE NOMBRE LIKE'%$params%';");
        }
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    /** Metodo que lista los datos del socio con el id pasado , y una lista de secciones que correspondan al id del socio.
     * @param $id
     * @return mixed
     */

    public function getSocio($id)
    {
        $consulta = [];
        $querySocio = $this->_conection->query("select * from SOCIO WHERE ID =  $id ;");
        $socio = $querySocio->fetch(PDO::FETCH_ASSOC);
        $querySecsoc = $this->_conection->query("select ID_SEC from SEC_SOC WHERE ID_SOC = $id ;");
        $secciones = $querySecsoc->fetchAll(PDO::FETCH_ASSOC);
        $consulta = $socio;
        $consulta['secciones'] = $secciones;
        return $consulta;
    }

    /** Metodo que inserta un socio
     * @param $nombre
     * @param $email
     * @return mixed|null
     */
    public function addSocio($nombre, $email)
    {
        $insertSQL = "INSERT INTO SOCIO (NOMBRE, EMAIL) VALUES('$nombre','$email')";
        $consulta = $this->_conection->exec($insertSQL);
        if ($consulta) {
            $id = $this->_conection->lastInsertId();
            return $this->getSocio($id);
        }
        return null;
    }

    /** Metodo que updatea segun la variable $tipo los datos del socio, o bien da de alta una seccion concreta o le da de baja una seccion concreta.
     * @param $datos
     * @return array
     */
    public function updateSocio($datos)
    {
        $msg = [];
        $id = $datos['id'];
        $nombre = $datos['nombre'];
        $email = $datos['email'];
        $seccion = $datos['seccion'];
        $tipo = $datos['tipo'];

        if ($tipo == 'C' || $tipo == 'A' || $tipo == 'B') {
            if ($tipo == 'C') {
                if ($nombre != null) {
                    $ok = $this->_conection->exec("UPDATE SOCIO SET NOMBRE ='{$nombre}' WHERE ID ={$id}");
                    if ($ok) {
                        $msg = ['Nombre actualizado'];
                    } else {
                        $msg = ['error=> se ha producido un error al actualizar el nombre'];
                    }
                }
                if ($email != null) {
                    $ok = $this->_conection->exec("UPDATE SOCIO SET EMAIL ='{$email}' WHERE ID ={$id}");

                    if ($ok) {

                        $msg = ['Email actualizado'];
                    } else {
                        $msg = ['error=> se ha producido un error al actualizar el email'];
                    }
                }
                if ($nombre != null && $email != null) {

                    $ok = $this->_conection->exec("UPDATE SOCIO SET  NOMBRE ='{$nombre}'  AND EMAIL ='{$email}' WHERE ID ={$id}");

                    if ($ok) {

                        $msg = ['Nombre y email actualizados'];
                    } else {
                        $msg = ['error=> se ha producido un error al actualizar los datos'];
                    }
                }
            }
            if ($tipo == 'A') {

                $ok = $this->_conection->exec("INSERT INTO SEC_SOC (ID_SEC,ID_SOC) VALUES({$seccion},{$id}); ");
                if ($ok) {

                    $msg = ['Se ha dado de alta al socio de la seccion solicitada '];
                } else {
                    $msg = ['Se ha producido un error al dar de alta  al socio de la seccion solicitada'];
                }
            }
            if ($tipo == 'B') {
                $ok = $this->_conection->exec("DELETE FROM SEC_SOC WHERE  ID_SEC ='{$seccion}' AND ID_SOC ={$id}");
                if ($ok) {
                    $msg = ['Se ha dado de baja al socio de la seccion solicitada'];
                } else {
                    $msg = ['Se ha producido un error al dar de baja al socio de la seccion solicitada'];
                }
            }
        } else {
            $msg = ['error=> Usa el parametro "tipo" con el valor "C" para modificar los datos del socio, "B" para dar de baja a una seccion al socio,  y "A" para dar de alta a una seccion al socio'];
        }

        return $msg;
    }

    /** Metodo que elimina al socio mediante su id
     * @param $id
     * @return int
     */
    public function deleteSocio($id)
    {
        $deleteSQL = "DELETE FROM SOCIO WHERE ID =$id";
        $consulta = $this->_conection->exec($deleteSQL);
        return $consulta;
    }

    /** Metodo que lista todas las secciones.
     * @return array
     */
    public function getAllSecciones()
    {
        $consulta = $this->_conection->query("select * from SECCION;");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    /** metodo que lista una seccion concreta mediante su $id , y  una lista de los socios que estan en una seccion concreta
     * @param $id
     * @return array|mixed
     */
    public function getSeccion($id)
    {
        $consulta = [];
        $querySeccion = $this->_conection->query("select * from SECCION WHERE ID= $id ;");
        $seccion = $querySeccion->fetch(PDO::FETCH_ASSOC);
        $querySocSec = $this->_conection->query("select ID_SOC from SEC_SOC WHERE ID_SEC= $id ;");
        $socios= $querySocSec->fetchAll(PDO::FETCH_ASSOC);
        $consulta = $seccion;
        $consulta["socios"] = $socios;
        return $consulta;
    }
}
?>

