<div id="forgot-password-modal" class="ui tiny modal">
    <i class="close icon"></i>
    <div class="header">
        Forgot Password
    </div>
    <div class="content">
        <div class="description">
            <div class="ui header">Please verify your email</div>
            <div class="ui form">
                <div id="email-form" class="field">
                    <label>Email</label>
                    <input type="email" id="email" placeholder="youremail@example.com" />
                </div>
            </div>
        </div>
    </div>
        
    <div class="actions">
        <button type="button" class="ui black deny button">
            Cancel
        </button>
        <button id="validate-email-btn" type="button" class="ui positive right labeled icon button">
            Validate Email
            <i class="check icon"></i>
        </button>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/custom-scripts/login/verify-email-trigger.js') }}"></script>
