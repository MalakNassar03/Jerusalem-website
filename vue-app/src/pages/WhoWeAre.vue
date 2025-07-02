<script setup>
import BreadCrumb from "@/components/breadcrumb_banner.vue";


</script>
<script>
import AboutusData from "@/assets/Data/AboutusData.js";
import AboutUs from "@/components/about_us.vue";
export default {
    components: { AboutUs },
    mixins: [AboutusData],
}
</script>

<template>
    <bread-crumb></bread-crumb>
    <about-us :about="about" :show-buttons="false"/>

    <div class="history_banner">
        <div class="container">
            <div class="history_info">
        <div class="aboutus_title">History</div>
        <p>As over 1 billion Muslims observe the holy month of Ramadan, a sacred time of spirituality, reflection, and community solidarity, Palestinians continue to endure immense hardship and unbearable suffering. In these unprecedented times  Palestinians continue to endure immense hardship and unbearable suffering. In these unprecedented times Palestinians continue to endure immense hardship and unbearable suffering. In these unprecedented times, the gravity of the crisis compels us to reach out for your support .</p>
                <router-link to="/history" class="learn_more_btn">
                    Learn More
                </router-link>
            </div>
        </div>
    </div>




        <div class="container">
            <div class="staff_box">
                <div class="staff_box_info">
                   <div class="updates-title">Meet Our Staff</div>
                    <p class="staff_box_description">Our greatest asset is the talented team behind our work. From creative strategists and technical experts to dedicated support specialists, each member brings unique skills and a shared commitment to excellence. Together, we combine years of industry experience, innovative thinking, and a passion for service to deliver solutions that truly make a difference.</p>
                </div>
                <div class="staff_cards">
                    <div class="staff_card">
                        <div class="staff_img">
                        <img  src="../assets/images/person.png">
                        </div>
                        <div class="staff_info">
                            <h4 class="staff_name">Tarek Nasr</h4>
                            <h6 class="staff_roll">Finance and Operations Manager</h6>
                            <p class="about_staff">Tarek Nasr is a graduate of American University’s School of International Service, where he majored in International Studies with a focus on the MENA region. Prior to working at The Jerusalem Fund, he worked with the Elephant in the Room Initiative, an organization of Jewish and Israeli professors speaking out against the Israeli occupation. He is excited to use his knowledge and past experiences to continue working for a brighter future in the region.</p>

                        </div>
                    </div>


                </div>
                </div>
            </div>


</template>

<style scoped>

</style>
