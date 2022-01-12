import View from "./views/Sample.vue";
import Version from './components/Version.vue'

panel.plugin("mauricerenck/STARTERKIT", {
    components: {
        'k-sample-view': View,
        'Version': Version,
    },
});