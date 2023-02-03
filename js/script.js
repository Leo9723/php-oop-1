const {
    createApp
} = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            filmList: [],
        }
    },

    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.filmList = response.data;
        });
        console.log(filmList)
    }


}).mount('#app')