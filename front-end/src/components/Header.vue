<template>
  <div class="header">
    <div class="header-mid">

      <div class="logo">
        <a href="/">
        <i class="fa fa-camera-retro fa-lg" style="color:white"></i>
        Creative
        </a>
      </div>

      <div class="nav">
        <ul>
          <li><router-link to="/">Home</router-link></li>
          <li><a href="https://github.com/autoload/creative-guild-test" target="_blank">GitHub</a></li>
          <li><a href="http://www.davidwan.tech:8030/api/artist/1" target="_blank">API</a></li>
          <li><router-link to="/about">About</router-link></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Header',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.header {
    width:100%;
    min-height:50px;
    background: #343a40;
    overflow: hidden;
    vertical-align: middle;
}

.header-mid {
  margin:auto;
  height:20px;
  padding:10px;
  max-width: 980px;
}


.logo {
    float:left;
    color:#fff;
    font-weight:bold;
    font-size:20px;
}

.nav {
    padding-top:5px;
    padding-bottom:10px;
    float:right;
    font-weight:bold;
    font-size:16px;
}



.nav ul li {
    float: left;
    padding-right:15px;
}

.header a {
    color: #fff;
}

.nav a:hover {
    color: #ccc;
}


</style>
