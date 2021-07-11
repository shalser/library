//XHR
document.addEventListener("DOMContentLoaded", function () {
    let dataTitle = document.querySelector('.one');
    let dataContent = document.querySelector('.two');

    document.querySelector('.button').onclick = function () {
        // let params = 'data1=' + data1.value + '&' + 'data2=' + data2.value;
        let title = dataTitle.value;
        let content = dataContent.value;
        console.log(title, content);
        // ajaxPost(params);
    }
});


function ajaxPost(params) {
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);
            console.log(data);
            let div = document.querySelector('.out');
            div.innerHTML = 'data saved';
        }
    }

    xhr.open('POST', 'backend.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(params);
}

// function requestData(dataArray) {
//     let out = '';
//     for (let key in dataArray) {
//         out += `${key}=${dataArray[key]}&`;
//     }
//     console.log(out);
//     return out;
// }