import DoctorModel from "../models/doctorModel";

export default class DoctorService {
    async getDoctors(): Promise<DoctorModel[]> {
        console.log('Getting doctors');

        return [
            new DoctorModel("1", 'Dr. Pedro Duarte'),
            new DoctorModel("2", 'Dr. João Silva'),
            new DoctorModel("3", 'Dr. Maria Santos'),
        ];
    }
}