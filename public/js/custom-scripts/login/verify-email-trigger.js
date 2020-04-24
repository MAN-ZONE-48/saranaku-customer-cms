var validate = $('#validate-email-btn');
var emailTextbox = $('#email');
var emailForm = $('#email-form');
var forgotPasswordModal = $('#forgot-password-modal');

forgotPasswordModal.modal({
    onApprove: function(){
        return false;
    }
});

validate.click(function(e){
    switch(EMAIL_VALIDATION.test(emailTextbox.val())){
        case true: 
            console.log('true');
            emailForm.addClass('loading');
            break;
        case false: 
            console.log('false');
            emailTextbox.popup({
                inline: true,
                title: 'Wrong email format',
                content: 'Please follow a valid email format!'
            });

            emailTextbox.popup('show');

            emailForm.addClass('error');
            break;
    }
});