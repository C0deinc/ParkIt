function copyText(htmlElement)
{
    if(!htmlElement){
        return;
    }

    let elementText = htmlElement.innerText;
    let document = document.createElement('input');
    inputElement.setAttribute('value', elementText);
    document.body.appendChild(inputElement);

    inputElement.select();


    document.execCommand('copy');

}

document.querySelector('#copy-text-btn').onclick =
function()
{
    copyText(document.querySelector('#text'));
}