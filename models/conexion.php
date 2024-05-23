
<?php
class conexion
{
    public static  function conexion()
    {
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quinto";
        $conn = mysqli_connect($severname, $username, $password, $dbname);

      
        if (! $conn) {
            
            die  ("Conexion fallida: " . mysqli_connect_error());
        } else {
            echo "Conexion exitosa";
            return $conn;
        }
    }
}
?>