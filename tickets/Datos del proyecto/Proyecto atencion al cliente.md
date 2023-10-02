PHP MYSQL Bootstrap

Deberá tener un control de accesos registro/login.
Deberá tener roles de usuario, administradores y clientes.
Niveles de incidencias.
deberá tener un dashboard administradores y clientes.
Dashboard deberá mostrar tickets asiganados, cerradas, pendientes (administradores).
Dashboard deberá mostrar sus tickets enviados y respondidos, cerrados.
Pagina para responder tickets, administradores y clientes.
base de datos

tabla - cliente

id_cliente
nombre_cliente
email
password
tabla - administrador

id_administrador
nombre_administrador
email
password
id_area
tabla - ticket

id_ticket
id_cliente
id_administrador*
id_area
incidencia
id_nivel
id_estatus
fecha_creacion
fecha_cerrado*
tabla - comentario

id_comentario
id_ticket
comentario
fecha_creacion
tabla - area -> Soporte, Desarollo, Telecomunicaciones

id_area
nombre_area
tabla - nivel -> Baja,Media,Alta,Urgente

id_nivel
nombre_nivel
tabla - estatus -> Abierto, Proceso, Pausado, Cerrado

id_estatus
nombre_estatus

ticket

id_ticket id_cliente: Luisito * db id_area: Soporte tecnico * db incidencia: Hola buenos días, tengo una situación con mi equipo de computo * cliente id_nivel: Urgente * db id_estatus: por defecto - Abierto * db fecha_creacion: datetime - 30-09-23 11:00 * manejador db (phpmyadmin)