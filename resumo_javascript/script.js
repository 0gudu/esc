function mostrar()
{
    texto = email.value;
    alert(texto);
}

function mostrarjanelinha()
{
    texto = email.value;
    txt.innerHTML = texto;
    janelinha.style.display = "block";
}

s = 0;
function somar()
{
    s = s + 1;
    email.value = s;
}

function imprimir()
{
    window.print();
}

function fechar()
{
    janelinha.style.display = "none"; 
}

