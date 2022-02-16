Blog de Publicacions con Laravel



Para a seguinta tarefa, procederemos a creación dun blog donde se poderán escribir, subir e modificar posts por parte dos usuarios; ainda que tamén se poderán filtrar as publicacións por autor.Nesta caso, instalaremos Laravel através da consola con axuda do instalador Composer (composer create-project laravel/laravel {directory} 4.2 --prefer-dist) e unha vez instaladas tamen as dependecias procederemos a crear o blog.

Na primeira páxina, móstranse todos os artículos/publicacións publicados ata o momento, as cales se poden modificar ou borrar se o usuario (autor da publicación) o desexa. Tamén aparecen publicadas por orde e fecha de publicación, de maneira que, as publicacións mais novas son as que se colocaran nas primeiras posicións do blog. 

En canto as publicacións, terán enlaces ao autor para que se accedan directamente as publicacións que éste publicou con anterioridade por se fora de interese para o usuario; así como a outras publicacións da mesma índole. Como se pode comprobar, as publicacións e os usuarios foron creados de forma aleatoria de modo que carecen de contido xa que llo proporcionaría o propio usuario. Por outra banda, tamén se implementou un sistema de identificación de tal modo que na hora de publicar unha nova publicación, ésta se recolle automaticamente na base de datos dependendo do usuario, xa que cada un ten asignado un identificador único.

Por parte dos usuarios; para evitar problemas de seguridade e que se produzan problemas de duplicados de usuarios ou usurpación de identidade, a cada usuario se lle identifica mediante unha identificación por correo electrónico que se lle envía cando o usuario se rexistra na páxina web, así como a necesidade dun nome de usuario e unha contrasinal que será única para cada un.

**BASE DE DATOS:**

En canto a base de datos, recollerá todos os datos da páxina web que serán os seguintes:

1. Tabla de Categorías: Xa que non todas as publicacions terán a mesma temática, ofrécese a posibilidade de crear unha categoría que se axuste ao tema da propia publicación.
2. Usuarios: Tabla principal donde se recollen todos os datos necesarios dos usuarios como poden ser: o seu identificador único para recoñecerlle as publicacións que lle van asociadadas, o nome de usuario, a contrasinal, o nome da persoa, o seu correo electrónico, a verificación do correo electrónico, o "token" único para o usuario e as datas de creación e actualización das publicacións.
3. Tabla de publicacións: Recolle a publicación creada polos usuarios, nela recóllese información como: o identificador que lle corresponde co autor da publiación, a  súa categoría,  o "rastro" que permitirá seguir a actualización ou modificación das publiacións, o título da publicación, o contido e as tamén as datas de creación e actualización.
4. Tabla de reinicio de contrasinais: No caso de que o usuario non lembre a súa contrasinal ofréceselle unha opción de volver a obter unha nova a través do "token" e o correo electrónico que se lle ofreceu na hora da súa creación.

Finalmente, por motivos de seguridade e para evitar falla no sistema, sempre se ofrecerá un "erro 404" cando se quera acceder a información que non lle correspondera aos usuarios da páxina web.

<img src="https://user-images.githubusercontent.com/89069423/154221139-d42f0e59-3832-46a1-96e5-1502ec9b28f6.png"/>
<img src="https://user-images.githubusercontent.com/89069423/154221147-6bd9ad55-84c2-48c0-b57e-6e4357967781.png"/>
<img src="https://user-images.githubusercontent.com/89069423/154221153-355c499e-fa6f-4618-8747-6ef06d3a34c0.png"/>

