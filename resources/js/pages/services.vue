<template>
    <div>
        <h1>Services</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(service) in services">
                    <th scope="row">{{ service.id }}</th>
                    <td>{{ service.name }}</td>
                    <td>{{ service.timestamp }}</td>
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
    return { title: 'Services' }
  },

  data() {
    return {
      services:[],
    }
  },

  created () {
    this.getServices()
  },

  methods: {
    getServices () {
      axios.get(`/api/services_all/`)
        .then(({data}) => {
            this.services = data
        })
    },
  }
}
</script>