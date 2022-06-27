


<template>
  <v-card
    class="mx-auto"
    max-width="500"
  >
    
    <v-card-actions>
        <v-bottom-navigation
            v-model="value"
            :background-color="color"
            dark
            shift
            grow
        >
            <v-btn

                :background-color="color"
                @click="step--"
            >
                    <span>Messages</span>

                    <v-icon>mdi-message</v-icon>
            </v-btn>


            <v-btn
 
                :disabled="step === 2"
                @click="step++"

                
            >
                <span color="white">Matches</span>

                <v-icon>mdi-heart</v-icon>
            </v-btn>
      </v-bottom-navigation>
    </v-card-actions>
    


    <v-window v-model="step">
      <v-window-item :value="1">
        <v-card>
              <v-subheader>{{ card }}</v-subheader>

              <v-list two-line>
                <template v-for="n in 6">
                  <v-list-item

                    :key="n"
                  >
                    <v-list-item-avatar color="grey darken-1">
                    </v-list-item-avatar>

                    <v-list-item-content>
                      <v-list-item-title>Message {{ n }}</v-list-item-title>

                      <v-list-item-subtitle>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil repellendus distinctio similique
                      </v-list-item-subtitle>
                    </v-list-item-content>
                  </v-list-item>

                  <v-divider
                    v-if="n !== 6"
                    :key="`divider-${n}`"
                    inset
                  ></v-divider>
                </template>
              </v-list>
            </v-card>
      </v-window-item>

      <v-window-item :value="2">
        <v-card-text>
          <v-text-field
            label="Password"
            type="password"
          ></v-text-field>
          <v-text-field
            label="Confirm Password"
            type="password"
          ></v-text-field>
          <span class="text-caption grey--text text--darken-1">
            Please enter a password for your account
          </span>
        </v-card-text>
      </v-window-item>


    </v-window>

    <v-divider></v-divider>

    
  </v-card>
</template>

<script>
  export default {
    data: () => ({
      step: 1,
      value:0
    }),
    computed: {
      color () {
        switch (this.value) {
          case 0: return '#50bdff'
          case 1: return '#cc5cff'
        }
      },
    },
    cards: ['Today', 'Yesterday'],
      drawer: null,
      links: [
        ['mdi-inbox-arrow-down', 'Inbox'],
        ['mdi-send', 'Send'],
        ['mdi-delete', 'Trash'],
        ['mdi-alert-octagon', 'Spam'],
      ],
    
    

  }
</script>



-->