<div id="add-new-user-modal" class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        Add New User
    </div>
    <div class="content">
        <div class="ui form">
            <div class="required field">
                <label>Fullname</label>
                <input type="text" name="fullname-textbox" placeholder="min 6 characters" required />
            </div>
            <div class="required field">
                <label>Username</label>
                <input type="text" name="username-textbox" placeholder="min 6 characters" required />
            </div>
            <div class="required field">
                <label>Email</label>
                <input type="text" name="email-textbox" placeholder="e.g. example@domain.com" required />
            </div>
            <div class="required field">
                <label>Phone</label>
                <input type="text" name="phone-textbox" placeholder="e.g. 0812 345 6789" required />
            </div>
            <div class="required field">
                <label>Role</label>
                <select id="role-selection" name="role" class="ui search dropdown" required>
                    <option value="">Select Role</option>
                    <option value="1">Owner</option>
                    <option value="2">Co-Owner</option>
                    <option value="3">Cashier</option>
                    <option value="4">Staff</option>
                    <option value="5">Worker</option>
                    <option value="6">Beban</option>
                </select>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Cancel
        </div>
        <div class="ui positive right labeled icon button">
            Create User
            <i class="check icon"></i>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#role-selection').addClass('search');
</script>
