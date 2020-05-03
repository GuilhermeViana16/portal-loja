<?php

    require_once 'includes/header.php';
    
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
 
                    <div class="col-md-6">

                        <div class="card card-plain">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Notícias Publicadas</td>
                                        	<td>250</td>
                                            <th scope="col">Categorias Ativas</th>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                        	<th scope="col">Comentários Aprovados</th>
                                            <td>145</td>
                                            <th scope="col">Comentários Novos</th>
                                            <td>25</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>


                        <div class="card card-plain">
                            <div style="border-top: 1px solid #ddd;" class="header">
                                <h4 class="title">Últimas Notícias</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Dakota Rice</td>
                                        </tr>
                                        <tr>
                                            <td>Minerva Hooper</td>
                                        </tr>
                                        <tr>
                                            <td>Sage Rodriguez</td>
                                        </tr>
                                        <tr>
                                            <td>Philip Chaney</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Greene</td>
                                        </tr>
                                        <tr>
                                            <td>Mason Porter</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>


                    <div class="col-md-6">

                        <form>

                            <div class="topo-nota-rapida">Publicar Nota Rápida</div>

                            <div class="formulario-nota-rapida">
                                
                                <div class="form-group">
                                    <label for="titulo">Título da Postagem</label>
                                    <input type="text" class="form-control" id="titulo">
                                </div>
                                <div class="form-group">
                                    <label for="descricao">Descrição da Nota</label>
                                    <textarea type="textarea" class="form-control" id="descricao"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Tag de Pesquisa</label>
                                    <input type="text" class="form-control" id="tags">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Publicar Nota</button>
                                </div>

                            </div>

                        </form>

                    </div>


                </div>
            </div>
        </div>


<?php

    require_once 'includes/footer.php';

?>
