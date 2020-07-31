<?php
	
    if (!empty($_POST['ORG'])){

        require_once ("../conexion.php");

        $FI    = mysqli_real_escape_string($con,(strip_tags($_POST["FI"],ENT_QUOTES)));
        $FF    = mysqli_real_escape_string($con,(strip_tags($_POST["FF"],ENT_QUOTES)));
        $ORG   = mysqli_real_escape_string($con,(strip_tags($_POST["ORG"],ENT_QUOTES)));
        $DST   = mysqli_real_escape_string($con,(strip_tags($_POST["DST"],ENT_QUOTES)));
        $MOT   = mysqli_real_escape_string($con,(strip_tags($_POST["MOT"],ENT_QUOTES)));
        $DES   = mysqli_real_escape_string($con,(strip_tags($_POST["DES"],ENT_QUOTES)));
        $GAS   = mysqli_real_escape_string($con,(strip_tags($_POST["GAS"],ENT_QUOTES)));
        $DTLL  = mysqli_real_escape_string($con,(strip_tags($_POST["Detalle"],ENT_QUOTES)));

        $sql = "INSERT INTO viajes(IDV ,FI   ,FF   ,ORG   ,DST   ,Motivo, Monto,Aut_Gst_Usr,F_Aut_Gst   ,Doc_Cont,Usr,F_Sol  ,Estatus,OBS) 
                VALUES            (null,'$FI','$FF','$ORG','$DST','$MOT','$GAS',''         ,'0000-00-00',''      ,'USR',now(),'SA','$DES')";

        $query = mysqli_query($con,$sql);
        // if product has been added successfully
        if ($query) {
            $messages[] = "El viaje se ha sido guardado con éxito.";

            $sql ="SELECT LAST_INSERT_ID() as IDV";
            $query = mysqli_query($con,$sql);     
            while($row = mysqli_fetch_array($query)){
                $IDV = $row['IDV'];
                
                if ($DTLL != ""){
                    $elements = explode("{", $DTLL);
                    for ($i = 1; $i < count($elements); $i++){
                        $element = explode("|", $elements[$i]);
                        $sql = "INSERT INTO intinerario (IDV,IDI,ORG,DST,FA,FP,GstEmpt,GstEmpl,OBS) 
                                VALUES ($IDV,'$i','$element[1]','$element[2]','$element[3]','$element[4]','$element[6]','0','$element[5]')";
                        $query2 = mysqli_query($con,$sql);     
                    }
                } 

            }       

        } else {
            $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
            
        }        


    }
    else{
		$errors[] = "desconocido.";
    }    
    
    if (isset($errors)){
        ?>
        <div class="alert alert-danger" role="alert">
        	<button type="button" class="close" data-dismiss="alert">&times;</button>
        		<strong>Error!</strong> 
        		<?php
        			foreach ($errors as $error) {
        					echo $error;
        			}
        		?>
        </div>
        <?php
    }
    
    if (isset($messages)){    
        ?>
        <div class="alert alert-success" role="alert">
        		<button type="button" class="close" data-dismiss="alert">&times;</button>
        		<strong>¡Registro insertado!</strong>
        		<?php
        			foreach ($messages as $message) {
        					echo $message;
        			}
        		?>
        </div>
        <?php
    }

?>