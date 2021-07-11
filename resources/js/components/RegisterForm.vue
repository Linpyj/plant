const { template } = require("lodash");

<template>
  <div class="container is-max-widescreen" style="width: 70%;">
    <p class="subtitle">Name</p>
    <input v-model="name" class="input is-primary" type="text" placeholder="Name">
    <p class="subtitle mt-5">Email</p>
    <input v-model="email" class="input is-primary" type="email" placeholder="Email">
    <p class="subtitle mt-5">Password</p>
    <input v-model="password" class="input is-primary" type="password" placeholder="Password">
    <button class="button is-success is-outlined mt-5" @click="submit()">新規登録</button>
  </div>
</template>

<script>
import axios from 'axios'
    export default {
      name: 'RegisterForm',
      data() {
        return {
          name: '',
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
          // const url = 'http://13.230.65.58/line'
          const url = (process.env.MIX_APP_ENV == 'local') ? 'http://127.0.0.1:8000/register' : 'http://13.230.65.58/register'
          console.log(url)

          return await axios
            .post(url,{
              name: this.name,
              email: this.email,
              password: this.password
            })
            .then(function(res) {
              return res.data
            })
            .catch(function(error) {
              console.log('errorです')
              console.log(error)
            })
        }
      }
    }
</script>