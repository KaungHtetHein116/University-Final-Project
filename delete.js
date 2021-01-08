$(document).ready(function(){
	$('.delete_student').click(function(e){
		e.preventDefault();
		var studentid = $(this).attr('data-student-id');
		var parent = $(this).parent("td").parent("tr");
		bootbox.dialog({
			message: "If will delete permanently!",
			
			title: "<i class='jsd fa fa-trash icon'></i> Delete !",
			buttons: {
				success: {
					label: "No",
					className: "btn-success",
					callback: function() {
						$('.bootbox').modal('hide');
						}
						},
						danger: {
							label: "Delete!",
							className: "btn-danger",
							callback: function() {
								$.ajax({
									type: 'POST',
									url: 'delete.php',
									data: 'delete='+studentid
                 })
							.done(function(response){
									bootbox.alert(response);
									 parent.fadeOut('slow'); 
            
                 setTimeout(function(){// wait for 1 secs
                  location.reload(); // then reload the page.
                   }, 1000); 
                     
                   //location.reload('index.php'); //reload without wait
                  
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