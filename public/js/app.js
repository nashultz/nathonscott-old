new Vue({
    el: '#app',

    mounted() {
        // Make an ajax request to our server - /skills

        axios.get('/skills').then(response => console.log(response.data));
    }
});