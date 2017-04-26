<?php header("Content-type: text/javascript");  ?>

$(function(){
    /*
	$(".btn btn-danger").click(function(){
		var $delID = $(this).attr("$itemID[$i]");

         $.ajax({
         	type: 'POST',
         	url: 'deleteItem.php',
         	data: '$delID='+ $delID,
         	success: function(data){
         		if(data){
         			location.href = 'newsFile.php';
         		}
         		else {
         			location.href = 'menu.php';
         		}
         	}
         });

	}); */

 
 $(".deleteBtn").click(function(){
 	var del_id = $(this).attr('id');

    $.ajax({
    	type: 'POST',
    	url: 'deleteItem.php',
    	data: 'delete_id='+del_id,
    	success: function(data){
    		location.reload();
    	}
    });

 });

 $returnBtn = $("#returnBtn");

  $returnBtn.click(function(){
    location.href = 'newsFile.php';
  });
	
});
