import { Schedule } from '@src/pages/schedulesTable/models/scheduleModel';
import { reactive } from 'vue'

export enum UserType {
    EMPLOYEE = 1,
    CLIENT = 2,
    DOCTOR = 3
}

interface ManagementStore {
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