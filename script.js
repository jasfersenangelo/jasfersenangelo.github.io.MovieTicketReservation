



/*
jQuery(".s1").click(function(){
        var selectedCountry = new Array();
		
        var n = jQuery(".s1:checked").length;
        if (n > 0){
            jQuery(".s1:checked").each(function(){
    selectedCountry.push($(this).val());
            });
        }
		
      
           
		  alert(selectedCountry);
    });

*/
   

//asfdafddsdsfafsdasdf
$(document).ready(function(){
	
	
		$(document).on('click','.s1',function(e){
		var br= e.target.value;
		$.ajax({
			type: 'GET',
			url: 'config/Sortphp?br='+br,
			dataType: 'json',
			success: function(data,status,xhr){
				
				
			$(".con1 [name='pid']").val(data["movieID"]);
			$("#editForm [name='pimage']").val(data["Pimage"]);
			
			
			},
			error: function(xhr, status, error){
				$message = "<h1>"+xhr['status']+" "+error+"</h1>";
				$("body").html($message);
			}
		});


	});
	
	
	
	
	
	

function ups(){
	
	$('.pnum').load('Pnum.php');
}
	
	
	
	
	
	
	
	
   function displayAll(){
	   ups();
	$.ajax({
		type: 'GET',
		url: 'config/viewRecords.php',
		data: '',
		dataType: 'text',
		success: function(data, status, xhr){
			$("#viewRecords .tbody").html(data);
		},
		error: function(xhr, status, error){
			$message = "<h1>"+xhr['status']+" "+error+"</h1>"
			$("body").html($message);
			console.log(error);
		}
	});
	ups();
	}


 

	$(document).on('click','.delete',function(e){
		var id = e.target.value;
ups();
		$.ajax({
			type: 'GET',
			url: 'config/deleteRecord.php?id='+id,
			success: function(data, status, xhr){
				load_data();
ups();
			},
			error: function(xhr, status, errpr){
				$message = '<h1>'+xhr['status']+" "+error+"</h1>";
				$("body").html($message);
			}
		});
	ups();
	});

 
	load_data();
	function load_data(query)
	{
ups();
		$.ajax({
			url:"config/viewRecords.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
ups();
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
ups();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	ups();
	});


});