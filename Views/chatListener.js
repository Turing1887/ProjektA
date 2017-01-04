// import 'chat.js';
var message;
var nickname;

$(document).ready(function(){
    var chat = new Chat();
    $('#chat-form').on('submit',function(){
        message = $('#message').val();
        nickname = "Player1";
        chat.send(message,nickname);
    });
    setInterval(function() { //use a function not a string
        chat.update();
    }, 1000);
});