<?php 
    function mostrarMes(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarMesCo();

        if(!$results) {
            echo '<h2>No hay Mes Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h5>' . $result . '</h5>'; // Cambiado $result['mes'] a $result
            }
        }
    }
    function mostrarNombre(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarNombreCo();

        if(!$results) {
            echo '<h2>No hay Nombre Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h4>' . $result . '</h4>'; // Cambiado $result['mes'] a $result
            }
        }
    }
    function mostrarCargo(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarCargoCo();

        if(!$results) {
            echo '<h2>No hay Cargo Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h3>' . $result . '</h3>'; // Cambiado $result['mes'] a $result
            }
        }
    }
    // ---------------------funciones para el segundo registro-----------------------
    function mostrarNombreDos(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarNombreDos();

        if(!$results) {
            echo '<h2>No hay Nombre Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h4>' . $result . '</h4>'; // Cambiado $result['mes'] a $result
            }
        }
    }
    function mostrarCargoDos(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarCargoDos();

        if(!$results) {
            echo '<h2>No hay Cargo Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h3>' . $result . '</h3>'; // Cambiado $result['mes'] a $result
            }
        }
    }
    // ---------------------funciones para el tercer registro-----------------------
    function mostrarNombreTres(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarNombreTres();

        if(!$results) {
            echo '<h2>No hay Nombre Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h4>' . $result . '</h4>'; // Cambiado $result['mes'] a $result
            }
        }
    }
    function mostrarCargoTres(){
        $objConsultas = new Consultas();
        $results = $objConsultas->mostrarCargoTres();

        if(!$results) {
            echo '<h2>No hay Cargo Registrado</h2>';
        } else {
            foreach ($results as $result) {
                echo '<h3>' . $result . '</h3>'; // Cambiado $result['mes'] a $result
            }
        }
    }
?>

