<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Njoku Vitalis – Web Developer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { scroll-behavior: smooth; }
    .hero { background: #111; color: white; padding: 100px 0; text-align: center; }
    .btn-primary { background: #007bff; border: none; }
    footer { background: #222; color: #aaa; padding: 20px 0; text-align: center; }
  </style>
</head>
<!-- WhatsApp Chat Widget -->
<script>
  (function () {
    var options = {
      whatsapp: "2349012345678", // Replace with your WhatsApp number
      call_to_action: "Chat with me", // Text on button
      position: "right", // 'right' or 'left'
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>

<body>

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <h1>Hi, I'm Njoku Vitalis</h1>
      <p>I build modern business websites, POS systems & custom web apps.</p>
      <a href="#contact" class="btn btn-primary mt-3">Hire Me</a>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="py-5" id="services">
    <div class="container">
      <h2 class="text-center mb-4">My Services</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <h5>Business Website</h5>
          <p>Custom website for your brand, responsive & fast.</p>
        </div>
        <div class="col-md-4">
          <h5>POS System</h5>
          <p>Complete point of sale with invoice, stock & printing.</p>
        </div>
        <div class="col-md-4">
          <h5>Web App</h5>
          <p>Dashboard, login, database apps, Laravel & PHP based.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO -->
  <section class="py-5 bg-light" id="portfolio">
    <div class="container">
      <h2 class="text-center mb-4">Projects</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="POS System">
            <div class="card-body">
              <h5 class="card-title">POS System</h5>
              <p class="card-text">Built with PHP, MySQL, Bootstrap 5 & AJAX.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Business Website">
            <div class="card-body">
              <h5 class="card-title">Business Website</h5>
              <p class="card-text">Modern site for a boutique with contact form & gallery.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Landing Page">
            <div class="card-body">
              <h5 class="card-title">Landing Page</h5>
              <p class="card-text">Built to convert visitors into paying clients.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- WhatsApp Chat Widget -->
<script>
  (function () {
    var options = {
      whatsapp: "234XXXXXXXXXX", // Your WhatsApp number
      call_to_action: "Chat with me", // Call to action
      position: "right", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>
<!-- Custom WhatsApp Widget -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">

<style>
  #whatsapp-chat {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #25d366;
    color: white;
    padding: 15px;
    border-radius: 50%;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    cursor: pointer;
    z-index: 999;
    transition: transform 0.3s ease;
  }
  #whatsapp-chat:hover {
    transform: scale(1.1);
  }
  #chat-popup {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    background: #fff;
    color: #333;
    border-radius: 10px;
    padding: 15px;
    width: 250px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    z-index: 999;
  }
  #chat-popup img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
  #chat-popup p {
    margin: 10px 0 0;
  }
</style>

<div id="whatsapp-chat">
  <i class="fab fa-whatsapp fa-2x"></i>
</div>

<div id="chat-popup">
  <div class="d-flex align-items-center">
    <img src="https://yourdomain.com/images/profile.jpg" alt="Me">
    <div class="ms-2">
      <strong>Njoku Vitalis</strong><br>
      <small>Typically replies within 1hr</small>
    </div>
  </div>
  <p>Hi there! Need a website or POS system? Let's chat on WhatsApp!</p>
  <a href="https://wa.me/2349012345678?text=Hi%20Vitalis%2C%20I'm%20interested%20in%20a%20website." target="_blank" class="btn btn-success btn-sm w-100 mt-2">Start Chat</a>
</div>

<script>
  const chatBtn = document.getElementById('whatsapp-chat');
  const chatPopup = document.getElementById('chat-popup');

  setTimeout(() => {
    chatPopup.style.display = 'block';
  }, 5000); // Delay in milliseconds (5000ms = 5 seconds)

  chatBtn.addEventListener('click', () => {
    window.open('https://wa.me/2349012345678?text=Hi%20Vitalis%2C%20I%27m%20interested%20in%20a%20website.', '_blank');
  });
</script>


  <!-- CONTACT -->
  <section class="py-5" id="contact">
    <div class="container text-center">
      <h2>Contact Me</h2>
      <p>Let’s build your website or custom system today.</p>
      <p>
        <a href="https://wa.me/234XXXXXXXXXX" class="btn btn-success">Message on WhatsApp</a>
        <br><br>
        Email: <a href="mailto:you@example.com">you@example.com</a>
      </p>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 Njoku Vitalis – All Rights Reserved</p>
  </footer>

</body>
</html>
