jQuery(function($){$('.sp-bookmark-form .btn-spbookmark-action').on('click',function(e){e.preventDefault();var that=$(this).parent('form.sp-bookmark-form');var values=that.serializeArray();$.ajax({type:'POST',url:'index.php?option=com_spauthorarchive&task=bookmarks.addBookmark',format:'json',data:values,beforeSend:function(){that.find('span.spbookmark-icon').removeClass('fa-bookmark-o').addClass('fa-spinner fa-pulse');},success:function(res){var response=typeof res==='string'&&res.length>0?JSON.parse(res):false;if(response){if(response.status){if(response.action_type=='add'||response.action_type=='update'){that.find('span.spbookmark-icon').removeClass('fa-spinner fa-pulse').addClass('fa-bookmark');}else{that.find('span.spbookmark-icon').removeClass('fa-spinner fa-pulse').addClass('fa-bookmark-o');}}else{that.find('span.spbookmark-icon').removeClass('fa-spinner fa-pulse').addClass('fa-bookmark-o');if(!response.loggedin){if(response.message){Joomla.renderMessages({"success":[response.message]});}
window.location.href=response.loginurl;}else if(response.message){Joomla.renderMessages({"success":[response.message]});}}
if(response.message){Joomla.renderMessages({"success":[response.message]});}}else{if(response.message){Joomla.renderMessages({"danger":[response.message]});}}}});});});