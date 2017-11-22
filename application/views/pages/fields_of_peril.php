<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<p>Fields of Peril</p>


<button id="submit_command" class="btn-primary">Submit Command</button>

<script>

	$('#set_budget').click(save_budget_setting);
	
	function get_all_locations() {
		do_get("location/get_all_locations",
			function(data) {
				debugger;
		});
	}

	function do_get(url, callback) {
    jQuery.ajax({
      type: 'GET',
      url: api_endpoint + url,
      error: do_api_error,
      success: callback,
      dataType: 'json',
      contentType: "application/json"
      // headers: {"Auth-token": auth_token, "Accept": "application/json"}
    });
	}

</script>