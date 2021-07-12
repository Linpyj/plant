const { template } = require("lodash");

<template>
  <div class="container is-max-widescreen" style="width: 70%;">
    <p class="subtitle">Email</p>
    <input v-model="email" class="input is-primary" type="email" placeholder="Email">
    <p class="subtitle mt-5">Password</p>
    <input v-model="password" class="input is-primary" type="password" placeholder="Password">
    <button class="button is-success is-outlined mt-5" @click="submit()">ログイン</button>
  </div>
</template>

<script>
import axios from 'axios'
    export default {
      name: 'LoginForm',
      data() {
        return {
          email: '',
          password: '',
          result: ''
        }
      },
      methods: {
        submit: async function() {
          const result = await this.send()
          console.log(result)
        },
        send: async function() {
          const url = (process.env.MIX_APP_ENV == 'local') ? 'http://127.0.0.1:8000/login' : 'http://13.230.65.58/login'
          const params = {
            email: this.email,
            password: this.password
          }

          return await axios
            .post(url,params)
            .then(function(res) {
              return res
            })
            .catch(function(error) {
              console.log(error)
            })
        }
      }
    }
</script>