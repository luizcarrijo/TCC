window.onload = function ()
{
    document.getElementById('BTN').addEventListener('click', btn_click);
}

function btn_click()
{
    document.getElementById('CAIXA').innerHTML = 'Alterando sem carregar a pagina toda';
}