//XHR

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector('.button').onclick = function () {
        ajaxGet();
    }
});

function ajaxGet() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'backend.php', true);
    xhr.send();

    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let div = document.querySelector('.out');
            div.innerHTML = 'data saved';
        }
    }
}
