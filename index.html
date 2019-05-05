<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Scraper</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


</head>
<body>
	

<div class="container mt-5">
    <div class="row">    
        <div class="col-md-6" style="margin: 0 auto;">
		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default" >
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control search_text" name="x" placeholder="fitness, healthy">

                <span class="input-group-btn">
                    <button class="btn btn-default search" type="button"><i class="fas fa-search"></i></button>
                </span>
            </div>


<div class="card mt-1 filter" style="display: none;">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Filters</h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<div class="form-row">
			<div class="form-group col-md-10">
			  <label>Limit</label>
			  <input type="number" class="form-control limit" id="inputEmail4" placeholder="100">
			</div>

			<div class="form-group col-md-10">
			  <label>Specific site</label>
			  <input type="text" class="form-control from_site" id="inputEmail4" placeholder="instagram.com">
			</div>

			<div class="form-group col-md-10">
			  <label>API key</label>
		  		<div class="api_keys" style="margin-bottom: 10px;">
				   <input type="radio" name="api_key" class="api_key key1" checked="" value="AIzaSyB3YioONiQOGuElPh30Z0bJtDeKv6xpFqc"> Key 1
				   <input type="radio" name="api_key" class="api_key key2" style="margin-left: 8px;" value="AIzaSyBc99YNcENz-gzJVGFegUzQ3j4x4d4RqcY"> Key 2
				   <input type="radio" name="api_key" class="api_key key3" style="margin-left: 8px;" value="AIzaSyDyeMvjFNLlNTETv4wBvcjsWjRz_qnkuZ8"> Key 3
				   <input type="radio" name="api_key" class="api_key key4" style="margin-left: 8px;" value="AIzaSyAqlvSKrC5vBHdyaHL7LgqTF_Y639uPyTM"> Key 4
				   <input type="radio" name="api_key" class="api_key key5" style="margin-left: 8px;" value="AIzaSyAe6BcV_w9LsOyQFIxckpC_azrbkqFBGw8"> Key 5
				   <input type="radio" name="api_key" class="api_key custom" style="margin-left: 8px;" value="custom_api_key"> Custom
				</div>

			  <input type="text" class="form-control custom_api_key" id="inputEmail4" placeholder="custom search api key">
			  <span class="description"><a href="https://developers.google.com/custom-search/v1/overview">Click here </a> to get google custom search api key. (create new project if previous project key limit finished) </span>
			</div>

			</div>
			</div> <!-- card-body.// -->

			<!-- <div class="card-body">
			 	<h6 class="title">Email domains </h6>
			 	<div class="custom-control custom-checkbox">
			 		<span class="float-right badge badge-light round">52</span>
			 	  	<input type="checkbox" class="custom-control-input" id="Check1">
			 	  	<label class="custom-control-label" for="Check1">Samsung</label>
			 	</div>
			 
			 	<div class="custom-control custom-checkbox">
			 		<span class="float-right badge badge-light round">132</span>
			 	  	<input type="checkbox" class="custom-control-input" id="Check2">
			 	 	<label class="custom-control-label" for="Check2">Black berry</label>
			 	</div>
			 
			 	<div class="custom-control custom-checkbox">
			 		<span class="float-right badge badge-light round">17</span>
			 	  	<input type="checkbox" class="custom-control-input" id="Check3">
			 	  	<label class="custom-control-label" for="Check3">Samsung</label>
			 	</div>
			 
			 	<div class="custom-control custom-checkbox">
			 		<span class="float-right badge badge-light round">7</span>
			 	  	<input type="checkbox" class="custom-control-input" id="Check4">
			 	  	<label class="custom-control-label" for="Check4">Other Brand</label>
			 	</div> 
			 </div> --> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->

        <div class="loading_section" style="text-align: center; display: none;">
        	<h5>Scraping Please wait... <img src="loading.svg" alt=""></h5>
        </div>

		<div class="download btn" style="display: none; text-align: center;"> <a href="#">Click here</a>  to download emails csv file</div>
		<div class="preview_emails" style="display: none">
			<h2 class="title mt-4">
				Emails found
			</h2>
			<ul style="list-style: decimal;">

			</ul>
		</div>

			<div class="all_emails" style="display: none;">
				
			</div>


        </div>



	</div>

	<input type="hidden" class="active_domain" value="1">
</div>

