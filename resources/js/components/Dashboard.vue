<template>
    <div id="app">
        <v-select :options="[{value: 1, text: 'Item 1'}, {value: 2, text: 'Item 2'}]" v-model="selectedValue" />
    </div>
</template>

<script>
import VSelect from '@alfsnd/vue-bootstrap-select'

export default {
    name: 'app',
    components: {
        VSelect
    },
    data() {
        return {
            selectedValue: null
        };
    }

}
</script>
