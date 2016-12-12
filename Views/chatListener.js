var message;
var nickname;
$(document).ready(function(){
    $('#chat-form').on('submit',function(){
        message = $('#message').val();
        nickname = "Player1";
        sendChat(message,nickname);
    });
});