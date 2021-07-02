<template>
    <h3>Home</h3>
    <span>{{ artistData.name }}</span>
    <div :key="album.id" v-for="album in artistData.album">
        <span>{{ album.id }} {{ album.title }}</span>
    </div>

    <router-link to="/about">Go About</router-link>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            artistData: [],
        }
    },
    methods: { 
        async fetchArtist() {
          const res = await fetch('http://localhost:8030/api/artist/1')
          const data = await res.json()
          console.log(data);
          return data;
        },
        
    },
    async created() {
        this.artistData = await this.fetchArtist();
    }
    
}
</script>
