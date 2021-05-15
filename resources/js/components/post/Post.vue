<template>
    <div>
        <h1>Post</h1>

        <div v-for="(post, index) in posts.data" :key="index">
            <p>{{post.name}}</p>
            <p>{{post.date}}</p>
            <p>{{post.body}}</p>
        </div>
    </div>
</template>


<script>
import axios from 'axios'
export default {
    mounted(){
        this.loadPosts()
    },
    data() {
        return {
            posts: {
                data: []
            }
        }
    },

    methods: {
        loadPosts() {
            axios.get('/api/post').then(response => {
                this.posts = response.data
            })
            .catch(response => {
                this.$vToastify.error(`Falha ao carregar os post`, 'ERROS!!!')
            })
        }
    }
}
</script>
