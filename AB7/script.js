document.getElementById('generateButton').addEventListener('click', function() {
    var randomCode = generateRandomCode(10); // Generate a random code of length 10
    document.getElementById('codeDisplay').textContent = randomCode;
});

function generateRandomCode(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
