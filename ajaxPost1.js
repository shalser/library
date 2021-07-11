let servResponse = document.querySelector('#response');

document.forms.ourForm.onsubmit = function (e) {
    e.preventDefault();

    let userInput = document.forms.ourForm.ourForm__inp.value;
    // let userInput1 = document.forms.ourForm.ourForm__inp1.value;
    // userInput = encodeURIComponent(userInput); //todo - for GET

    let xhr = new XMLHttpRequest();


    // xhr.open('GET', 'form.php?' + 'ourForm__inp' + userInput);
    xhr.open('POST', 'form.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            servResponse.textContent = xhr.responseText;
        }
    }


    xhr.send('ourForm__inp=' + userInput);
    // xhr.send('ourForm__inp=' + userInput + '&' + 'ourForm__inp1=' + userInput1);
}