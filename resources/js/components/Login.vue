<template>
   <div>
        <v-app id="inspiress">
            <v-content>
                <v-container fluid fill-height>
                    <v-layout align-center justify-center>
                        <v-flex xs12 sm8 md3>
                            <v-card class="elevation-5">
                                <v-card-text>
                                    <v-form>
                                        <v-card-title>Mi número es</v-card-title>
                                        <v-text-field  label="Mi número de telefono" type="text"></v-text-field>
                                        <p>Al continuar, Found Love te enviará un mensaje de texto con un código de verificación.
                                            Se pueden aplicar tarifas de mensajes y datos El número de teléfono
                                            verificado puede ser usado para iniciar sesión Conoce qué pasa cuando cambia de numero.</p>
                                    </v-form>
                                </v-card-text>
                                <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn color="primary">CONTINUAR</v-btn>
                                </v-card-actions>
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
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style>


</style>
