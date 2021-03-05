function fillTableDistritos(txt=''){
    $.ajax({
        url:"AJAX/AJAXFillDistritos.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });


}