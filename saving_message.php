<!DOCTYPE html>
<html>
<head>
  <title>Complaint Lodging place</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.5)20%,rgba(0,0,0,0.5)20%), url(gif2.gif);
      background-position: center;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container {
      max-width: 600px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
    }
    #messages {
      border: 1px solid #ddd;
      padding: 10px;
      max-height: 300px;
      overflow-y: auto;
    }
    #messageInput {
      width: calc(100% - 20px); /* Adjust width to accommodate padding */
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background-color: rgb(229, 231, 235);
      font-weight: bold;
      color: rgb(3, 7, 18);
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #ccc;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Lodge Your Complaint</h1>
    <br><br>
    Username: <span id="username">Anonymous</span><br>
    <p id="userLocation">Location: Fetching...</p>
    <div id="messages"></div>
    <textarea id="messageInput" rows="5" placeholder="Type your Complaint here..."></textarea><br><br>
    <button onclick="sendMessage()">Submit</button>
  </div>

  <script>
    function updateUserInfo(name, location) {
      const usernameElement = document.getElementById("username");
      const userLocationElement = document.getElementById("userLocation");

      usernameElement.textContent = name;
      userLocationElement.textContent = `Location: ${location}`;
    }

    function fetchUserLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          position => {
            const location = `Latitude: ${position.coords.latitude}, Longitude: ${position.coords.longitude}`;
            updateUserInfo("John Doe", location);
          },
          error => {
            console.error("Geolocation error:", error.message);
            updateUserInfo("John Doe", "Location Not Available");
          }
        );
      } else {
        console.error("Geolocation is not supported by this browser.");
        updateUserInfo("John Doe", "Location Not Available");
      }
    }

    function sendMessage() {
      const messageInput = document.getElementById("messageInput");
      const message = messageInput.value;

      if (message.trim() === "") {
        return;
      }

      const dateTime = new Date().toLocaleString();
      const user = document.getElementById("username").textContent;

      const xhr = new XMLHttpRequest();
      xhr.open("POST", "save_message.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // If the request was successful, add the message to the DOM
          const messageDiv = document.createElement("div");
          messageDiv.className = "message";
          messageDiv.innerHTML = `<strong>${user}:</strong> ${message} <span class="time">${dateTime}</span>`;
          document.getElementById("messages").appendChild(messageDiv);
          messageInput.value = ""; // Clear input field after sending
        }
      };
      xhr.send(`username=${encodeURIComponent(user)}&message=${encodeURIComponent(message)}`);
    }

    // Fetch user location and update information
    fetchUserLocation();
  </script>
</body>
</html>
