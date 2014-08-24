function dbCanvas(){
	var dibujo = document.getElementById('bd-canvas');
	var lienzo = dibujo.getContext('2d');
	//First line
		lienzo.beginPath();
		lienzo.lineWidth =2;
		lienzo.strokeStyle='black';
		lienzo.moveTo(0,30);
		lienzo.lineTo(80,30);
		lienzo.stroke();
		
		lienzo.arc(80,30,4,0,Math.PI*2);
		lienzo.fill();
		lienzo.closePath();

	//second line
		lienzo.beginPath();
		lienzo.lineWidth =2;
		lienzo.strokeStyle='black';
		lienzo.moveTo(0,50);
		lienzo.lineTo(50,50);
		lienzo.stroke();

		lienzo.arc(50,50,4,0,Math.PI*2);
		lienzo.fill();
		lienzo.closePath();
	//three line
		lienzo.beginPath();
		lienzo.lineWidth =2;
		lienzo.strokeStyle='black';
		lienzo.moveTo(0,70);
		lienzo.lineTo(20,70);
		lienzo.stroke();

		lienzo.arc(20,70,4,0,Math.PI*2);
		lienzo.fill();
		lienzo.closePath();
	//line h1
		lienzo.beginPath();
		lienzo.lineWidth =2;
		lienzo.strokeStyle='black';
		lienzo.moveTo(220,80);
		lienzo.lineTo(50,80);
		lienzo.stroke();

		lienzo.arc(220,80,4,0,Math.PI*2);
		lienzo.arc(50,80,4,0,Math.PI*2);
		lienzo.fill();
		lienzo.closePath();
}
function mostrarVentana()
{
    var ventana = document.getElementById('cn-resul');
    ventana.style.marginTop = '100px';
    ventana.style.left = '350px';
    ventana.style.display = 'block';
}

function ocultarVentana()
{
    var ventana = document.getElementById('cn-resul');
    ventana.style.display = 'none';
}