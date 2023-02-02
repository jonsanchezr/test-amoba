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
        <div class="col-lg-9">
          <FullCalendar :options="calendarOptions" />
        </div>
        <div class="col-lg-3">
          <div style="background-color: RGBA(33,37,41,var(--bs-bg-opacity,1));border-radius: 20px;">
            <h2 style="text-align: center;color: white;">
              Rutas
            </h2>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item" style="font-size: 14px;" v-for="(route) in routes">
                <a href="#" class="nav-link" aria-current="page" @click="changeRouteSelected(route)">
                  {{route.title}}
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
import axios from 'axios'
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
      range: {
        start: new Date(2023, 1, 1),
        end: new Date(2023, 1, 28)
      },
      routes: [],
      daysDisabled:[],
      routeSelected: {},
      reservations:[],
      services:[],
    }
  },

  computed: {
    user() {
      return this.$store.getters['auth/user']
    },

    calendarOptions() {
      return {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        events: this.events
      }
    },

    events() {
      let daysDisabled = this.daysDisabled.map((dayDisabled) => {
        return {
          date: dayDisabled.day.substring(0, 10),
          backgroundColor: "#fff2d9",
        }
      });

      let routeFrecuency = this.getFrecuency(this.routeSelected.route_data ?? {})

      let reservations = this.reservations.map((reservation) => {
        return {
          date: reservation.reservation_start.substring(0, 10),
          backgroundColor: "#27ae60",
        }
      });

      let services = this.services.map((service) => {
        return {
          date: service.timestamp.substring(0, 10),
          backgroundColor: "#235a81",
        }
      });

      return [].concat(daysDisabled, routeFrecuency, reservations, services)
    }
   },

  watch: {
    routeSelected() {
      this.getReservations()
      this.getServices()
    },

    range() {
      this.getReservations()
      this.getServices()
      this.getDaysDisabled()
    },
  },

  async created () {
    await this.getRoutes()
    this.getDaysDisabled()
    this.getReservations()
    this.getServices()
  },

  methods: {
    async getRoutes () {
      await axios.get(`/api/routes`)
        .then(({data}) => {
            this.routes = data
            this.routeSelected = data[0]
        })
    },

    getDaysDisabled () {
      let min = new Date(this.range.start).toISOString().substring(0, 10)
      let max = new Date(this.range.end).toISOString().substring(0, 10)

      axios.get(`/api/calendar_days_disabled?min_date=${min}&max_date=${max}`)
        .then(({data}) => {
            this.daysDisabled = data
        })
    },

    getReservations () {
      let id = this.routeSelected.id ?? null
      let min = new Date(this.range.start).toISOString().substring(0, 10)
      let max = new Date(this.range.end).toISOString().substring(0, 10)

      axios.get(`/api/reservations/${id}?min_date=${min}&max_date=${max}`)
        .then(({data}) => {
            this.reservations = data
        })
    },

    getServices () {
      let id = this.routeSelected.id ?? null
      let min = new Date(this.range.start).toISOString().substring(0, 10)
      let max = new Date(this.range.end).toISOString().substring(0, 10)

      axios.get(`/api/services/${id}?min_date=${min}&max_date=${max}`)
        .then(({data}) => {
            this.services = data
        })
    },

    getFrecuency(data) {
      let days = []

      if (data.mon) days.push(1)
      if (data.tue) days.push(2)
      if (data.wed) days.push(3)
      if (data.thu) days.push(4)
      if (data.fri) days.push(5)
      if (data.sat) days.push(6)
      if (data.sun) days.push(7)

      return {
        daysOfWeek: days,
        backgroundColor: "#c0392b"
      }
    },

    changeRouteSelected(data) {
      this.routeSelected = data
    },
  }
}
</script>
