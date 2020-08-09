<template>
    <div>
        <button @click="deleteUser">Delete user</button>
    </div>
</template>
<script>
import axios from "axios"

export default {
    methods: {
        deleteUser() {
            axios.delete("http://localhost/api/user/delete")
        }
    }
}
</script>
