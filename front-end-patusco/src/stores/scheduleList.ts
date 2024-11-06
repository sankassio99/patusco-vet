import { Schedule } from '@src/models/scheduleModel';
import { reactive } from 'vue'

export enum UserType {
    EMPLOYEE = "employee",
    CLIENT = "client",
    DOCTOR = "doctor"
}

export interface ManagementStore {
    schedules: Schedule[],
    currentUserType: UserType
}

const ManagementStore = reactive<ManagementStore>(
    {
        schedules: [] as Schedule[],
        currentUserType: {} as UserType
    }
);

export default ManagementStore;