/*############################################### Jquery Start */

  $(document).ready( function() {

		$('input#needed').on('focus', function() {
			var input=$(this);
			var is_name=input.val();

			console.log("fo cus");
			if(is_name){input.removeClass("invalid").addClass("valid");}
			else{input.removeClass("valid").addClass("invalid");}

		$('input#needed').on('keyup', function() {	
			var input=$(this);
			var is_name=input.val();

			console.log("keyup");

			if(is_name){input.removeClass("invalid").addClass("valid");}
			else{input.removeClass("valid").addClass("invalid");}
		});


		});

  })