/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */
	//var SITE_URL = 'http://localhost/alqamees_new/';
	//var SITE_URL = 'http://inventwebsolutions.com/Production_Floor/';
	var SITE_URL = 'https://www.alqamees.com/insight/';


(function ($) {
    
	 $('#main-menu').metisMenu();
			
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });

	// Front End Fourm 
	$('#productionForm  #employee_id').focusout(function(){ 
		var employee_id = $(this).val();
		if(employee_id){ 
			$.ajax({
				type:'POST',
				url:SITE_URL+"admin/ajax/production.php",
				data:{employee_id:employee_id,action:'getRoleById'},
				success:function(response){
						//console.log(jQuery.parseJSON(response));
						var myResponce = jQuery.parseJSON(response);
						if(myResponce['status'] == 'success'){ 
						$('#productionForm  #job').val(myResponce['result']);	
						$('#productionForm  #role_id').val(myResponce['role_id']);
						
						if(myResponce['role_id'] == 11){
							$( "#holdNotes" ).dialog( "open");	 
						}else{
							productionFormSubmit();
						}
					
						}else{ 	
						$('#productionForm  #employee_id').val('');	
						$('#productionForm  #job').val('');
						$('#productionForm  #role_id').val('');	
					 
						$( "#youhavenotdone" ).html('<h3>User Not Exist</h3>');
						$( "#youhavenotdone" ).dialog( "open");	 
						 setTimeout(function(){  
						 $( "#youhavenotdone" ).dialog( "close");	
						 $( "#youhavenotdone" ).html( "");
						 location.reload();
						 }, 2500);
						}
					}
				});
		}
		
	});
	
	
	//$('#productionForm  button.btn').click(function(){
