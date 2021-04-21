//------------------------------------------------------------ FUNÇÕES PARA O DISTRITO ----------------------------------------------------------------------//

function fillTableDistritos(txt = '') {
    $.ajax({
        url: "../AJAX/AJAXFillDistritos.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}

function addTableDistritos(txt = '') {
    $('#adicionar').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXAddDistritos.php",
        type: "post",
        data: {
            distrito: $('#nomeDistrito').val()
        },
        success: function (result) {
            fillTableDistritos();
        }
    });
}


function eliminaDistrito(id) {  // abre o modal e injecta o ID
    $("#DistritoID").html(id);
    $.ajax({
        url: "../AJAX/AJAXGetNameDistritos.php",
        type: "post",
        data: {
            idDistrito: id
        },
        success: function (result) {

            $("#idDistrito").html('Confirma que deseja eliminar o Distrito: ' + result + '?');

            $("#staticBackdropDele").modal("toggle");
            //fillTableDistritos();
        }
    })
}

function DeleteTableDistritos() { // vai buscar o ID injectado e faz o DELETE
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXDeleteDistrito.php",
        type: "post",
        data: {
            distrito: parseInt($('#DistritoID').html())
        },
        success: function (result) {
            fillTableDistritos();
        }
    });
}


function editaDistrito(id) {  // abre o modal e injecta o ID

    /* precisas de ir buscar os dados do distrito para poder escrever no modal*/
    $.ajax({
        url: "../AJAX/AJAXGetNameDistritos.php",
        type: "post",
        data: {
            idDistrito: id
        },
        success: function (result) {
            $("#distritoNome").val(result);
        }
    });
    $("#idDistrito").val(id);
    $("#editar").modal("toggle");
}

function EditarTableDistritos() {
    $('#editar').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXEditDistritos.php",
        type: "post",
        data: {
            distrito: $("#idDistrito").val(),
            distritoNome: $('#distritoNome').val()
        },
        success: function (result) {
            fillTableDistritos();
        }
    });


}



//--------------------------------------------------------------- FUNÇÕES PARA AS CATEGORIAS -------------------------------------------------------//
function fillTableCategorias(txt = '') {

    $.ajax({
        url: "../AJAX/AJAXFillCategorias.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });


}


function eliminaCategorias(id) {  // abre o modal e injecta o ID
    $("#CategoriaID").html(id);
    $.ajax({
        url: "../AJAX/AJAXGetNameCategorias.php",
        type: "post",
        data: {
            idCategoria: id
        },
        success: function (result) {

            $("#idCategoria").html('Confirma que deseja eliminar o Distrito: ' + result + '?');

            $("#staticBackdropDele").modal("toggle");
            //fillTableCategorias();
        }
    })
}

function DeleteTableCategorias() {
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXDeleteCategorias.php",
        type: "post",
        data: {
            categoria: parseInt($('#CategoriaID').html())
        },
        success: function (result) {
            fillTableCategorias();
        }
    });


}


function editaCategoria(id) {  // abre o modal e injecta o ID

    /* precisas de ir buscar os dados da categoria para poder escrever no modal*/
    $.ajax({
        url: "../AJAX/AJAXGetNameCategorias.php",
        type: "post",
        data: {
            idCategoria: id
        },
        success: function (result) {
            $("#categoriaNome").val(result)
            $("#categoriaId").val(id);
        }
    });
    $("#editar").modal("toggle");
}

function EditarTableCategorias() {
    $('#editar').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXEditCategorias.php",
        type: "post",
        data: {
            categoriaNome: $('#categoriaNome').val(),
            categoriaId: $('#categoriaId').val(),
            categoriaImagem: $('#categoriaImagem').val()
        },
        success: function (result) {
            fillTableCategorias();
        }
    });
}

//----------------------------------------------------------------FUNÇÕES PARA OS ESTABELECIMENTOS ---------------------------------------------------------//

