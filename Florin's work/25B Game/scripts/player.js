class Player {
    constructor(name, ad, ap, armor, mr) {
        this.name = name;
        this.ad = ad;
        this.ap = ap;
        this.armor = armor;
        this.mr = mr;
    }

    showDetails() {
        console.log(this.name + this.ad + this.ap + this.armor + this.mr);
    }
}