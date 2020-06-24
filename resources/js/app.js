import vue from "vue";
import mazejs from "@mazejs/mazejs";
import moment from "moment";

window.Vue = vue;

Vue.prototype.bus = new Vue();
Vue.prototype.moment = moment;
Vue.use(mazejs);

require("./bootstrap");
require("./components/bootstrap");

const app = new Vue({
    el: "#app",
});
