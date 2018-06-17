var dynTable = []; // Array to hold the dynamic table objects

$(document).ready(function(){
    
    dynTable.push("Billy;McDonald;billy@mcdonald.com");
    fnShowDynTable();
    /*
        JQuery Page
    */
    $("#btnTableAdd").click(function(){
        dynTable.push($("#txtFirstname").val() + ";" + $("#txtLastname").val() + ";" + $("#txtEmail").val());

        $("#txtFirstname").val("");
        $("#txtLastname").val("");
        $("#txtEmail").val("");
        
        fnShowDynTable();
    });
});

function fnShowDynTable()
{
    $('#tblDynTable').html('');
    if(dynTable.length)
    {
        for(i = 0; i <= (dynTable.length - 1); i++)
        {
            icon = "fa-remove";
                
            if(dynTable[i] != "default")
            {
                if(dynTable.length)
                {
                    $('#tblDynTable').append('<tr><td>' + dynTable[i].split(";")[0] + '</td><td>' + dynTable[i].split(";")[1] + '</td><td>' + dynTable[i].split(";")[2] + '</td><td style="text-align:center;"><a onclick="fnRemoveDynTable(' + i + ');"><i class="fa fa-remove" style="cursor:pointer;"></a></td></tr>');
                } else {
                    $('#tblDynTable').html(""); 
                }
            }
        }
    }
}

function fnRemoveDynTable(index) {
    dynTable.splice(index, 1);
    fnShowDynTable();
}