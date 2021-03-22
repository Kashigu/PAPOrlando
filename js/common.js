//------------------------------------------------------------ FUN��ES PARA O DISTRITO ----------------------------------------------------------------------//

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
            fillTableDistritos();
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


function mensagemTeste() {
    alert('aaa');
}


//--------------------------------------------------------------- FUN��ES PARA AS CATEGORIAS -------------------------------------------------------//
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

function addTableCategorias(txt = '') {
    $('#categoria').modal('toggle');
    $.ajax({
        url: "../AJAX/AJAXAddCategorias.php",
        type: "post",
        data: {
            categoria: $('#nomeCategoria').val(),
            imagem: $('#imagem').val()
        },
        success: function (result) {
            fillTableCategorias();
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
            fillTableCategorias();
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

//----------------------------------------------------------------FUN��ES PARA OS ESTABELECIMENTOS ---------------------------------------------------------//

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
            fillTableEstabelecimentos();
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

//-------------------------------------------------------------- FUN��ES PARA OS UTILIZADORES------------------------------------------------------//
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
            fillTableUtilizador();
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


//-----------Fun��o para ver imagem--------//
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

//-----------------------------------------------------------FUN��ES PARA O PROCURAR.PHP----------------------------------------------//

function fillTableEstabelecimentosProcurar(txt = '') {
    $.ajax({
        url: "procurar.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });

}

