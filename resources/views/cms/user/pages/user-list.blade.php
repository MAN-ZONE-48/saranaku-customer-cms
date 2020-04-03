{{-- Header Page --}}
<section class="ui grid segment">
    <div class="doubling one column row left aligned">
        <div class="column">
            <h2 class="ui header">
                <i class="user icon"></i>
                <div class="content">
                        User List
                    <div class="sub header">
                        Edit, and manage all users that has been linked on your shops.
                    </div>
                </div>
            </h2>
        </div>
    </div>
</section>

<section class="ui grid segment">
    <div class="doubling two column row">
        <div class="column">
            <button class="ui primary basic button" onclick="getPageWithoutToggle(USER);">
                <i class="arrow left icon"></i> Back
            </button>
        </div>
        <div class="column right aligned">
            <button class="ui green button" onclick="getPageWithoutToggle();">
                <i class="plus icon"></i> Add User
            </button>
        </div>
    </div>

    <div class="doubling one column row center aligned">
        <div class="column">
            <div class="ui grid segment">
                <div class="seven wide column">
                    <select class="ui fluid dropdown">
                        <option value="">Filter</option>
                        <option value="1">Fullname</option>
                        <option value="0">Username</option>
                        <option value="0">Email</option>
                    </select>
                </div>

                <div class="nine wide column">
                    <div class="ui icon fluid input">
                        <input type="text" name="" placeholder="Search...">
                        <i class="inverted circular search link icon"></i>
                    </div>
                </div>
            </div>

            <table class="ui celled striped table">
                <thead>
                    <tr class="center aligned">
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                @include('cms/user/functions/user-list/user-list-table')
            </table>
        </div>
    </div>
</section>

{{-- @include('cms/user/functions/user-list/delete-user-modal')


<script type="text/javascript">
    $('#hwe').modal('show');
</script> --}}
