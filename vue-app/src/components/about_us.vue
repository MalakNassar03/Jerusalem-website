<script>
export default {
    name: "AboutUs",
    props: {
        about: {
            type: Array,
            default: () => []
        }

    }
};
</script>

<template>

    <div class="container">
        <div class="support-box" v-if="about">
            <div class="support-img">
                <img :src="about.image_url" alt="">
            </div>
            <div class="support-info" v-if="about">
                <div class="date">{{ about.date }}</div>
                <a class="header">
                    {{ about.title.split(' ').slice(0, -1).join(' ') }}
                    <span>{{ about.title.split(' ').pop() }}</span>
                </a>
                <p  v-html="about.paragraph1"></p>
                <p>{{ about.paragraph2 }} <button class="read-more-btn">..read more</button></p>
                <button class="donate-btn">Donate now!</button>

            </div>

        </div>

    </div>
</template>

<style scoped>

</style>
