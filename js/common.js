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


}function addTableDistritos(txt=''){
    $('#adicionar').modal('toggle');
    $.ajax({
        url:"AJAX/AJAXAddDistritos.php",
        type:"post",
        data:{
            distrito:$('#nomeDistrito').val()
        },
        success:function (result){
            fillTableDistritos();
        }
    });


}

function mensagemTeste(){
    alert('aaa');
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