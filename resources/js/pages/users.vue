<template>
    <div>
        <h1>Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user) in users">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
  
<script>
import axios from 'axios'

export default {
  middleware: 'auth',

  metaInfo () {
    return { title: 'Users' }
  },

  data() {
    return {
      users:[],
    }
  },

  created () {
    this.getUsers()
  },

  methods: {
    getUsers () {
      axios.get(`/api/users_all/`)
        .then(({data}) => {
            this.users = data
        })
    },
  }
}
</script>