//Title for Title, Message for Message, Actions Array itu Kalo 1 itu ok, 2 itu ok cancel
function dynamicError(title, message){
    $.ajax({
        type: "GET",
        url: "/master/dynamic-error",
        data: {
          "title": title,
          "message": message
        },
        dataType: "html",
        success: function(e){
            $('#modal-place').html('');
            $('#modal-place').append(e);
            $('#error-modal-id').modal('show');
        },
        error: function(xhr, status, error){
            alert("Unable to get error message! Please refresh this page.\n"+ xhr.status + " "+ xhr.statusText);
        }
    });
}
