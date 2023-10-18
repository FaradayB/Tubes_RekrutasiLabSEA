import qrcode

qr = "https://youtu.be/dQw4w9WgXcQ"
url = qrcode.make(qr)
url.save('rr.png', scale = 10)