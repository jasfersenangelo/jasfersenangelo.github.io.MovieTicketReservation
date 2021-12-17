  
 

		 
//PANG APPEND NG MGA PIC
/*
(function () {
  var page = 2,
      uri = 'moreImages.php';
	  
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {

      $.get (uri, {page: page}, function (data) {
        page ++;
        $('#result').append (data);
      });

    }
	 
  });
}) 
();
  
	
function appnd2(){
(function () {
	 
  var page = 2,
 
      uri = 'moreImages3.php';
	var eme=  $("#Sort3").val();
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() -100) {
 $.get (uri, {page : page, eme: eme}, function (data) {
    page ++;
        $('#result').append (data);
     
      });
 
    }
  	 
  });
}) 
();
  
}

function ru(){

(function () {
  var page = 2,
 
      uri = 'moreImages2.php';
 
 var page1 = $("#MIN").val();
var page2 = $("#Max").val();
 
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {

      $.get (uri, {page: page,page1: page1,page2: page2}, function (data) {
        page ++;
        $('#result2').append (data);
      });

    }
	 
  });
}) 
();
}
	
	
function appnd(){
(function () {
	 
  var page = 2,
 
      uri = 'moreImages.php';
	  var page2 = $("#Max").val();
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() -100) {
 $.get (uri, {page : page }, function (data) {
    page ++;
        $('#result').append (data);
     
      });
 
    }
  	 
  });
}) 
();
  
}
	
*/
	/*  
$(document).on("keyup", ".Price", function() {  
		 
	var n = $(this).find("#Min").val();
	var x = $(this).find("#Max").val();
  
 
	if(n!="" && x!="" ){
	if (!isNaN(x) && !isNaN(n)){
  
	 
	load_data5(n,x);

	}
	if (isNaN(x) || isNaN(n)){
	alert("Please Input a Number");
	}
	}
  
});


	function load_data5(query,query2)
	{

		$.ajax({
			url:"config/SortPrice.php", 
			method:"post",
			data:{query:query,query2:query2},
			success:function(data)
			{
				$('#result').html(data); 
			}
});
 
	}

	
function appnd(){
(function () {
	 
  var page = 2,
 
      uri = 'moreImages.php';
	  var page2 = $("#Max").val();
  $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() -100) {
 $.get (uri, {page : page }, function (data) {
    page ++;
        $('#result').append (data);
     
      });
 
    }
  	 
  });
}) 
();
  
}
*/
$(document).ready(function(){
 
 load_data();
 load_data2();
		 ups();
		 
//DO NOT GALAW
  /*
  function RuComplete(){
	  	 
	 	var a = $  ("#Min").val();
		var b = $ ("#Max").val();
		var c= $("#Sort3").val();
		var d= $("input[name='psale']:checked").val();
		
		//alert(d);
		
			var chk =[];
		// checked=",";
 
			 $.each($("input[name='genrefilter']:checked"), function(){
				 
                chk.push("genre LIKE '" + $(this).val() + "'  ");
            });
			
		 var checked =chk.join(" OR ") ; //lahat ng naka check
		 
		 // alert("LAMAN NI CHECKED:"+checked+":");
		  //load_data9(checked,c);
		  
		 if(a!="" && b!="" && checked!=""){  //kapag lahat sila may laman
		// alert("LOAD MEDYO LAHAT");
				if (!isNaN(a) && !isNaN(b)){
			load_dataMedyoLahat(a,b,c,checked);
				}
				  if (isNaN(a) || isNaN(b)){
	alert("Please Input a Number in the Price Range");
	}
		}

		  if(    (a=="" || b=="") && checked!=""   ){	//kapag check box lang may laman		
		//alert("checkbox lang");
		
		load_data9(checked,c,d);
	
		}//eto namna sfddsfagdsgggadgg
 
	 
		
	 if((a=="" || b=="") && checked==""   ){ // kapag naka sort lang
	// alert("Sort lang");
		load_data4(c,d);
		} 
		
		 
		
		 if(a!="" && b!="" && checked==""){ // kapag walang naka checked
		// alert("walang check box");
			if (!isNaN(a) && !isNaN(b)){
			load_dataSortLimit(a,b,c);
			}
			  if (isNaN(a) || isNaN(b)){
	alert("Please Input a Number in the Price Range");
	}
		}
		
		
		  
	 
 }
  */
		function load_data2(query)
	{
		$.ajax({
			url:"config/viewDrop.php", 
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#resultDrop').html(data); //kay div result lalabas
			}
		});
	}
	
	function load_data(query)
	{
		$.ajax({
			url:"config/viewRecordsUser.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			
		});
 

	}
	
	function solo_data(query)
	{
		$.ajax({
			url:"config/Solo.php", 
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#viewSolo').html(data); 
			}
		});
	}
	
		
	function load_data3(query)
	{
		$.ajax({
			url:"config/Suggest.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#viewSolo').html(data); 
			}
		});
	}

