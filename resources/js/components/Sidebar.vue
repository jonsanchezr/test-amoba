<template>
    <div style="background-color: RGBA(33,37,41,var(--bs-bg-opacity,1));">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <router-link :to="{ name: 'home' }" class="nav-link">
            Schedules
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'services' }" class="nav-link">
            Services
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'users' }" class="nav-link">
            Users
          </router-link>
        </li>
      </ul>
    </div>
</template>

<script>

</script>
