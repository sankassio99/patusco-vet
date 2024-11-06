export default class FilterModel {
    date: Date;
    animalType: string;
    currentUserType: import("c:/Users/kassi/OneDrive/Documentos/My Personal/primeIt/front-end-patusco/src/stores/scheduleList").UserType;

    constructor(date: Date, animalType: string) {
        this.date = date;
        this.animalType = animalType;
    }
}