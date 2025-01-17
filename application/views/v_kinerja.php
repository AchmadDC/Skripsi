<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>E-kinerja</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
        <?php echo $css_js;?>
	<body>
		<div class="navbar">
			<?php echo $navbar;?>
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
                            <?php echo $sidebar;?>
				
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="<?php echo base_url();?>index.php/dashboard">Dashboard</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
                                                <li class="active">Kelola Laporan</li>
					</ul><!--.breadcrumb-->
				</div>
                                
                            <div class="page-content">
                                <div class="span10">
                                    <div class="widget-box">
                                            <div class="widget-header">
                                                    <h4>Filter Periode Laporan</h4>

                                                    <span class="widget-toolbar">
                                                            <a href="#" data-action="collapse">
                                                                    <i class="icon-chevron-up"></i>
                                                            </a>

                                                            <a href="#" data-action="close">
                                                                    <i class="icon-remove"></i>
                                                            </a>
                                                    </span>
                                            </div>

                                            <div class="widget-body">
                                                    <div class="widget-main">
                                                            <div class="row-fluid">
                                                                <label for="form-field-select-1"><h5><b>Laporan Pertanggal</b></h5></label>

                                                                    <form action="<?php echo base_url(); ?>index.php/kinerja/filter" method="POST" target="_blank">

                                                                        <input type="hidden" name="nilaifilter" value="1">
                                                                        
                                                                        Pilih Program <br>
                                                                            <select name="program" required="">
                                                                                <option value="-">-</option> />
                                                                                <?php foreach ($program as $row): ?>

                                                                                <option value="<?php echo $row->nama_program ?>"><?php echo $row->nama_program ?></option>

                                                                                <?php endforeach ?>
                                                                            </select>

                                                                        <br>Tanggal Awal/Tanggal Akhir<br>
                                                                        <input type="date" name="tanggalawal" required="">
                                                                        <input type="date" name="tanggalakhir" required=""> <br>
                                                                        <input class="btn btn-yellow" type="submit" value="Print" >

                                                                    </form>
                                                            </div>
                                                            <hr>
                                                            <div class="row-fluid">
                                                                <label for="form-field-select-2"><h5><b>Laporan Perbulan</b></h5></label>
                                                                    <form action="<?php echo base_url(); ?>index.php/kinerja/filter" method="POST" target="_blank">
                                                                            <input type="hidden" name="nilaifilter" value="2">

                                                                            Pilih Tahun <br>
                                                                            <select name="tahun1" required="">
                                                                                <?php foreach ($tahun as $row): ?>

                                                                                <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>

                                                                                <?php endforeach ?>
                                                                            </select>
                                                                            <br>Bulan Awal/Bulan Akhir<br>
                                                                            <select name="bulanawal" required="">
                                                                                <option value="1">Januari</option>
                                                                                <option value="2">Februari</option>
                                                                                <option value="3">Maret</option>
                                                                                <option value="4">April</option>
                                                                                <option value="5">Mei</option>
                                                                                <option value="6">Juni</option>
                                                                                <option value="7">July</option>
                                                                                <option value="8">Agustus</option>
                                                                                <option value="9">September</option>
                                                                                <option value="10">Oktiber</option>
                                                                                <option value="11">November</option>
                                                                                <option value="12">Desember</option>
                                                                            </select>

                                                                            <select name="bulanakhir" required="">
                                                                                <option value="1">Januari</option>
                                                                                <option value="2">Februari</option>
                                                                                <option value="3">Maret</option>
                                                                                <option value="4">April</option>
                                                                                <option value="5">Mei</option>
                                                                                <option value="6">Juni</option>
                                                                                <option value="7">July</option>
                                                                                <option value="8">Agustus</option>
                                                                                <option value="9">September</option>
                                                                                <option value="10">Oktiber</option>
                                                                                <option value="11">November</option>
                                                                                <option value="12">Desember</option>
                                                                            </select><br>
                                                                            <br>
                                                                            <input class="btn btn-yellow" type="submit" value="Print">

                                                                        </form>
                                                            </div>

                                                            <hr>
                                                            <div class="row-fluid">
                                                                <label for="form-field-select-3"><h5><b>Laporan Pertahun</b></h5></label>

                                                                    <form action="<?php echo base_url(); ?>index.php/kinerja/filter" method="POST" target="_blank">

                                                                        <input type="hidden" name="nilaifilter" value="3">

                                                                        Pilih Tahun <br>
                                                                        <select name="tahun2" required="">
                                                                            <?php foreach ($tahun as $row): ?>

                                                                            <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>

                                                                            <?php endforeach ?>
                                                                        </select>
                                                                        <br>
                                                                        <input class="btn btn-yellow" type="submit" value="Print">

                                                                    </form>
                                                            </div>


                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                
                
                 <script type="text/javascript">
			$(function() {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chzn-select").chosen(); 
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						"limit": limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chzn-container').each(function(){
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chzn-drop').css('width' , '210px');
						$(this).find('.chzn-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element has a width now and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
	</body>
</html>
