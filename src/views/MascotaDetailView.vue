<template>
    <div class="about vh-100">
        <NavBarComponent />
        <MascotaProfileComponent />

    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import MascotaProfileComponent from '@/components/MascotaProfileComponent.vue';

export default {
    name: 'MascotaDetailView',
    components: {
        NavBarComponent,
        MascotaProfileComponent,
    }
}
</script>