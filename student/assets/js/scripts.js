$(document).ready(function(){


    $(".add_more").click(function(){
  });


    var max_fields      = 100;
    var wrapper         = $(".row");
    var product_variant=$('.input_product_variants');
    var add_button      = $(".add_more"); 
    document.getElementsByName("number")[0].value ="1";

    if(document.getElementsByName("number")[0].value == "1")
    {
        $("#remove_shop").hide();
    }
    else{
        $("#remove_shop").show();
    }
    
    var x = 1;
        $(document).on('click', '#add', function(e) {
        e.preventDefault();
        if(x < max_fields){ 
            $("#remove_shop").show();
            x++; 
            $(wrapper).append('<div class="row" id="'+x+'"><div class="mishop-col"><div class="form-group"><label>Shop</label><select name="shop_id'+x+'" class="form-control"><option value="">-Choose Shop-</option><?php foreach ($shops as $shop){?><option value="<?php echo $shop->shop_id; ?>"><?php echo $shop->shop_name; ?></option><?php } ?></select></div></div><div class="mishop-col"><div class="form-group"><label>Price</label><input type="text" name="price'+x+'" id="price'+x+'" class="form-control"></div></div><div class="mishop-col"><div class="form-group"><label>Offer Price</label><input type="text" name="offer_price'+x+'" id="offer_price'+x+'" class="form-control" onBlur="offer('+x+');"></div></div><input type="hidden" name="offer_percentage'+x+'" id="offer_percentage'+x+'" class="form-control"><div style="background: #99cabe;position: relative;float: left;" class="input_product_variants"><div class="col-md-4"><div class="form-group"><label>Size/Weight(Kg)</label><input type="text" name="size_value1[]" class="form-control"><?php echo form_error('size');?></div></div><div class="col-md-4"><div class="form-group"><label>Color</label><select name="color1[]" class="form-control"><option value="">-Color-</option><?php foreach ($colors as $post){ ?><option value="<?php echo $post->color_id; ?>"><?php echo $post->color_names; ?></option><?php } ?></select><?php echo form_error('colors');?></div></div><div class="col-md-4"><div class="form-group"><label>Available Quantity</label><input type="number" name="quantity1[]" class="form-control"><?php echo form_error('size');?></div></div><span style="color:#367fa9;display: inline-block;position: absolute;font-size: 25px;/* right: 7px; *//* bottom: 73px; */top: 30px;" id="product_variant" class="glyphicon glyphicon-plus"></span></div></div>'); //add input box
        }
        document.getElementsByName("number")[0].value = x;
    }); 

    var y=1;
    $(document).on('click','#product_variant',function(e){
        e.preventDefault();
        $(product_variant).append('<div><div class="col-md-4"><div class="form-group"><label>Size/Weight(Kg)</label><input type="text" name="size_value'+x+'[]" class="form-control"><?php echo form_error('size');?></div></div><div class="col-md-4"><div class="form-group"><label>Color</label><select name="color'+x+'[]" class="form-control"><option value="">-Color-</option><?php foreach ($colors as $post){ ?><option value="<?php echo $post->color_id; ?>"><?php echo $post->color_names; ?></option><?php } ?></select><?php echo form_error('colors');?></div></div><div class="col-md-4"><div class="form-group"><label>Available Quantity</label><input type="number" name="quantity'+x+'[]" class="form-control"><?php echo form_error('size');?></div></div></div>');
    });

        $(document).on('click','#remove_shop',function(e){
            e.preventDefault();
            if(x>1){
                $('#'+x).remove(); x--;
                if(x==1)
                {
                    $("#remove_shop").hide();
                }
            }
            
            document.getElementsByName("number")[0].value = x;
        });
 

});