        <style type="text/css">
            ol.example li.placeholder:before {
                position: absolute;
            }
            .list-group-item > div {margin-bottom: 5px;}

            #progress{
                display: none;
                color: #888;
                margin-left: 15px;
            }
        </style>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Menu Generator</h1>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Edit item</div>
                            <div class="panel-body">
                                <form id="frmEdit" class="form-horizontal">
                                    <!--input type="hidden" name="mnu_icon" id="mnu_icon"-->
                                    <div class="form-group">
                                        <label for="mnu_text" class="col-sm-2 control-label">Text</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="mnu_text" name="mnu_text" placeholder="Text">
                                            <!--div class="input-group-btn">
                                                <button id="mnu_iconpicker" class="btn btn-default" data-iconset="fontawesome" data-icon="" type="button"></button>
                                            </div-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mnu_href" class="col-sm-2 control-label">URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="mnu_href" name="mnu_href" placeholder="URL">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mnu_target" class="col-sm-2 control-label">Target</label>
                                        <div class="col-sm-10">
                                            <select id="mnu_target" name="mnu_target" class="form-control">
                                                <option value="_self">Self</option>
                                                <option value="_blank">Blank</option>
                                                <option value="_top">Top</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mnu_title" class="col-sm-2 control-label">Tooltip</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="mnu_title" name="mnu_title" placeholder="Text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fa fa-refresh"></i> Update</button>
                                <button type="button" id="btnAdd" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading clearfix"><h5 class="pull-left">Menu</h5>
                                <!--div class="pull-right">
                                    <button id="btnReload" type="button" class="btn btn-default"> <i class="glyphicon glyphicon-triangle-right"></i> Load Data</button>
                                </div-->
                            </div>
                            <div class="panel-body" id="cont">
                                <ul id="myList" class="sortableLists list-group"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <button id="btnOut" type="button" class="btn btn-success">Save</button>
                            <span id="progress">Saving...</span>
                        </div>
                        <!--div class="form-group"><textarea id="out" class="form-control" cols="50" rows="10"></textarea>
                        </div-->
                    </div>
                </div>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo site_url('public/js/jquery-menu-editor.js'); ?>"></script>
        <script src="<?php echo site_url('public/js/iconset-fontawesome-4.2.0.min.js'); ?>"></script>
        <script>
            jQuery(document).ready(function () {
                //var strjson1 = '[{"text":"Home","icon":"fa-home","href":"http://codeignitertutoriales.com"},{"text":"Youtube","icon":"fa-youtube-square","href":"https://www.youtube.com/user/davicotico"},{"text":"Github","icon":"fa-github","href":"https://github.com/davicotico","target":"_self","title":""},{"text":"Opcion4","icon":"fa-crop"},{"text":"Opcion5","icon":"fa-flask"},{"text":"Opcion6","icon":"fa-map-marker"},{"text":"Opcion7","icon":"fa-search","children":[{"text":"Opcion7-1","icon":"fa-plug"},{"text":"Opcion7-2","icon":"fa-filter"}]}]';
                var strjson1 = '<?php echo siteMeta("menu_data"); ?>';
                console.log(JSON.parse(strjson1));
				/*var iconPickerOpt = {
				cols: 5,
				searchText: "Buscar...",
				labelHeader: '{0} de {1} Pags.',
				footer: false
				};*/
				
                var options = {
                    hintCss: {'border': '1px dashed #13981D'},
                    placeholderCss: {'background-color': 'gray'},
                    ignoreClass: 'btn',
                    opener: {
                        active: true,
                        as: 'html',
                        close: '<i class="fa fa-minus"></i>',
                        open: '<i class="fa fa-plus"></i>',
                        openerCss: {'margin-right': '10px'},
                        openerClass: 'btn btn-success btn-xs'
                    }
                };
				
                var editor = new MenuEditor('myList', {
				listOptions: options,
				//iconPicker: iconPickerOpt,
				labelEdit: 'Edit',

				labelRemove: 'Remove'
				});
                editor.setData(strjson1);
					
                /*$('#btnReload').on('click', function () {
                    editor.setData(strjson1);
                });*/
				
                $('#btnOut').on('click', function () {
                    $("#progress").fadeIn("slow");
                    var str = editor.getString();
                    //$("#out").text(str);
                    $.ajax({
                        url: '<?php echo site_url("theme/themeSetting/ajax_save_menu"); ?>',
                        type: 'POST',
                        data: {menu_data: str}
                    })
                    .done(function(response) {
                        if (!response.match("error")){
                            $("#progress").fadeOut("slow",function(){
                                $("#progress").html(response);
                                $("#progress").fadeIn("slow");
                            });
                        }
                    });
                });
            });
        </script>