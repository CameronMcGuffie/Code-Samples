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
    
    $("#txtValidateEmail").keyup(function(){
        var emailAddress = $("#txtValidateEmail").val();
        
        // Taken from http://emailregex.com/
        var emailAddressRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var emailAddressMatch = emailAddressRegex.exec(emailAddress);

        if(emailAddress == "") {
            $("#dvEmailOK").hide();
            $("#dvEmailERR").hide();
        } else if (emailAddressMatch == null) {
            $("#dvEmailERR").show();
            $("#dvEmailOK").hide();
        } else {
            $("#dvEmailOK").show();
            $("#dvEmailERR").hide();
        }
    });

    $("#btnShowJQueryPopup").click(function(){
        $("#ppJQueryPopup").fadeIn();
    });

    $("#btnJQueryPopupOk").click(function(){
        $("#ppJQueryPopup").fadeOut();
    });

    $("#btnJQueryPopupClose").click(function(){
        $("#ppJQueryPopup").fadeOut();
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