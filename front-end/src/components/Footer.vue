<template>
  <div class="footer">
    {{ msg }}
  </div>
</template>

<script>
export default {
  name: 'Footer',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.footer {
  background: #343a40;
  padding:60px 0;
  vertical-align:center;
  color:#fff;
  border-top:1px solid #ccc;
  margin-top:50px;
  font-size:12px;
}


</style>
