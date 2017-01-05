<<<<<<< HEAD
var instanse;
var state;
var file;
=======

>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5

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
			   async: false,
			   data: {  
			   		'function': 'getState',
						'file': file
						},
			  dataType: "json",
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
			   async: false,
			   data: {  
			   		'function': 'update',
						'state': state,
						'file': file
						// 'text': text
						},
<<<<<<< HEAD
			  datatype: "json",		
			   success: function(data){
				//    alert("Poop");
				   if(data['message']){
					   alert("works too");
                       $('#chat-window').append(data['message']); 							  
=======
			  dataType: "json",		
			   success: function(data){
				// alert("Poop");
				   if(data.text){
					   alert("works too");
             $('#chat-window').append(data.text); 							  
>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5
				   }
				//    document.getElementById('chat-window').scrollTop = document.getElementById('chat-window').scrollHeight;
				   instanse = false;
				   state = data['state'];
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message,nickname)
{       
<<<<<<< HEAD
	alert(message);
    // updateChat();
=======
  alert("send");
  //updateChat();
>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5
     $.ajax({
		   type: "post",
		   url: "chat.php",
		   async: false,
		   data: {  
<<<<<<< HEAD
		   			function: 'send',
					message: message,
					nickname: nickname,
					file: file
=======
		   		'function': "send",
				'message': message,
				'nickname': nickname,
				'file': file
>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5
				 },
		   dataType: "text",
		   success: function(data){
<<<<<<< HEAD
			   alert(data);
			   $("#chat-window").val(data);
			   updateChat();
		   },
=======
				 alert("success");
			   //updateChat();
		   }
>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5
		});
}
