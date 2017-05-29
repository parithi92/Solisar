$(document).ready(function() {

    // Product form show
    $("#forms-form").hide();
    $("#glue-form").hide();

    $("#paper").click(function(){
        $("#forms-form").hide();
        $("#paper-form").show();
        document.getElementById("forms-form").reset();
        document.getElementById("glue-form").reset(); 
    });

    $("#forms").click(function(){

        $("#paper-form").hide();
        $("#glue-form").hide();
        $("#forms-form").show();
        
        document.getElementById("paper-form").reset();
        document.getElementById("glue-form").reset();
    });

    $("#glue").click(function(){

        $("#paper-form").hide();
        $("#forms-form").hide();
        $("#glue-form").show();
        
        document.getElementById("paper-form").reset();
        document.getElementById("forms-form").reset();
    });


    //Show paper size
    $('#unit_type').on('change', function() {
        if ( this.value == 'Reel')
            {
                $("#size_2").hide();
                $("#size2_unit").hide();
            }
            else
            {
                $("#size_2").show();
                $("#size2_unit").show();
            }
    });

    //Alternate qty in Paper 
    $('#quantity').keyup( function() {

        $quantity=$('#quantity').val();
        $unit_type=$('#unit_type').val();

        if($unit_type == "Reel"){
            $alt_qty=$quantity * 10;
            $('#alt_qty').html($alt_qty);
        }else{
            $alt_qty=$quantity * 5;
            $('#alt_qty').html($alt_qty);
        }
    });

    // Alternate qty in Glue 
    $('#qty_glue').keyup( function() {

        $quantity=$('#qty_glue').val();
        $unit_type=$('#glue_unit').val();

        if($unit_type == "Boxes"){
            $alt_qty=$quantity * 30;
            $('#convert_qty').html($alt_qty);
        }else{
            $alt_qty=$quantity/30;
            $('#convert_qty').html($alt_qty);
        }
    });

    //Other Delivery company paper 
    $("#other_delivery").hide();
    $('#delivery_address').on('change', function() {
        if ( this.value == 'other')
            {
                $("#self-address").hide();
                $("#other_delivery").show();
            }
            else
            {
                $("#self-address").show();
                $("#other_delivery").hide();
            }
    });

    //Other Delivery company Form
    $("#other_delivery_form").hide();
    $('#delivery_address_form').on('change', function() {
        if ( this.value == 'other')
            {
                $("#self-address-form").hide();
                $("#other_delivery_form").show();
            }
            else
            {
                $("#self-address-form").show();
                $("#other_delivery_form").hide();
            }
    });

         //Other Delivery company Glue 
       $("#other_delivery_glue").hide();
        $('#delivery_address_glue').on('change', function() {
        if ( this.value == 'other')
            {
                $("#self-address-glue").hide();
                $("#other_delivery_glue").show();
            }
            else
            {
                $("#self-address-glue").show();
                $("#other_delivery_glue").hide();
            }
    });

        //Alternate qty in Paper PO 
    $('#po_qty_paper').keyup( function() {

        $quantity=$('#po_qty_paper').val();
        $unit_type=$('#unit_type').val();

        if($unit_type == "Reel"){
            $alt_qty=$quantity * 10;
            $('#alt_qty').html($alt_qty);
        }else{
            $alt_qty=$quantity * 5;
            $('#alt_qty').html($alt_qty);
        }
    });

});