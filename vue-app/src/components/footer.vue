<script setup>
 const logo= new URL('@/assets/images/logo.png', import.meta.url).href // Correct path for Vue assets
  const menuSections = [
   {
     title: "WHO WE ARE",
     links: [
       { text: "Our History", url: "/" },
       { text: "Board of Directors", url: "/" },
       { text: "Contact", url: "/" },
       { text: "Employment", url: "/" }
     ]
   },
   {
     title: "WHAT WE DO",
     links: [
       { text: "Palestine Center", url: "/" },
       { text: "Humanitarian Link", url: "/" },
       { text: "Gallery Al-Quds", url: "/" },
       { text: "Grants", url: "/" }
     ]
   },
   {
     title: "CONNECT",
     links: [
       { text: "The Jerusalem Fund 2425", url: "/" },
       { text: "Virginia Ave NW", url: "/" },
       { text: "Washington, DC 20037", url: "/" }
     ]
   }
 ]

 const socialIcons=[
   { iconClass: "fa-brands fa-facebook-f", href: "#" },
   { iconClass: "fa-brands fa-instagram", href: "#" },
   { iconClass: "fa-brands fa-twitter", href: "#" },
   { iconClass: "fa-brands fa-tiktok", href: "#" }
 ]

</script>

<template>
  <div class="footerBody">
    <div class="container">
      <div class="ul_holder">
        <ul class="first_ul">
          <li>
            <a>
              <img :src="logo" alt="Logo">
            </a>
          </li>
          <li>
            <p>
            Through educational events, humanitarian support, and cultural preservation, the Jerusalem Fund is helping
            build the movement for Palestinian liberation
            </p>
          </li>
        </ul>
<div class="test">
        <ul v-for="(section, index) in menuSections" :key="index">
          <li>
            <div>{{ section.title }}</div>
          </li>
          <li v-for="(item, i) in section.links" :key="i">
            <a :href="item.url">{{ item.text }}</a>
          </li>
        </ul>
</div>
      </div>
    </div>

  </div>
  <footer class="footer_nav">
    <div class="container">
      <div class="footer_ul_holder">
      <ul>
        <li>
    <p>© 2025 The Jerusalem Fund</p>
        </li>
      </ul>
      <ul class="icons">
        <li v-for="(icon, index) in socialIcons" :key="index">
          <a :href="icon.href" target="_blank">
            <i :class="icon.iconClass"></i>
          </a>
        </li>
      </ul>
    </div>
    </div>
  </footer>


</template>

<style scoped>

</style>