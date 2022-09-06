<?

require_once("conexion.php");

class DameDatos extends Conexion{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDatos($dato){
        $resultado = $this->conexion_db->prepare("SELECT * FROM producto WHERE seccion= :secc");
        $resultado->execute(array(':secc'=>$dato));
        $datos=$resultado->fetchAll(PDO::FETCH_ASSOC);
        return $datos;
        $this->conexion_db=null;
    }
}

$verdatos = new DameDatos();

$misDatos= $verdatos->getDatos('ropa');

var_dump($misDatos);