<script setup lang="ts">

</script>

<template>
    <div class="flex flex-col gap-4 bg-white rounded-lg p-6 min-w-60 border-gray-100 border shadow-xl">
        <h1 class="text-3xl font-bold">Cores</h1>
        <div class="border-2 border-dashed border-blue-400 p-2 rounded-lg">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-20 h-20 bg-primary rounded-lg shadow-xl"></div>
                <div>
                    <p>No projeto: primary</p>
                    <p>Hexadecimal: #FF8200</p>
                    <p>HSL: 31, 100%, 50%</p>
                </div>
            </div>
            <div class="flex items-center gap-2 mb-10">
                <div class="w-20 h-20 bg-secondary rounded-lg shadow-xl"></div>
                <div>
                    <p>No projeto: secondary</p>
                    <p>Hexadecimal: #6F7072</p>
                    <p>HSL: 210, 1%, 44%</p>
                </div>
            </div>
            <div class="flex items-center gap-2 mb-10">
                <div class="w-20 h-20 bg-terciary rounded-lg shadow-xl"></div>
                <div>
                    <p>No projeto: terciary</p>
                    <p>Hexadecimal: #ECEDEC</p>
                    <p>HSL: 120, 3%, 93%</p>
                </div>
            </div>
            <div class="flex items-center gap-2 mb-10">
                <div class="w-20 h-20 bg-white-light rounded-lg shadow-xl"></div>
                <div>
                    <p>No projeto: white</p>
                    <p>Hexadecimal: #FFFFFF</p>
                    <p>HSL: 0, 0%, 100%</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-20 h-20 bg-black rounded-lg shadow-xl"></div>
                <div>
                    <p>No projeto: black</p>
                    <p>Hexadecimal: #000000</p>
                    <p>HSL: 0, 0%, 3.9%</p>
                </div>
            </div>
        </div>
    </div>
</template>
