<div  class="site-wrapper" ng-controller="Formulario as form">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">
                <button style="margin-bottom: 20px;" class='btn btn-success btn-block' ng-click="form.enviar()"> Gerar Formulário </button>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#input">Input</a></li>
                    <li><a data-toggle="tab" href="#select">Select</a></li>
                    <li><a data-toggle="tab" href="#radio">Radio</a></li>
                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                </ul>

                <div class="tab-content">
                    <div id="input" class="tab-pane fade in active">
                        <h3>Input</h3>
                        <form class="form-horizontal">
                            <input type='hidden' ng-model="form.input.tipo" ng-init="form.input.tipo = 'inputTipo'" />
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
                                <div class="col-sm-10">
                                    <select class="form-control" ng-model="form.input.tipo">
                                        <option ng-selected=""></option>
                                        <option value="file">File</option>
                                        <option value="hidden">Hidden</option>
                                        <option value="password">Password</option>
                                        <option value="text">Text</option>
                                        <option value="textarea">Text-area</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  placeholder="" ng-model="form.input.name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Value</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.input.value">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Class</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.input.class">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.input.id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Complemento</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="style = 'color: #000' | onclick = 'alert()'" ng-model="form.input.complemento">
                                </div>
                                <span> Complementos separados por | </span>
                            </div>
                            <button type="button" class="btn btn-primary" ng-click="form.submitInput()">Inserir campo no formulário</button>

                            <div style="margin-top: 10px;" class="alert alert-success alert-dismissible fade in" ng-hide="!form.msgInput" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Campo inserido </div>
                        </form>
                    </div>
                    <div id="select" class="tab-pane fade">
                        <h3>Select</h3>
                        <form class="form-horizontal">
                            <input type='hidden' ng-model="form.select.tipo" ng-init="form.select.tipo = 'select'" />
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  placeholder="" ng-model="form.select.name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Class</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.select.class">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.select.id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Complemento</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="style = 'color: #000' | onclick = 'alert()'" ng-model="form.select.complemento">
                                </div>
                                <span> Complementos separados por | </span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Option 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome " ng-model="form.select.option1.texto">
                                    <input type="text" class="form-control" placeholder="Value" ng-model="form.select.option1.value">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Option 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome " ng-model="form.select.option2.texto">
                                    <input type="text" class="form-control" placeholder="Value" ng-model="form.select.option2.value">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Option 3</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome " ng-model="form.select.option3.texto">
                                    <input type="text" class="form-control" placeholder="Value" ng-model="form.select.option3.value">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" ng-click="form.submitSelect()">Inserir campo no formulário</button>

                            <div style="margin-top: 10px;" class="alert alert-success alert-dismissible fade in" ng-hide="!form.msgSelect" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Campo inserido </div>
                        </form>
                    </div>
                    <div id="radio" class="tab-pane fade">
                        <h3>Radio</h3>

                        <form class="form-horizontal">
                            <input type='hidden' ng-model="form.radio.tipo" ng-init="form.radio.tipo = 'radio'" />
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  placeholder="" ng-model="form.radio.name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Class</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.radio.class">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="" ng-model="form.radio.id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Complemento</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="style = 'color: #000' | onclick = 'alert()'" ng-model="form.radio.complemento">
                                </div>
                                <span> Complementos separados por | </span>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Radio 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome " ng-model="form.radio.radio1.texto">
                                    <input type="text" class="form-control" placeholder="Value" ng-model="form.radio.radio1.value">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Radio 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome " ng-model="form.radio.radio2.texto">
                                    <input type="text" class="form-control" placeholder="Value" ng-model="form.radio.radio2.value">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Radio 3</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome " ng-model="form.radio.radio3.texto">
                                    <input type="text" class="form-control" placeholder="Value" ng-model="form.radio.radio3.value">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" ng-click="form.submitRadio()">Inserir campo no formulário</button>

                            <div style="margin-top: 10px;" class="alert alert-success alert-dismissible fade in" ng-hide="!form.msgRadio" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Campo inserido </div>
                        </form>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>
            <!--
                        <div class="mastfoot">
                            <div class="inner">
                                <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                            </div>
                        </div>
            -->
        </div>

    </div>

</div>