function fillTableEstabelecimentos(txt = '') {
    $.ajax({
        url: "../AJAX/AJAXFillEstabelecimentos.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });

}
function DeleteEstabelecimentos(id) {  // abre o modal e injecta o ID
    $("#EstabelecimentoID").html(id);
    $.ajax({
        url: "../AJAX/AJAXGetNameEstabelecimentos.php",
        type: "post",
        data: {
            idEstabelecimento: id
        },
        success: function (result) {

            $("#idEstabelecimento").html('Confirma que deseja eliminar o Estabelecimento: ' + result + '?');

            $("#staticBackdropDele").modal("toggle");
            //fillTableEstabelecimentos();
        }
    })
}

function DeleteTableEstabelecimentos() { // vai buscar o ID injectado e faz o DELETE
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXDeleteEstabelecimentos.php",
        type: "post",
        data: {
            estabelecimento: parseInt($('#EstabelecimentoID').html())
        },
        success: function (result) {
            fillTableEstabelecimentos();
        }
    });
}

//-------------------------------------------------------------- FUNÇÕES PARA OS UTILIZADORES------------------------------------------------------//
function fillTableUtilizador(txt = '') {
    $.ajax({
        url: "../AJAX/AJAXFillUtilizador.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });


}

function DeleteUtilizador(id) {  // abre o modal e injecta o ID
    $("#PerfilID").html(id);
    $.ajax({
        url: "../AJAX/AJAXGetNameUtilizador.php",
        type: "post",
        data: {
            idPerfil: id
        },
        success: function (result) {

            $("#idPerfil").html('Confirma que deseja eliminar o Utilizador: ' + result + '?');

            $("#staticBackdropDele").modal("toggle");
            //fillTableUtilizador();
        }
    })
}

function DeleteTableUtilizador() { // vai buscar o ID injectado e faz o DELETE
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXDeleteUtilizador.php",
        type: "post",
        data: {
            perfil: parseInt($('#PerfilID').html())
        },
        success: function (result) {
                fillTableUtilizador();
        }
    });
}


