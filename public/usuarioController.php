<?php
  require '../vendor/autoload.php';
  require '../config/database.php';
  use App\Entidades\usuario as user;


  class usuarioController {
      public function login ($user, $pass){
         
      }

      public function create (){
         $user = user::Create(['idpersona'=>'1', 'nomuser' => "Kshiitj Soni",
        'clave' => password_hash("1234",PASSWORD_BCRYPT),]);
      }
  }
 