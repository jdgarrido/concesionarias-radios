Concesionarias de radio en Chile
================================

Este script despliega los datos de las concesionarias de radios por comuna entregados por la Subsecretaría de Telecomunicaciones a través Portal de Datos Públicos del Estado.
La Subsecretaría de Telecomunicaciones ni ninguna entidad del Estado es responsable de esta aplicación.


###Cómo funciona?

Se utiliza la clase PHPExcel para leer las hojas de cálculo que proporciona la Subsecretaría de Telecomunicaciones, finalizado el proceso, la herramienta entregará solo las filas que correspondan a la comuna en que se visualiza la información.

###Cómo ejecutarlo en mi máquina local?

*Para que esto funcione es necesario descargar PHPExcel y agregar la clase dentro de la carpeta /assets/classes/
*Además es necesario descargar dentro de la carpeta /assets/docs/ las planillas de cálculo que se encuentran en http://datos.gob.cl/datasets/ver/1926
*Si deseas cachear las páginas, te recomeniendo implementar un sistema de cache, como este http://www.tufuncion.com/cache-php
*Si tu servidor usa SuPHP, te recomiendo crear un php.ini en la raiz de tu sitio, definirlo en tu .htaccess y voilá

###Puedo mejorarla?

Claro que puedes!! hazlo!!

###Demo

Lo puedes ver en acción <a href="http://concesionaria-radios.josegarrido.net/">acá</a>

###Problemas

Al leer los archivos, nos damos cuenta de que la estandarización que se tiene es muy pobre.
Algunos problemas
*El campo dirección, a veces viene con la comuna incluida, otras veces viene con el nombre del local/galpón/centro comercial en el que se encuentra.
*Los campos Latitud y Longitud vienen en un formato "werido"
*El campo RUT presenta problemas de visualización en algunos casos, debe ser por la definición del campo en la hoja de cálculo
*El valor "N°" dentro del campo Dirección no debiese existir, simplemente "nombre de la calle 123", para facilitar la búsqueda con google maps.
*Los datos podrían ser entregados vía json, xml u otro

### Licencia

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_CL"><img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br />Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_CL">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 3.0 Unported</a>.