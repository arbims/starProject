<script>
import Star from './Star.vue';

/**
 * SideBar tabs
 */
export default {
    props: {
        list: Object,
        current: String,
        currentStar: Object
    },
    methods: {
        emitCurrent(id) {
            console.log(id);
            this.$emit("changeCurrent", id);
        }
    },
    components: { Star }
}

</script>

<template>

    <ul class="container__list">
      <li v-for="star in this.list" :class="{ active: star.id == this.current }" @click="emitCurrent(star.id)">{{ star.nom
      }} {{ star.prenom }}

      <div class="only__mobile" v-if="currentStar.id == star
      .id">
        <Star :star="currentStar"></Star>
      </div>
      </li>
    </ul>

</template>
