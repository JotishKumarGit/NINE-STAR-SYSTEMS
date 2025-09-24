
// aos animation ke liye initialization
 AOS.init();
 console.log("✅ script.js is connected!");


//  Send message on whatsapp
  function sendToWhatsApp() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    var url = `https://wa.me/91xxxxxxxxxx?text=
      *New Enquiry from Website*%0A
      *Name:* ${name}%0A
      *Phone:* ${phone}%0A
      *Email:* ${email}%0A
      *Message:* ${message}`;

    window.open(url, '_blank');
    return false;
  }


