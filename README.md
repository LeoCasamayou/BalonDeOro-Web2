BalonDeOro – Parte 2 (Versión Corregida)

Temática
Sitio web basado en el Balón de Oro 2025.
Permite administrar jugadores y equipos mediante CRUD completo utilizando MVC.

Correcciones aplicadas (Parte 2)
	•	Se agregó la vista de detalle de mención.
	•	Se añadió la columna “club” en los formularios y en las vistas.
	•	Se corrigieron rutas y el armado de BASE_URL.
	•	Se protegieron las acciones importantes con login obligatorio.
	•	Se implementó password_hash y password_verify (se quitó la contraseña hardcodeada).

Instalación
1. Clonar repositorio en carpeta "htdocs" de XAMPP.
2. Importar la base desde balon_de_oro.sql o dejar que se autogenere.
3. Iniciar Apache y MySQL.
4. Acceder a http://localhost/BalonDeOro-Web2/

Acceso administrador
Usuario: webadmin  
Contraseña: admin

Integrante:
Leonel Casamayou - leonelcasamayou@gmail.com

Diagrama Entidad-Relación
![Diagrama DER](der.png)