function  productionFormSubmit(){
		 
		var orderNumString = $('#productionForm #orderNum').val();
		var employee_id = $('#productionForm #employee_id').val();	
		var role_id = $('#productionForm #role_id').val();
		var datetime = $('#productionForm #datetime').val();
		var comment = $('#productionForm #comment').val();
		if(orderNumString != '' && employee_id != ''){
			var res = orderNumString.split('.'); 
			// console.log(res[0]);
			 // console.log(res[1]);
			var orderId = res[0]; 
			var orderNumberId = res[1];
			///////alert(orderNumberId);
			// check order status from live DB  
					$.ajax({
						type:'POST',
						url:SITE_URL+"admin/ajax/production_live.php",
						data:{orderId:orderId,orderNumberId:orderNumberId,action:'checkOrderStatus'},
						success:function(response){
							// console.log(jQuery.parseJSON(response));
								var myResponce = jQuery.parseJSON(response);
								if(myResponce['status'] == 'success'){ 
									
									//var current = checkOrderpiroty(orderId,orderNumberId,orderNumString,employee_id,role_id,datetime);	
									
									
									$.ajax({
											type:'POST',
											url:SITE_URL+"admin/ajax/production_live.php",
											data:{orderId:orderId,orderNumberId:orderNumberId,orderNumString:orderNumString,role_id:role_id,action:'checkOrderpiroty'},
											success:function(response){
												// console.log(jQuery.parseJSON(response));
													var myResponce = jQuery.parseJSON(response);
														 
													if(myResponce['status'] == 'success'){
														// check order status is QC 
														if(role_id == 10){
														$('#page-wrapper').css('opacity','0.30'); 
														$( "#QCpopup" ).dialog( "open");
														 
														}else{
														getOrderStatusHtml(orderId,orderNumberId,orderNumString,employee_id,role_id,datetime,comment);
														setTimeout(function(){ location.reload(); }, 2500);
														} 
													}else if(myResponce['status'] == 'inQc'){ 
														  
															$.ajax({
															type:'POST',
															url:SITE_URL+"admin/ajax/production_live.php",
															data:{orderId:orderId,orderNumberId:orderNumberId,orderNumString:orderNumString,action:'getOrderQcData'},
															success:function(response){
																// console.log(jQuery.parseJSON(response));
																	var myResponce = jQuery.parseJSON(response);
																	if(myResponce['status'] == 'success'){ 
																	 
																	  //qc data
																		 $('#qcForm #cutter').val(myResponce['result']['cutter']);
																		 $('#qcForm #pre_stitch').val(myResponce['result']['pre_stitch']);
																		 $('#qcForm #stitch').val(myResponce['result']['stitch']);
																		 $('#qcForm #buttonHD').val(myResponce['result']['buttonHD']);
																		 $('#qcForm #press').val(myResponce['result']['press']);
																		 $('#qcForm #note').val(myResponce['result']['note']);
																	}else{ 	
																		 
																		$( "#youhavenotdone" ).html('<h3>'+myResponce['message']+'</h3>');
																		$( "#youhavenotdone" ).dialog( "open");	 
																		setTimeout(function(){  
																		$( "#youhavenotdone" ).dialog( "close");	
																		$( "#youhavenotdone" ).html( "");
																		location.reload();
																		}, 2500);
																	}
																	
																}
																});	
																$('#page-wrapper').css('opacity','0.30'); 
																$( "#QCpopup" ).dialog( "open");
														
														}else{ 	
														// alert(myResponce['message']);
															$( "#youhavenotdone" ).html(myResponce['message']);
															$( "#youhavenotdone" ).html('<h3>'+myResponce['message']+'</h3>');
															$( "#youhavenotdone" ).dialog( "open");	 
															setTimeout(function(){  
															$( "#youhavenotdone" ).dialog( "close");	
															$( "#youhavenotdone" ).html( "");
															location.reload();
															}, 2500);
													}
													 
												}
										});
 
								}else{ 	
									$( "#youhavenotdone" ).html('<h3>'+myResponce['message']+'</h3>');
									$( "#youhavenotdone" ).dialog( "open");	 
									setTimeout(function(){  
									$( "#youhavenotdone" ).dialog( "close");	
									$( "#youhavenotdone" ).html( "");
									location.reload();
									}, 2500);
								}
								 
							}
					});	
		}else{
			//alert('Employee id and Order Number Required'); 
			$( "#youhavenotdone" ).html('<h3>Employee id and Order Number Required</h3>');
									$( "#youhavenotdone" ).dialog( "open");	 
									setTimeout(function(){  
									$( "#youhavenotdone" ).dialog( "close");	
									$( "#youhavenotdone" ).html( "");
									location.reload();
									}, 2500);
		}  
		 
		 return false; 
		 
	//});
}
	
	$('#productionForm  #orderNum').focusout(function(){ 
	var orderNumString = $('#productionForm #orderNum').val();
		if(orderNumString){
			 var res = orderNumString.split('.'); 
			// console.log(res[0]);
			 // console.log(res[1]);
			var orderId = res[0]; 
			var orderNumberId = res[1];
		
				$.ajax({
						type:'POST',
						url:SITE_URL+"admin/ajax/production_live.php",
						data:{orderId:orderId,orderNumberId:orderNumberId,orderNumString:orderNumString,action:'getOrderHtmlByOrderId'},
						success:function(response){
							// console.log(jQuery.parseJSON(response));
								var myResponce = jQuery.parseJSON(response);
								if(myResponce['status'] == 'success'){ 
								$('#Orderdata').html(myResponce['result']);
								if(myResponce['hold'] == 1){ 
								
									$( "#youhavenotdone" ).html('<h3>Order Is In Hold . </h3>');
									$( "#youhavenotdone" ).dialog( "open");	 
									setTimeout(function(){  
									$( "#youhavenotdone" ).dialog( "close");
									
									$( "#youhavenotdone" ).html( "");
									location.reload();
									}, 2500);
								}
								//alert(myResponce['result']);
								}else{ 	
								 
									
									$( "#youhavenotdone" ).html('<h3>'+myResponce['message']+'</h3>');
									$( "#youhavenotdone" ).dialog( "open");	 
									setTimeout(function(){  
									$( "#youhavenotdone" ).dialog( "close");
									
									$( "#youhavenotdone" ).html( "");
									location.reload();
									}, 2500);
								}
								
							}
					});	
		
		
		}
		 	
});
	  
	
	
	
	  // inventory from
		$('#fabaData ').on('click','button.btn',function(){ 
	 
			var number = $(this).parent().parent().attr('id');
			var stock = $(this).parent().parent().find('.stock').val();
			var per_qamees = $(this).parent().parent().find('.per_qamees').val();
				$.ajax({
						type:'POST',
						url:"ajax/production_live.php",
						data:{number:number,stock:stock,per_qamees:per_qamees,action:'updatefabStatus'},
						success:function(response){
									var myResponce = jQuery.parseJSON(response);
										if(myResponce['status']){  
											  $.ajax({
													type:'POST',
													url:"ajax/production_live.php",
													data:{number:'#'+number,action:'getfabStatus'},
													success:function(response){
																var myResponce = jQuery.parseJSON(response);
																	if(myResponce['status']){  
																	$('#fabaData').html(myResponce['result']);
																	} 
																	 location.reload();
															}
														 
											 });   
										} 
								}
							 
				 });
		});
	
	
	// QC
		
	$('#qcForm input[type="number"]').focusout(function(){
	var val = $(this).val();
	$(this).parent().find('.errorlimit').remove();
	var min = $(this).attr('min');
	var max = $(this).attr('max');
	 if(val < min || val > max  ){
	 $(this).parent().append('<span class="errorlimit" style="color:red;  float:left;  text-align:center;  width:500px;">Value must be between '+min+' to '+max+'.</span>');
	 $(this).val('');
	}else{
	  $(this).parent().find('.errorlimit').remove();
	 }
	 
	});	
		
	$('#qcForm  button.btn').click(function(){
		 
		var orderNumString = $('#productionForm #orderNum').val();
		var employee_id = $('#productionForm #employee_id').val();	
		var role_id = $('#productionForm #role_id').val();
		var datetime = $('#productionForm #datetime').val();
		
		//qc data
		var cutter = $('#qcForm input[name=cutter]:checked').val();
		var pre_stitch = $('#qcForm input[name=pre_stitch]:checked').val();//$('#qcForm #pre_stitch').val();
		var stitch = $('#qcForm input[name=stitch]:checked').val();//$('#qcForm #stitch').val();
		var buttonHD =$('#qcForm input[name=buttonHD]:checked').val();// $('#qcForm #buttonHD').val();
		var press = $('#qcForm input[name=press]:checked').val();//$('#qcForm #press').val();
		var note = $('#qcForm #note').val();
		
		
			var res = orderNumString.split('.'); 
			var orderId = res[0]; 
			var orderNumberId = res[1];
			
			if(cutter != '' && pre_stitch != '' && stitch != '' && buttonHD != '' && press != ''){
				$('#QCpopup .error').hide();
				orderQcStore(orderId,orderNumberId,orderNumString,employee_id,role_id,datetime,cutter,pre_stitch,stitch,buttonHD,press,note);
				 
			}else{
			
			$('#QCpopup .error').show();
			
			}
		 return false; 
		});
		
	$('#holdNotes  button.btn').click(function(){ 
		var holdnote = $('#holdNotes #holdnote').val();
		$('#productionForm #comment').val(holdnote);
		
		 $('#holdNotes #holdSuccess').show();
		productionFormSubmit();
		return false;
	});
}(jQuery));


