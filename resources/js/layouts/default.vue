<template>
  <div class="main-layout">
    <navbar />

    <div class="row">
      <div class="col-lg-2" style="background-color: RGBA(33,37,41,var(--bs-bg-opacity,1));" v-if="user">
        <sidebar />
      </div>

      <div class="col-lg-10">
        <div class="container-lg mt-4">
          <child />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Navbar from '~/components/Navbar'
import Sidebar from '~/components/Sidebar'

export default {
  name: 'MainLayout',

  components: {
    Navbar,
    Sidebar
  },

  computed: mapGetters({
    user: 'auth/user'
  })
}
</script>
