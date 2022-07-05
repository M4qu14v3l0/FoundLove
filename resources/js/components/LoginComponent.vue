<template>
    <div>
        <v-app id="inspire">
            <v-content>
                <v-snackbar
                    v-model="snackbar"

                >
                    {{ text }}
                </v-snackbar>
                <v-container fluid fill-height>
                    <v-layout align-center justify-center>
                        <v-flex xs12 sm8 md3>
                            <v-card
                                class="elevation-5"
                                :loading="loading"

                            >
                                <template slot="progress">
                                    <v-progress-linear
                                        color="primary"
                                        height="10"
                                        indeterminate
                                    ></v-progress-linear>
                                </template>
                                <v-form action="/profile">
                                    <v-card-text>
                                        <h2>Mi número es</h2>
                                        <v-text-field
                                            label="Mi número de telefono"
                                            type="text"
                                            v-model="formulario.phone_number"
                                        ></v-text-field>
                                        <v-text-field
                                            label="Password"
                                            type="text"
                                            v-model="formulario.password"
                                        ></v-text-field>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-btn
                                            share @click="ingresar()"
                                            color="primary"
                                            :style="{left: '50%', transform:'translateX(-50%)'}"
                                        >CONTINUAR</v-btn>
                                    </v-card-actions>
                                </v-form>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-content>
        </v-app>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "app",
    data(){

        return{
            formulario:{
                phone_number: null,
                password: null,


            },
            snackbar: false,
            text: null,
            loading: false,
            selection: 1,

        }
    },
    methods:{
        async ingresar(){
            this.loading = true
            setTimeout(() => (this.loading = false), 2000)
            const envio =  await axios.post('http://localhost:8000/login', this.formulario)
            this.snackbar = true;
            this.text = envio.data.mensaje;
            if (envio.data.phone_number){

            }
        }
    }
}
</script>

<style scoped>
#app{
    background-image: url("fonde.jpg");
    height: 850px;
    background-size: cover;
    background-position: center;
}
</style>
