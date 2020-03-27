//Save Current Page
function saveCurrentPage(uri){
    $.ajax({
        type: "PUT",
        url: "/master/save-current-page",
        data: {
            "uri": uri
        },
        dataType: "json",
        success: function(e){
            console.log(e);
        },
        error: function(xhr, status, error){
            switch(xhr.status){
                case 0: 
                    $('#error-modal-no-connection').modal('show');
                break;

                default:
                    dynamicError(xhr.statusText, "Error datang disini coeg");
            }
        }
    });
}

//AJAX Page Request
function getPageAjax(uri){
    saveCurrentPage(uri);

    $.ajax({
        type: "GET",
        url: uri,
        beforeSend: function(){
            setTimeout(loadingOn(), 30000);
        },
        dataType: "html",
        success: function(e){
            $('#page-child').html('');
            $('#page-child').append(e);
            loadingOff();
        },
        error: function(xhr, status, error){
            loadingOff();

            switch(xhr.status){
                case 0: 
                    $('#error-modal-no-connection').modal('show');
                break;

                case 404:
                    dynamicError("Page Not Found", "Requested uri: "+uri+" is not found.");
                break;
                default:
                    dynamicError(xhr.statusText, "Please check your Controller BE-BE-an");
            }
        }
    });
}

function getPage(uri){
    exe();
    getPageAjax(uri);
}
