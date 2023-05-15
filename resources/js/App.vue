<script>
import Star from './components/Star.vue';
import Sidebar from './components/Sidebar.vue';
import axios from 'axios';

export default {
  components: { Star, Sidebar },
  data() {
    return {
      list: {},
      current: '',
      star: {}
    }
  },
  mounted() {
    /**
     * liste des element a affichier dans la sidebar
     */
    axios.get('http://localhost:8000/api/star').then((response) => {
      this.current = response.data.data[0].id
      this.list = response.data.data
      axios.get('http://localhost:8000/api/star/' + this.current).then((response) => {
        this.star = response.data
      })
    })
  },
  methods: {
    /**
     * Recuperer le star 
     * @param {id} id 
     */
    handleCurrent(id) {
      this.current = id
      axios.get('http://localhost:8000/api/star/' + id).then((response) => {
        this.star = response.data

      })
    }
  }
}
</script>

<template>
  <div class="custom__container">
    <div class="col4 colm-f">
      <Sidebar :list="list" :current="current" @changeCurrent="handleCurrent" :currentStar="star"></Sidebar>
    </div>
    <div class="col8">
      <Star :star="star"></Star>
    </div>
  </div>
</template>
