<script setup lang="ts">
import { Button } from '@components/ui/button'
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from '@components/ui/dialog'
import { Label } from '@components/ui/label'
import SelectDoctor from './SelectDoctor.vue';
import DoctorService from './services/doctorsService';
import { ref } from 'vue';
import DoctorModel from './models/doctorModel';

const service = new DoctorService();

const selectedDoctor = ref<DoctorModel>(null);

function onSelectDoctor(doctor: DoctorModel){
    selectedDoctor.value = doctor;
}

function assignDoctor() {
    service.assignDoctor(selectedDoctor.value);
}

</script>

<template>
  <Dialog>
    <DialogTrigger as-child>
      <Button variant="outline">
        Assign doctor
      </Button>
    </DialogTrigger>
    <DialogContent class="sm:max-w-[425px]">
      <DialogHeader>
        <DialogTitle>Assign doctor</DialogTitle>
        <DialogDescription>
            Assign a doctor to this schedule.
        </DialogDescription>
      </DialogHeader>
      <div class="grid gap-4 py-4">
        <div class="grid grid-cols-4 items-center gap-4">
          <Label for="name" class="text-right">
            Doctor
          </Label>

          <SelectDoctor @select="onSelectDoctor"/>

        </div>
      </div>
      <DialogFooter>
        <Button type="submit" @click="assignDoctor">
          Save changes
        </Button>
      </DialogFooter>
    </DialogContent>
  </Dialog>
</template>