
// aos animation ke liye initialization
AOS.init();
console.log("✅ script.js is connected!");

//  Send message on whatsapp
function sendToWhatsApp() {
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  var url = `https://wa.me/918320898933?text=
      *New Enquiry from Website*%0A
      *Name:* ${name}%0A
      *Phone:* ${phone}%0A
      *Email:* ${email}%0A
      *Message:* ${message}`;

  window.open(url, '_blank');
  return false;
}

// enquiry modal button 
document.getElementById('enquiryForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const name = document.getElementById('enqName').value.trim();
  const email = document.getElementById('enqEmail').value.trim();
  const phone = document.getElementById('enqPhone').value.trim();
  const subject = document.getElementById('enqSubject').value.trim();
  const message = document.getElementById('enqMessage').value.trim();

  if (!name || !phone || !message) {
    alert("Please fill at least Name, Phone, and Message.");
    return;
  }

  const whatsappNumber = "918320898933";
  const whatsappMessage = `Hello! I am *${name}*.\nPhone: ${phone}\nEmail: ${email}\nSubject: ${subject}\nMessage: ${message}`;
  const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

  window.open(url, '_blank');
});