//-----------Função para ver imagem--------//
function preview_image(event)
{
    var reader = new FileReader();
    reader.onload = function()
    {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

//-----------------------------------------------------------FUNÇÕES PARA O PROCURAR.PHP----------------------------------------------//

function fillTableEstabelecimentosProcurar(txt = '',categoria=-1,distrito=-1) {
    //alert(txt + ' ' + categoria+' '+distrito);/*
    $.ajax({
        url: "AJAX/AJAXFillEstabelecimentosProcurar.php",
        type: "post",
        data: {
            txt:txt ,
            categoria:categoria,
            distrito:distrito
        },
        success: function (result) {
            $('#tableContent').html(result);
            //alert('filtra');
        }
    });

}


//---------------------------------------------------FUNÇÕES PARA AS IMAGENS DE UM ESTABELECIMENTO---------------------------------------//
function fillTableImagens(txt = '',id =-1) {

    $.ajax({
        url: "AJAX/AJAXFillimagens.php",
        type: "post",
        data: {
            txt: txt,
            id:id
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });

}

function eliminaImagem(id) {  // abre o modal e injecta o ID
    $("#ImagemID").html(id);
    $.ajax({
        url: "AJAX/AJAXGetNameImagens.php",
        type: "post",
        data: {
            idImagem: id
        },
        success: function (result) {

            $("#idImagem").html('Confirma que deseja eliminar a Imagem: ' + result + '?');

            $("#staticBackdropDele").modal("toggle");
            //fillTableImagens();

        }
    })
}

function DeleteTableImagem() {
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "AJAX/AJAXDeleteImagens.php",
        type: "post",
        data: {
            imagem: parseInt($('#ImagemID').html())
        },
        success: function (result) {
            fillTableImagens('',result);
        }
    });


}


function editaImagem(id) {  // abre o modal e injecta o ID

    /* precisas de ir buscar os dados da categoria para poder escrever no modal*/
    $.ajax({
        url: "AJAX/AJAXGetNameImagens.php",
        type: "post",
        data: {
            idImagem: id
        },
        success: function (result) {
            $("#imagemNome").val(result)
            $("#imagemId").val(id);
        }
    });
    $("#editar").modal("toggle");
}

//-------------------------------------------------------------Funcoes no Perfil ------------------------------------------//
function mostrar() {
    //$('#btnEstabelecimento').toggle();
    $('#Estabelecimento').toggle();
    $('#Favorito').hide();
    $('#Gosto').hide();
}
function mostrarGostos() {
    //$('#btnGosto').toggle();
    $('#Gosto').toggle();
    $('#Estabelecimento').hide();
    $('#Favorito').hide();
}
function mostrarFavoritos() {
    //$('#btnFavorito').toggle();
    $('#Favorito').toggle();
    $('#Estabelecimento').hide();
    $('#Gosto').hide();

}
//------------------------------------------------------------Funcoes para ListaReserva ------------------------------------//
function fillTableReservas(txt = '') {
    $.ajax({
        url: "AJAX/AJAXFillReservas.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });


}
function eliminaReserva(id) {  // abre o modal e injecta o ID
    $("#ReservaID").html(id);
    $.ajax({
        url: "AJAX/AJAXGetNameReservas.php",
        type: "post",
        data: {
            idReserva: id
        },
        success: function (result) {

            $("#idReserva").html('Confirma que deseja eliminar a Reserva ?');

            $("#staticBackdropDele").modal("toggle");
            //fillTableCategorias();
        }
    })
}
function DeleteTableReserva() {
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "AJAX/AJAXDeleteReservas.php",
        type: "post",
        data: {
            categoria: parseInt($('#ReservaID').html())
        },
        success: function (result) {
            fillTableReservas();
        }
    });
}

function editaReserva(id) {  // abre o modal e injecta o ID

    /* precisas de ir buscar os dados da categoria para poder escrever no modal*/
    $.ajax({
        url: "AJAX/AJAXGetNameReservas.php",
        type: "post",
        data: {
            idReserva: id
        },
        success: function (result) {
            $("#reservaDescricao").val(result)
            $("#reservaId").val(id);
        }
    });
    $("#editar").modal("toggle");
}

function EditarTableReservas() {
    $('#editar').modal('toggle');
    $.ajax({
        url: "AJAX/AJAXEditReservas.php",
        type: "post",
        data: {
            reservaDescricao: $('#reservaDescricao').val(),
            reservaId: $('#reservaId').val()
        },
        success: function (result) {
            fillTableReservas();
        }
    });
}
//--------------------------------------------------------------------Funçoes para REDES estabelecimentos -------------------------------//

function gosto(id) {
    $.ajax({
        url:"AJAX/AJAXPutLikeEstabelecimento.php",
        type:"post",
        data:{
            idEstabelecimento:id
        },
        success:function (result){
            $.ajax({
                url:"AJAX/AJAXGetGostoEstabelecimento.php",
                type:"post",
                data:{
                    idEstabelecimento:id
                },
                success:function (result){
                    $('#gosto').html(result);

                }
            });

        }
    });

}


function favorito(id) {

    $.ajax({
        url:"AJAX/AJAXPutFavoritoEstabelecimento.php",
        type:"post",
        data:{
            idEstabelecimento:id
        },
        success:function (result){
            $.ajax({
                url:"AJAX/AJAXGetFavoritoEstabelecimento.php",
                type:"post",
                data:{
                    idEstabelecimento:id
                },
                success:function (result){
                    $('#favorito').html(result);

                }
            });

        }
    });

}

function mostra() {
    $('#comentar').toggle();
    $('#btnComentar').hide();
}

function comentario(id,idCom,){

    $.ajax({
        url:"AJAX/AJAXPutComentarioEstabelecimento.php",
        type:"post",
        data:{
            idEstabelecimento:id,
            idComentar:idCom
        },
        success:function (result){
            $.ajax({
                url:"AJAX/AJAXGetComentarioEstabelecimento.php",
                type:"post",
                data:{
                    idEstabelecimento:id
                },
                success:function (result){
                    $('#comentar').html(result);

                }
            });

        }
    });

}