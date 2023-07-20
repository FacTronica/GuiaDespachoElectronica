<?php
#
# ARRAY CON DATOS PARA EMITIR GUÍA DESPACHO ELECTRÓNICA TIPO 52
#
#

$DatosGuiaDespacho = array(

# TOKEN DE ACCESO A LA API
"TOKEN" => "accesoapitest",

# RUT EMPRESA EMITE FACTURA
"RUTEMISOR"=>"11111111-1",

# DATOS DEL PROCESO
"ACCION" => "INSERTAR",
"DOCUMENTO"=>"GUIA",
"FOLIODTE"=>"123456",
"TIPODTE"=>"52",
"FECHADTE"=>"2017-07-27",
#
# DATOS DE LA CARATULA 
"RutEmisor" =>"11111111-1",
#
# RUT CERTIFICADO DIGITAL
"RutEnvia" =>"26009913-2",
#
# aqui siempre va el rut del sii 60803000-K
"RutReceptor" =>"60803000-K", 
"FchResol" =>"2014-08-22",
"NroResol" =>"80",
"SucSii" =>"SANTIAGO",
#
# DATOS DEL ENCABEZADO 
"FchEmis" =>"2021-07-27",
"TipoDTE" =>"33",
"Folio" =>"123456",
#
# EN DETALLE DE ITEMS 1=VALORES_BRUTOS 0=VALORES_NETOS
"MntBruto"=>"1",
#
# COMENTARIOS
"Observaciones" =>"",
#
# DATOS DEL EMISOR 
"RUTEmisor" =>"11111111-1",
"RznSoc" =>"HIPERMERCADO PRUEBAS SPA",
"GiroEmis" =>"DISTRIBUIDORA DE ALIMENTOS",
"Acteco" =>"107100",
"CdgSIISucur" =>"12312",
"DirOrigen" =>"AVDA. LOS PERALES 3322",
"CmnaOrigen" =>"MACUL",
"CiudadOrigen" =>"SANTIAGO",
"CdgVendedor"=>"VENTAS OFICINA",
"CorreoEmisor" =>"EMISOR@PRUEBAS.CL",
"Web" =>"WWW.HIPERMERCADO-PRUEBAS.CL",
"Telefono" =>"569...",
"Fax" =>"569...",
#
# DATOS DEL RECEPTOR
"RUTRecep"=>"22222222-2",
"CdgIntRecep"=>"12312",
"RznSocRecep"=>"PASTELERIA DORIS",
"GiroRecep"=>"PANADERIA Y PASTELERIA",
"DirRecep"=>"ESMERALDA 752",
"CmnaRecep"=>"CABRERO",
"CiudadRecep"=>"CABRERO",
"Contacto"=>"DORIS",
"CorreoRecep"=>"contacto@factronica.cl",
"FonoRecep"=>"569...",

# DATOS DE TRANSPORTE
"Patente"=>"HHFF42",
"RUTTrans"=>"22333444-5",
"RUTChofer"=>"33444555-3",
"NombreChofer"=>"MICHAEL SCHUMAHER",
"DirDest"=>"AV. LAS LOMAS 3344",
"CmnaDest"=>"LAS CONDES",
"CiudadDest"=>"SANTIAGO",

	
#
# TOTALES
"TasaIVA" => "19",
"MntNeto" => "100000",
"MntExe" => "0",
"IVA" => "19000",
"MntTotal" => "119000",
#
#
#
# Tipo de Despacho ( SOLO GUIAS )
# 1: Despacho por cuenta del receptor del documento (cliente o vendedor en caso de Facturas de compra.)
# 2: Despacho por cuenta del emisor a instalaciones del cliente
# 3: Despacho por cuenta del emisor a otras instalaciones (Ejemplo: entrega en Obra) 
"TipoDespacho " => 2,
#
#
# 1: Ventas:
# 2: Ventas por efectuar
# 3: Consignaciones
# 4: Entrega gratuita
# 5: Traslados internos
# 6: Otros traslados no venta
# 7: Guía de devolución
# 8: Traslado para exportación. (no venta)
# 9: Venta para exportación
# 7: Para de devolución de mercaderías que fueron trasladadas para exportación desde la zona de embarque.
# 8 y 9: Para exportaciones, cuando se dirige la mercadería hacia el puerto, aeropuerto o aduana de embarque.
# 9 : Entre otros, venta de mercaderías que se entregan en Zona Primaria de Aduanas para su exportación 
"IndTraslado " => 1,


#########################################
# DETALLE DE ITEMS
#########################################
#
# CODIGO DEL ITEM
"VlrCodigo"=>array("10001","20021","10002"),
#
# NOMBRE DEL ITEM
"NmbItem"=>array("GALLETAS INTEGRALES","PAN INTEGRAL","HUEVOS"),
#
# DESCRIPCION EXTENDIDA DEL ITEM
"DscItem"=>array("","",""),
#
# CANTIDAD
"QtyItem"=>array(2,2,1.5),
#
# DECIMALES PARA LA CANTIDAD
"DecQtyItem"=>array(0,0,1),
#
# UNIDAD DE MEDIDA
"UnmdItem"=>array("UN","UN","KG"),
#
# PRECIO UNITARIO
"PrcItem"=>array(1000,2500,2000),
#
# DECIMALES PARA EL PRECIO UNITARIO
"DecPrcItem"=>array(0,0,0),
#
# INDICADOR DE ITEM EXENTO 1=SI 0=NO
"IndExe"=>array(0,0,0),
#
# PORCENTAJE DE DESCUENTO DEL ITEM
"DescuentoPct"=>array(0,0,0),
#
# DESCUENTO EN PESOS DEL ITEM
"DscItemPesos"=>array(0,0,0),
#
# SUBTOTAL DEL ITEM
"MontoItem"=>array(2000,5000,3000),


#########################################
# REFERENCIAS
#########################################
#
# NUMERO DE REFERENCIA 1,2,3,ETC...
"NroLinRef"=>array(),				
#
# TIPO DE DTE AL CUAL REFERENCIA
"TpoDocRef"=>array(),				
#
# SE APLICA PARA FACTURACION MASIVA DE GUIA
"IndGlobal"=>array(),
#
# FOLIO DEL DTE QUE SE REFERENCIA
"FolioRef"=>array(),
#
# FECHA DEL DTE QUE SE REFERENCIA
"FchRef"=>array(),
#
# MOTIVO 1=ANULA  2=CORRIGE_TEXTO   3=CORRIGE_VALORES
"CodRef"=>array(),  				
#
# COMENTARIO INDICANDO MOTIVO DE LA REFERENCIA
"RazonRef"=>array(), 	


#########################################
# DATOS SERVIDOR DE CORREO
#########################################
"SMTP_HOST"=>"mail.suservidor.cl",                // VARIABLE - OPCIONAL - HOST DEL SERVIDOR DE CORREO ( SI VA VACIO EL SISTEMA UTILIZO CUENTA PROPIA PARA ENVIAR MAIL )
"SMTP_PORT"=>"465",                               // VARIABLE - OPCIONAL - PUERTO DE ENVIO DEL MAIL 25, 465 or 587 
"SMTP_SECURE"=>"ssl",                             // VARIABLE - OPCIONAL - SEGURIDAD tls O ssl o vacio
"SMTP_USER"=>"dte@suservidor.cl",              		// VARIABLE - OPCIONAL - CORREO DE ENVIADOR  ( SI VA VACIO EL SISTEMA UTILIZO CUENTA PROPIA PARA ENVIAR MAIL )
"SMTP_PASS"=>"12345",
	 

#########################################
# ENVIAR COPIAS DE CORREO
#########################################
"CORREO_CC1"=>"COPIA1@gmail.com",                           // VARIABLE - OPCIONAL - COPIA 1 DE CORREO DESTINO
"CORREO_CC2"=>"COPIA2@factronica.cl",                           // VARIABLE - OPCIONAL - COPIA 2 DE CORREO DESTINO
"CORREO_BCC1"=>"COPIAOCULTA1@gmail.com",                          // VARIABLE - OPCIONAL - COPIA OCULTA 1 DE CORREO DESTINO
"CORREO_BCC2"=>"COPIAOCULTA2@gmail.com",                           // VARIABLE - OPCIONAL - COPIA OCULTA 2 DE CORREO DESTINO
"CORREO_RESPUESTA"=>"RESPUESTA_PARA@PRUEBAS.cl",                           // VARIABLE - OPCIONAL - COPIA OCULTA 2 DE CORREO DESTINO


#########################################
# DATOS DEL PROVEEDOR
#########################################
"PROVEEDOR_NOMBRE"=>"FACTRONICA SPA",
"PROVEEDOR_MAIL"=>"soporte@factronica.cl",
"PROVEEDOR_WEB"=>"www.factronica.cl",
"PROVEEDOR_FONO"=>"5693334455",


#########################################
# CERTIFICADO DIGITAL
#########################################
"Modulus"=>"1cqhYtIoH1Ecd+kglJtDIguP5vRhC09y0zQMx9dUVprWLPHCA95x+kjmzYL9hxBj
OufrLCML3hVZ6f0HSwOHfM7LjPZnZFEubxNSbe//Rj82dgBdPsXbvPa0vENOuOxP
EO+7hfE3rRFbJwlJVhDa22hFbKhW1PFejp+IHAi5s5E=",

"Exponent"=>"AQAB",

"X509Certificate"=>"MIIGQzCCBSugAwIBAgIKTy8J4QAAABJFBjANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
Ns+zrUW1g5yYKkB2rxo3i+y8Mk/ZIhuIU079XPoBtemvdXXTHStfHKMmaPH4OiI1
YAwT7W/88r/tINY/i4vXfOg1Xh+CKWl/rX+kywcIWo9ruiGpdIojJL5B2OqoC8+f
4MxpgF7YC0YyPjaaze6jbNfGVbrJS8MD1uzAvIo6E2Vo1J4jdYJeUnOw4fQBFnoD
SQThgpn5uoVgia2NUpqAQRJ4BArT0Bc=",

"PrivKey"=>"-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDVyqFi0igfURx36SCUm0MiC4/m9GELT3LTNAzH11RWmtYs8cID
wCg9V1Xba89Lrn4hexUCQDSM76rTE+w4JqDFNKBgEvmUhbR7UwgS5CuzQhm75MGk
4vnsMueBXzOjZjYgRxa8i4ijDOeF9jFmqZpVxD6G3OQ=
-----END RSA PRIVATE KEY-----
",

#########################################
# CAF TIMBRAJE DE FOLIOS
#########################################
"RE"=>"11111111-1",

"RS"=>"PANADERIA PASTELERIA AMASANDERIA PRUEBAS SPA",

"TD"=>"33",

"RNG_D"=>"1",

"RNG_H"=>"50000",

"FA"=>"2018-07-20",

"RSAPK_M"=>"rJ0g1ZpsEGej6HunZq21O2dKWVYh4u4B/pXscO5Kk/AANMKHpgbnaU9mDTQ7+O8xhd1TRuNAIXcqlqyXbSp6Hw==",

"RSAPK_E"=>"Aw==",

"RSAPK_IDK"=>"300",

"FRMA"=>"a9JPkmgZjgsAMgeJ+VyxDc9CYTb74pWxOwMPxW8BXqess22owf/OGfmswT0f3XtAJewJScPqGTlKUOnVRUCYeg==",

"RSASK"=>"-----BEGIN RSA PRIVATE KEY-----
MIIBOQIBAAJBAKydINWabBBno+h7p2attTtnSllWIeLuAf6V7HDuSpPwADTCh6YG
52lPZg00O/jvMYXdU0bjQCF3Kpasl20qeh8CAQMCQHMTazkRnWBFF/BSb5nJI3zv
huY5a+yeq/8OnaCe3GKe58oWxS5SBQw21QBP+KYPzOUDfoldajl4YrhNMIBjF4sC
IQDWy3cZGCQFnDoxWVW6n4zubDWGeYavjHYPrDpvZYoi+QIhAM26KUbIZ9o6wvUz
ZoxgSo/CIo7/UHE+zIbV/l9HC7PXAiEAjzJPZhAYA718IOY5JxUInvLOWaZZyl2k
CnLRn5kGwfsCIQCJJsYvMEU8Jyyjd5my6txf1sG0qjWg1IhZ4/7qL10ijwIgd5lz
6UERLy4itp+6f0uT3RykZvhX64e9Ztq/Hrccp/E=
-----END RSA PRIVATE KEY-----",

"RSAPUBK"=>"-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAKydINWabBBno+h7p2attTtnSllWIeLu
Af6V7HDuSpPwADTCh6YG52lPZg00O/jvMYXdU0bjQCF3Kpasl20qeh8CAQM=
-----END PUBLIC KEY-----" 

);
?>
