//------------------------------------------------------------- Funções para DefPerfil ---------------------------------------------------------------//
function def(id) {
    let emails = $('#perfilEmail').val();
    let utilizador = $('#perfilNome').val();
    let localidade = $('#perfilLocalidade').val();
    let password = $('#perfilOld').val();
    let erro = false;

    if ($('#perfilNome').val() == '') {
        erro = true;
    }

    if ($('#perfilLocalidade').val() == '') {
        erro = true;
    }
    if ($('#perfilEmail').val() == '') {
        erro = true;
    }
    if ($('#perfilPalavra').val() == '') {
        erro = true;
    }
    if ($('#ConfirmaperfilPalavra').val() == '' || ($('#ConfirmaperfilPalavra').val() != ($('#perfilPalavra').val()))) {
        erro = true;
        $('#errorMsgSS').html('Palavra Mal Introduzida!');
    } else {
        $.ajax({
            url: "AJAX/AJAXConfirmaDef.php",
            type: "post",
            data: {
                id: id,
                nome: utilizador,
                email: emails,
                localidade: localidade,
                password: password
            },
            success: function (result) {
                if ($('#perfilOld').val() != (result)) {
                    erro = true;
                }
                if ((result) == 1) {
                    erro = true;
                    $('#frmEdita').submit();

                }
                if ((result) == 0) {
                    erro = true;
                    $('#MSG').html('Palavra Mal Introduzida');

                }

            }
        });
    }
}


//------------------------------------------------------------- Funções para Login ---------------------------------------------------------------//


function entrar() {
    let emails = $('#emails').val();
    let utilizador = $('#utilizador').val();
    let password = $('#password').val();
    let erro = false;

    if ($('#utilizador').val() == '') {
        erro = true;
        $('#NoName').html('Introduza Nome');
    }
    if ($('#password').val() == '') {
        erro = true;
        $('#NoPass').html('Introduza Password');
    }
    if ($('#emails').val() == '') {
        erro = true;
        $('#NoEmail').html('Introduza Email');
    } else {
        $.ajax({
            url: "AJAX/AJAXConfirmaLogin.php",
            type: "post",
            data: {
                nome: utilizador,
                email: emails,
                password: password
            },
            success: function (result) {
                if ((result) == 1) {
                    erro = true;
                    $('#frmConfirma').submit();

                } else if (!erro) {

                    alert('Dados Mal Inseridos');
                }
            }
        });
    }
}

//------------------------------------------------------------ Funções para o Registar ----------------------------------------------------------------------//
function valido() {
    let email = $('#email').val();
    let erro = false;
    if ($('#localidade').val() == '') {
        erro = true;
    }
    if ($('#pass').val() == '' || ($('#pass').val() != ($('#Spass').val()))) {
        erro = true;
    }
    if ($('#Spass').val() == '' || ($('#Spass').val() != ($('#pass').val()))) {
        erro = true;
        $('#errorMsgS').html('Palavra Mal Introduzida!');
    }
    if ($('#nome').val() == '') {
        erro = true;
    }
    if ($('#email').val() == '') {
        erro = true;
    } else {
        $.ajax({
            url: "AJAX/AJAXVerifyEmail.php",
            type: "post",
            data: {
                txt: email
            },
            success: function (result) {
                if (parseInt(result) == 1) {
                    erro = true;
                    $('#errorMsg').html('Email já existente!');
                } else if (!erro) {
                    $('#frmRegisto').submit();
                }
            }
        });

    }
}


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
function certeza() {
    let email = $('#email').val();
    let numero = $('#numero').val();
    let erro = false;

    if ($('#categoria').val() == -1) {
        erro = true;
        $('#Erro').html('Precisa de Categoria');
    }

    if ($('#distrito').val() == -1) {
        erro = true;
        $('#ErroD').html('Precisa de Distrito');

    }


    if ($('#nomeEsta').val() == '') {
        erro = true;
        $('#ErroEN').html('Precisa de Nome');

    }
    if ($('#nomeLoca').val() == '') {
        erro = true;
        $('#ErroEL').html('Precisa de Localidade');

    }
    if ($('#rua').val() == '') {
        erro = true;
        $('#ErroR').html('Precisa de Rua');

    }
    if ($('#logo').val() == '') {
        erro = true;
        $('#Elogo').html('Precisa de Logótipo');

    }
    if ($('#fundo').val() == '') {
        erro = true;
        $('#Efundo').html('Precisa de Imagem de Fundo');
    }
    if ($('#numero').val() == '') {
        erro = true;
        $('#ErroNi').html('Precisa de Número');
    }
    if ($('#email').val() == '') {
        erro = true;
        $('#ErroEi').html('Precisa de Email');
    } else {
        $.ajax({
            url: "AJAX/AJAXConfirmaEmail.php",
            type: "post",
            data: {
                email: email,
            },
            success: function (result) {
                if ((result) == 1) {
                    erro = true;
                    $('#ErroEmail').html('Email já Existente');
                }
                if ((result) == 0) {
                    $.ajax({
                        url: "AJAX/AJAXConfirmaNumero.php",
                        type: "post",
                        data: {
                            numero: numero,
                        },
                        success: function (result) {

                            if ((result) == 1) {
                                erro = true;
                                $('#ErroNum').html('Número já Existente');
                            }
                            if ((result) == 0) {
                                erro = true;
                                $('#frmFazer').submit();
                            }
                        }
                    });
                }
            }
        });
    }
}

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
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

