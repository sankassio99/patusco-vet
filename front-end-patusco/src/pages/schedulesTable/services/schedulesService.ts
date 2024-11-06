import { AnimalType } from "../models/animalType";
import DoctorModel from "../models/doctorModel";
import FilterModel from "../models/filterModel";
import { Schedule } from "../models/scheduleModel";

export default class ScheduleService {
    async getSchedules(filter: FilterModel) : Promise<Schedule[]> {
        
        return [
            <Schedule>{
                code: '1',
                requesterName: 'John Doe',
                animalName: 'Bob',
                type: AnimalType.Dog,
                requesterEmail: 'John@email.com',
                date: '2022-01-01',
                shift: 'Morning',
                assigned: new DoctorModel('', ''),
                symptoms: 'Coughing, sneezing, fever',
            },
            <Schedule>{
                code: '2',
                requesterName: 'Jane Doe',
                animalName: 'Belinha',
                type: AnimalType.Cat,
                date: '2022-01-01',
                shift: 'Afternoon',
                assigned: new DoctorModel('', '')
            },
        ];
    }
}