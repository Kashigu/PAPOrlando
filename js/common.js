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

function fillTableCategorias(txt=''){
    $.ajax({
        url:"AJAX/AJAXFillCategorias.php",
        type:"post",
        data:{
            txt:txt
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    });


}