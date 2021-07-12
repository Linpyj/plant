<template>
  <div>
    <input v-model="message" type="text">
    <button @click="submit()">submit!!!</button>
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
        },
        send: async function() {
          // const url = 'http://13.230.65.58/line'
          const url = 'http://127.0.0.1:8000/line'
          const params = {
            text: this.message
          }

          return await axios
            .post(url,
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
