<template>
  
  <Header  msg="Header"/>
  <router-view></router-view>
  <Footer  msg="Footer"/>
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
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin: 0;
  padding: 0;
}
body {
  background: #eee;
  margin: 0;
  padding: 0;
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
</style>
