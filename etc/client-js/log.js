/*$(document).ready((e) => {
    let form = $("#log");
    form.submit((event) => {
        event.preventDefult();
        event.stopImmediatePropagation();
        let email = form.find('input[type="email"]').val();
        let pass = form.find('input[type="password"]').val();
        if(pass.length <= 3){
            alert("Weak password");
        } else {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", 'https://zrender.pp.ua/server/log.php');
            email = encodeURIComponent(email);
            pass = encodeURIComponent(pass);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = () => {
                if(xhr.readyState === 4 && xhr.status === 200){
                    alert(xhr.responseText);
                }
            }
            xhr.send('email=' + email + "&pass=" + pass);
        }
    });
});*/