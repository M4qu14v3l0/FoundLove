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
                                        <h2>Mi número es</h2>
                                        <v-text-field  label="Mi número de telefono" type="text"></v-text-field>
                                        <p>Al continuar, Found Love te enviará un mensaje de texto con un código de verificación.
                                            Se pueden aplicar tarifas de mensajes y datos El número de teléfono
                                            verificado puede ser usado para iniciar sesión Conoce qué pasa cuando cambia de numero.</p>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-btn
                                            share @click="reserve()"
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