function orderQcStore(orderId,orderNumberId,orderNumString,employee_id,role_id,datetime,cutter,pre_stitch,stitch,buttonHD,press,note){
 
 
 $.ajax({
	type:'POST',
	url:SITE_URL+"admin/ajax/production_live.php",
	data:{orderId:orderId,orderNumberId:orderNumberId,orderNumString:orderNumString,employee_id:employee_id,role_id:role_id,datetime:datetime,cutter:cutter,pre_stitch:pre_stitch,stitch:stitch,buttonHD:buttonHD,press:press,note:note,action:'getOrderQC'},
	success:function(responseHtml){
			//console.log(jQuery.parseJSON(response));
			var output = jQuery.parseJSON(responseHtml);
			if(output['status'] == 'success'){ 
				  $('#QCStatus').html(output['result']);
			}else{ 	
				$('#QCStatus').html(output['result']); 
			}
			setTimeout(function(){ location.reload(); }, 2500);
			
		}
	});
 
 
 }

function getOrderStatusHtml(orderId,orderNumberId,orderNumString,employee_id,role_id,datetime,comment){
	
	$.ajax({
	type:'POST',
	url:SITE_URL+"admin/ajax/production_live.php",
	data:{orderId:orderId,orderNumberId:orderNumberId,orderNumString:orderNumString,employee_id:employee_id,role_id:role_id,datetime:datetime,comment:comment,action:'getOrderStatusHtml'},
	success:function(responseHtml){
			//console.log(jQuery.parseJSON(response));
			var output = jQuery.parseJSON(responseHtml);
			if(output['status'] == 'success'){ 
				$('#Orderdata').html(output['result']);
					//$( "#youhavedone" ).dialog( "open");
			}else{ 	
				 
				$( "#youhavenotdone" ).html(output['result']);
				$( "#youhavenotdone" ).dialog( "open");
			 	//$('#Orderdata').html(output['result']);
			}
		}
	});
	
}
