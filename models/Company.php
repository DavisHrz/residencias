<?php
    class Company{
        var $id;
        var $name;
        var $password;
        var $db;

        function __construct(){
            $con = new DataBase();
            $this->db = $con->connect();
        }

        function register($id, $companyName, $giro, $direccion, $phoneCompany, $namePerson, $phoneNumber, $emailPerson){
            $queryINSERT = 'INSERT INTO Empresas VALUES (null, "'.$id.'", "'.$companyName.'", "'.$giro.'", "'.$direccion.'", "'.$phoneCompany.'", "'.$namePerson.'", "'.$emailPerson.'", "'.$phoneNumber.'");';
            if( mysqli_query($this->db, $queryINSERT )){
                $this->setFullData($id);
                return true;
			}
	        return false;
        }

        function setFullData($id){
            $queryUPDATE = 'UPDATE Usuarios SET DatosLlenos = true WHERE IdUsuario = "'.$id.'";';
            if( mysqli_query($this->db, $queryUPDATE )){
                return true;
			}
	        return false;
        }

        function getData(){
            $querySELECT = 'SELECT * FROM Usuarios AS u, Empresas AS e WHERE u.IdUsuario = e.IdUsuario AND u.IdUsuario = "'.$_SESSION["id"].'";';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                $result = mysqli_fetch_assoc($queryDB);
                $_SESSION["id2"] = $result["IdEmpresa"];
                $_SESSION["razonSocial"] = $result["RazonSocial"];
                $_SESSION["giro"] = $result["GiroEmpresa"];
                $_SESSION["direccion"] = $result["Direccion"];
                $_SESSION["telefono"] = $result["Telefono"];
                $_SESSION["correo"] = $result["Correo"];
                $_SESSION["asesor"] = $result["NombreCompletoAsesor"];
                $_SESSION["correoAsesor"] = $result["CorreoAsesor"];
                $_SESSION["telefonoAsesor"] = $result["TelefonoAsesor"];
                return true;
			}
	        return false;
        }

        function getSemestres(){
            $semestres = array();
            $querySELECT = 'SELECT * FROM Semestres;';
			if( $queryDB = mysqli_query($this->db, $querySELECT )){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $semestre = array();
                    array_push($semestre, $result["IdSemestre"]);
                    array_push($semestre, $result["Semestre"]);
                    array_push($semestre, $result["Estado"]);

                    array_push($semestres, $semestre);
                }
			}
	        return $semestres;
        }

        function insertProject($id, $semestre, $nombre, $perfilRequerido, $tipoProyecto,  $descripcion, $fechaAsignacion, $fechaTermino, $horas, $cantidad){
            $queryINSERT = 'INSERT INTO Proyectos VALUES (null, "'.$id.'", "'.$semestre.'", null, "'.$nombre.'", "'.$perfilRequerido.'", "'.$tipoProyecto.'", "'.$descripcion.'", "'.$fechaAsignacion.'", "'.$fechaTermino.'", "'.$horas.'", "'.$cantidad.'", now());';
            if( mysqli_query($this->db, $queryINSERT )){
                return true;
			}
	        return false;
        }

        function getProjects(){
            $proyectos = array();
            $querySELECT = 'SELECT * FROM Proyectos WHERE IdEmpresa = "'.$_SESSION["id2"].'"';
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

        function getApplicants($idProyecto){
            $applicants = array();
            $querySELECT = 'SELECT a.* FROM Proyectos AS p, ProyectosAsignados AS pa, Alumnos AS a WHERE p.IdProyecto = "'.$idProyecto.'" AND p.IdProyecto = pa.IdProyecto AND pa.IdAlumno = a.IdAlumno';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $apllicant = array();
                    array_push($apllicant, $result["IdAlumno"]);
                    array_push($apllicant, $result["Nombre"]);
                    array_push($apllicant, $result["PrimerApellido"]);
                    array_push($apllicant, $result["SegundoApellido"]);

                    array_push($applicants, $apllicant);
                }
			}
	        return $applicants;
        }

        function getApplicant($id){
            $aplicant = array();
            $querySELECT = 'SELECT * FROM Alumnos WHERE IdAlumno = "'.$id.'";';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                $result = mysqli_fetch_assoc($queryDB);
                array_push($aplicant, $result["Nombre"]);
                array_push($aplicant, $result["PrimerApellido"]);
                array_push($aplicant, $result["SegundoApellido"]);
			}
	        return $aplicant;
        }

        function setReseña($idProyecto, $idAlumno, $comentario, $calificacion){
            $queryINSERT = 'UPDATE ProyectosAsignados SET ComentarioDeLaEmpresa = "'.$comentario.'", CalificacionDeLaEmpresa = "'.$calificacion.'" WHERE IdProyecto = "'.$idProyecto.'" AND IdAlumno = "'.$idAlumno.'"; ';
            if( mysqli_query($this->db, $queryINSERT )){
                return true;
			}
	        return false;
        }

        function getComment($idProyecto, $idAlumno){
            $comentario = array();
            $querySELECT = 'SELECT * FROM ProyectosAsignados WHERE IdProyecto = "'.$idProyecto.'" AND IdAlumno = "'.$idAlumno.'";';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                $result = mysqli_fetch_assoc($queryDB);
                array_push($comentario, $result["ComentarioDeLaEmpresa"]);
                array_push($comentario, $result["CalificacionDeLaEmpresa"]);
			}
	        return $comentario;
        }

        function getRequest(){
            $requests = array();
            $querySELECT = 'SELECT p.Nombre AS NombreP, a.Nombre, a.PrimerApellido, a.SegundoApellido, a.Conocimiento, a.Promedio FROM SolicitudProyecto AS sp, Proyectos AS p, Empresas AS e, Alumnos AS a WHERE sp.IdProyecto = p.IdProyecto AND p.IdEmpresa = e.IdEmpresa AND sp.IdAlumno = a.IdAlumno AND e.IdEmpresa = "'.$_SESSION["id2"].'";';
            if( $queryDB = mysqli_query($this->db, $querySELECT)){
                while ( $result = mysqli_fetch_assoc($queryDB) ){
                    $request = array();
                    array_push($request, $result["NombreP"]);
                    array_push($request, $result["Nombre"]);
                    array_push($request, $result["PrimerApellido"]);
                    array_push($request, $result["SegundoApellido"]);
                    array_push($request, $result["Conocimiento"]);
                    array_push($request, $result["Promedio"]);

                    array_push($requests, $request);
                }
			}
	        return $requests;
        }

    }
?>