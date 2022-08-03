@extends('layouts.core')

@section('sidebar_width', 'col-md-4')
@section("title", "Visual Art - corbin.world")


@section('content')

@php 
$files = \App\File::get();


@endphp
<div class="col-md-8">
	<!-- main-container start -->
	<!-- ================ -->
	<section class="main-container" style="padding-top: 15px;">
		<div class="container">
			<div class="row">
				<!-- main start -->
				<!-- ================ -->
				<div class="main col-md-8">
					<!-- page-title start -->
					<!-- ================ -->
					<h1 class="page-title"><i class="fa fa-save"></i> File Manager 
						<div class="pull-right"><a href="#" class="fileinput-button btn btn-success"><i class="fa fa-plus"></i> Upload</a></div>
					</h1>
					<div class="separator-2"></div>

						<div class="col-md-12">
							<div class="tab-content clear-style">
								<div class="tab-pane active" id="pill-1">						
									<div class="row masonry-grid-fitrows grid-space-12" style="position: relative;" id="previews">

											<div id="template" class="file-row col-md-4 col-sm-6 masonry-grid-item">
												<div class="listing-item white-bg bordered mb-20"  style="height: 250px;">
													<div class="overlay-container" style="text-align: center;">
														<span class="preview"><img data-dz-thumbnail style="display: inline;"/></span>
													</div>
													<div class="body">
														<h3><a href="shop-product.html"><p class="name" data-dz-name></p></a></h3>
														<strong class="error text-danger" data-dz-errormessage></strong>
														<p class="small size" data-dz-size></p>

														<div class="elements-list clearfix">
															<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
													          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
													        </div>
														</div>

													    <div style="display: none;">
													      <button class="btn btn-primary start">
													          <i class="glyphicon glyphicon-upload"></i>
													          <span>Start</span>
													      </button>
													      <button data-dz-remove class="btn btn-warning cancel">
													          <i class="glyphicon glyphicon-ban-circle"></i>
													          <span>Cancel</span>
													      </button>
													      <button data-dz-remove class="btn btn-danger delete">
													        <i class="glyphicon glyphicon-trash"></i>
													        <span>Delete</span>
													      </button>
													    </div>
													</div>
												</div>
											</div>


										@foreach($files as $file)
											<div id="" class="col-md-4 col-sm-6 masonry-grid-item">
												<div class="listing-item white-bg bordered mb-20"  style="height: 250px;">
													<div class="overlay-container" style="text-align: center;">
														<span class="preview"><img data-dz-thumbnail style="display: inline;"/></span>
													</div>
													<div class="body">
														<div class="" style="height: 55px; text-align: center;">
														<h3 style="font-size: 16px;">
															<a href="#" data-toggle="tooltip" title="{{$file->original_name}}"><p class="name">{{$file->original_name}}</p></a>
														</h3>
														</div>
				

														<table class="table table-bordered">
		
															<tbody>
																<tr>
																	<td><i class="fa fa-calendar"></i> Added</td>
																	<td>1/1/17</td>
																</tr>
																<tr>
																	<td><i class="fa fa-save"></i> Size</td>
																	<td>25 MB</td>
																</tr>
																<tr>
																	<td><i class="fa fa-mouse-pointer"></i> Hits</td>
																	<td>25</td>
																</tr>
	
															</tbody>
														</table>


														<div class="row">
	
													        <div class="col-md-6">	
														      <small>
														      	<i class="glyphicon glyphicon-trash"></i> Delete
														      </small>
														    </div>
	
													        <div class="col-md-6">	
														      <small>
														      	<i class="glyphicon glyphicon-save"></i> Download
														      </small>
														    </div>
														</div>
													</div>
												</div>
											</div>
										@endforeach


									</div>
								</div>
							</div>


						</div>

									      <div class="col-lg-5">
									        <!-- The global file processing state -->
									        <span class="fileupload-process">
									          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
									            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
									          </div>
									        </span>
									      </div>


				</div>
				<!-- main end -->



				<script src="https://codebuilder.us/js/dropzone.js" type="text/javascript"></script>
				<script type="text/javascript">
					// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
					var previewNode = document.querySelector("#template");
					previewNode.id = "";
					var previewTemplate = previewNode.parentNode.innerHTML;
					previewNode.parentNode.removeChild(previewNode);

					var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
					  url: "/file/upload?_token={{ csrf_token() }}", // Set the url
					  thumbnailWidth: 100,
					  thumbnailHeight: 100,
					  parallelUploads: 20,
					  previewTemplate: previewTemplate,
					  autoQueue: true, // Make sure the files aren't queued until manually added
					  previewsContainer: "#previews", // Define the container to display the previews
					  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
					});

					myDropzone.on("addedfile", function(file) {
					  // Hookup the start button
					  //file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
					});

					// Update the total progress bar
					myDropzone.on("totaluploadprogress", function(progress) {
					  document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
					});

					myDropzone.on("sending", function(file) {
					  // Show the total progress bar when upload starts
					  document.querySelector("#total-progress").style.opacity = "1";
					  // And disable the start button
					  //file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");

					});


					myDropzone.on("complete", function(file) {
						console.log(file.xhr.response);
					  	console.log(file);
					});
					// Hide the total progress bar when nothing's uploading anymore
					myDropzone.on("queuecomplete", function(progress) {
					  document.querySelector("#total-progress").style.opacity = "0";
					});

					// Setup the buttons for all transfers
					// The "add files" button doesn't need to be setup because the config
					// `clickable` has already been specified.
					/*document.querySelector("#actions .start").onclick = function() {
					  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
					};
					document.querySelector("#actions .cancel").onclick = function() {
					  myDropzone.removeAllFiles(true);
					};*/
				</script>

			</div>
		</div>
	</section>
	<!-- main-container end -->


    <section id="later" style="margin-top: 25px;">

		<article>
			<hr>
			<h2 style="margin-bottom: 0px;"><i class="fa fa-link"></i> New Link Post</h2>
			<p class="title" style="font-size: 0.7em">Visual Art</p>
			<hr class="end">
		</article>

		<article>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="section section-custom billinfo"> 
						<!--section-title -->
						<h2><i class="fa fa-link"></i> New Link Post</h2><!--section-title end -->
						<!-- section content start-->
						<div class="pmd-card pmd-z-depth">
							<div class="pmd-card-body">	
								 <form method="POST" accept-charset="UTF-8" class="form-horizontal" id="new_post_form">
								 	@csrf
									<div class="form-group pmd-textfield">
										<label for="inputEmail3" class="col-sm-2 control-label">Link</label>
										<div class="col-sm-10">
											<input class="form-control input-sm" id="url" placeholder="https://news.ycombinator.com/news" type="text" name="url"><span class="pmd-textfield-focused"></span>
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label for="inputEmail3" class="col-sm-2 control-label">Channel</label>
										<div class="col-sm-10">
											<input class="form-control input-sm" id="sheroes" placeholder="ex. HelloWorld" type="text" name="community"><span class="pmd-textfield-focused"></span>
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label for="inputPassword3" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
					
											<div class="fg-line">
												<input class="form-control input-sm" id="url_title" placeholder="A really cool website title." name="title" type="text"><span class="pmd-textfield-focused"></span>
											</div>
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label for="inputPassword3" class="col-sm-2 control-label">Text</label>
										<div class="col-sm-10">
					
											<div class="fg-line">
												<textarea class="form-control input-sm"></textarea><span class="pmd-textfield-focused"></span>
											</div>
										</div>
									</div>

									<div class="form-group pmd-textfield" id="embed_wrapper" style="display: none;">
										<label for="inputPassword3" class="col-sm-2 control-label">Preview</label>
										<div class="col-sm-10">
											<div class="form-group" id="embed_container">
												
											</div>
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-primary pmd-checkbox-ripple-effect" id="new_post_btn">Create Post <i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
								 </form>
							</div>
						</div> <!-- section content end -->  
					</div>
				</div>
			</div>
			<hr class="section">
		</article>


		@push("javascript")
		<script type="text/javascript">

			/* Submit new post form */
		    $("#new_post_form").submit(function() {
		    	$("#new_post_btn").html('<i class="fa fa-spinner fa-spin"></i> Loading');
		    	$.ajax({
		    		url: $(this).attr("action"),
		    		type: "POST",
		    		data: $(this).serialize(),
		    		success: function(res) {
		    			$("#new_post_btn").html('Create Post').removeClass("disabled").removeAttr("disabled");
						if(res.errors) {
				            var n = noty({
				              text: res.errors[0],
				              type: "error",
				              theme: 'relax',
				              timeout: 3000,
				              progressBar: true,
				              dismissQueue: true,
				              killer: true,
				              animation: {
				                  open: {height: 'toggle'},
				                  close: {height: 'toggle'},
				                  easing: 'swing',
				                  speed: 500 // opening & closing animation speed
				              },
				            });
				        } else {
			    			window.location = "/link/"+res.link.id+"/comments";
			    		}
		    		}
		    	})
		    	return false;
		    })


		    /* URL text input embedly lookup */
			$("#url").focus();
			$("#url").on('change keydown paste input', function(){
					$("#new_post_btn").addClass("disabled").attr("disabled", true).html('<i class="fa fa-spinner fa-spin"></i> Loading');
			      if($(this).val()) {
			      		$.ajax({
			      			url: "/link/check",
			      			data: { url: $(this).val() },
			      			success: function(res) {
			      				$("#new_post_btn").html('Create Post').removeClass("disabled").removeAttr("disabled");
			      				$("#url_title").val(res.title);

			      				var html = "<div class='col-6'>"+res.embed_code.replace('width="480"', 'width="100%"').replace('height="270"', 'height="400"')+"</div>";
			      				$("#embed_container").html(html);
			      				$("#embed_wrapper").show();

			      			}
			      		})
			      }
			});


			/* Channel auto-suggest */
			 var options = {
				  url: function(phrase) {
				    return "/api/communities/search?phrase="+phrase;
				  },

				  getValue: function(element) {
				    return element.name;

				  },

				  ajaxSettings: {
				    dataType: "json",
				    method: "GET",
				    data: {
				      dataType: "json"
				    }
				  },

				  preparePostData: function(data) {
				    data.phrase = $("#example-ajax-post").val();
				    return data;
				  },

				  requestDelay: 400,

				  cssClasses: "sheroes",

				  template: {
				    type: "iconLeft",
				    fields: {
				      iconSrc: "icon"
				    }
				  },

				  list: {
				    showAnimation: {
				      type: "slide"
				    },
				    hideAnimation: {
				      type: "slide"
				    }
				  }
			};
			$("#sheroes").easyAutocomplete(options);

			/* Valid URL function */
			function ValidURL(str) {
			  var pattern = new RegExp('^(https?:\\//\\//)?'+ // protocol
			    '((([a-z\\d]([a-z\\d-]*[a-z\d])*)\\.)+[a-z]{2,}|'+ // domain name
			    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
			    '(\\:\d+)?(\\//[-a-z\\d%_.~+]*)*'+ // port and path
			    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
			    '(\\#[-a-z\\d_]*)?$','i'); // fragment locater
			  if(!pattern.test(str)) {
			    return false;
			  } else {
			    return true;
			  }
			}
		</script>
		@endpush


		<article>
		<div class="post">
			<div class="pmd-table-card pmd-card pmd-z-depth feed_post" style="height: 60px;">
				<div class="feed_post_img" style="float: left;"><img style="width:50px; height: 50px;" src="https://corbin.world/transparent.png"></div>
				<div style="margin-left: 10px; float: left; margin-top: 10px; margin-left: 5px;">
					<div class="feed_post_title">
						<a href="https://corbin.world/" style="font-size: 16px;">
							<img style="width: 12px; height: 12px;" src="https://www.google.com/s2/u/0/favicons?domain_url=https%3A%2F%2Fcorbin.world%2F">corbin.world</a>  
						<span style="color: grey; font-size: 12px;">(corbin.world)</span>

						<div class="feed_post_title_secondary">
				            <div style="position: relative; top:2px; color: grey; font-size: 12px;">
				            	<a href="/feed/test" style="color: grey; font-size: 11px;">/p/test</a> ·
				            	November 15th, 2019 (24 minutes ago) 
				            </div>
				            
						</div>
					</div>
				</div>
			</div>
			<hr class="end">
		</div>
		<div class="post">
			<div class="pmd-table-card pmd-card pmd-z-depth feed_post" style="height: 60px;">
				<div class="feed_post_img" style="float: left;"><img style="width:50px; height: 50px;" src="https://corbin.world/transparent.png"></div>
				<div style="margin-left: 10px; float: left; margin-top: 10px; margin-left: 5px;">
					<div class="feed_post_title">
						<a href="https://corbin.world/" style="font-size: 16px;">
							<img style="width: 12px; height: 12px;" src="https://www.google.com/s2/u/0/favicons?domain_url=https%3A%2F%2Fcorbin.world%2F">corbin.world</a>  
						<span style="color: grey; font-size: 12px;">(corbin.world)</span>

						<div class="feed_post_title_secondary">
				            <div style="position: relative; top:2px; color: grey; font-size: 12px;">
				            	<a href="/feed/test" style="color: grey; font-size: 11px;">/p/test</a> ·
				            	November 15th, 2019 (24 minutes ago) 
				            </div>
				            
						</div>
					</div>
				</div>
			</div>
			<hr class="end">
		</div>
		</article>

    </section>

	<section>
	    <article>
	        <div class="row">
	        	<div class="col-4">
	        		<iframe src="/art/particle_swarm_1.html"></iframe>
	        	</div>
	        	<div class="col-4">
	        		<iframe src="/404"></iframe>
	        	</div>
	        </div>
	    </article>
	</section>



	<section>
	    <article>
	        <h1 style="color: #1482A7">CodeBuilder Inc.</h1>
	        <ol id="articles">
	        <li><a href="https://codebuilder.us"><img src="https://codebuilder.us/images/mandala4_75.png" style="max-height: 50px; max-width: 50px;"><br><b>CodeBuilder. Inc.</b> - Software Engineering Solutions.</a></li>
	        </ol>
	    </article>
	</section>

</div> <!-- end col-md-8 -->


@endsection