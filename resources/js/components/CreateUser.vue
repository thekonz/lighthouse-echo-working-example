<template>
    <div>
        <button @click="createUser">Create user</button>
    </div>
</template>
<script>
import axios from "axios"

export default {
    methods: {
        createUser() {
            axios.post("http://localhost/api/user/create")
        }
    }
}
</script>
