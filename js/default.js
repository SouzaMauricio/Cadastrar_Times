var action = "insert";
var id = "";
$(document).ready(function(){
    $(function(){
        $('#frmPlayer').submit(function(){         
        var obj = this;
        var data = new FormData(obj);
        data.append('action', action);
        data.append('id', id);
        try
        {
            $.ajax({
            url:'../controller/ControllerPlayer.php',
            type:'POST',
            data: data,
            processData: false,
            cache: false,
            contentType: false
            }).success(function(resp){
                if(resp != 0){
                    alert(resp);  
                }
                else{
                    location.reload();
                }
            }).fail(function(resp){
                alert(resp);
            });
        }
        catch(e)
        {
            alert(e);
        }
        return false;
        });
    });
});

$(document).ready(function(){
    $(function(){
        $('#frmTeam').submit(function(){         
        var obj = this;
        var data = new FormData(obj);
        data.append('action', action);
        data.append('id', id);
        try
        {
            $.ajax({
            url:'../controller/ControllerTeam.php',
            type:'POST',
            data: data,
            processData: false,
            cache: false,
            contentType: false
            }).success(function(resp){
                if(resp != 0){
                    alert(resp);  
                }
                else{
                    location.reload();
                }
            }).fail(function(resp){
                alert(resp);
            });
        }
        catch(e)
        {
            alert(e);
        }
        return false;
        });
    });
});


function DeleteTeam(id){  
    $.ajax({
        url: '../controller/Delete.php',
        type:'POST',
        data: {'id' : id, 'type' : 'team' }
    }).done(function(resp){
        if(resp != 0){
            alert(resp);
        }
        else{
            location.reload();
        }
    });
}

function UpdateTeam(cod){  
    $.ajax({
        url: '../controller/update.php',
        type:'POST',
        dataType: "json",
        data: {'id' : cod, 'type' : 'team' }
    }).done(function(resp){
        document.getElementById("submit").value = "Atualizar";
        document.getElementById("name").value = resp[0];
        document.getElementById("shelColor").value = resp[1];
        document.getElementById("dateFundation").value = resp[2];
        action = "update";
        id = cod;
    });
}

function DeletePlayer(id){  
    $.ajax({
        url: '../controller/delete.php',
        type:'POST',
        data: {'id' : id, 'type' : 'player' }
    }).done(function(resp){
        if(resp != 0){
            alert(resp);
        }
        else{
            location.reload();
        }
    });
}

function UpdatePlayer(cod){  
    $.ajax({
        url: '../controller/update.php',
        type:'POST',
        dataType: "json",
        data: {'id' : cod, 'type' : 'player' }
    }).done(function(resp){
        document.getElementById("submit").value = "Atualizar";
        document.getElementById("name").value = resp[0];
        document.getElementById("lastName").value = resp[1];
        document.getElementById("shirtNumber").value = resp[2];
        $('#team').val(resp[3]);
        action = "update";
        id = cod;
    });
}

function Cancelar(){
    location.reload();
}