addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var ob;
  for(f=1;f<=3;f++)
  {
    ob=document.getElementById('enlace'+f);
    addEvent(ob,'click',presionEnlace,false);
  }
}

function presionEnlace(e)
{
  if (window.event)
  {
    window.event.returnValue=false;
    var url=window.event.srcElement.getAttribute('href');
    cargarHoroscopo(url);     
  }
  else
    if (e)
    {
      e.preventDefault();
      var url=e.target.getAttribute('href');
      cargarHoroscopo(url);     
    }
}

var conexion1;
var tiempo;
function cargarHoroscopo(url) 
{
  if(url=='')
  {
    return;
  }
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open("GET", url, true);
  conexion1.send(null);
  tiempo=setTimeout("finDeEspera()",3000);
}

function procesarEventos()
{
  var detalles = document.getElementById("detalles");
  if(conexion1.readyState == 4)
  {
    clearTimeout(tiempo);
    detalles.innerHTML = conexion1.responseText;
  } 
  else 
    if(conexion1.readyState == 1)
    {
      detalles.innerHTML = 'Cargando...';
    }
}

function finDeEspera()
{
  conexion1.abort();
  detalles.innerHTML = 'Intente nuevamente más tarde, el servidor esta sobrecargado.';
}
//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}
