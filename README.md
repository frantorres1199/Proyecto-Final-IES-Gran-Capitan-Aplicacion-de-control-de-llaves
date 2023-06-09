# Proyecto Final IES Gran Capitan Aplicacion de control de llaves
Una aplicación hecha para el instituto IES Gran Capitán, que se encarga del control de las llaves de los carritos de los ordenadores.
Esta misma aplicación ha sido trabajada con una api para darle mayor seguridad a los datos que se procesa.
Entre las cosas que puede hacer la aplicación:

1. Ver el Listado de los profesores que han solicitado las llaves de los carritos a las horas más cercanas a la hora actual. A su vez si esa reserva ha pasado de esa hora desaparecera y no se podra elegir.
2. Cuando un profesor tiene una llave en posesión en la aplicación se vera en otra lista ordenada por profesores donde cada uno muestra las llaves de los carritos que tienen en este mismo momento.
3. Otra ventaja que tiene esta aplicación es que cuando una llave la tiene el profesor en posesión y no se ha devuelto en 1 hora y 10 minutos (es el margen entre clases), esa llave se vera modificada por un color diferente para que asi destaque de que no se ha devuelto aún. 
4. También cabe decir que mientras un profesor no devulva su llave permanecerá en esa lista de llaves pendientes de devolución, con esto evitamos la perdida o desaparición de las llaves.
5. Todos los registros de las llaves se van guardando en un historico para tener el control total de lo que les ocurre a las llaves, cuando se recogio o cuando se devolvio. En el propio historico hay dos columnas: una muestra a la hora exacta en que se recogio la llave del conserje y la segunda muestra la hora exacta en que la devolvio el profesor.
