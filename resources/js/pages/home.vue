<template>
  <div class="row">
    <div class="col-lg-2" style="background-color: RGBA(33,37,41,var(--bs-bg-opacity,1));">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Orders
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Customers
          </a>
        </li>
      </ul>
    </div>
    <div class="col-lg-10">

      <div class="row">
        <card :title="$t('home')" style="margin-bottom: 10px;">
          {{ $t('you_are_logged_in') }}
        </card>
        <date-picker v-model="range" is-range>
          <template v-slot="{ inputValue, inputEvents }">
            <div class="flex justify-center items-center">
              <input
                :value="inputValue.start"
                v-on="inputEvents.start"
                class="border px-2 py-1 w-32 rounded focus:outline-none focus:border-indigo-300"
              />
              <svg
                class="w-4 h-4 mx-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                style="width: 1rem;"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3"
                />
              </svg>
              <input
                :value="inputValue.end"
                v-on="inputEvents.end"
                class="border px-2 py-1 w-32 rounded focus:outline-none focus:border-indigo-300"
              />
            </div>
          </template>
        </date-picker>
        <div class="col-lg-10">
          <FullCalendar :options="calendarOptions" />
        </div>
        <div class="col-lg-2">
          <div style="background-color: RGBA(33,37,41,var(--bs-bg-opacity,1));border-radius: 20px;">
            <h2 style="text-align: center;color: white;">
              Rutas
            </h2>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Products
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Customers
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import axios from 'axios'
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import DatePicker from 'v-calendar/lib/components/date-picker.umd'

export default {
  middleware: 'auth',

  components: {
    FullCalendar,
    DatePicker
  },

  metaInfo () {
    return { title: this.$t('home') }
  },

  data() {
    return {
      calendarOptions: {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        events: [
            {date: '2023-02-01', backgroundColor: "#307007"},
            {date: '2023-02-02', backgroundColor: "#950207"},
            {title: "17:40:10", date: '2023-02-04', backgroundColor: "#307007"},
            {title: "18:40:10", date: '2023-02-06', backgroundColor: "#950207"},
            {title: "20:40:10", date: '2023-02-07', backgroundColor: "#950207"},
            {title: "13:58:10", date: '2023-02-09', backgroundColor: "#307007"}
        ]
      },
      range: {
        start: new Date(2023, 1, 1),
        end: new Date(2023, 1, 5)
      }
    }
  }
}
</script>
