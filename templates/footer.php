	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
jQuery(document).ready(function($) {
$("li.dropdown a").click(function(e){
    $(this).next('ul.dropdown-menu').css("display", "block");
    e.stopPropagation();
    });
});</script>
</body>
</html>