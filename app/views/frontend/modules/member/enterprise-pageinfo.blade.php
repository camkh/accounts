@extends('frontend.nosidebar') @section('title') Register for Enterprise Seller Page @endsection @section('breadcrumb')
<ol class="breadcrumb">
	<li>
		<a href="#">Home</a>
	</li>
	<li>
		<a href="#">Library</a>
	</li>
	<li class="active">
		Data
	</li>
</ol>
@endsection @section('frontend.partials.left') @endsection @section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
<div class="memberlogin">
	<div class="col-sm-3">
		<div class="advertise">
			<div class="col-sm-12">
				<img src="{{Config::get('app.url')}}/upload/banner/banner728.png" alt="" style="width:100%" />
			</div>
			<div class="clear">
			</div>
		</div>
		<div class="constug">
			<center>
				<img src="{{Config::get('app.url')}}/frontend/images/member/strug.png" style="width: 100%"/>
			</center>
		</div>
		<div class="clear">
		</div>
	</div>
	<div class="col-sm-9">
		<div class="register-form">
			<!--login form-->
			<h2>
				Your are registering
				<span style="color:orange">
					As Seller
				</span>
			</h2>
			<div class="conent">
				<div class="alert alert-success fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
					<strong>
						You Are Registering As
					</strong>
					<span style="color: red;">
						Interprise Seller , Type
					</span>
					<strong>
						Super Market.
					</strong>
					This Account will be free only for 3 months for your page site control.
					<span style="color: red;">
						Contact !
					</span>
				</div>
				<div class="category-tab shop-details-tab" style="margin: 0;">
					<!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li>
								<a>Persional Info</a>
							</li>
							<li>
								<a href="javascript:;">Menu</a>
							</li>
							<li>
								<a href="javascript:;">Content Page</a>
							</li>
							<li class="active">
								<a href="javascript:;">Your Page info</a>
							</li>
							<li>
								<a href="javascript:;">Add Connector</a>
							</li>
							<li>
								<a href="javascript:;">Finish</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="personal">
							<div class="col-sm-12">
								<div class="row">
									<div style="border-top: 1px solid #ccc; clear: both; display:block;margin-top:15px">
									</div>
									<!-- create menu -->
									<div class="col-sm-6 hidden-sm" style="border-right: 1px solid #ccc;">
										<div class="pro-detail">
											<div class="col-sm-12" id="sitePreview">
												<div class="row" style="margin: 0;">
													<div style="border: 1px solid #ccc;display:block;margin: 10px 0 0 0;display:block">
														<h3>
															Your Site page Preview
														</h3>
													</div>
												</div>
												<div class="row" style="margin: 10px 0 0 0;border: 1px solid #ccc;">
													<div class="col-sm-4">
														<div>
															Logo
														</div>
													</div>
													<div class="col-sm-8">
														<div>
															Banner
														</div>
													</div>
												</div>
												<div class="row" style="margin: 10px 0 0 0;">
													<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin:0">
														<div id="navbar" class="navbar-collapse collapse">
															<ul class="nav navbar-nav" id="menu_results" style="margin:0">
																<li class="active">
																	<a href="javascript:;">Home</a>
																</li>
															</ul>
														</div>
														<!--/.nav-collapse -->
													</nav>
													<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin:0;z-index:1">
														<div id="navbar" class="navbar-collapse collapse">
															<ul class="nav navbar-nav navbar-nav-a" id="Dmenu_results_a" style="margin:0;background:#eee">
															</ul>
														</div>
														<!--/.nav-collapse -->
													</nav>
												</div>
												<div class="row">
													<div class="col-sm-3">
														<div style="border: 1px solid #ccc;display:block;margin: 10px 0 0 0;">
															Left
														</div>
													</div>
													<div class="col-sm-6">
														<div style="border: 1px solid #ccc;display:block;margin: 10px 0 0 0" id="costomLayout">
															<ul id="sortable" class="ui-sortable">
																<li class="ui-state-default ui-sortable-handle">
																	New Arrival Products
																	<div class="editVB">
																		<a href="javascript:;" onclick="enableBox();">Edit</a>
																	</div>
																</li>
																<li class="ui-state-default ui-sortable-handle">
																	Hot Promotion Products
																	<div class="editVB">
																		<a href="javascript:;" onclick="enableBox();">Edit</a>
																	</div>
																</li>
																<li class="ui-state-default ui-sortable-handle">
																	Secondhand Products
																	<div class="editVB">
																		<a href="javascript:;" onclick="enableBox();">Edit</a>
																	</div>
																</li>
																<li class="ui-state-default ui-sortable-handle">
																	Monthly Pay Products
																	<div class="editVB">
																		<a href="javascript:;" onclick="enableBox();">Edit</a>
																	</div>
																</li>
																<li class="ui-state-default ui-sortable-handle">
																	Urgent Sale
																	<div class="editVB">
																		<a href="javascript:;" onclick="enableBox();">Edit</a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-sm-3">
														<div style="border: 1px solid #ccc;display:block;margin: 10px 0 0 0;">
															Right
														</div>
													</div>
												</div>
											</div>
											<!-- end site preview -->
										</div>
									</div>
									<!--end product describe-->
									<div class="col-sm-6">
											<div class="pro-detail">
												<h3>
													Your Content Page Design
												</h3>
												<form class="form-horizontal">
													<div class="form-group">
														<label for="AddressName" class="col-sm-3 control-label">
															Address Name
														</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="AddressName" placeholder="Address Name"/>
														</div>
													</div>
                                                    <div class="form-group">
														<label for="HeaderTitle" class="col-sm-3 control-label">
															Header Title
														</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" id="HeaderTitle" placeholder="Header Title"/>
														</div>
													</div>
                                                    <div class="form-group">
														<label for="Aboutme" class="col-sm-3 control-label">
															About me
														</label>
														<div class="col-sm-9">
															<textarea class="form-control" rows="3" placeholder="About me"></textarea>
														</div>
													</div>
                                                    <div class="form-group">
														<label for="Contact" class="col-sm-3 control-label">
															Contact
														</label>
														<div class="col-sm-9">
															<textarea class="form-control" rows="3" placeholder="Contact"></textarea>
														</div>
													</div>
												</form>
											</div>
									</div>
									<!-- end MainMenu Tab -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end product detail-->
				<div class="clear">
				</div>
				<button id="summit" type="submit" class="btn btn-default pull-right choosenuser">
					Next
				</button>
				<a id="chooseuser" class="btn btn-warning pull-right choosenuser" href="#">Back</a>
				<a id="chooseuser" class="btn btn-danger pull-right choosenuser" href="#">Cancel</a>
				</form>
				<div class="clear">
				</div>
			</div>
		</div>
		<!--/login form-->
	</div>
