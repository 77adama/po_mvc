<?php
namespace App\Model;
// extends:user a tous les attribut de personnes
abstract class User extends Personne{
    
        protected string $login;
        protected string $password;
        // protected string $role;

    public function affiche(){
        echo $this->id;
    }

        /**
         * Get the value of login
         */ 
        public function getLogin()
        {
                return $this->login;
        }

        /**
         * Set the value of login
         *
         * @return  self
         */ 
        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }

        public static function findUserByLoginAndPassword(string $login,string $password):object|null{
              return  parent::findBy("select * from personne where login=? and password=? ",[$login,$password],true);
        }

        //redefinition
        public static function findAll():array{
             $db=parent::database();
            $db->connexionBD();
            $sql="select * from ".parent::table()." where role not like 'ROLE_PROFESSEUR'";
            $result=$db->executeSelect($sql);
            $db->closeConnexion();
            return $result;
        //  $sql="select * from ".parent::table()." where role not like 'ROLE_PROFESSEUR'";
        //         return  parent::findBy($sql);
                
        } 
}