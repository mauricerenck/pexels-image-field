<template>
    <k-inside>
        <k-view class="k-sample-view">
            <k-header>SAMPLE</k-header>
            <k-grid>
                <k-column width="1/4">
                    <Version :version="version" />
                </k-column>
            </k-grid>
        </k-view>
    </k-inside>
</template>

<script>
export default {
    props: {
        version: Object,
    },
}
</script>

<style lang="scss">
.k-sample-view {
}
</style>
