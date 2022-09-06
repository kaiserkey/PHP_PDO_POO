<?

require_once('config.php');

class Conexion{
    protected $conexion_db;

    public function __construct(){
        try{
            $this->conexion_db = new PDO(constant('DBHOST'), constant('DBUSUARIO'), constant('DBPASS'));
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET ".CHARSET);
            return $this->conexion_db;
            
        }catch(PDOException $e){ 
            return "ERROR: No se puede conectar a la base de datos...". $e->getMessage();
        }
        
    }
}