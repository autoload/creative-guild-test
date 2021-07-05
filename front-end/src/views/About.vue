<template>
  <div class="text-center">
    <div class="about">
    <h3>creative-guild-test Version 1.0.0</h3>
    <p>This is a simple demonstration, Use Docker Compose to build LNMP development environment on AWS. Use Laravel and Vue to realize front and back end separation.</p>
      * AWS ES2 Ubuntu<br>
      * Nginx: 1.20.1<br>
      * PHP: 7.4.19<br>
      * MySQL: 5.7.22<br>
      * Laravel: 5.8.38<br>
      * NPM: 7.15.1<br>
      * Vue/cli: 4.5.13<br>
      * Vue-router: 4.0.10<br>
      * Vue: 3.1.4<br>
      * Docker: 20.10.2<br>
      * DockerCompse: 1.27.4<br><br>

    ## Project Introduction<br>
    DEMO, a photographic artist gallery display system with separated front-end and back-end<br><br>


    ## Demand Analysis<br>
    - The personal display page of the photographer, displaying personal information and personal portfolio.<br>
    - Data needs to be persisted. The back-end provides RESTful API personal information and personal portfolio interfaces. The front-end needs to design the page and read the corresponding data to render the page.<br>
    - The front-end and back-end must be separated, and the front-end is processed asynchronously.<br><br>


    ## Technology Selection<br>
    - The back-end framework specifies Laravel.<br>
    - Separate the front end, consider fetching data, rendering data, and data binding to decide to use Vue.<br>
    - The cloud server chooses AWS ES2, the Ubuntu system.<br>
    - Select Nginx for WEB server. The front and back ends are separated, with high concurrency.<br>
    - Data needs to be stored. Use MySQL database.<br>
    - Cache alternate configuration, choose Redis.<br>
    - Deploy and build tools, choose Docker, Docker compose. Container technology is quickly built.<br>
    - Version control tool, choose Git.<br><br>




      ## Development Process<br>
      1. Development environment setup<br>
      2. Database design<br>
      3. Establish a corresponding background to facilitate the management of debugging data. (Not required)<br>
      4. Back-end development, creating RESTful API.<br>
      5. Front-end page style construction.<br>
      6. The front end calls the rendering page asynchronously.<br>
      7. Project deployment<br>
    </div>
  </div>

</template>
<style scoped>
.about {
    margin: 30px auto;
    max-width: 980px;
    padding: 20px;
    text-align: left;
    background: #fff;
    opacity: 0.5;
    color: #999;
    border-radius: 10px;
    transition:color 2s;
}
.about:hover {
  color:#000;
}


</style>