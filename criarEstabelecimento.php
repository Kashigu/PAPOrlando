<?php
include_once("includes/body.inc.php");
toposingle();
$id = intval($_GET['id']);
?>
    <link href="summernote.css" rel="stylesheet">
    <script src='js/tinymce/tinymce.min.js'></script>

    <script>

        tinymce.init({
            selector: 'textarea#myTextarea',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
            link_list: [
                {title: 'My page 1', value: 'https://www.codexworld.com'},
                {title: 'My page 2', value: 'https://www.xwebtools.com'}
            ],
            image_list: [
                {title: 'My page 1', value: 'https://www.codexworld.com'},
                {title: 'My page 2', value: 'https://www.xwebtools.com'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Some class', value: 'class-name'}
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                }
                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                }
                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg'});
                }
            },
            templates: [
                {
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...'},
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });
    </script>
    <script>

        tinymce.init({
            selector: 'textarea#myTextarea1',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
            link_list: [
                {title: 'My page 1', value: 'https://www.codexworld.com'},
                {title: 'My page 2', value: 'https://www.xwebtools.com'}
            ],
            image_list: [
                {title: 'My page 1', value: 'https://www.codexworld.com'},
                {title: 'My page 2', value: 'https://www.xwebtools.com'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Some class', value: 'class-name'}
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                }
                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                }
                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg'});
                }
            },
            templates: [
                {
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...'},
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });
    </script>

    <div class="hero-listing set-bg" data-setbg="img/maravilha.jpg">
    </div>
    <!-- Map Section Begin -->
    <!--<div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
            height="657" style="border:0;" allowfullscreen="">
        </iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <form action="confirmarNovoEstabelecimento.php" class="contact-form" method="post"
                          enctype="multipart/form-data" id="frmFazer">
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <div class="row">


                            <?php
                            $sql = "select * from categorias order by categoriaNome";
                            $resultCategorias = mysqli_query($con, $sql);
                            while ($dadosCategorias = mysqli_fetch_array($resultCategorias)) {
                                ?>
                                <div class="col-lg-4 ">

                                    <label name="categoria" class="check" id="categoria">
                                        <input type="radio" name="categoria"
                                               value="<?php echo $dadosCategorias['categoriaId'] ?>">
                                        <span class="checkmark"></span>
                                        <span type="radio"
                                              name="categoria2[]">  <?php echo $dadosCategorias['categoriaNome'] ?>
                                </span> </label>

                                </div>
                                <?php
                            }
                            ?>
                            <span id="Erro"></span>


                            <!-- <label for="cafe">Café
                             <input type="radio" name="gender" id="cafe" value="cafe"></label> -->

                            <div class="col-lg-12">

                            </div>
                            <div class="col-lg-6 mt-4">
                                <span id="ErroEN"></span>
                                <input type="text" name="nomeEsta" id="nomeEsta" placeholder="Nome do Estabelecimento">
                            </div>
                            <div class="col-lg-3 mt-4">
                                <span id="ErroEL"></span>
                                <input type="text" name="nomeLoca" id="nomeLoca" placeholder="Concelho">
                            </div>
                            <div class="col-lg-3 mt-4 arrange-select nice-select2">
                                <span>Distritos</span>
                                <select id="distrito" name="distrito">
                                    <option value="-1">Escolha o Distrito</option>
                                    <?php
                                    $sql = "select * from distritos order by distritoNome";
                                    $resultDistritos = mysqli_query($con, $sql);
                                    while ($dadosDistritos = mysqli_fetch_array($resultDistritos)) {
                                        ?>
                                        <option value="<?php echo $dadosDistritos['distritoId'] ?>">
                                            <?php echo $dadosDistritos['distritoNome'] ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>


                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="nomeSlogan" id="nomeSlogan" placeholder="Slogan">
                            </div>
                            <div CLASS="col-lg-2 offset-lg-2"></div>

                            <span id="ErroD"></span>

                            <div class="col-lg-12">
                                <textarea name="reviewTexto" id="myTextarea"
                                          placeholder="Sobre o Estabelecimento"></textarea>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Rua: </label>
                                <input type="text" name="rua" id="rua" placeholder="Rua" class="mt-3">
                                <span id="ErroR"></span>
                                <br>
                                <label>Número: </label>
                                <input type="tel" name="numero" id="numero" placeholder="Número" class="mt-3">
                                <span id="ErroNum"></span>
                                <span id="ErroNi"></span>
                                <br>
                                <label class="mt-2">Email: </label>
                                <input type="email" name="email" id="email" placeholder="Email do Estabelecimento"
                                       class="mt-3">
                                <span id="ErroEmail"></span>
                                <span id="ErroEi"></span>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="row">
                                    <label>Horas de Trabalho: </label>
                                    <textarea name="reviewTexto1" id="myTextarea1"
                                              placeholder="Horas de Trabalho"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Logótipo: </label>
                                <input type="file" name="logo" id="logo">
                                <span id="Elogo"></span>

                            </div>
                            <div class="col-lg-6">
                                <label>Imagem de Fundo: </label>
                                <input type="file" name="fundo" id="fundo">
                                <span id="Efundo"></span>
                            </div>
                            <div class="col-lg-6">
                                <label>Posição do Estabelecimento no Google Earth: </label>
                                <input type="file" name="google" id="google">

                            </div>
                            <div class="col-lg-6">

                            </div>
                            <div class="col-lg-4 mt-3">
                            </div>
                            <div class="col-lg-8 mt-3">
                                <button onclick="certeza()" type="button">Confirmar Estabelecimento</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
bot();
?>