</div>
{{HTML::script('frontend/js/jquery.validate.js')}}
<script type='text/javascript'>
	
	
	
var is_modal_opened = 0;		
$(document).ready(function(){
    $('#agreement').click(function () {
        if($(this).is(":checked")) {
            $("#summit").removeAttr("disabled");
        } else {
            $("#summit").attr('disabled',true);
        }
    });    
    $("#PersonalForm").validate({
          rules: {
      FullName: {
         required : true
      }
    },
      messages:{
          FullName: {
            required : "This Full Name is required."
          }
      }
    });
    
    $( "#sortable" ).sortable({
      revert: true
    });
    $( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });
    $( "ul, li" ).disableSelection();
});
function costomizeLayout(){
    dynamicModal('loading');
    modalClose();
    
    $('#costomizeLayout').modal('show');
} 
function enableBox(){
    dynamicModal('loading');
    modalClose();
    
    $('#Enablebox').modal('show');
}
function costomizeFooter(){
    dynamicModal('loading');
    modalClose();
    
    $('#costomizeFooter').modal('show');
} 

</script>
<div class="clear">
</div>
<!-- Modal costomize Layout -->
<div class="modal fade" id="costomizeLayout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					Costomize Layout
				</h4>
			</div>
			<div class="modal-body">
				costomizeLayout
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Close
				</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Visiter Box -->
<div class="modal fade" id="Enablebox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					Enable your Vistor box
				</h4>
			</div>
			<div class="modal-body">
				Enable your Vistor box
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Close
				</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Footer -->
<div class="modal fade" id="costomizeFooter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					Costomize Footer
				</h4>
			</div>
			<div class="modal-body">
				Costomize Footer
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Close
				</button>
			</div>
		</div>
	</div>
</div>
@endsection