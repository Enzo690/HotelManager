export default class Info {

    constructor(dataSet) {
        this.dataSet = dataSet;
    }

    getClient(dataSet){

        let tools = '<button class="btn btn-primary" data-toggle="modal" data-target="#modal-xl-plus"><i class="fas fa-plus"></i></button>\n' +
            '<button class="btn btn-warning" data-toggle="modal" data-target="#modal-xl-edit"><i class="fas fa-pencil-alt"></i></i></button>\n' +
            '<button class="btn btn-danger" data-toggle="modal"><i class="fas fa-times"></i></button>'

        fetch('api/client')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                for (let i = 0; i < data.length; i++){
                    let client = data[i];
                    this.dataSet[i] = [`${client.nom} ${client.prenom}`, client.email.length > 0 ? client.email : "<span class='text-danger'>Aucun email</span>", tools ]
                }
                $('#dataTable').DataTable( {
                        data: this.dataSet,
                        columns: [
                            { title: "Nom" },
                            { title: "Email" },
                            { title: "Outils" },
                        ],
                    }
                );
            }).catch((err) => {
            console.log(err);
        })
    }

}