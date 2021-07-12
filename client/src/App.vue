<template>
 <div>
   <Header />
   <button @click="getInfoHandler">Guess the Winner</button>
   <h1 v-if="winner !== ''">THE WINNER IS: {{winner}}</h1>
 </div>
</template>

<script>
import Header from './components/Header';
import axios from 'axios';
export default {
components: {
  Header
},
data() {
  return {
    winner: ''
  }  
},
methods: {
  getInfoHandler() {
    axios.get("http://localhost:8000/")
    .then((response) => this.winner = response.data)
  }
}
}
</script>

<style>
body {
  background-color: #cce7ee;
}
</style>
