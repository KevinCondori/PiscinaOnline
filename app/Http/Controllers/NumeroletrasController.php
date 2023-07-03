<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kevin\ConvertiraLetras;
//use App\KevinLetras;
class NumeroletrasController extends Controller
{
    //
    public function index()
    {
        # code...
       $letras_total=ConvertiraLetras::convertir(79.88,'Bolivianos',false,'Centavos');
        return $letras_total;
        //return "datosss";
        //https://pilotosiat.impuestos.gob.bo/consulta/QR?nit=8324732983&cuf=78654383443f&numero=1&t=1
    }

    public function database()
    {
       //Datos de la base de datos
       /*$filename= 'seguridad2022';
       $command = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . "  > " . storage_path() . "/" . $filename;

       $returnVar = NULL;
       $output  = NULL;
       exec($command, $output, $returnVar);
       return "ok";*/
       
       /*$comando = "C:\xampp\mysql\bin\mysqldump --opt --password= --user=root proyectopiscina > backupdostablas3.sql";
    //$comando = "cd";
       exec($comando, $salida, $codigoSalida);
    if ($codigoSalida === 0) {
        echo "Ahora imprimiré las líneas de salida:";
        foreach ($salida as $linea) {
            echo $linea;
            echo "\n";
        return "funciona xd";
        }
    } else {
        echo "Error ejecutando el comando. El código es: " . $codigoSalida;
        return "Error ejecutando el comando. El código es: " . $codigoSalida;
    }*/
    echo '<pre>';

    // Muestra el resultado completo del comando "ls", y devuelve la
    // ultima linea de la salida en $ultima_linea. Almacena el valor de
    // retorno del comando en $retval.
    $ultima_linea = system('C:\xampp\mysql\bin\mysqldump --opt --password= --user=root proyectopiscina > backupdostablas5.sql', $retval);

    // Imprimir informacion adicional
    echo '
    </pre>
    <hr />Ultima linea de la salida: ' . $ultima_linea . '
    <hr />Valor de retorno: ' . $retval;
        
   }
   public function showfilesql()
   {
    # code...
    $namefile = 'backup'.date('m-d-Y');
    $ultima_linea = system('C:\xampp\mysql\bin\mysqldump --opt --password= --user=root proyectopiscina > '.$namefile.'.sql', $retval);
    return redirect($namefile.'.sql');
    }
    
    public function displayImage($filename)
    {

    

        $path = storage_public('images/' . $filename);

    

        if (!File::exists($path)) {

            abort(404);

        }

    

        $file = File::get($path);

        $type = File::mimeType($path);

    

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

    

        return $response;

    }

}
