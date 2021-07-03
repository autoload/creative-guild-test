<template>
    <div class="text-center">
        <div class="artist">
            <img v-bind:src="artistData.profile_picture" class="artist-pic" v-bind:alt="artistData.name" />
            <div class="artist-info">
                <h1>{{ artistData.name }}</h1>
                <h4>Bio</h4>
                {{ artistData.bio }}
            </div>
            <div class="artist-contact">
                <h4>Phone</h4>
                {{ artistData.phone }}
                <h4>Email</h4>
                {{ artistData.email }}
            </div>
        </div>

        <div class="album">
            <div class="album-item" :key="album.id" v-for="album in artistData.album">
                <div class="album-item-img" v-bind:style=" 'background:url('+ album.img +') no-repeat center; background-size: 130%' ">
                    <h3>{{ album.title }}</h3>
                </div>
                <div class="album-item-text">
                    {{ album.description }}
                </div>
                <div class="album-item-bottom">
                    <i v-if="album.featured == 'true'" class="fa fa-heart fa-lg" style="color:red"></i>
                    <span style="float:right">{{ album.date }}</span>
                </div>
            </div>
        </div>
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

<style scoped>
    .artist{
        margin: auto;
        width: 980px;
        background: #ccc;
        overflow: hidden;
        padding: 30px 50px;
        border-radius: 10px;
        margin-top: 30px;
        text-align: left;
    }
    .artist-pic{
        float: left;
        width: 180px;
        border-radius: 50%;

    }
    .artist-info{
        float: left;
        width: 580px;
        padding-left: 20px;
        padding-right: 20px;
    }
    .artist-contact{
        float: left;
        width: 180px;
        margin-top: 65px;
    }
    .album{
        margin: auto;
        width: 1080px;
        overflow: hidden;
        margin-top: 20px;
        text-align: left;
    }
    .album-item{
        width: 340px;
        overflow: hidden;
        padding: 10px;
        float: left;

    }
    .album-item-img{
        width: 340px;
        height: 200px;
        font-weight: bold;
        color: #fff;
        font-size: 22px;
        display: table-cell;
        vertical-align: bottom;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .album-item-img h3{
        padding-left: 20px;
        margin-bottom:10px;
    }
    .album-item-text{
        width: 320px;
        height: 60px;
        background: #fff;
        padding: 10px;

    }
    .album-item-bottom {
        width: 310px;
        height: 30px;
        padding-left: 15px;
        padding-right: 15px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background: #fff;
    }
    .album-item-bottom span {
        float: right;
    }
</style>
