<?php
    class Student{
        var $id;
        var $name;
        var $password;
        var $db;

        function __construct(){
            $con = new DataBase();
            $this->db = $con->connect();
        }

        function register($controlNumber, $name, $lastName, $secondSurName, $phone, $knowledge, $average){
            $queryINSERT = 'INSERT INTO Alumnos VALUES (null, "'.$_SESSION['id'].'", "'.$controlNumber.'", "'.$name.'", "'.$lastName.'", "'.$secondSurName.'", "'.$phone.'", "'.$knowledge.'", "'.$average.'");';
			if( mysqli_query($this->db, $queryINSERT )){
                $this->setFullData();
                return true;
			}
	        return false;
        }

        function setFullData(){
            $queryUPDATE = 'UPDATE Usuarios SET DatosLlenos = true WHERE IdUsuario = "'.$_SESSION['id'].'";';
            if( mysqli_query($this->db, $queryUPDATE )){
                return true;
			}
	        return false;
        }

        function getData(){
            $querySELECT = 'SELECT * FROM Usuarios AS u, Alumnos AS a WHERE u.IdUsuario = a.IdUsuario AND a.IdUsuario = "'.$_SESSION["id"].'";';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                $result = mysqli_fetch_assoc($queryDB);
                $_SESSION["id2"] = $result["IdAlumno"];
                $_SESSION["noControl"] = $result["NoControl"];
                $_SESSION["nombre"] = $result["Nombre"];
                $_SESSION["primerApellido"] = $result["PrimerApellido"];
                $_SESSION["segundoApellido"] = $result["SegundoApellido"];
                $_SESSION["telefono"] = $result["Telefono"];
                $_SESSION["conocimiento"] = $result["Conocimiento"];
                $_SESSION["promedio"] = $result["Promedio"];
                return true;
			}
	        return false;
        }

        function getProjects(){
            $proyectos = array();
            $querySELECT = 'SELECT p.* 
                FROM Proyectos AS p
                WHERE NOT EXISTS (
                    SELECT 1 
                    FROM SolicitudProyecto AS sp 
                    WHERE p.IdProyecto = sp.IdProyecto AND sp.IdAlumno = "'.$_SESSION["id2"].'"
                ) AND NOT EXISTS (
                    SELECT 1 
                    FROM ProyectosAsignados AS pa 
                    WHERE p.IdProyecto = pa.IdProyecto AND pa.IdAlumno = "'.$_SESSION["id2"].'");
            ';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $proyecto = array();
                    array_push($proyecto, $result["IdProyecto"]);
                    array_push($proyecto, $result["Nombre"]);
                    array_push($proyecto, $result["PerfilRequerido"]);
                    array_push($proyecto, $result["Descripcion"]);
                    array_push($proyecto, $result["CantidadResidentes"]);

                    array_push($proyectos, $proyecto);
                }
			}
	        return $proyectos;
        }

        function setRequest($idProyecto){
            $queryINSERT = 'INSERT INTO SolicitudProyecto VALUES(null, "'.$idProyecto.'", "'.$_SESSION["id2"].'", "ESPERA");';
			if( mysqli_query($this->db, $queryINSERT )){
                $this->setFullData();
                return true;
			}
	        return false;
        }

        function getMyProjects(){
            $proyectos = array();
            $querySELECT = 'SELECT p.* 
                FROM Proyectos AS p
                WHERE EXISTS (
                    SELECT 1 
                    FROM SolicitudProyecto AS sp 
                    WHERE p.IdProyecto = sp.IdProyecto AND sp.IdAlumno = "'.$_SESSION["id2"].'"
                ) OR EXISTS (
                    SELECT 1 
                    FROM ProyectosAsignados AS pa 
                    WHERE p.IdProyecto = pa.IdProyecto AND pa.IdAlumno = "'.$_SESSION["id2"].'"
                );
            ';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $proyecto = array();
                    array_push($proyecto, $result["IdProyecto"]);
                    array_push($proyecto, $result["Nombre"]);
                    array_push($proyecto, $result["PerfilRequerido"]);
                    array_push($proyecto, $result["Descripcion"]);
                    array_push($proyecto, $result["CantidadResidentes"]);

                    array_push($proyectos, $proyecto);
                }
			}
	        return $proyectos;
        }

        function cancelRequest($idProyecto){
            $queryINSERT = 'DELETE FROM SolicitudProyecto WHERE IdProyecto = "'.$idProyecto.'" AND IdAlumno = "'.$_SESSION["id2"].'";';
			if( mysqli_query($this->db, $queryINSERT )){
                $this->setFullData();
                return true;
			}
	        return false;
        }

        function getResident(){
            $residencia = array();
            $querySELECT = 'SELECT * FROM ProyectosAsignados AS pa, Proyectos AS p, Empresas AS e, Usuarios AS u WHERE IdAlumno = "'.$_SESSION["id2"].'" AND pa.IdProyecto = p.IdProyecto AND p.IdEmpresa = e.IdEmpresa AND e.IdUsuario = u.IdUsuario;';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                if($result = mysqli_fetch_assoc($queryDB)){
                    array_push($residencia, $result["IdProyectoAsignado"]);
                    array_push($residencia, $result["IdProyecto"]);
                    array_push($residencia, $result["RazonSocial"]);
                    array_push($residencia, $result["GiroEmpresa"]);
                    array_push($residencia, $result["Direccion"]);
                    array_push($residencia, $result["Telefono"]);
                    array_push($residencia, $result["Correo"]);
                    array_push($residencia, $result["NombreCompletoAsesor"]);
                    array_push($residencia, $result["CorreoAsesor"]);
                    array_push($residencia, $result["TelefonoAsesor"]);
                    array_push($residencia, $result["Nombre"]);
                    array_push($residencia, $result["TipoProyecto"]);
                    array_push($residencia, $result["Descripcion"]);
                }
			}
	        return $residencia;
        }

        function setComment($proyectoAsignado, $comentario, $calificacion){
            $queryUPDATE = 'UPDATE ProyectosAsignados SET ComentarioDelAlumno = "'.$comentario.'", CalificacionDelAlumno = "'.$calificacion.'" WHERE IdProyectoAsignado = "'.$proyectoAsignado.'" ';
            if( mysqli_query($this->db, $queryUPDATE )){
                return true;
			}
	        return false;
        }

        function getComment($proyectoAsignado){
            $comentarios = array();
            $queryUPDATE = 'SELECT * FROM ProyectosAsignados WHERE IdProyectoAsignado = "'.$proyectoAsignado.'" ';
            if( $queryDB = mysqli_query($this->db, $queryUPDATE )){
                $result = mysqli_fetch_assoc($queryDB);
                array_push($comentarios, $result["ComentarioDelAlumno"]);
                array_push($comentarios, $result["CalificacionDelAlumno"]);
			}
	        return $comentarios;
        }


    }
?>