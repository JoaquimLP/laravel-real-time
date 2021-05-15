<template>
    <div>
        <h1 class="text-center text-3x1 uppercase font-black py-8">Post</h1>

        <div class="bg-white w-full p-4 my-4 rounded-xl shadow border"
            v-for="(post, index) in posts.data" :key="index">
            <p class="text-center text-2xl py-4">{{post.name}}</p>
            <p class="text-sm font-bold text-gray-800">{{post.date}}</p>
            <p>{{post.body}}</p>
        </div>
    </div>
</template>


<script>
import axios from 'axios'
import Bus from '../../bus'
export default {
    mounted(){
        this.loadPosts()
        Bus.$on('post.created', post => {
            this.posts.data.unshift(post)
        })
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
