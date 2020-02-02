<style>
 @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css");
</style>
<script type="text/javascript">
 var searchForm;
 var searchButton;
 window.onload = function() {
     searchForm = document.getElementById("search-form");
     searchButton = document.getElementById("search-button");
     searchButton.style.cursor = "pointer";
     searchButton.addEventListener("click", function() {
         searchForm.submit();
     });
 };

</script>

<div id="search-box"><form id="search-form" role="search" method="get" class="search-form" action="http://localhost/">
				<label>
					<span class="screen-reader-text">Search for:</span>
                                                                  <span id="search-button" class="fa fa-search"></span>
				</label>
                      <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
			</form></div>
