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

    $("#btnAddCookie").click(function(){
        var posting = $.post("/api/addcookie", { p1: $("#txtAddCookieValue").val() } );
        posting.done(function( data ) { 
            if(data == "OK") {
                $("#dvAddCookieOK").show();
                $("#dvAddCookieERR").hide();
            } else {
                $("#dvAddCookieERR").show();
                $("#dvAddCookieOK").hide();
            }
        });
    });

    $("#btnViewCookie").click(function(){
            $.get("/api/viewcookie", function(data, status) { 
            if(data)
            {
                $("#lblViewCookieContent").text(data);
            }
        });
    });

    $("#btnDeleteCookie").click(function(){
            $.get("/api/deletecookie", function(data, status) { 
            if(data)
            {
                if(data == "OK") {
                    $("#dvDeleteCookieOK").show();
                    $("#dvDeleteCookieERR").hide();
                } else {
                    $("#dvDeleteCookieERR").show();
                    $("#dvDeleteCookieOK").hide();
                }
            }
        });
    });

    $("#btnSaltHashString").click(function(){
        var posting = $.post("/api/salthash", { p1: $("#txtSaltHashSring").val() } );
        posting.done(function( data ) {  
            if(data)
            {
                $("#lblSaltHashString").text(data);
            }
        });
    });

    $("#btnHTMLParse").click(function(){
        $("#btnHTMLParse").hide();
        $.get("/api/gethtml", function(data, status) { 
            if(data)
            {
                $("#lblHTMLParse").text(data);
                $("#btnHTMLParse").show();
            }
        });
    });

    $("#btnPHPTableAdd").click(function(){
        var param = $("#txtPHPFirstname").val() + ";" + $("#txtPHPLastname").val() + ";" + $("#txtPHPEmail").val();
        
        var posting = $.post("/api/adduser", { p1: param } );
        posting.done(function( data ) {  
            if(data)
            {
                fnGetPHPDynTable();
            }
        });
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

function fnGetPHPDynTable()
{
    dynTable = [];
    $.get("/api/listusers", function(data, status) { 
        if(data)
        {
            jQuery.each(data.users, function(i, val) {
                dynTable.push(val.id + ";" + val.firstname + ";" + val.lastname + ";" + val.email);
            });

            fnShowPHPDynTable();
        }
    });
}

function fnShowPHPDynTable()
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
                    $('#tblDynTable').append('<tr><td>' + dynTable[i].split(";")[1] + '</td><td>' + dynTable[i].split(";")[2] + '</td><td>' + dynTable[i].split(";")[3] + '</td><td style="text-align:center;"><a onclick="fnRemovePHPDynTable(\'' + dynTable[i].split(";")[0] + '\');"><i class="fa fa-remove" style="cursor:pointer;"></a></td></tr>');
                } else {
                    $('#tblDynTable').html(""); 
                }
            }
        }
    }
}

function fnRemovePHPDynTable(index) {
    var posting = $.post("/api/deleteuser", { p1: index } );
    posting.done(function( data ) {  
        if(data)
        {
            fnGetPHPDynTable();
        }
    });
}