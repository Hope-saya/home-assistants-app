<!DOCTYPE html>
<html>
<head>
    <title>Simple Laravel Chat</title>
</head>
<body>
    <h1>Welcome, {{ Auth::user()->name }}</h1>
    
    <div id="chat">
        <div id="chat-messages"></div>
        <input type="text" id="message" placeholder="Type your message here">
        <button id="send">Send</button>
    </div>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // Initialize Pusher
var pusher = new Pusher('your_pusher_app_key', {
    cluster: 'your_pusher_cluster',
    encrypted: true
});

// Subscribe to the chat channel
var chatChannel = pusher.subscribe('chat-channel');

// Listen for new chat messages
chatChannel.bind('new-message', function(data) {
    // Handle new messages
    console.log(data.message);
    // Update your chat interface with the new message
});
    </script>
</body>
</html>
