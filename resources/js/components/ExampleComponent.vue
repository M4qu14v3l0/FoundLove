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

      <v-container>
        <v-row>
          <v-col
            class="my-6"
            cols="12"
            sm="3"
          >
            <v-sheet
              rounded="lg"
              

            >
              <!-- Menu mensajes:matches -->
              
              <menu-component></menu-component>
              


            </v-sheet>
          </v-col>

          <v-col
            cols="12"
            sm="6"
          >

              <v-window v-model="step" >
                <div v-for="(user,i) in users">
                  <v-window-item 
                  :key="i"
                  :value="i">
                    <v-card
                      class="mx-auto my-6"
                      max-width="375"

                  >                      
                      <v-carousel hide-delimiters
                      height="400">
                          <v-carousel-item
                          :key="i"
                          :src="user.photo"
                          ></v-carousel-item>

                          
                      </v-carousel>

                    <v-card-title>{{user.name}} {{user.age}}

                      <v-btn
                        color="secondary"
                        @click="hidden = !hidden"
                        fab
                        absolute
                        small
                        right
                      >
                        {{ hidden ? 'Show': 'Show' }}
                      </v-btn>

                    </v-card-title>
                    
                    
                      

                  
                  <div v-show="!hidden">
                    
                      <v-card-text>
                        <div>{{user.chats}}</div>
                      </v-card-text>


                      <v-card-text>
                        <v-chip-group>
                          <v-chip>{{user.interests}}</v-chip>

                          <v-chip>{{user.sex}}</v-chip>

                          <v-chip>
                            <v-icon small>mdi-heart</v-icon> {{user.likes_recived}} </v-chip>
                          </v-chip-group>
                      </v-card-text>
                  </div>
                      

                        
                      <v-card-text>
                      <div class="text-center">
                      <!--
                      <v-btn
                        class="mx-0"
                        fab
                        large
                        
                        color="#C5E1A5"
                        :disabled="step === 1 "
                        
                        @click="step--"
                      >
                        <v-icon color="white">
                                mdi-arrow-left
                        </v-icon>
                      </v-btn>
                      -->
                      <v-btn
                        class="mx-1"
                        fab
                        large
                        
                        color="#ff5094"
                        :disabled="step === users.length"
                        @click="step++"
                      >
                        <v-icon color="white">
                                mdi-window-close
                        </v-icon>
                      </v-btn>
                      <!--
                      <v-btn
                        class="mx-1"
                        fab
                        large
                        color= #50bdff
                        
                        :disabled="step === users.length"
                        @click="step++"
                      >
                        <v-icon color="white">
                                mdi-check
                        </v-icon>
                      </v-btn>
                      -->
                      <v-btn
                        :disabled="step === users.length"
                        large
                        class="mx-1"
                        fab
                        color="#cc5cff"
                        
                        @click="step++"
                      >
                        <v-icon color="white">
                                mdi-heart
                        </v-icon>
                      </v-btn>
                      </div>
                      </v-card-text>

                    </v-card>
                  </v-window-item>
                  
                </div>
                
              </v-window>
        
          </v-col>

        </v-row>
      </v-container>


    
    </v-main>




    <v-footer padless>
      <v-col
        class="text-center"
        cols="12"
        
        style="background: rgb(42,193,255);
               background: linear-gradient(142deg, rgba(42,193,255,1) 0%, rgba(40,95,255,1) 52%, rgba(239,69,244,1) 100%);
               color:aliceblue;"
      >
        {{ new Date().getFullYear() }} — <strong>foundLove</strong>
      </v-col>
    </v-footer>

  </v-app>
</template>


<script>
  export default {
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
    }),
    methods: {
      getUsers(){
        axios.get('/api/users')
          .then((response) => {
            this.users = response.data.data
          })
      }
    },
    mounted(){
      this.getUsers()
    }
  }
</script>

