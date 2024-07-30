 
$.ajax({
	async: false, 
	url: urlKey + 'PhotoGallery.php',
	type:'GET',
	dataType: 'json',
	success:function(response){
		var photo  = response.photo;
		var photo_list = '';	
		var count = '';
		
		if(response.success === true){
			if(!$.isEmptyObject(photo)){
				$.each(photo, function(index, photoData){  
					count ++;
					var category_name = photoData.CategoryName;
					var category_dt = photoData.Date;
					
					if(category_dt == null){
						var category_dt = '';
					} 
					
					if(category_name !==''){
						photo_list += '<div class="bus-name-heading">';
						photo_list += '<h3>' + category_name + '<span class="date">' + category_dt + '</span></h3>';
						photo_list += '</div>';
					}
					
					photo_list += '<div class="row">';
					
					for($i= 0; $i < photoData.Image.length; $i++){ 
						photo_list += '<div class="col-xs-12 col-sm-4 wow  zoomIn" data-wow-duration="1s" data-wow-delay="0.5s"';
						photo_list += 'style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: zoomIn;">';
						photo_list += '<div class="gallery-outer"><div class="gallery">';
						photo_list += '<a href="'+ photoData.Image[$i] +'" class="big">';
						photo_list += '<img src="'+ photoData.Image[$i] +'" alt="" title="">';
						photo_list += '</a></div></div></div>'; 
					}; 
					
					photo_list += '</div>';
				})  
			}else{
				photo_list += '<p class="no-item">Photo not available under this category.</p>'; 	
			}
		}else{
			photo_list += '<p class="no-item">There was an error occurred !</p>'; 
		} 
		
		$('#photo_list').html(photo_list); 
	} 
});
