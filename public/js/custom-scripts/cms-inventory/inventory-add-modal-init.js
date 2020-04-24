$('.ui.dropdown').dropdown();

var addMoreCategory = $('#add-more-category-btn');
var addMoreForm = $('#add-inventory-category-multiple-insertion');
var formNumber = 0;

addMoreCategory.on('click', function(e){
    formNumber++;
    var FORM_GENERATOR = '<span id="form-number-'+formNumber+'"><div class="fields"><div class="two wide field"><label><i class="dot circle icon"></i></label><button type="button" onclick="$(\'#form-number-'+formNumber+'\').remove();" class="ui negative button center aligned"><i class="minus icon"></i></button></div><div class="ten wide field"><label>Category Title</label><input type="text" name="stock-title" placeholder="Stock category e.g. Kilograms of Nail, A Box of Nail " /></div><div class="four wide field"><label>Sell Price</label><input type="number" name="stock-price" placeholder="Stock category in IDR" /></div></div><div class="fields"><div class="two wide field"></div><div class="four wide field"><label>Current Quantity</label><input type="number" name="current-quantity" placeholder="Current stock quantity" /></div><div class="four wide field"><div class="field"><label>Select Unit</label><div class="ui selection dropdown"><input type="hidden" name="unit-selection" /><i class="dropdown icon"></i><div class="default text">--Select Unit--</div><div class="menu"><div class="item" data-value="1">Kilogram</div><div class="item" data-value="2">Meter</div><div class="item" data-value="3">Liter</div><div class="item" data-value="4">Each</div><div class="item" data-value="5">Milliliter (Equal 0.001 Liter)</div><div class="item" data-value="6">Large Cargo (Equal 1200 Kilograms)</div><div class="item" data-value="7">Small Cargo (Equal 500 Kilograms)</div><div class="item" data-value="8">Centimeter (Equal 0.01 Meter)</div></div></div></div></div></div></span>';

    $(addMoreForm).append(FORM_GENERATOR);
});