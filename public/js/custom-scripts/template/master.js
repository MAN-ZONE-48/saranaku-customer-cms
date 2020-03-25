//AJAX Page Request
function getPage(uri){
    exe();

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
            alert("Request error!\n"+ xhr.status + " "+ xhr.statusText);
        }
    });
}