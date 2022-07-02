<template>

<v-app id="inspire">
  <v-app-bar 
        app 
        color="#2a6fff" 
        height="60vh" 
        style="background: rgb(42,193,255);
background: linear-gradient(142deg, rgba(42,193,255,1) 0%, rgba(40,95,255,1) 52%, rgba(239,69,244,1) 100%);" >

        <v-row >
          <v-menu
            bottom
            min-width="200px"

            rounded
            offset-y
          >
            <template v-slot:activator="{ on }">
              <v-btn
                icon
                x-large
                v-on="on"
                class="mb-0 mx-0"
              >
                <v-avatar
                  color="brown"
                  size="50"
                >
                  <img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                    alt="John"
                  >
                </v-avatar>
              </v-btn>
            </template>
            <v-card>
              <v-list-item-content class="justify-center">
                <div class="mx-auto text-center">
                  <v-avatar
                    color="brown"
                  >
                    <span class="white--text text-h5">{{ user.initials }}</span>
                  </v-avatar>
                  <h3>{{ user.fullName }}</h3>
                  <p class="text-caption mt-1">
                    {{ user.email }}
                  </p>
                  <v-divider class="my-3"></v-divider>
                  <v-btn
                    depressed
                    rounded
                    text
                  
                    
                  >
                    <a style="text-decoration:none" href="../settings_layout">Edit Account</a>
                  </v-btn>
                  <v-divider class="my-3"></v-divider>
                  <v-btn
                    depressed
                    rounded
                    text
                  >
                    Disconnect
                  </v-btn>
                </div>
              </v-list-item-content>
            </v-card>
          </v-menu>
        </v-row>
                      <v-btn
                        class="mx-1"
                        icon
                        dark
                        large
                      >
                        <v-icon>mdi-bell</v-icon>
                      </v-btn>
 </v-app-bar>


<v-main class="grey lighten-3">
  <div class="d-md-flex my-6 justify-center" >
  <div v-for=" i in 3" >
    <v-card 
    class="ma-2"
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
        :key="i"
        :src="array[i-1].photo"
        ></v-carousel-item>
    </v-carousel>

    
    

    <v-card-title>{{array[i-1].name}} {{array[i-1].age}}</v-card-title>

    <v-card-text>
      <div>{{array[i-1].chats}}</div>
    </v-card-text>


    <v-card-text>
      <v-chip-group
        v-model="selection"
        column
      >
        <v-chip>{{array[i-1].interests}}</v-chip>

        <v-chip>{{array[i-1].sex}}</v-chip>

        <v-chip><v-icon small>mdi-heart</v-icon> {{array[i-1].likes_recived}}</v-chip>


      </v-chip-group>
    </v-card-text>

    </v-card>
  </div>
  </div>
</v-main>



</v-app>

 




</template>


<script>

import MinHeap from './index.js';
import axios from "axios";

//import MinHeap from "./index.js";

  export default  {
    data: () => ({
      step: 1,
      value: 1,
      user: {
        initials: 'JD',
        fullName: 'John Doe',
        email: 'john.doe@doe.com',
      },
      users: [],  
      hidden:true,
      valueList: [], 
      array: null,
    }),
    methods: {
      getUsers(){
        axios.get('/api/users')
          .then((response) => {
            this.users = response.data.data
          })
      }
    },


    async mounted(){
      this.getUsers();


      let response = await axios.get('http://127.0.0.1:8000/users/age');

      this.valueList=response.data;
      

      let array1 = new MinHeap();

      for(let i in this.valueList){
        array1.insert(this.valueList[i])
      }

      this.array = array1.storage;
      console.log(array1.storage);
    }
  }
</script>
