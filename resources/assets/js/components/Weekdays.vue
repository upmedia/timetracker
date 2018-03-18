<template>
  <div class="panel panel-default">
    <div class="panel-heading">Uge {{week}}</div>
    <div class="panel-body">
      <ul class="list-group">
        <li class="list-group-item">Mandag</li>
        <li class="list-group-item">Tirsdag</li>
        <li class="list-group-item">Onsdag</li>
        <li class="list-group-item">Torsdag</li>
        <li class="list-group-item">Fredag</li>
        <li class="list-group-item">Lørdag</li>
        <li class="list-group-item">Søndag</li>
      </ul>
    </div>
  </div>
</template>

<script>
  import moment from 'moment'

  export default {
    data() {
      return {
        today: moment(),
        dateContext: moment(),
        days: ['Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag', 'Søndag'],
        week: {},
        firstDayOfWeek: null
      }
    },

    props: [
      'selectedWeek'
    ],

    computed: {
      week: function() {
        return this.dateContext.format('w')
      }
    },

    methods: {
      getFirstDayOfWeek: function(weekNumber) {
        this.firstDayOfWeek = moment()
      }
    }
  }
</script>
