<?php

require_once __DIR__ . '/vendor/autoload.php';
$estilo1 = file_get_contents('style.css');
$mpdf = new \Mpdf\Mpdf();
$html = '
	<div class="TituloGrande">
		<h1>Invoice</h1>
	</div>
	<div style="width:35%; height:1%; margin-top:12mm;float:right;"></div>
	<div class="cajaEncabezadoConDatos">
		<div class="TituloDelEncabezadoConDatos"><strong>Dino Store</strong></div>
		<div style="width:100%; margin-top:3mm; font-size:12px;">595996549<br/>545454545<br/>545454545<br/>545454545<br/>545454545</div>
	</div>
	<div class="cajaEncabezadoConFecha">
	<div style="float:left; width:6%;color:gray;">#I</div>
	<div style="float:left; width:24%;  float:right; color:gray;">26/05/2019</div>
	</div>
	<div class="cajaDeTablaEncabezado">
	<table style="text-align:center;">
		<tr>
			<td  style="font-size:12px;color:gray;">Total</td>
			<td  style="font-size:12px;color:gray;">Cant</td>
			<td  style="font-size:12px;color:gray;">Fecha</td>
			<td  style="font-size:12px;color:gray;">#O</td>
		</tr>
		<tr>
			<td>$25000.05</td>
			<td>21</td>
			<td>07/22/2018</td>
			<td>1/3-147</td>
		</tr>

	</table>	
	</div>
	<div class="cajaAnotacion">
	<div style="float:left;font-size:12px; width:60%;  color:gray;">
		<div style="width:100%; margin-top:9mm; ">
			<p>Temas y notas</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
		</div>
	</div>
	<div class="segundaCajaConDatosEncabezado">
		<p color="gray">dkwod</p>
		<p><strong>jdiejiejie</strong><br/>999999999999<br>999999999999<br>999999999999<br>999999999999<br>999999999999<br></p>
	</div>
	</div>
';
$mpdf->WriteHTML($estilo1,1);
//Cabecera del documento
$mpdf->WriteHTML($html,2);
//Contenido del documento
$htmlContenido='
	<table class="TablaContenido">
		<tr>
			<td>Item</td>
			<td>Cantidad</td>
			<td>Precio</td>
			<td>Descuento</td>
			<td>Tax</td>
			<td>Total</td>
		</tr>
			
		<tr>
		<td>1 dwdmkdmkedmkemdkemdke</td>
			<td>2</td>
			<td>120</td>
			<td></td>
			<td>2%</td>
			<td>240.0</td>
		</tr>
		<tr>
		<td>2 dwdmkdmkedmkemdkemdke</td>
			<td>2</td>
			<td>120</td>
			<td></td>
			<td>2%</td>
			<td>240.0</td>
		</tr>
		<tr>
		<td>3 dwdmkdmkedmkemdkemdke</td>
			<td>2</td>
			<td>120</td>
			<td></td>
			<td>2%</td>
			<td>240.0</td>
		</tr>
		
	</table>
';
$mpdf->WriteHTML($htmlContenido,2);
$htmlTotales='
<div style="width:100%; height:25%;">
	<div class="cajaTotales">
			<div class="totalesTitulos">
			<p>SUBTOTAL</p>
			<p>TAX 1</p>
			<p>TAX 2</p>
			<p><strong>TOTAL</strong></p>
			<p>PAGO</p>
		</div>
		<div class="cajaContenido">
			<p>$94844</p>
			<p>(3%)54654.55</p>
			<p>(2%)545.02</p>
			<p><strong>$ 54456</strong></p>
			<p>$0 00</p>
		</div>
	</div>
	<div class="granLineaDivisoria">

	</div>
	<div class="cajaTotalAmount"><div style="width:49%; float:left;"><p><strong>AMOUNT DUE</strong></p></div><div style="width:49%; text-align:right; float:left; "><p><strong>$545645</strong></p></div></div>	
</div>

';
$mpdf->WriteHTML($htmlTotales,2);
//pie de pagina 
$htmlPie='
<div style="width:100%;height:10%;">

<div class="cajaPieContenidoDescriptivo1"><p>3rkefkemfkefmekfm</p>
<p>efjiejfiejfiejfiejfiejfiefjiejifjiejfiefjiefjiejfifej</p>
</div>
<div style="width:35%; height:1%; margin-top:5mm;float:right;"></div>
<div class="cajaPieContenidoDescriptivo2" ><p>fejfiejfiefjiefjiejffeif</p></div>
</div>';
$mpdf->setHTMLFooter($htmlPie,2);
$mpdf->Output();