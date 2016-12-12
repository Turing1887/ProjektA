var instanse = false;
var state;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "chat.php",
			   data: {  
			   			'function': 'getState',
						'file': file
						},
			  datatype: "json",
			   success: function(data){
				   state = data.state;
				   instanse = false;
			   },
			});
	}	 
}

//Updates the chat
function updateChat(){
	 if(!instanse){
		//  alert("Update");
		 instanse = true;
	     $.ajax({
			   type: "POST",
			   url: "chat.php",
			   data: {  
			   			'function': 'update',
						'state': state,
						'file': file
						},
			 datatype: "json",			
			   success: function(data){
				   if(data.text){
					   alert("works too");
                       $('#chat-window').val(data.text); 							  
				   }
				   document.getElementById('chat-window').scrollTop = document.getElementById('chat-window').scrollHeight;
				   instanse = false;
				   state = data.state;
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{       
	alert("send");
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "chat.php",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
			datatype: "json",
		   success: function(data){
			   updateChat();
		   },
		});
}
