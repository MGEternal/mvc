<?php 
	$setHeadContent = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));
?>
<!-- //////////////////////////////////// CONTENT ////////////////////////////////////////////// -->
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-user user-icon"></i>
								<a href="#">Admin</a>
							</li>
							<li class="active"><?php echo $setHeadContent;?></li>
						</ul><!-- /.breadcrumb -->

					

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
	<div class="container">
						<div class="page-header">
							<h1>
								USER
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Manage User .
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<a href="add_user" class="btn btn-primary">Add New User</a>
								</small>
							</h1>
						</div><!-- /.page-header -->

					
								<!-- PAGE CONTENT BEGINS -->
								<!-- Widget ID (each widget will need unique ID)-->
						<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
							<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->




								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?>
								</div>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body no-padding">
							
					              
					                <?php echo form_open('#', array('id' => 'frm_usermanagement', 'name'=>'frm_usermanagement', 'class'=>'form-horizontal'));?>
										
					           	
									
								

										
										<div class="table-header">
											List Users
										</div>	
										<table id="dynamic-table" class="table table-striped ">
												<thead>
														
													<tr>
													<th style="text-align:center;">No.</th>
														<th style="text-align:center;">
															<i class="ace-icon fa fa-user bigger-110 hidden-480" ></i>
															Username
														</th>
														
														<th style="text-align:center;">Name</th>
														<th class="hidden-480" style="text-align:center;">Age</th>
														<th class="hidden-480" style="text-align:center;">Sex</th>
														<th style="text-align:center;">Telephone Number</th>
														
														<th style="text-align:center;">Email</th>
														<th style="text-align:center;">Class</th>
														<th style="text-align:center;">Action</th>
													</tr>
													<?php
															if(!empty($user_all)) {
																$i=1;
																foreach ($user_all as $single_user) {
																	if($single_user['user_type']!="admin"){
																    //print_r ( $single_user['username'] );
																
														?>

																	<tr>
																		<td style="text-align:center;"><?php echo $i;$i++; ?></td>
																		<td style="text-align:center;"><?php print_r ( $single_user['username'] ); ?></td>
																		
																		<td style="text-align:center;"><?php print_r ( $single_user['name'] ); ?></td>
																		<td style="text-align:center;"><?php print_r ( $single_user['age'] ); ?></td>
																		<td style="text-align:center;"><?php print_r ( $single_user['sex'] ); ?></td>
																		<td style="text-align:center;"><?php print_r ( $single_user['tel'] ); ?></td>
																		<td style="text-align:center;"><?php print_r ( $single_user['email'] ); ?></td>
																		<td style="text-align:center;"><?php
																		foreach ($class_all as $single_class) {
																		if($single_class['class_id']==$single_user['class_id']) print_r ( $single_class['class_name'] ); 
																	}
																		?></td>
																		<td  style="text-align:center;">
																			<a href="user_edit?user_id=<?php print_r ( $single_user['user_id'] );?>" class="btn btn-primary">Edit</a>
																			<a href="delete_user?user_id=<?php print_r ( $single_user['user_id'] );?>" class="btn btn-danger">Delete</a>
																		</td>
																	</tr>

															<?php
																	}
																}
																		}
															?>
												</thead>
												<tbody>



												<tr>
												

												</tr>
					

											</tbody>

										</table>

										
										
					           		<?php echo form_close();?>
									</div>
									<!-- end widget content -->

								</div>
								<!-- end widget div -->
						</div>
						</div>
					</div>

				</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<!-- ////////////////////////////////////////// END CONTENT ////////////////////////////// -->



		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					// "aoColumns": [
					//   { "bSortable": false },
					//   null, null,null, null, null,
					//   { "bSortable": false }
					// ],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );



			
				
				
				// $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				// new $.fn.dataTable.Buttons( myTable, {
				// 	buttons: [
				// 	  {
				// 		"extend": "colvis",
				// 		"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
				// 		"className": "btn btn-white btn-primary btn-bold",
				// 		columns: ':not(:first):not(:last)'
				// 	  },
				// 	  {
				// 		"extend": "copy",
				// 		"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
				// 		"className": "btn btn-white btn-primary btn-bold"
				// 	  },
				// 	  {
				// 		"extend": "csv",
				// 		"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
				// 		"className": "btn btn-white btn-primary btn-bold"
				// 	  },
				// 	  {
				// 		"extend": "excel",
				// 		"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				// 		"className": "btn btn-white btn-primary btn-bold"
				// 	  },
				// 	  {
				// 		"extend": "pdf",
				// 		"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				// 		"className": "btn btn-white btn-primary btn-bold"
				// 	  },
				// 	  {
				// 		"extend": "print",
				// 		"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
				// 		"className": "btn btn-white btn-primary btn-bold",
				// 		autoPrint: false,
				// 		message: 'This print was produced using the Print button for DataTables'
				// 	  }		  
				// 	]
				// } );
				// myTable.buttons().container().appendTo( $('.tableTools-container') );
		
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});


				$('#btn_enable').click(function(e) {
		
				if(confirm('คุณต้องการเปิดการใช้งานนี้ใช่หรือไม่')){
					
					$('#frm_usermanagement').attr('action', '<?php echo base_url().'user/checkall_enable'; ?>');
					$('#frm_usermanagement').submit();
					
				}else{
					
					return false;
				}
				
		       
				
		    });
			
			$('#btn_disable').click(function(e) {
				
				if(confirm('คุณต้องการระงับรายการนี้ใช่หรือไม่')){
				
		       		$('#frm_usermanagement').attr('action', '<?php echo base_url().'user/checkall_disable'; ?>');
					$('#frm_usermanagement').submit();
				
				}else{
				
					return false;	
				}
				
		    });
			
			$('#btn_delete').click(function(e) {
				
				if(confirm('คุณต้องการลบรายการใช้งานนี้ใช่หรือไม่')){
				
		        	$('#frm_usermanagement').attr('action', '<?php echo base_url().'user/checkall_delete'; ?>');
					$('#frm_usermanagement').submit();
				
				}else{
					
					return false;
				}
				
		    });

			
			
			})
		</script>