<script setup lang="ts">
import {
  Select,
  SelectContent,
  SelectGroup,
  SelectItem,
  SelectLabel,
  SelectTrigger,
  SelectValue,
} from '@components/ui/select';
import { onBeforeMount, reactive, ref } from 'vue';
import DoctorModel from './models/doctorModel';
import DoctorService from './services/doctorsService';

const doctorsList = ref([]);

const service = new DoctorService();

onBeforeMount(() => {
    fetchDoctors();
});

function fetchDoctors() {
    service.getDoctors().then((doctors: DoctorModel[]) => {
        doctorsList.value.push(...doctors);
    });
}

const emit = defineEmits(['select'])

function onSelect(data: DoctorModel) {
    emit('select', data)
}

</script>

<template>
  <Select>
    <SelectTrigger>
      <SelectValue placeholder="Select" />
    </SelectTrigger>
    <SelectContent>
      <SelectGroup>
        <div class="relative flex w-full cursor-default 
            select-none items-center rounded-sm py-1.5 
            pl-8 pr-2 text-sm outline-none focus:bg-accent 
            focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50'" 
            v-for="doctor in doctorsList" 
            :key="doctor.id"
            @click="onSelect(doctor)">
            {{ doctor.name }}
        </div>
      </SelectGroup>
    </SelectContent>
  </Select>
</template>