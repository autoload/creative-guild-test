<template>
  
  <Header/>
  <div class="container">
  <router-view></router-view>
  </div>
  <Footer  msg="Copyright © 2021 David Wan"/>
</template>

<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Footer,
  }
}
</script>

<style>
body {
    background: #eee;
    background:url('assets/cloud.jpg');
    background-attachment:fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
}

#app {
    font-family: Arial, Avenir, Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

div {
    margin: 0;
    padding: 0;
}

h1 {
    padding: 0;
    margin: 10px 0;
}

h4 {
    padding: 0;
    margin: 0;
}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
}

a {
    color: #007bff;
}

ul,
li {
    padding:0;margin:0;list-style:none
}

.container{
    min-height:800px;
}
</style>
