<template>
    <div>
        <v-app>
            <v-content class="pa-4">
                <v-data-table :headers="headers" :items="items" />
            </v-content>
        </v-app>
    </div>
</template>

<script>
export default {
    name: 'app',
    data: () => ({
        items: [
            { id: 1, name: 'Option 1' },
            { id: 2, name: 'Option 2' },
            { id: 3, name: 'Option 3' },
        ],
        headers: [
            { text: 'Id', value: 'id' },
            { text: 'Name', value: 'name' },
        ],
    }),
};
</script>

<style>
#app{
    background-image: url("fonde.jpg");
    height: 850px;
    background-size: cover;
    background-position: center;
}
</style>
