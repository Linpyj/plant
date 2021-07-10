<template>
  <div>
    <input v-model="message" type="text">
    <button @click="submit()">submit!!!</button>
    {{ result }}
  </div>
</template>

<script>
import axios from 'axios'
    export default {
      name: 'FormComponent',
      data() {
        return {
          message: '',
          result: ''
        }
      },
      methods: {
        submit: async function() {
          const result = await this.send()
          this.result = result
          console.log(this.result)
        },
        send: async function() {
          const url = 'http://13.230.65.58/line'
          const params = {
            text: this.message
          }

          return await axios
            .post(url,
              headers: { "Access-Control-Allow-Origin": "*" }, 
              params)
            .then(function(res) {
              return res.data
            })
            .catch(function(error) {
              console.log(error)
            })
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
