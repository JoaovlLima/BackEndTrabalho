document.getElementById('generateButton').addEventListener('click', function() {
    var inputLink = document.getElementById('inputLink').value;
    var qrcodeContainer = document.getElementById('qrcodeContainer');
    qrcodeContainer.innerHTML = '';

    var qrCodeImage = document.createElement('img');
    qrCodeImage.src = 'https://www.qrcode-monkey.com' + encodeURIComponent(inputLink);
    qrcodeContainer.appendChild(qrCodeImage);
});