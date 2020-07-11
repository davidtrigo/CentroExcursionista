<?php

class Controller
{
    private $c;

    function __construct($container)
    {
        $this->c = $container;
    }

    /** Método que muestra una lista socios con sus secciones correspondientes
     * @param $request
     * @param $response
     * @param $args
     * @return $response
     */
    public function listarSocios($request, $response, $args)
    {
        $params = $request->getQueryParam('busqueda', null); 
        $socios = $this->c->modelo->getAllSocios($params);
        $result = [];
        foreach ($socios as $socio) {
            $id = $socio['ID'];
            $result[] = $this->listadoSociosSecciones($id);
        }
        $response = $response->withJson($result);
        return $response;
    }

    /** Metodo que dado el $id desglosa las secciones del socio
     * @param $id
     * @return $socio
     */
    private function listadoSociosSecciones($id)
    {
        $socio = $this->c->modelo->getSocio($id);
        $consulta = [];
        foreach ($socio['secciones'] as $seccion) {
            $consulta[] = $this->c->get("request")->getUri()->getScheme() . "://" . $this->c->get('request')->getUri()->getHost() .
                $this->c->get('request')->getUri()->getBasePath() . "/seccion/" . $seccion['ID_SEC'];
        }
        $socio['secciones'] = $consulta;
        return $socio;
    }

    /** Método que lista los datos de un socio mediante su id pasado en $args junto a sus secciones.
     * @param $request
     * @param $response
     * @param $args
     * @return array
     */
    public function obtenerSocio($request, $response, $args)
    {
        $id = $args['id'];
        $socio = $this->c->modelo->getSocio($id);

        if ($socio == null) {
            $socio = ['error => no se ha podido obtener al socio puede ser que no exista'];
        }
        $result = [];
        foreach ($socio['secciones'] as $valor) {
            $result[] = $request->getUri()->getScheme() . "://" . $request->getUri()->getHost() . $request->getUri()->getBasePath() . "/seccion/" . $valor['ID_SEC'];
        }
        $socio['secciones'] = $result;
        $response = $response->withJson($socio);
        return $response;
    }

    /** Metodo que dado los parametros obtenidos crea un nuevo socio.
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function agregarSocio($request, $response, $args)
    {
        $datos = $request->getParsedBody();
        $nombre = $datos['nombre'];
        $email = $datos['email'];
        $socio = $this->c->modelo->addSocio($nombre, $email);

        if ($socio == null) {
            $socio = ['error => no se ha podido crear al socio'];
        }
        $response = $response->withJson($socio);
        return $response;
    }

    /**
     * Metodo que updatea los datos de un socio.
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function modificarSocio($request, $response, $args)
    {
        $datos = $request->getParsedBody();
        $result = $this->c->modelo->updateSocio($datos);
        return $response->withJson($result);
    }


    /** Metodo que elimina al socio mediante su id.
     * @param $request
     * @param $response
     * @param $args
     * @return array
     */
    public function eliminarSocio($request, $response, $args)
    {
        $idSocio = $args['id'];
        $socio = $this->c->modelo->deleteSocio($idSocio);
        if ($socio == null) {
            $msg = ['error => no se ha podido borrar al socio'];
            $response = $response->withJson($msg);
        } else {
            $msg = ['se ha eliminado al socio de manera sastifactoria'];
            $response = $response->withJson($msg);
        }
        return $response;
    }

    /** metodo que lista las secciones junto a los socios inscritos en cada una de ellas.
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function listarSecciones($request, $response, $args)
    {
        $secciones = $this->c->modelo->getAllSecciones();
        $result = [];
        foreach ($secciones as $seccion) {
            $id = $seccion['ID']; 
            $result[] = $this->listadoseccionesSocios($id);
        }
        $response = $response->withJson($result);
        return $response;
    }

    /** Metodo que dado el $id desglosa las secciones junto a sus socios
     * @param $id
     * @return mixed
     */
    private function listadoseccionesSocios($id)
    {
        $seccion = $this->c->modelo->getSeccion($id);
        $result = [];
        foreach ($seccion['socios'] as $socio) {
            $result[] = $this->c->get("request")->getUri()->getScheme() . "://" . $this->c->get('request')->getUri()->getHost() .
                $this->c->get('request')->getUri()->getBasePath() . "/socio/" . $socio['ID_SOC'];
        }
        $seccion['socios'] = $result;
        return $seccion;
    }

    /** Método que lista los datos de una seccion mediante su id pasado en $args junto a sus socios.
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function obtenerSeccion($request, $response, $args)
    {
        $id = $args['id'];
        $seccion = $this->c->modelo->getSeccion($id);
        if ($seccion == null) {
            $seccion = ['error => no se ha podido obtener la seccion puede ser que no exista'];
        }
        $result = [];
        foreach ($seccion['socios'] as $valor) {
            $result[] = $request->getUri()->getScheme() . "://" . $request->getUri()->getHost() . $request->getUri()->getBasePath() . "/socio/" . $valor['ID_SOC'];
        }
        $seccion['socios'] = $result;
        $response = $response->withJson($seccion);
        return $response;
    }
}

?>