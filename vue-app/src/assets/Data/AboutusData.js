// src/assets/Data/AboutUSData.js
import axios from "axios";

export default {
    data() {
        return {
            about: null,
        };
    },
    mounted() {
        axios
            .get("http://jerusalemfund.test/about-us")
            .then((response) => {
                if (response.data && response.data.about) {
                    this.about = response.data.about;
                } else {
                    console.warn("No about‑us data returned from API");
                }
            })
            .catch((error) => {
                console.error("Error fetching About Us:", error);
            });
    },
};
