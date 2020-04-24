{{-- Header Page --}}
<section class="ui grid segment">
    <div class="doubling one column row left aligned">
        <div class="column">
            <h2 class="ui header">
                <i class="user icon"></i>
                <div class="content">
                        Role List
                    <div class="sub header">
                        Edit, and manage all roles that has been linked on your shops.
                    </div>
                </div>
            </h2>
        </div>
    </div>
</section>

<section class="ui grid segment">
    <div class="doubling one column row">
        <div class="column">
            <button class="ui primary basic button" onclick="getPageWithoutToggle(HOME);">
                <i class="arrow left icon"></i> Back
            </button>
        </div>
    </div>

    <div class="doubling one column row left aligned">
        <div class="column">
            <div class="ui grid segment">
                <div class="three wide column">
                    <a>
                        <button class="ui blue button" onclick="$('#add-new-role-modal').modal('show');">
                            <i class="plus icon"></i> Add Role
                        </button>
                    </a>
                </div>

                <div class="four wide column"></div>

                <div class="nine wide column">
                    <div class="ui icon fluid input">
                        <input type="text" name="" placeholder="Search Role Name...">
                        <i class="inverted circular search link icon"></i>
                    </div>
                </div>
            </div>

            <table class="ui celled striped large table">
                <thead>
                    <tr class="center aligned">
                        <th>No</th>
                        <th>Role Name</th>
                        <th>Created At</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                @include('cms/user/functions/role-list/role-list-table')
            </table>
        </div>
    </div>
</section>

@include('cms/user/functions/role-list/add-role-modal')
