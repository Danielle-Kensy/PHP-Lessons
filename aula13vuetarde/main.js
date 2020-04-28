var vue = new Vue({
    el : "#app",
    data : {
        "name" : "Zé",
        "lastName" : "da Silva",
        "quantity" : 0,
        "grade1" : 6,
        "grade2" : 8,
        "situation" : true,
        "languages" : ["Vue", "Node", "Android", "Java"],
        "people" : [
            {
                "id":1,
                "name":"zé",
                "image":"./assets/avatar.png",
                "imageDescription":"Avatar relacionado ao ze",
                "email":"ze@gmail.com"
            },
            {
                "id":2,
                "name":"maria",
                "image":"./assets/avatar.png",
                "imageDescription":"Avatar relacionado a maria",
                "email":"maria@gmail.com"
            },
            {
                "id":3,
                "name":"pedro",
                "image":"./assets/avatar.png",
                "imageDescription":"Avatar relacionado ao pedro",
                "email":"pedro@gmail.com"
            }
        ]
    },
    computed : {
        fullName(){
            return this.name + " " + this.lastName;
        },
        average() {
            return (this.grade1 + this.grade2)/2;
        }
    },
    methods : {
        add() {
            this.quantity++;
        },
        sub() {
            if(this.quantity > 0){
                this.quantity--;
            }
        }
    }
});
