<template>
    <div class="grid grid-rows-2 md:grid-rows-1 md:grid-cols-3 pt-[10px] pb-[10px] bg-[#F6F6F8] text-[#878787] text-[12px] m-x-[15px] m-y-[15px]">
        <div class="flex-1 text-left hidden md:inline-flex">
            +01 23456789  Kalles@domain.com
        </div>
        <div class="flex-1 text-center">
            Summer sale discount off <span class="sale-off">50%!</span> <span class="shop-now">Shop Now</span>
        </div>
        <div class="flex-1 text-right flex gap-3 justify-center md:justify-end">
            <span>Location</span>
            <span>English</span>
            <span>VND</span>
        </div>
    </div>
</template>
<style scoped>
.sale-off{
    color: var(--primary-price-color);
}
.shop-now:hover{
    transition: all .3s ease-in-out;
    color: var(--accent-color);
}
</style>