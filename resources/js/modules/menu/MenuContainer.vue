<template>
    <div class="wrapper menu__container">
        <div class="row">
            <div class="col-md-8">
                <card-component>
                    <template slot="title">My Menu Items</template>
                    <template slot="body">Content will come here</template>
                </card-component>
            </div>

            <div class="col-md-4">
                <card-component>
                    <template slot="title">Add Menu Items</template>
                    <template slot="body">Form will come here</template>
                </card-component>
            </div>
        </div>
    </div>

</template>

<script>
export default{
    props: ['items']
}
</script>