//-----------------------------------------------------------FUNÇÕES PARA O PROCURAR.PHP----------------------------------------------//

function fillTableEstabelecimentosProcurar(txt = '', categoria = -1, distrito = -1, novo = -1, pagina = 1, recente = -1) {
    //alert(txt + ' ' + categoria+' '+distrito);/*
    $.ajax({
        url: "AJAX/AJAXFillEstabelecimentosProcurar.php",
        type: "post",
        data: {
            txt: txt,
            categoria: categoria,
            distrito: distrito,
            novo: novo,
            pag: pagina,
            recente: recente
        },
        success: function (result) {
            $('#tableContent').html(result);
            //alert('filtra');
        }
    });

}


//---------------------------------------------------FUNÇÕES PARA AS IMAGENS DE UM ESTABELECIMENTO---------------------------------------//
function fillTableImagens(txt = '', id = -1) {

    $.ajax({
        url: "AJAX/AJAXFillimagens.php",
        type: "post",
        data: {
            txt: txt,
            id: id
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
            fillTableImagens('', result);
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
function fillTableReservas(txt = '', id) {
    $.ajax({
        url: "AJAX/AJAXFillReservas.php",
        type: "post",
        data: {
            txt: txt,
            id: id
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
        }
    })
}

function DeleteTableReserva() {                                           // Problemas com o id quando confirmo o delete //
    $('#staticBackdropDele').modal('toggle');
    $.ajax({
        url: "AJAX/AJAXDeleteReservas.php",
        type: "post",
        data: {
            reserva: parseInt($('#ReservaID').html())
        },
        success: function (result) {
            fillTableReservas('', result);
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

//------------------------------------------------------------Funcoes para ListaReservaAdmin ------------------------------------//
function fillTableReservasAdmin(id = -1) {
    $.ajax({
        url: "AJAX/AJAXFillReservasAdmin.php",
        type: "post",
        data: {
            id: id
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });


}

function fillTableReservasHistorico(id = -1) {
    $.ajax({
        url: "AJAX/AJAXFillReservasHistorico.php",
        type: "post",
        data: {
            id: id
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });


}


//--------------------------------------------------------------------Funçoes para REDES estabelecimentos -------------------------------//

function gosto(id) {
    $.ajax({
        url: "AJAX/AJAXPutLikeEstabelecimento.php",
        type: "post",
        data: {
            idEstabelecimento: id
        },
        success: function (result) {
            $.ajax({
                url: "AJAX/AJAXGetGostoEstabelecimento.php",
                type: "post",
                data: {
                    idEstabelecimento: id
                },
                success: function (result) {
                    $('#gosto').html(result);

                }
            });

        }
    });

}


function favorito(id) {

    $.ajax({
        url: "AJAX/AJAXPutFavoritoEstabelecimento.php",
        type: "post",
        data: {
            idEstabelecimento: id
        },
        success: function (result) {
            $.ajax({
                url: "AJAX/AJAXGetFavoritoEstabelecimento.php",
                type: "post",
                data: {
                    idEstabelecimento: id
                },
                success: function (result) {
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


function listaComentarios(id) {
    $.ajax({
        url: "AJAX/AJAXFillComentarios.php",
        type: "post",
        data: {
            idEstabelecimento: id,
        },
        success: function (result) {

            $('#tableContent').html(result);

        }
    });
}

function comentario(id = -1) {

    $.ajax({
        url: "AJAX/AJAXPutComentarioEstabelecimento.php",
        type: "post",
        data: {
            idEstabelecimento: id,
            txt: $('#comentarioTexto').val()
        },
        success: function (result) {

            listaComentarios(id);

        }
    });

}

function rating(id) {
alert('sda');
    $.ajax({
        url: "AJAX/AJAXPutRatingEstabelecimento.php",
        type: "post",
        data: {
            idRede: id,
            valor: $('#star5').val()
        },
        success: function (result) {
            alert('er')
            $.ajax({
                url: "AJAX/AJAXGetRatingEstabelecimento.php",
                type: "post",
                data: {
                    idRede: id,
                    valor: $('#star5').val()
                },
                success: function (result) {
                    $('#star5').html(result);

                }
            });
        }
    });
    alert('e');
}