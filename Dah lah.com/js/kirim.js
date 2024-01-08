function buka() {
    alert('Harap Sabar!');

    var pesan = document.getElementById("pesan").value;
    var number = document.getElementById("number").value;
    var email = document.getElementById("email").value;
    var Message = document.getElementById("Message").value;

    var url = "https://wa.me/6288991715346?text=Permisi,%20Nama Saya%20" + encodeURIComponent(pesan)
        + "%0A%0A" + "Number:%20" + encodeURIComponent(number)
        + "%0A" + "Email:%20" + encodeURIComponent(email)
        + "%0A" + "Message:%20" + encodeURIComponent(Message);

    alert("Berhasil Masuk");
    window.open(url, "_blank");
}


let coutnt =0;

  document.getElementById('larang').addEventListener('contextmenu', function(e) {
  e.preventDefault();
  

  switch (coutnt) {
    case 0:
    alert('Hey!, jangan inpect Ini ya?');
    coutnt++;
    case 1:
    alert('Plase jangan di Inspect Ya ,😭');
    coutnt++;
    case 2:
        alert('Tolong!! jangan di Inspect ');
        coutnt++;
        case 3:
            alert('udah lah sekarang anda pergi dari sini');
            coutnt++;

            window.location.href = 'index.html';
            break;
            default:
                break;

  }
});
function cakpak() {
    alert('Harap Sabar!');

    var pesan = document.getElementById("pesan").value;
    var number = document.getElementById("number").value;
    var email = document.getElementById("email").value;
    var Message = document.getElementById("Message").value;

    var url = "https://wa.me/62088991715346?text=Permisi,%20Nama Saya%20" + encodeURIComponent(pesan)
        + "%0A%0A" + "Number:%20" + encodeURIComponent(number)
        + "%0A" + "Email:%20" + encodeURIComponent(email)
        + "%0A" + "Message:%20" + encodeURIComponent(Message);

    alert("Berhasil Masuk");
    window.open(url, "_blank");
}

