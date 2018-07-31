
    <?php    

    class conexion{
        private $db;
        private $resultado;
        private $consulta;
        
        public function __construct ($dbhost, $dbuser, $dbpass, $dbname, $dbcharset){
            $this->db = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );
            if($this->db->connect_errno){
                trigger_error(" Fallo la conexión con MySQL, Tipo de error -> ({$this->db->connect_error})", E_USER_ERROR);
            }
        }
        
      //---------------- GET--------------------//  
        
        public function insertarPokemon($nombre,$peso,$altura,$habilidad){
            $this->resultado = $this->db->query("INSERT INTO pokemon VALUES('$nombre','$peso','$altura','$habilidad')");

        }
    }

?>