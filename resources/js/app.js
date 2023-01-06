require("./bootstrap");

import Buefy from "buefy";
window.Slug = require("slug");
window.Vue = require("vue");
Slug.defaults.mode = "rfc3986";

Vue.use(Buefy);

Vue.component("slugWidget", require("./components/slugWidget.vue").default);

require("./helpers");