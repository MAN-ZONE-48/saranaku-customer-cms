<div id="inventory-update-modal" class="ui large modal">
    <i class="close icon"></i>
    <div class="header">
      Edit item
    </div>
    <section class="content ui grid container">
        <form id="inventory-form-update">
            <div class="header">
                <h2>Inventory Master</h2>
            </div>
            <hr />

            <div class="ui large form">
                <div class="fields">
                    <div class="twelve wide required field">
                        <label>Inventory Name</label>
                        <input type="text" name="inventory-name" placeholder="Inventory name e.g. Nail, Iron, Pipe" required value="Genteng Jatiwangi" />
                    </div>
                    <div class="four wide required field">
                        <label>Capital Price</label>
                        <input type="number" name="capital-price" placeholder="Capital price" required value="1200" />
                    </div>
                </div>
                <div class="inline required fields">
                    <label>Is this inventory expirable?</label>
                    <div class="field">
                        <div id="checkbox-1" class="ui radio checkbox">
                            <input type="radio" name="is-expirable" value="1" tabindex="0" class="hidden" />
                            <label>Yes</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox checked">
                            <input type="radio" name="is-expirable" value="0" tabindex="0" class="hidden" checked="true" />
                            <label>No</label>
                        </div>
                    </div>
                </div>
                <div class="fields">
                    <div class="sixteen wide required field">
                        <label>Description</label>
                        <textarea form="inventory-form-update" style="resize: none;" type="textarea" name="description" placeholder="Place the inventory description here">genteng jatiwangi pak ajat 081-2345-6789</textarea>
                    </div>
                </div>
            </div>

            <div class="ui grid">
                <div class="ten wide column left aligned">
                    <h2>Inventory Category</h2>
                </div>
                <div class="six wide column right aligned">
                    <button type="button" id="add-more-category-btn-update" class="ui positive button">
                        <i class="plus icon"></i> Add more category
                    </button>
                </div>
            </div>
            <hr />

            <div id="add-inventory-category-multiple-insertion-update" class="ui large form">
                <div class="fields">
                    <div class="two wide field">
                        <label>
                            <i class="dot circle icon"></i>
                        </label>
                    </div>
                    <div class="ten wide required field">
                        <label>Category Title</label>
                        <input type="text" name="stock-title" placeholder="Stock category e.g. Kilograms of Nail, A Box of Nail " value="genteng jatiwangi per-pcs" />
                    </div>
                    <div class="four wide required field">
                        <label>Sell Price</label>
                        <input type="number" name="stock-price" placeholder="Stock category in IDR" value="1400" />
                    </div>
                </div>
                <div class="fields">
                    <div class="two wide field"></div>
                    <div class="four wide required field">
                        <label>Current Quantity</label>
                        <input type="number" name="current-quantity" placeholder="Current stock quantity" value="1440" />
                    </div>
                    <div class="four wide required field">
                        <div class="field">
                            <label>Select Unit</label>
                            <div id="dropdown-1" class="ui selection dropdown">
                                <input type="hidden" name="unit-selection" />
                                <i class="dropdown icon"></i>
                                <div class="default text">--Select Unit--</div>
                                <div class="menu">
                                    <div class="item" data-value="1">Kilogram</div>
                                    <div class="item" data-value="2">Meter</div>
                                    <div class="item" data-value="3">Liter</div>
                                    <div class="item" data-value="4">Each</div>
                                    <div class="item" data-value="5">Milliliter (Equal 0.001 Liter)</div>
                                    <div class="item" data-value="6">Large Cargo (Equal 1200 Kilograms)</div>
                                    <div class="item" data-value="7">Small Cargo (Equal 500 Kilograms)</div>
                                    <div class="item" data-value="8">Centimeter (Equal 0.01 Meter)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="actions">
        <button type="reset" class="ui black deny button">
            Cancel
        </button>

        <button type="submit" class="ui positive right labeled icon button">
            Update 
            <i class="checkmark icon"></i>
        </button>
    </div>
    </form>
</div>

<script type="text/javascript" src="{{ asset('js/custom-scripts/cms-inventory/inventory-update-modal-init.js') }}"></script>
<script type="text/javascript">
    $('#dropdown-1').dropdown('set selected', 4);
</script>
