function set() {
    random();
}

function random() {
    $('#loading').show();
    $.ajax({
        type: "POST", 
        url: "src/number.php",
        success: function(result){
            $('#number').html(result);
            $('#loading').hide();
        }
    });
}


