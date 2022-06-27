<template>
    <v-card
    :loading="loading"
    class="mx-auto my-6"
    max-width="374"

    >
    <template slot="progress">
      <v-progress-linear
        color="deep-purple"
        height="10"
        indeterminate
      ></v-progress-linear>
    </template>

    
    
    <v-carousel hide-delimiters
    height="400">
        <v-carousel-item
        
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
        ></v-carousel-item>
    </v-carousel>

    
    

    <v-card-title>Roberto Aguirre</v-card-title>

    <v-card-text>
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut laboriosam error vitae quo voluptatum ad consequuntur inventore, quia consequatur.</div>
    </v-card-text>


    <v-card-text>
      <v-chip-group
        v-model="selection"
        active-class="deep-purple accent-4 white--text"
        column
      >
        <v-chip>Eat</v-chip>

        <v-chip>Drink</v-chip>

        <v-chip>Watch TV</v-chip>

        <v-chip>Cycling</v-chip>
      </v-chip-group>
    </v-card-text>

  </v-card>
</template>
<script>
  export default {
    data () {
      return {
        items: [
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
          },
        ],
        users:null
      }
    },
    mounted(){
      axios.get('/api/users').then(response =>{
        this.users = response.data.data;
      })
    }
  }
</script>