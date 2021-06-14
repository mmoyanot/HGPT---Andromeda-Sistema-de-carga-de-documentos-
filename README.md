# HGPT---Andromeda-Sistema-de-carga-de-documentos-
Contexto: Un funcionario del hospital necesitaba un sistema en el cuál pudiera subir todos los protocolos del hospital y estos archivos 
          pudieran ser vistos por todos los trabajadores.
          
Acciones: Se considera crear un sistema pequeño y sencillo, el cual contiene una base de datos con una tabla de usuarios. 
          En esta tabla, se registra el nombre y apellido del usuario, su cedula de identidad, password y el nombre de su área.
          En la carpeta "areas", se creará otra carpeta que contenga el nombre del área del usuario recién creado.
          El usuario podrá acceder desde el sistema a un mantenedor de esta carpeta, en donde podrá agregar archivos y eliminarlos con sentencias como 
          removeDirectory() o move_uploaded_file() en vez de cargar las rutas de los archivos a la base de datos y hacer un crud tradicional.
          
Observaciones y mejoras: Fue creado en php 7, pero por algun motivo, al subirlo a un servidor de Centos, no funcionan las sentencias de carpeta. Esto se corrige usando una 
                         versión de xampp que contiene php5.
                         
                         Como inicialmente el mantenedor iba a ser sólo para una persona, y se necesitaba con urgencia, los usuarios son creados directamente en la base de datos
                         y la carpeta de su área también la debe crear el administrador del software. 
                         Aún así, es un sistema escalable. En caso de que se adhieran más usuarios, se debe considerar crear un mantenedor de usuarios para poder automatizar la 
                         creación de carpetas por áreas.
        
          
          

