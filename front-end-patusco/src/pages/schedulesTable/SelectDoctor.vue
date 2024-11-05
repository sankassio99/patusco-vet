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

const props = defineProps<{
  selectedDoctor: DoctorModel;
}>();

</script>

<template>
  <Select>
    <SelectTrigger>
      <SelectValue :placeholder="props.selectedDoctor ? props.selectedDoctor.name : 'Select'" />
    </SelectTrigger>
    <SelectContent>
      <SelectGroup>
        <SelectItem v-for="doctor in doctorsList" 
            :value="doctor.id"
            :key="doctor.id">
            {{ doctor.name }}
        </SelectItem>
      </SelectGroup>
    </SelectContent>
  </Select>
</template>