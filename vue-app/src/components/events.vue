<script>
export default {
    name: "EventBox",
    props: {
        events: {
            type: Array,
            default: () => []
        },
        category: {
            type: Object,
            default: () => ({})
        },
        limit: {
            type: Number,
            default: null
        },
    },

    computed: {
        // compute the list we actually render
        displayEvents() {
            return this.limit != null
                ? this.events.slice(0, this.limit)
                : this.events
        }
}

};
</script>

<template>
    <div class="container">
        <div class="updates-header-box">
            <div class="updates-header">
                <div class="updates-title">{{ category.name }}</div>
                <button>See All</button>
            </div>
            <div class="updates-description">{{ category.description }}</div>
        </div>

<!--        <div class="events_cards">-->
<!--            <div-->
<!--                class="events_card"-->
<!--                v-for="(event, index) in events"-->
<!--                :key="index"-->
<!--            >-->
<!--                <div class="event_date">{{ event.date }}</div>-->
<!--                <img :src="event.image" :alt="event.title" />-->
<!--                <div class="event_description">{{ event.title }}</div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="events_cards">
            <div
                v-for="(event, idx) in displayEvents"
                :key="idx"
                class="events_card"
            >
        <div class="events_card_img">
            <img :src="event.image" :alt="event.title">
        </div>
        <div class="events_card_info">
            <div class="events_card_date">
                <div class="month">FEB</div>
                <div class="day">27</div>
                <div class="week-day">THU</div>
            </div>
            <div class="events_card_info_content">
                <a class="events_card_header">{{ event.title }}</a>
                <p>Reid Hall | 4 rue de Chevreuse  75006 Paris  <strong >12:00 PM - 2:00 PM </strong> <br/>
                    Event time is displayed in your time zone.</p>
                <button>participate</button>
            </div>
        </div>

    </div>


</div>


    </div>

</template>

<style scoped>

</style>
