# Gestor de Tareas Minimalista

## Descripción del Proyecto

Este es el primer proyecto de una serie de aplicaciones web diseñadas para demostrar habilidades de desarrollo full-stack. El objetivo principal es crear un gestor de tareas (ToDo App) completo, intuitivo y minimalista. La aplicación permitirá a los usuarios realizar operaciones CRUD (Crear, Leer, Actualizar, Borrar) sobre sus tareas y gestionar su estado y categoría.
## Características Principales
<ul>
<li>Gestión de Tareas (CRUD): Creación, visualización, edición y eliminación de tareas.</li>
<li>Estados de Tarea: Cada tarea puede tener uno de tres estados: Pendiente, En progreso y Completada.</li>
<li>Categorías y Etiquetas: Posibilidad de asignar categorías o etiquetas personalizadas a las tareas para una mejor organización.</li>
<li>Recordatorios: Asignación de una fecha de recordatorio para cada tarea.</li>
<li>Estilo Sostenible: Se prioriza la legibilidad y un diseño limpio con un enfoque en la calidad visual y la usabilidad.</li>
</ul>
<hr>

## Tecnologías Utilizadas 
<ul>
    <lli>Backend: Laravel (Framework PHP)</li>
    <li>Frontend: Vue.js (Framework JavaScript) o React. </li>
    <li>Base de Datos: MySQL.</li>
    <li>Estilos: Se utilizará un enfoque modular de estilos CSS para evitar problemas de integración y garantizar una apariencia de alta calidad.</li>
</ul>    
    
<hr>

## Instalación y Configuración
Requisitos Previos:
<ol>
    <li>PHP >= 8.1</li>
    <li>Composer</li>
    <li>Node.js & npm.</li>
    <li>MySQL.</li>
</ol>    

<hr>

## Git 
Pasos de Instalación:
1.Clonar el repositorio:git clone [https://github.com/kodetyc-studio/laravel-projects/gestor-tareas-app.git](https://github.com/kodetyc-studio/laravel-projects/tree/4c98c607cc64d749463f11d9dfba815b59898f32/gestor-tareas-app).

2. cd gestor-tareas-app
3. Configurar el backend (Laravel):composer install
4. cp .env.example .env
5. php artisan key:generate
6. Configura tu base de datos MySQL en el archivo .env.
7. Ejecutar migraciones y seeds:php artisan migrate --seed
8. Instalar dependencias del frontend (Vue.js):npm install
9. Compilar los activos y servir la aplicación:npm run dev  # Para desarrollo
10. php artisan serve


<p>Las contribuciones son bienvenidas!</p> 
<p>Por favor, abre un issue para discutir cualquier cambio importante o envía un pull request.</p>
<hr>

## Licencia
Este proyecto está bajo la Licencia MIT.