$("#viewSolo").on("click", "#Close", function() {  

		 $('.bodyside').fadeIn();
		 $('.bodymid').fadeIn();
		  $('#viewSolo').hide();
		  
});		 

$("#resultDrop").on("click", "#SuggestBtn", function() {  
		 
		 $('.bodyside').hide();
		 $('.bodymid').hide();
		  $('#viewSolo').fadeIn();
	var search = $(this).val(); 	
			load_data3(search); 
});

    
$(document).on("click", "#Tile", function() {  
		 
		$('.bodyside').hide();
		 $('.bodymid').hide();
		 
 
  $('#viewSolo').fadeIn();

	var tile = $(this).find("#BtnTile").val();
	 
			solo_data(tile);
		 
 
});
		
		
		 
$('#eme').click(function(){
			 
	var search = $('#search_text').val();
		if(search != '')
		{
			load_data(search); 
		}
		else
		{
			load_data();	
		}
	 
});
		 	$('#search_text').keyup(function(){
	var search = $(this).val();
		if(search != '')
		{
			load_data2(search); 
		}
		else
		{
			load_data();	
		}
		});
		 	
	
		 
		 
//DO NOT GALAW
	
$(document).on("keyup", ".Price", function() {  
 
		ups();
		RuComplete();
	ups();
		 
});

	
$(document).on("click", ".Rbutton", function() {  
 
		ups();
		RuComplete();
	ups();
		 
});



function ups2(){
	
	$('.pnum').load('../Pnum.php');
}
function ups(){
	
	$('.pnum').load('Pnum.php');
}
 
	function load_data4(query,custom)
	{
		$.ajax({
			url:"config/viewSort.php", 
			method:"post",
			data:{query:query,custom:custom},
			success:function(data)
			{
				$('#result').html(data); 
			}
		});
	}
	
	function load_data9(query,query2,c ){
		
	 $.ajax({
			url:"config/SortPrice.php", 
			method:"post",
			data:{query:query,query2:query2,c:c },
			success:function(data)
			{
				$('#result').html(data); 
			}
		});	
	}
	
	
 
	//asdd
$(".Brand").on("click", ".ClassNiCB", function() { 
ups(); 	
	RuComplete();	
ups(); 		
});
 
 


function load_dataMedyoLahat(a,b,c,checked){
	
		$.ajax({
			url:"config/viewSLC.php", 
			method:"post",
			data:{a:a,b:b,c:c,checked:checked},
			success:function(data)
			{
				$('#result').html(data); 
			}
		});
}
	//adasdd
$("#Sort3").change(function() {
	ups();
		RuComplete();
		ups();
});

function load_dataSortLimit(a,b,c){
	
		$.ajax({
			url:"config/viewSL.php", 
			method:"post",
			data:{a:a,b:b,c:c},
			success:function(data)
			{
				$('#result').html(data); 
			}
		});
	
}

	
});