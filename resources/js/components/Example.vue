<template>
        <v-card
            :loading="loading"
            class="mx-auto my-12"
            max-width="374"
        >
            <template slot="progress">
                <v-progress-linear
                    color="primary"
                    height="10"
                    indeterminate
                ></v-progress-linear>
            </template>
            <v-card-text >
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

        </v-card>




</template>

<script>
export default {
    data: () => ({
        loading: false,
        selection: 1,
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
}
</script>
