<?php	
	/* Connect To Database*/
	require_once ("../conexion.php");
    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    if($action == 'ajax'){
        
    	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
    
    	$tables="viajes";
    	$campos="*";
    	$sWhere=" ORG LIKE '%".$query."%' OR DST LIKE '%".$query."%' ";
    	$sWhere.=" order by IDV";
    	    	
    	include 'pagination.php';         
                
    	//pagination variables
    	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
    	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
    	$adjacents  = 4; //gap between pages after number of adjacents
    	$offset = ($page - 1) * $per_page;
    	
        //Count the total number of row in your table*/
    	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
    	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
    	else {echo mysqli_error($con);}
    	$total_pages = ceil($numrows/$per_page);    	
        
        //main query to fetch the data
    	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
    	//loop through fetched data 	             	
    	if ($numrows>0){
        ?>
    		<div class="table-responsive" style="font-size: 12px;">
    			<table class="table table-striped table-hover table-sm">
    				<thead>
    					<tr>
    						<th class='text-center'>IDV</th>
    						<th class='text-center'>Origen</th>
                            <th class='text-center'>Destino</th>
    						<th></th>
    					</tr>
    				</thead>
    				<tbody>	
    						<?php 
    						$finales=0;
    						while($row = mysqli_fetch_array($query)){	
    							$IDV	    =$row['IDV'];
    							$ORG	    =$row['ORG'];
                                $DST        =$row['DST'];                                           
    							$finales++;
    						?>	
    						<tr class='' >
    							<td class='text-center'><?php echo $IDV;?></td>
    							<td ><?php echo $ORG;?></td>							
                                <td ><?php echo $DST;?></td>
    							<td>
    								<a style="color: orange" href="#" data-target="#editViajesModal" class="edit" data-toggle="modal" 
                                                 data-IdArea="<?php echo $IdArea;?>"  
                                                 data-Nombre="<?php echo $Nombre;?>"
                                                 data-Descripcion="<?php echo $Descripcion;?>"
                                                 data-Responsable="<?php echo $Responsable;?>"                                                 
                                                 >
                                                 
                                                 
                                    <i class="fas fa-pencil-square-o"></i></a>
                                    
    								<a style="color: red;" href="#deleteViajesModal" class="delete" data-toggle="modal" 
                                                data-IdArea="<?php echo $IdArea;?>">
                                                
                                    <i class="fas fa-times"></i></a>
                        		</td>
    						</tr>
    						<?php }?>
    						<tr>
    							<td colspan='4'> 
    								<?php 
    									$inicios=$offset+1;
    									$finales+=$inicios -1;
    									echo "Mostrando $inicios al $finales de $numrows registros";
    									echo paginate( $page, $total_pages, $adjacents);
    								?>
    							</td>
    						</tr>
    				</tbody>			
    			</table>
    		</div>	        	    	
    	<?php	
    	   
    	}
        
        
    }
    
?>    