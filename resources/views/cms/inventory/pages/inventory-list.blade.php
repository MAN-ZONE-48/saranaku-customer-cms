{{-- Header Page --}}
<section class="ui grid segment">
    <div class="doubling one column row left aligned">
        <div class="column">
            <h2 class="ui header">
                <i class="user icon"></i>
                <div class="content">
                        Inventory List
                    <div class="sub header">
                        Edit, and manage all inventories on your shops.
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
                        <button class="ui blue button" onclick="$('#inventory-add-modal').modal('show');">
                            <i class="plus icon"></i> Add Inventory
                        </button>
                    </a>
                </div>

                <div class="four wide column"></div>

                <div class="nine wide column">
                    <div class="ui icon fluid input">
                        <input type="text" name="" placeholder="Search Item Name...">
                        <i class="inverted circular search link icon"></i>
                    </div>
                </div>
            </div>

            <table class="ui celled striped large table">
                <thead>
                    <tr class="center aligned">
                        <th class="one wide">No</th>
                        <th class="eight wide">Item Name</th>
                        <th class="three wide">Capital Price</th>
                        <th class="four wide">Detail</th>
                    </tr>
                </thead>
                @include('cms/inventory/functions/inventory-list/inventory-table')
            </table>
        </div>
    </div>
</section>

@include('cms/inventory/functions/inventory-list/inventory-add-modal')
@include('cms/inventory/functions/inventory-list/inventory-lookup-modal')
@include('cms/inventory/functions/inventory-list/inventory-delete-modal')