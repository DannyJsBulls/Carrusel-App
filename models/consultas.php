<?php 
    class Consultas{
        // función para mostrar el mes
        public function mostrarMesCo(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT mes FROM personal WHERE id = 1";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['mes'];
            }
            return $f;
        }
        // función para mostrar el nombre
        public function mostrarNombreCo(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT nombres FROM personal WHERE id = 3";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['nombres'];
            }
            return $f;
        }
        // función para mostrar el cargo
        public function mostrarCargoCo(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT cargo FROM personal WHERE id = 3";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['cargo'];
            }
            return $f;
        }
        // -------------------funciones segundo registro --------------------------------
        // función para mostrar el nombre
        public function mostrarNombreDos(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT nombres FROM personal WHERE id = 2";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['nombres'];
            }
            return $f;
        }
        // función para mostrar el cargo
        public function mostrarCargoDos(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT cargo FROM personal WHERE id = 2";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['cargo'];
            }
            return $f;
        }
        // -------------------funciones tercer registro --------------------------------
        // función para mostrar el nombre
        public function mostrarNombreTres(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT nombres FROM personal WHERE id = 1";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['nombres'];
            }
            return $f;
        }
        // función para mostrar el cargo
        public function mostrarCargoTres(){
            $f = array();
            // Creamos objeto conexion
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();
            // prepare
            $consultar = "SELECT cargo FROM personal WHERE id = 1";
            $result = $conexion->prepare($consultar);
            $result->execute();
            // mientras existan registros, almacenamos solo el valor de la columna 'mes' en el arreglo $f
            while ($resultado = $result->fetch()) {
                $f[] = $resultado['cargo'];
            }
            return $f;
        }
    }
?>
