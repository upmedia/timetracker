<template>
  <strong>
  {{ duration.hours }}h {{ duration.minutes }}m
  </strong>
</template>

<script>
  export default {
    props: [
      'seconds'
    ],

    methods: {
      /**
       * Conditionally pads a number with "0"
       */
      _padNumber: number => (number > 9) ? number : "0" + number,

      /**
       * Splits seconds into hours, minutes, and seconds.
       */
      _readableTimeFromSeconds: function(seconds) {
        return {
          hours: 3600 > seconds ? 0 : parseInt(seconds / 3600, 10),
          seconds: this._padNumber(seconds % 60),
          minutes: this._padNumber(parseInt(seconds / 60, 10) % 60)
        }
      },
    },

    computed: {
      duration: function() {
        return this._readableTimeFromSeconds(this.seconds)
      }
    }
  }
</script>

<style scoped>
  * {
    font-family: monospace;
  }
</style>
