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




function addTableDistritos(txt=''){
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

function DeleteTableDistritos(txt=''){
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url:"AJAX/AJAXDeleteDistrito.php",
        type:"post",
        data:{
            distrito:$('#IdDistrito').val()
        },
        success:function (result){
            fillTableDistritos();
        }
    });


}

function EditarTableDistritos(txt=''){
    $('#editar').modal('toggle');
    $.ajax({
        url:"AJAX/AJAXEditDistritos.php",
        type:"post",
        data:{
            distrito:$('#distritoId').val(),
            distritoNome:$('#distritoNome').val()
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

function addTableCategorias(txt=''){
    $('#categoria').modal('toggle');
    $.ajax({
        url:"AJAX/AJAXAddCategorias.php",
        type:"post",
        data:{
            categoria:$('#nomeCategoria').val(),
            imagem:$('#imagem').val()
        },
        success:function (result){
            fillTableDistritos();
        }
    });


}

function DeleteTableCategorias(txt=''){
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url:"AJAX/AJAXDeleteCategorias.php",
        type:"post",
        data:{
            categoria:$('#idCategoria').val()
        },
        success:function (result){
            fillTableDistritos();
        }
    });


}

function EditarTableCategorias(txt=''){
    $('#editar').modal('toggle');
    $.ajax({
        url:"AJAX/AJAXEditCategorias.php",
        type:"post",
        data:{
            categoriaNome:$('#categoriaNome').val(),
            categoriaImagem:$('#categoriaImagem').val()
        },
        success:function (result){
            fillTableDistritos();
        }
    });


}