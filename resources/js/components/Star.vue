<script>
/**
 * Composant Star represente les detail d'un star
 */
export default {
  props: {
    star: String
  }
}
</script>

<template>
  <div class="profile__container">
    <span class="img__profile">
      <img :src="'storage' + star.image" class="img__star">
    </span>
    <div class="text__content">
      <h3>{{ star.nom }} {{ star.prenom }}</h3>
      <p>{{ star.description }}</p>
    </div>
  </div>
</template>
