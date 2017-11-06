<?php
Interface SentenciasBD {
    
    const BUSCAR_Paises = "SELECT * FROM paises";
    const BUSCAR_listaprovincia = "SELECT * FROM listaprovincia";
    const BUSCAR_listalocalidad = "SELECT * FROM listalocalidad";
    const INSERTAR_PERSONA = "INSERT INTO persona (Nombre,Apellido,ApellidoMaterno,DNI,CUIL,F. nacimiento,provincia,localidad,estadocivil,genero,telefonofijo,celular,telefonoalternativo,correo,pais,domicilio,numerodom,piso,depto) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
}
