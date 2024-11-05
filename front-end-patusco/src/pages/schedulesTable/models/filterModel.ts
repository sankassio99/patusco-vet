export default class FilterModel {
    date: Date;
    animalType: string;

    constructor(date: Date, animalType: string) {
        this.date = date;
        this.animalType = animalType;
    }
}