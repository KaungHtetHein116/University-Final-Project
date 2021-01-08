$(document).ready(function(){
	$('.delete_student').click(function(e){
		e.preventDefault();
		var studentid = $(this).attr('data-student-id');
		var parent = $(this).parent("td").parent("tr");
		bootbox.dialog({
			message: "Don't want to buy anymore?",
		
			title: "<i class='jsd glyphicon glyphicon-trash'></i> Delete !",
			buttons: {
				success: {
					label: "No",
					className: "btn-success",
					callback: function() {
						$('.bootbox').modal('hide');
						}
						},
						danger: {
							label: "Yes",
							className: "btn-danger",
							callback: function() {
               
								$.ajax({
									type: 'POST',
									url: 'remove1.php',
									data: 'delete='+studentid
  
                })
								.done(function(response){
									bootbox.alert(response);
									 parent.fadeOut('slow'); 
            
                  setTimeout(function(){// wait for 1 secs
                  location.reload(); // then reload the page.
                   }, 2000); 
                     
                   //location.reload(); reload without wait
                  
								})
                                          
								.fail(function(){
									bootbox.alert('Error....');
									})
                                                              
                
							}
                 
						}
				}
          
		});
 
	});

});