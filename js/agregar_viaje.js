var Filas = 0; 
        
        $("#GUARDARi").mousedown(function () { 
            Filas+=1;
            var Tabla = $("#Intinerario").html();

            var Fila = '<tr id="F' + Filas + '">'
            Fila+='<td>'+Filas+'</td>'
            Fila+='<td>' + $("#ORGi").val() + '</td>'
            Fila+='<td>' + $("#DSTi").val() + '</td>'
            Fila+='<td>' + $("#FIi").val() + '</td>'
            Fila+='<td>' + $("#FFi").val() + '</td>'
            Fila+='<td class="text-right">' + $("#GASi").val() + '</td>'
            Fila+='<td class="text-center">'
            Fila+='<a style="color: orange" href="#" data-target="#editIntinerarioModal" class="edit" data-toggle="modal"'
            Fila+='data-ID="'+Filas+'"'
            Fila+='data-ORG="' + $("#ORGi").val() + '"'
            Fila+='data-DST="' + $("#DSTi").val() + '"'
            Fila+='data-FI="' + $("#FIi").val() + '"'
            Fila+='data-FF="' + $("#FFi").val() + '"'
            Fila+='data-DES="' + $("#DESi").val() + '"'
            Fila+='data-GAS="' + $("#GASi").val() + '"'
            Fila+='>'
            Fila+='<i class="fas fa-pencil-square-o"></i>'
            Fila+='</a>&nbsp;'
            Fila+='<a style="color: red;" href="#deleteIntinerarioModal" class="delete" data-toggle="modal" data-ID="'+Filas+'">'
            Fila+='<i class="fas fa-times"></i>'
            Fila+='</a>'
            Fila+='</td>'
            Fila+='</tr>';

            $("#Intinerario").html(Tabla + Fila );

            $('#addIntinerario').modal('toggle');
        });

        $("#EDITARi").mousedown(function () { 


            
            var Fila ='<td>'+ $("#eIDi").val() +'</td>'
            Fila+='<td>' + $("#eORGi").val() + '</td>'
            Fila+='<td>' + $("#eDSTi").val() + '</td>'
            Fila+='<td>' + $("#eFIi").val() + '</td>'
            Fila+='<td>' + $("#eFFi").val() + '</td>'
            Fila+='<td class="text-right">' + $("#eGASi").val() + '</td>'
            Fila+='<td class="text-center">'
            Fila+='<a style="color: orange" href="#" data-target="#editIntinerarioModal" class="edit" data-toggle="modal"'
            Fila+='data-ID="'+ $("#eIDi").val() +'"'
            Fila+='data-ORG="' + $("#eORGi").val() + '"'
            Fila+='data-DST="' + $("#eDSTi").val() + '"'
            Fila+='data-FI="' + $("#eFIi").val() + '"'
            Fila+='data-FF="' + $("#eFFi").val() + '"'
            Fila+='data-DES="' + $("#eDESi").val() + '"'
            Fila+='data-GAS="' + $("#eGASi").val() + '"'
            Fila+='>'
            Fila+='<i class="fas fa-pencil-square-o"></i>'
            Fila+='</a>&nbsp;'
            Fila+='<a style="color: red;" href="#deleteIntinerarioModal" class="delete" data-toggle="modal" data-ID="'+ $("#eIDi").val() +'">'
            Fila+='<i class="fas fa-times"></i>'
            Fila+='</a>'
            Fila+='</td>'            

            $("#F"+$("#eIDi").val()).html(Fila );
            $('#editIntinerarioModal').modal('toggle');
        });

        $("#BORRARi").mousedown(function () {             
            $("#F"+$('#delete_id').val()).hide();
            $('#deleteIntinerarioModal').modal('toggle');
        });


        $('#editIntinerarioModal').on('show.bs.modal', function (event) {		  
            var button = $(event.relatedTarget) // Button that triggered the modal

            var Id = button.data('id')
            $('#eIDi').val(Id)

            var Org = button.data('org')
            $('#eORGi').val(Org)

            var Dst = button.data('dst')
            $('#eDSTi').val(Dst)

            var Fi = button.data('fi')
            $('#eFIi').val(Fi)

            var Ff = button.data('ff')
            $('#eFFi').val(Ff)

            var Des = button.data('des')
            $('#eDESi').val(Des)

            var Gas = button.data('gas')
            $('#eGASi').val(Gas)            


        })  

        $('#deleteIntinerarioModal').on('show.bs.modal', function (event) {		  
            var button = $(event.relatedTarget) // Button that triggered the modal

            var Id = button.data('id')
            $('#delete_id').val(Id)

        })