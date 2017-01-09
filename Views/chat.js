var instanse = false;
// var file;
var state;
var username;


function Chat() {
	this.update = updateChat;
	this.send = sendChat;
	this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat() {
	if (!instanse) {
		instanse = true;
		$.ajax({
			type: "POST",
			url: "chat.php",
			async: false,
			data: {
				'function': 'getState'
				// 'file': file
			},
			dataType: "json",
			success: function (data) {
				state = data.state;
				instanse = false;
			}
		});
	}
}

//Updates the chat
function updateChat() {
	if (!instanse) {
		//  alert("Update");
		instanse = true;
		$.ajax({
			type: "POST",
			url: "chat.php",
			async: false,
			data: {
				'function': 'update',
				'state': state
			},

			dataType: "json",
			success: function (data) {
				if (data.text) {
					$('#chat-window').append("<p>" + data.text + "</p>");
					$('#chat-window').scrollTop(1000);
				}
				instanse = false;
				state = data['state'];
			}
		});
	} else {
		setTimeout(updateChat, 1500);
	}
}

//send the message
function sendChat(message, nickname) {
	updateChat();
	$.ajax({
		type: "post",
		url: "chat.php",
		async: false,
		data: {
			function: 'send',
			message: message,
			nickname: nickname,
			username: username
			// file: file
		},
		dataType: "json",
		success: function (data) {
			updateChat();
		}
	});
}

function setUsername(username){
	this.username = username;
}