<script>
	jQuery(document).ready(function($){
   	jQuery('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		jQuery('.search-panel span#search_concept').text(concept);
		jQuery('.input-group #search_param').val(param);
	});
});

	(function ($) {
		jQuery(document).on("click", ".btn.btn-default.search", function(){
			var search_text = jQuery('.search_text').val();
			var limit = jQuery('.limit').val();
			var custom_api_key = jQuery('.custom_api_key').val();
			var api_key = jQuery('.api_keys [name="api_key"]').val();
			var site = jQuery('.from_site').val();

			 var datas = {
			  'search_text': search_text,
			  'limit': limit,
			  'api_key': api_key,
			  'custom_api_key': custom_api_key,
			  'site': site,
			};
			

			jQuery.ajax({
			    url: 'google_custom_search.php',
			    data: datas,
			    type: 'get',

			    beforeSend: function(){
			    	jQuery('.loading_section').show();
			    	jQuery('.download.btn').hide();
			    	jQuery('.preview_emails').hide();
			    	jQuery('.preview_emails ul').html("");
			    	jQuery('.card.filter').slideUp(300);
			    },
			
			    success: function(r){
					
					jQuery('.loading_section').hide();

			    	var patt = new RegExp("change api");
					var res = patt.test(r);

					if (res) {
						alert(r);
					} else {

			    		jQuery('.preview_emails ul').html( jQuery('.preview_emails ul').html()+r);

				    	if (limit > 100) {
				    		auto_next_email_search(2);
				    		jQuery('.active_domain').val(2);
				    	} else {
				    		jQuery('.download.btn').show();
					    	jQuery('.preview_emails').fadeIn(300);
				    	}

					}

			    }, error: function(){
			    	alert('Something went wrong !');
			  }
			});

		});

		jQuery(document).on("click", ".input-group-btn.search-panel .btn", function(){
			jQuery('.card.filter').fadeToggle();
		});

		function auto_next_email_search(domain = 2){
			var search_text = jQuery('.search_text').val();
			var limit = jQuery('.limit').val();
			var api_key = jQuery('.api_key').val();
			var site = jQuery('.from_site').val();


			var active_domain = jQuery('.active_domain').val();

			 var datas = {
			  'search_text': search_text,
			  'limit': limit,
			  'api_key': api_key,
			  'site': site,
			  'domain': domain,
			};
			

			jQuery.ajax({
			    url: 'google_custom_search.php',
			    data: datas,
			    type: 'get',

			    beforeSend: function(){
			    	jQuery('.loading_section').show();
			    },
			
			    success: function(r){

			    	jQuery('.loading_section').hide();

			    	var patt = new RegExp("change api");
					var res = patt.test(r);

					if (res) {
						alert(r);
					} else {

			    	jQuery('.preview_emails ul').html( jQuery('.preview_emails ul').html()+r);

			    	jQuery('.preview_emails').fadeIn(300);
			    	jQuery('.card.filter').slideUp(300);

			    	if (limit >= 200 && active_domain == 2 ) {
			    		jQuery('.active_domain').val(3);
			    		auto_next_email_search(3);

			    	}else if (limit >= 300 && active_domain == 3 ) {
			    		jQuery('.active_domain').val(4);
			    		auto_next_email_search(4);
			    	}else if (limit >= 400 && active_domain == 4 ) {
			    		jQuery('.active_domain').val(5);
			    		auto_next_email_search(5);
			    	}else if (limit >= 500 && active_domain == 5 ) {
			    		jQuery('.active_domain').val(6);
			    		auto_next_email_search(6);
			    	}else{
			    		jQuery('.download.btn').show();
				    	jQuery('.preview_emails').fadeIn(300);
			    	}
					}
			    }, error: function(){
			    	alert('Something went wrong !');
			  }
			});
		}

		jQuery(document).on("click", ".download.btn", function(e){
			e.preventDefault();
			var search_text = jQuery('.search_text').val();

			 var datas = {
			  'download': true,
			  'data': jQuery('.preview_emails ul').html(),
			  'title': search_text
			};
			
			jQuery.ajax({
			    url: 'download_emails.php',
			    data: datas,
			    type: 'post',
			
			    success: function(r){
			    	var r = jQuery.parseJSON(r);
			    	if (r.success == "true") {
			    		window.location = r.download_url;
			    	}
			    	console.log(r);
			    }, error: function(){
			    	alert('Something went wrong !');
			  }
			});

		});

	}());

	
</script></body>
</html>

