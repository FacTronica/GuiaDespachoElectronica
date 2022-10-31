# GuiaDespachoElectronica
Método para implementar guía de despacho electrónica con el SII Chile

<br>El método para implementar Guía de Despacho Electrónica es similar a la integración de Factura Electrónica.
<br>En el caso de la Guía se deben agregar 2 parámetros adicionales.
<br>
<br>Tipo de Despacho 
Tag: TipoDespacho
<br>Indica si el documento acompaña bienes y el despacho es por cuenta del vendedor o del comprador.
<br>No se incluye si el documento no acompaña bienes o se trata de una Factura o Nota correspondiente a la prestación de servicios.
<br>Valores:
<br>1: Despacho por cuenta del receptor del documento (cliente o vendedor en caso de Facturas de compra.)
<br>2: Despacho por cuenta del emisor a instalaciones del cliente 
<br>3: Despacho por cuenta del emisor a otras instalaciones (Ejemplo: entrega en Obra)
<br>
<br>Indicador Tipo de traslado de bienes
<br>Tag: IndTraslado
<br>Sólo para Guías de despacho.
<br>Indica si el traslado de mercadería es por Venta (valor 1) o por otros motivos que no corresponden aventa. (valores mayores a 1).
<br>1: Ventas: 
<br>2: Ventas por efectuar
<br>3: Consignaciones
<br>4: Entrega gratuita
<br>5: Traslados internos
<br>6: Otros traslados no venta
<br>7: Guía de devolución
<br>8: Traslado para exportación. (no venta)
<br>9: Venta para exportación
<br>7: Para de devolución de mercaderías que fueron trasladadas para exportación desde la zona de embarque.
<br>8 y 9: Para exportaciones, cuando se dirige la mercadería hacia el puerto, aeropuerto o aduana de embarque.
<br>9 : Entre otros, venta de mercaderías que se entregan en Zona Primaria de Aduanas para su exportación
<br>
<br>En el siguiente link puede ver mayor información, en las páginas 12 y 13 del Pdf.
<br><a href="https://www.sii.cl/factura_electronica/factura_mercado/formato_dte_201911.pdf" target="_blank">Instructivo del SII</a>
