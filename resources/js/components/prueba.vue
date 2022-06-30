<template>
    <div class="h-48w-full bg-gray-288 bg-cover bg-center"style="{backgroundImage:'url(${user.image})'}"></div>

</template>
<script>
export default {
    data: ()=> ({
        Image,
        user: {
            image: 'https://tailwindess.com/img/card-top.jpg'
        }
    })
}
</script>
