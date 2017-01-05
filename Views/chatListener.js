
var message;
var nickname;

$(document).ready(function () {
    var chat = new Chat();
    chat.getState();
    $('#chat-form').on('submit', function () {
        message = $('#message').val();
        nickname = "Player1";
        chat.send(message, nickname);
        $("#message").val("");
        return false;
    });
    setInterval(function () {
        chat.update();
    }, 1000);
});
