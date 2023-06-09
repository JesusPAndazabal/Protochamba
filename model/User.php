<?php

require_once '../core/model.master.php';
class User extends ModelMaster{

  // Listar los registro de usuarios
  public function getUsers(){
    try{
      return parent::getRows("spu_usuarios_listar");
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Registrar usuario
  public function registerUser(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_registrar", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Actualizar usuario
  public function updateUser(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_modificar", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Actualizar rol del usuario
  public function updateUserRole(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_edit_rol", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // banear usuario
  public function banUser(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_banear", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Reactivar usuario
  public function reactivateUser(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_reactivar", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Agregar foto
  public function perfilFotografia(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_fotografiausu", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Obtener un registro de usuario
  public function getAUser(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_getdata", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Obtener un registro de preguntas de usuario
  public function getAUserQuest(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_quest", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  //lista la descripcion de un usuario
  public function getUsersDescrip(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_listar_descripcion", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  //lista la descripcion de un usuario
  public function getNameUser(array $data){
    try{
      return parent::execProcedure($data, "spu_personas_getname_user", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Actualizar correos
  public function updateEmailsUser(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_modificar_emails", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }
  
  // Actualizar clave
  public function updatePasswordUser(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_modificar_clave", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }
  
  // Actualizar horario de aención de un usuario
  public function updateOfficeHours(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_modificar_horarioatencion", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Actualizar descripcion de un usuario
  public function updateDescrip(array $data){
    try{
      parent::execProcedure($data, "spu_descripcion_modificar", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Eliminar un registro de usuario
  public function deleteUser(array $data){
    try{
      parent::deleteRegister($data, "spu_usuarios_eliminar");
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Hacer login
  public function loginUser(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_login", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Buscar usuario por nombre o apellidos
  public function searchUsersByNames(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_buscar_nombres", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Buscar usuario por nombre o apellidos scroll
  public function searchUsersByNamesScroll(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_buscar_nombres_scroll", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Buscar usuario por NOMBRE y ROL
  public function searchUsersByNamesAndRole(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_buscar_rol_nombres", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Filtrar usuario por idservicio y iddepartamento
  public function filteredUsers(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_filtrar", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Filtrar usuario por el tipo de rol (Admin, Uusuario)
  public function usersFilteredByRlole(array $data){
    try{
      return parent::execProcedure($data, "spu_usuarios_filtrar_rol", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  //Verificacion de existencia de correo
  public function getEmailV(array $data){
    try{
      return parent::execProcedure($data,"spu_email_verifi", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  //Verificacion de existencia de correo de respaldo
  public function getEmailVRes(array $data){
    try{
      return parent::execProcedure($data,"spu_email_verifi_res", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  //Cambiar contraseña
  public function updatePasswordRest(array $data){
    try{
      parent::execProcedure($data, "spu_usuarios_edit_pass", false);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }

  // Calificación del usuario
  public function userQualification(array $data){
    try{
     return parent::execProcedure($data, "spu_estrellas_usuario", true);
    }
    catch(Exception $error){
      die($error->getMessage());
    }
  }
}

?>