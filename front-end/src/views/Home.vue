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
/* artist start */
.artist {
    margin: auto;
    max-width: 1010px;
    overflow: hidden;
    padding: 30px 50px;
    border-radius: 10px;
    margin-top: 30px;
    text-align: left;
    background-color:#343a40;
    color:#fff;
    opacity:0.8;
}
.artist:hover {
    animation:animation-artist 2s;
    opacity:1;
}

@keyframes animation-artist {
    from {opacity:0.8;}
    to {opacity:1;}
}

.artist-pic {
    float: left;
    min-width: 180px;
    border-radius: 50%;
}

.artist-info {
    float: left;
    min-width: 180px;
    max-width: 580px;
    padding-left: 20px;
}

.artist-contact {
    float: left;
    min-width: 180px;
    margin-top: 65px;
    padding-left:20px;
}

/* artist end */

/* album start */
.album {
    margin: auto;
    max-width: 1080px;
    overflow: hidden;
    margin-top: 20px;
    text-align: left;
}

@media screen and (max-width: 736px) {
    .album-item {
        width: 340px;
        overflow: hidden;
        margin: auto;
        padding: 10px;
    }
}
@media screen and (min-width: 735px) {
    .album-item {
        width: 340px;
        overflow: hidden;
        padding: 10px;
        float: left;
    }
}


.album-item-img {
    width: 340px;
    height: 200px;
    font-weight: bold;
    color: #fff;
    font-size: 22px;
    display: table-cell;
    vertical-align: bottom;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    opacity:0.8;
}

.album-item-img:hover {
    animation:animation-artist-img 1s;
    opacity:1;
    vertical-align: center;
}
    
@keyframes animation-artist-img {
    from {opacity:0.8;}
    to {opacity:1;}
}

.album-item-img h3 {
    padding-left: 20px;
    margin-bottom:10px;
    font-size:20px;
}

.album-item-text {
    width: 318px;
    height: 60px;
    background: #fff;
    padding: 10px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    opacity:0.8;
}

.album-item-bottom {
    width: 308px;
    height: 30px;
    padding-left: 15px;
    padding-right: 15px;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    background: #fff;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    opacity:0.8;
}

.album-item-bottom span {
    float: right;
}
/* album end */
</style>
