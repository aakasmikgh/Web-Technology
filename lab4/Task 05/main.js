// Set Cookie
function setCookie() {
    const name = document.getElementById('nameInput').value;
    if (name) {
        document.cookie = `username=${name}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/`;
        document.getElementById('result').innerText = "Cookie Set!";
    } else {
        document.getElementById('result').innerText = "Please enter a name!";
    }
}

// Get Cookie
function getCookie() {
    const cookies = document.cookie.split('; ');
    for (let i = 0; i < cookies.length; i++) {
        const [key, value] = cookies[i].split('=');
        if (key === 'username') {
            document.getElementById('result').innerText = `Cookie Value: ${value}`;
            return;
        }
    }
    document.getElementById('result').innerText = "No cookie found!";
}

// Delete Cookie
function deleteCookie() {
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    document.getElementById('result').innerText = "Cookie Deleted!";
}
