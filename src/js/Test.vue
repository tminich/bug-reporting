<template>
    <div/>
</template>

<script lang='ts'>
    import Vue from 'vue'

    export default Vue.extend({
        name: "Test",
        data() {
            return {
                test: <Record<string, string>>{},
            }
        },
        methods: {
            test_method() {
                let test: typeof this.test = {}
            },
        },
    })
</script>
