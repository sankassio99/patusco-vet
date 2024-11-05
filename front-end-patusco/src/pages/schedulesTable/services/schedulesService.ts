import DoctorModel from "../models/doctorModel";
import FilterModel from "../models/filterModel";
import { Schedule } from "../models/scheduleModel";

export default class ScheduleService {
    async getSchedules(filter: FilterModel) : Promise<Schedule[]> {
        

        return [
            <Schedule>{
                code: '1',
                requesterName: 'John Doe',
                animalName: 'Dog',
                type: 'Vaccination',
                date: '2022-01-01',
                shift: 'Morning',
                assign: null
            }
        ];
    }
}