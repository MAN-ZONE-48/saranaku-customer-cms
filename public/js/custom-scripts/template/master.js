//AJAX Page Request
function getPageAjax(uri){
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

            console.log(xhr);
            console.log(status);
            console.log(error);

            switch(xhr.status){
                case 0: 
                    $('#error-modal-no-connection').modal('show');
                break;

                case 404:
                    dynamicError("Page Not Found", "Requested uri: "+uri+" is not found.");
                break;
                default:
                    dynamicError(xhr.statusText, "Please check your FE");
            }
        }
    });
}

function getPage(uri){
    exe();
    getPageAjax(uri);
}
