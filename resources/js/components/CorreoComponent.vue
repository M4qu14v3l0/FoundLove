<template>
    <div>
        <v-app id="inspire">
            <v-content>
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
                                <v-form>
                                    <v-card-text>
                                        <h2>¿Cúal es tu dirección de correo electrónico?</h2>

                                        <p class="font-weight-medium" >
                                            No pierdas tu cuenta; verifica tu correo electrónico.
                                        </p>

                                        <v-text-field
                                            label="Correo Electronico"
                                            :rules="rules"
                                            hide-details="auto"
                                        ></v-text-field>

                                    </v-card-text>

                                    <v-card-actions>
                                        <v-btn
                                            share @click="reserve()"
                                            color="primary"
                                            :style="{left: '50%', transform:'translateX(-50%)'}"
                                        >CONTINUAR</v-btn>
                                    </v-card-actions>
                                    <p
                                        class="text-subtitle-2 text-center"
                                    >O</p>
                                    <v-card-actions >
                                        <v-btn
                                            share @click="reserve()"
                                            color="none"
                                            :style="{left: '50%', transform:'translateX(-50%)'}"
                                        >Iniciar sesion con google</v-btn>
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
export default {
    name: 'app',
    data: () => ({
        loading: false,
        selection: 1,
        /*El input es indispensable y debe tener mas 3 caracteres*/
        rules: [
            value => !!value || 'Required.',
            value => (value && value.length >= 3) || 'Min 3 characters',
        ],
    }),
    methods: {
        reserve () {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
    },

};
</script>

<style>
#inspire {
    background: url('https://i.imgur.com/r5710Cd.png')
    no-repeat center center fixed !important;
    background-size: cover;
}
p{
    margin-top: 15px;
}


</style>
